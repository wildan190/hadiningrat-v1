@if(Request::path() !== '/')
    <nav class="bg-grey-light rounded-md w-full">
        <ol class="list-reset flex text-grey-dark">
            <li><a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700">Beranda</a></li>
            <li><span class="mx-2">/</span></li>
            @php
                $segments = Request::segments();
                $path = '';
            @endphp
            @foreach($segments as $index => $segment)
                @php
                    $path .= '/' . $segment;
                    $isLast = $index === count($segments) - 1;
                @endphp
                <li>
                    @if($isLast)
                        <span class="text-gray-500">{{ ucfirst(str_replace('-', ' ', $segment)) }}</span>
                    @else
                        <a href="{{ url($path) }}" class="text-blue-600 hover:text-blue-700">{{ ucfirst(str_replace('-', ' ', $segment)) }}</a>
                        <li><span class="mx-2">/</span></li>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
