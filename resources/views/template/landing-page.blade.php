@extends('structure.html5', [
    'lang' => str_replace('_', '-', app()->getLocale()),
    'charset' => 'utf-8',
    'viewport' => 'width=device-width, initial-scale=1',
    'title' => $title,
])

@section('head')
    <meta name="author" content="{{ $author }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    @yield('styles')

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
@endsection

@section('body')
    <div id="app" class="antialiased flex-col min-h-screen min-w-screen bg-white dark:bg-slate-900">
        <div class="fixed z-20 top-0 left-0 w-screen bg-white dark:bg-slate-900">

            <div class="container box-border px-4 sm:mx-auto flex flex-row flex-nowrap
                        justify-between items-center py-4 lg:py-8">

                {{--Logo--}}
                <div class="w-1/3 lg:w-1/5 2xl:w-1/6">
                    <a class="flex items-center inline-block" href="{{ route('home') }}" rel="nofollow">
                        @include('assets.icons.logo')
                    </a>
                </div>

                {{--Menu--}}
                <div class="hidden lg:inline-block">
                    <div class="flex items-center justify-start">
                        <a class="mr-2" href="{{ route('home') . '#diensten' }}" title="Diensten van MenToD" target="_self">
                            <x-elements.button>
                                Diensten
                            </x-elements.button>
                        </a>
                        <a class="mr-2" href="{{ route('home') . '#over-mij' }}" title="Over MenToD" target="_self">
                            <x-elements.button>
                                Over mij
                            </x-elements.button>
                        </a>
                        <a class="mr-2" href="{{ route('home') . '#expertises' }}" title="Expertises van MenToD" target="_self">
                            <x-elements.button>
                                Expertises
                            </x-elements.button>
                        </a>
                        <a href="{{ route('home') . '#contact' }}" title="Neem contact op met MenToD" target="_self">
                            <x-elements.button>
                                Contact
                            </x-elements.button>
                        </a>
                    </div>
                </div>

                {{--Contact--}}
                <div class="inline-block flex align-center justify-end">
                    <a href="mailto:info@mentod.nl" rel="nofollow">
                        <x-elements.button icon="assets.icons.mail">
                            info@mentod.nl
                        </x-elements.button>
                    </a>
                    <div class="inline-block ml-2 lg:hidden">
                        <mobile-menu-switch></mobile-menu-switch>
                    </div>
                </div>

            </div>

        </div>

        <mobile-menu>
            <div class="relative top-0 container box-border sm:mx-auto pt-28 px-8">
                <div class="flex flex-col">
                    <a class="mb-4" href="{{ route('home') . '#diensten' }}"
                       title="Diensten van MenToD" target="_self" @click="toggle()">
                        <span class="font-mono font-bold text-2xl text-primary">
                            Diensten
                        </span>
                    </a>
                    <a class="mb-4" href="{{ route('home') . '#over-mij' }}"
                       title="Over MenToD" target="_self" @click="toggle()">
                        <span class="font-mono font-bold text-2xl text-primary">
                            Over mij
                        </span>
                    </a>
                    <a class="mb-4" href="{{ route('home') . '#expertises' }}"
                       title="Expertises van MenToD" target="_self" @click="toggle()">
                        <span class="font-mono font-bold text-2xl text-primary">
                            Expertises
                        </span>
                    </a>
                    <a href="{{ route('home') . '#contact' }}"
                       title="Neem contact op met MenToD" target="_self" @click="toggle()">
                        <span class="font-mono font-bold text-2xl text-primary">
                            Contact
                        </span>
                    </a>
                </div>
            </div>
            <div class="w-2/3 float-right grid grid-cols-4 pr-8">
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
                <div class="relative w-[54px] h-[54px]">
                    <figure
                        class="absolute bottom-0 right-0 block rounded-full bg-primary w-1 h-1"></figure>
                </div>
            </div>
        </mobile-menu>

        <main class="grow">
            @yield('content')
        </main>

        <footer>

        </footer>

    </div>

    @yield('scripts')

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
@endsection
