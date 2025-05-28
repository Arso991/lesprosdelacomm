@extends('layouts.main')

@section('title', 'Actualités')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => __('static.actualites')])
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        @if ($posts && $posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($posts as $item)
                    <div class="border flex flex-col gap-4">
                        <div class="h-[10rem]">
                            <a href="{{ route('view.post', $item->id) }}">
                                <img src="{{ asset($item->cover_image) }}" class="w-full h-full object-cover"
                                    alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="px-[10px] flex-1 flex flex-col justify-between gap-3">
                            <div class="">
                                <a href="{{ route('view.post', $item->id) }}"
                                    class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">{{ $item->title }}</a>
                            </div>
                            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                                {{ Str::limit($item->content, 68, '...') }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <i class="fe fe-eye text-gray-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-400">{{ $item->views }} vues</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <i class="fe fe-clock text-gray-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-400">{{ $item->estimated_reading_time }} min</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-[2rem]">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        @else
            <div class="w-full flex flex-col items-center">
                @include('layouts.inc.no-data')
                <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mt-[1rem]">Pas de données pour le moment</h2>
            </div>
        @endif
    </section>

    {{-- START PARTNERS --}}
    <section class="container mx-auto my-[5rem]">
        @include('apps.pages.widgets.partner')
    </section>
    {{-- END PARTNERS --}}
@endsection
