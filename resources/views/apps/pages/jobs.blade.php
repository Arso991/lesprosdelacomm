@extends('layouts.main')

@section('title', 'Carrières')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => __('static.carriere')])
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        @if ($careers && $careers->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                @foreach ($careers as $item)
                    <div
                        class="p-3 shadow-md flex flex-col gap-3 rounded-md transition-transform duration-300 hover:-translate-y-2">
                        <div class="flex items-center justify-between">
                            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                                {{ $item->department }}
                            </p>
                            <p class="text-[0.875rem] text-[#C52E36] capitalize">
                                {{ $item->formatted_day }}
                            </p>
                        </div>
                        <div class="flex justify-center my-2">
                            <a href="{{ route('view.job', $item->id) }}"
                                class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold cursor-pointer hover:text-[#098752]">
                                {{ $item->title }}</a>
                        </div>
                        <div class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex items-center gap-2">
                            <i class="fa fa-map-pin text-[#098752]"></i>
                            <p>
                                {{ $item->address }}
                            </p>
                        </div>
                        <div class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex items-center gap-2">
                            <i class="fa fa-building text-[#098752]"></i>
                            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                                {{ $item->city }}
                            </p>
                            <i class="fa fa-graduation-cap text-[#098752]"></i>
                            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                                {{ $item->graduation }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div
                                class="p-[0.4rem] gap-1 rounded-md text-[0.875rem] flex items-center bg-[#e7f1ea] text-[#098752]">
                                <i class="fe fe-clock"></i>
                                <p>
                                    {{ $item->type }}
                                </p>
                            </div>
                            <a href="{{ route('view.job', $item->id) }}"
                                class="px-[1.5rem] py-[.6rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-[2rem]">
                {{ $careers->links('pagination::tailwind') }}
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
