@extends('layouts.main')

@section('title', 'Actualités')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => $post->title])
    {{-- END HERO --}}

    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        <div class="px-[0px] lg:px-[8rem]">
            <div class="h-auto overflow-hidden rounded-md w-full">
                <img src="{{ asset($post->cover_image) }}" class="h-full w-full object-cover" alt="">
            </div>
            <div class="flex flex-col gap-6 px-[20px] mt-[1rem]">
                <div>
                    <p
                        class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-[#098752] flex justify-end items-center gap-2 capitalize">
                        {{ $post->event_day ? $post->formatted_day : '' }} <span class="fa fa-circle text-[.5rem]"></span>
                        {{ $post->event_day ? $post->formatted_hour : 'Publié le : ' . $post->created_at }}</p>
                    <h1 class="text-[1rem] md:text-[1.25rem] lg:text-[1.5rem] my-[.8rem] font-bold">{{ $post->title }}</h1>
                    <div class="sm:flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="flex gap-2 items-center">
                                <div>
                                    <i class="fe fe-eye text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">{{ $post->views }} vues</p>
                                </div>
                            </div>
                            <div class="flex gap-2 items-center">
                                <div>
                                    <i class="fe fe-clock text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">{{ $post->estimated_reading_time }} min</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-400">{{ $post->address ?? '' }}</p>
                        <p class="text-gray-400">
                            {{ $post->price ? ($post->price <= 0 ? 'Gratuit' : 'A partir de : ' . $post->price . ' F CFA') : '' }}
                        </p>

                    </div>
                </div>
                <div class="post-container">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </section>

    {{-- START PARTNERS --}}
    <section class="container mx-auto my-[5rem]">
        @include('apps.pages.widgets.partner')
    </section>
    {{-- END PARTNERS --}}
@endsection
