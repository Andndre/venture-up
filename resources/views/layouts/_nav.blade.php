@php
    $navItems = [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'News',
            'url' => '/news',
        ],
        [
            'name' => 'Academy',
            'url' => '/academy',
        ],
        [
            'name' => 'Forum',
            'url' => '/forum',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ];
    
@endphp

<nav class="fixed w-screen p-3">
    <div class="container mx-auto flex items-center justify-between">
        <a class="font-bold" href="/">Venture<span class="text-primary">Up</span></a>
        <ul class="flex gap-4 items-center">
            @foreach ($navItems as $item)
                <li class="font-semibold">
                    @if ($navActive == $item['url'])
                        <a class="text-primary px-[.4rem] py-[.1rem] rounded-md border-2 border-primary"
                            href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                    @else
                        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                    @endif
                </li>
            @endforeach
        </ul>
        <a class="px-2 py-1 bg-primary text-black font-semibold rounded" href="/login">Login</a>
    </div>
</nav>
