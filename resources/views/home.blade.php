@php
    $title = 'Home';
    $navActive = '/';
    
    $kenapa = [
        [
            'title' => 'Berkualitas',
            'desc' => 'Semua modul pembelajaran kami berkualitas dan mudah dipelajari',
            'icon' => 'mdi-check-decagram',
        ],
        [
            'title' => 'Mudah',
            'desc' => 'Venture Up memiliki misi untuk mengedukasi orang awam dengan bahasa yang mudah dipahami',
            'icon' => 'mdi-thumb-up',
        ],
        [
            'title' => 'Ahli',
            'desc' => 'Materi yang diberikan langsung dari ahlinya dan edukasi yang diberikan penting bagi masyarakat',
            'icon' => 'mdi-tie',
        ],
    ];
    
    $materi = [
        [
            'title' => 'Pengetahuan Umum',
            'desc' => 'Pengetahuan Umum Berupa skillset kita seperti marketing,sales, dan masih banyak lagi.',
            'img' => 'pengetahuan-umum.png',
        ],
        [
            'title' => 'Soft Skill',
            'desc' => 'Softskill sangat penting bagi diri sendiri,dalam materi ini akan diajarkan berbagai macam softskill yang diperlukan.',
            'img' => 'soft-skill.png',
        ],
        [
            'title' => 'Keuangan dan Investasi',
            'desc' => 'Materi nya itu mencakup cara mengatur keuangan dan akan difokuskan ke investasi seperti saham dan crypto.',
            'img' => 'keuangan-dan-investasi.png',
        ],
    ];
@endphp

@extends('layouts.base')

@section('content')
    @include('layouts._nav')
    {{-- Hero Section --}}
    <section class="relative min-h-screen">
        <div class="absolute top-0 left-0 right-0 -z-10">
            <img src="{{ asset('assets/bg.svg') }}" alt="background">
        </div>
        <div class="mx-auto container px-4 max-w-2xl text-center pt-48 space-y-3">
            <div class="space-y-3">
                <h1>Bangun <span>Masa Depan</span> Dimulai dari Membangun Diri Sendiri</h1>
                <p>Venture Up adalah sebuah website yang menyediakan
                    materi materi yang berkualitas dan berguna bagi semua orang.</p>
            </div>
            <div class="pt-3"></div>
            <a class="rounded-md bg-primary text-black font-bold px-2" href="/materials">Our Materials</a>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Riset --}}
    <section data-aos="fade-up" id="riset" class="min-h-screen">
        <div class="mx-auto px-4 container max-w-2xl text-center mt-2 space-y-3">
            <div class="space-y-3">
                <h2>Riset <span>Membuktikan</span> Bahwa Kualitas Pendidikan indonesia Sangat Rendah</h2>
                <p>Ini alasannya kami membuat VentureUp dan kami meningkatkan skill literasi
                    dengan materi berbasis teks dan audio visual.</p>
            </div>
            <div class="pt-3"></div>
        </div>
        <img class="mx-auto w-full px-4 max-w-2xl" src="{{ asset('assets/riset.svg') }}" alt="grafik riset">
    </section>
    {{-- End Riset --}}
    <div class="py-4"></div>
    {{-- Kenapa --}}
    <section data-aos="fade-up" id="kenapa" class="min-h-screen">
        <div class="mx-auto px-4 container max-w-2xl text-center mt-2 space-y-3">
            <div class="space-y-3">
                <h2>Kenapa <span>Memilih</span> Venture Up?</h2>
                <p>Keunggulan VentureUp yaitu kami membuat materi yang berkualitas
                    dan gampang di mengerti.</p>
            </div>
        </div>
        <div class="pt-3"></div>
        <div class="container px-4 mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($kenapa as $item)
                <div class="space-y-3 text-center sm:text-left w-4/5 sm:w-full mx-auto">
                    <i class="mdi {{ $item['icon'] }} text-6xl text-primary"></i>
                    <h3>{{ $item['title'] }}</h3>
                    <p class="text-sm"> {{ $item['desc'] }} </p>
                </div>
            @endforeach
        </div>
    </section>
    {{-- End Kenapa --}}

    <div class="py-16 md:py-8 lg:py-4"></div>

    {{-- Materi Utama --}}
    <section data-aos="fade-up" id="kenapa" class="min-h-screen">
        <div class="mx-auto px-4 container max-w-2xl text-center mt-2 space-y-3">
            <div class="space-y-3">
                <h2>3 Materi Utama <span>VentureUp</span></h2>
                <p>3 Materi Utama sangat penting bagi hidup anda dalam
                    mengubah kualitas pendidikan Indonesia.</p>
            </div>
        </div>
        <div class="py-3"></div>
        <div class="container px-4 mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($materi as $item)
                <div class="space-y-3">
                    <img class="aspect-[9/11] object-cover object-center"
                        src="{{ asset('assets/landing/' . $item['img']) }}" alt="{{ $item['title'] }}">
                    <h3>{{ $item['title'] }}</h3>
                    <p class="text-sm"> {{ $item['desc'] }} </p>
                </div>
            @endforeach
        </div>
        <div class="py-4"></div>
        <div class="text-center">
            <a class="rounded-md bg-primary text-black font-bold px-2" href="/login">Login Sekarang</a>
        </div>
    </section>
    {{-- End Materi Utama --}}
    <div class="py-8"></div>
@endsection
