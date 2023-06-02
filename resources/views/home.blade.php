@php
    $title = 'Home';
    $navActive = '/';
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

    {{-- Kenapa --}}
    <section data-aos="fade-up" id="kenapa" class="min-h-screen">
        <div class="mx-auto px-4 container max-w-2xl text-center mt-2 space-y-3">
            <div class="space-y-3">
                <h2>Kenapa <span>Memilih</span> Venture Up?</h2>
                <p>Keunggulan VentureUp yaitu kami membuat materi yang berkualitas
                    dan gampang di mengerti.</p>
            </div>
            <div class="pt-3"></div>
        </div>
        <div class="container px-4 mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            <div class="space-y-3 text-center sm:text-left w-4/5 sm:w-full mx-auto">
                <i class="mdi mdi-check-decagram text-6xl text-primary"></i>
                <h3>Berkualitas</h3>
                <p class="text-sm">Semua modul pembelajaran kami berkualitas dan mudah dipelajari</p>
            </div>
            <div class="space-y-3 text-center sm:text-left w-4/5 sm:w-full mx-auto">
                <i class="mdi mdi-thumb-up text-6xl text-primary"></i>
                <h3>Mudah</h3>
                <p class="text-sm">Venture Up memiliki misi untuk mengedukasi orang awam dengan bahasa yang mudah dipahami
                </p>
            </div>
            <div class="space-y-3 text-center sm:text-left w-4/5 sm:w-full mx-auto">
                <i class="mdi mdi-tie text-6xl text-primary"></i>
                <h3>Ahli</h3>
                <p class="text-sm">Materi yang diberikan langsung dari ahlinya dan edukasi yang diberikan penting bagi
                    masyarakat</p>
            </div>
        </div>
    </section>
    {{-- End Kenapa --}}
@endsection
