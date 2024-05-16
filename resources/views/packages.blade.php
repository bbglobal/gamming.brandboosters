@extends('layouts.main')

@push('title')
    <title>Brandboosters - Packages</title>
@endpush
@section('main-section')
    <section class="hero-other hero-portfolio">
        <h1 class="animate__animated animate__jackInTheBox">
            <strong>Our Packages</strong>
        </h1>
    </section>

    <x-our-packages />
@endsection
