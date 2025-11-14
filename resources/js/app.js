import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Client logos slider controls
document.addEventListener('DOMContentLoaded', function () {
	const row = document.querySelector('.client-logos-row');
	const prev = document.querySelector('.client-logos-prev');
	const next = document.querySelector('.client-logos-next');
	if (!row) return;

	// Duplicate items to create seamless loop
	const initialItems = Array.from(row.children);
	if (initialItems.length) {
		initialItems.forEach(item => {
			const clone = item.cloneNode(true);
			row.appendChild(clone);
		});
	}

	// Continuous auto-scroll (seamless)
	let scrollWidthHalf = row.scrollWidth / 2;
	let speedPxPerSec = 40; // adjust speed as needed
	let lastTime = null;
	let pausedUntil = 0;

	function step(ts) {
		if (!lastTime) lastTime = ts;
		const delta = ts - lastTime;
		lastTime = ts;

		if (Date.now() < pausedUntil) {
			requestAnimationFrame(step);
			return;
		}

		const distance = (speedPxPerSec * delta) / 1000;
		row.scrollLeft += distance;

		if (row.scrollLeft >= scrollWidthHalf) {
			// jump back by half (original content width) to create seamless loop
			row.scrollLeft -= scrollWidthHalf;
		}

		requestAnimationFrame(step);
	}

	requestAnimationFrame(step);

	// Pause auto-scroll on user interaction
	row.addEventListener('mouseenter', () => { pausedUntil = Date.now() + 3000; });
	row.addEventListener('mouseleave', () => { pausedUntil = Date.now() + 1000; });
	row.addEventListener('touchstart', () => { pausedUntil = Date.now() + 3000; });

	// Prev/next controls should scroll and temporarily pause auto-scroll
	const scrollAmount = Math.min(row.clientWidth * 0.7, 400);
	if (prev) {
		prev.addEventListener('click', () => {
			row.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
			pausedUntil = Date.now() + 2000;
		});
	}
	if (next) {
		next.addEventListener('click', () => {
			row.scrollBy({ left: scrollAmount, behavior: 'smooth' });
			pausedUntil = Date.now() + 2000;
		});
	}

	// Recompute sizes on resize
	window.addEventListener('resize', () => {
		// small delay to allow DOM changes
		setTimeout(() => {
			scrollWidthHalf = row.scrollWidth / 2;
		}, 200);
	});
});
