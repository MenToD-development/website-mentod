@extends('template.landing-page', [
    'author' => 'Menno Tempelaar <info@mentod.nl>',
    'title' => 'MenToD - Full-stack web-development',
    'description' => 'MenToD for every full-stack webdevelopment you need.',
    'keywords' => 'webdevelopment, laravel, php'
])

@section('content')

    <section class="min-h-screen bg-yellow-200">
        <h1 id="intro"></h1>
    </section>
    <section class="min-h-screen bg-yellow-300">
        <h1 id="expertises"></h1>
    </section>
    <section class="min-h-screen bg-yellow-400">
        <h1 id="over-mij"></h1>
    </section>
    <section class="min-h-screen bg-yellow-500">
        <h1 id="diensten"></h1>
    </section>
    <section class="min-h-screen bg-yellow-600">
        <h1 id="contact"></h1>
    </section>

@endsection
