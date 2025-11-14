@props(['items' => []])

<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
        @if (empty($items))
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-white hover:text-gray-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Beranda
                </a>
            </li>
            @foreach(request()->segments() as $segment)
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        @if($loop->last)
                            <span class="ml-1 text-sm font-medium text-white md:ml-2">{{ ucfirst(str_replace('-', ' ', $segment)) }}</span>
                        @else
                            <a href="{{ url(implode('/', array_slice(request()->segments(), 0, $loop->iteration))) }}" class="ml-1 text-sm font-medium text-white hover:text-gray-300 md:ml-2">{{ ucfirst(str_replace('-', ' ', $segment)) }}</a>
                        @endif
                    </div>
                </li>
            @endforeach
        @else
            @foreach ($items as $item)
                <li class="inline-flex items-center">
                    @if (!$loop->first)
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    @endif
                    @if ($loop->last || empty($item['url']))
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">{{ $item['text'] }}</span>
                    @else
                        <a href="{{ $item['url'] }}" class="ml-1 text-sm font-medium text-white hover:text-gray-300 md:ml-2">{{ $item['text'] }}</a>
                    @endif
                </li>
            @endforeach
        @endif
    </ol>
</nav>
