@extends('layouts.main')

@section('title', 'Bureau Général')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => __('static.bureau')])
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem] text-center">
            @lang('static.mot du president')</h1>
        <div class="flex items-center gap-8">
            <div class="w-full md:w-1/2 text-[0.875rem] md:text-[1rem] lg:text-[1rem] leading-6">
                <p>@lang('static.mot1') <br>

                    @lang('static.mot2')<br>

                    @lang('static.mot3')<br>

                    @lang('static.mot4')</p>
            </div>
            <div class="w-1/2 md:flex justify-center hidden">
                <div class="w-[18rem] h-[22rem] overflow-hidden rounded-md reveal revealright">
                    <img src="{{ asset('assets/images/faces/face8.jpg') }}" class="w-full h-full object-cover" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-[5rem] px-[8] sm:px-4 scroll-section" id="memberSection">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem] text-center">
            @lang('static.les membres')</h1>
        <div class="flex justify-center">
            <div class="slider-wrapper w-full sm:w-[80%] relative">
                <div class="office-slider">
                    @foreach ($offices as $item)
                        <div class="w-full">
                            <div class="flex flex-col items-center gap-2 bg-white p-6 ">
                                <div class="w-[14rem] h-[18rem] overflow-hidden rounded-md">
                                    <img src="{{ asset($item->image) }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mt-[2rem] font-bold">
                                    {{ $item->name }}
                                </h2>
                                <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">
                                    {{ $item->getTranslation('role', app()->getLocale()) }}</p>
                                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center w-full lg:w-[80%]">
                                    {{ $item->getTranslation('profession', app()->getLocale()) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="slick-prev-custom absolute left-0 top-1/2 -translate-y-1/2 z-10">
                    <i class="fa fa-chevron-left text-[1rem] text-white"></i>
                </button>
                <button class="slick-next-custom absolute right-0 top-1/2 -translate-y-1/2 z-10">
                    <i class="fa fa-chevron-right text-[1rem] text-white"></i>
                </button>
            </div>
        </div>

        {{-- <div class="wrappe">
            <div role="list" class="list">
                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white p-6 mb-[2.5rem]">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face5.jpeg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center w-full md:w-[40rem]">Lorem
                            Ipsum is simply
                            dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white p-6 mb-[2.5rem]">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face6.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center w-full md:w-[40rem]">Lorem
                            Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white p-6 mb-[2.5rem]">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face7.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center w-full md:w-[40rem]">Lorem
                            Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white p-6 mb-[2.5rem]">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face8.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center w-full md:w-[40rem]">Lorem
                            Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    <section class="container mx-auto px-5 sm:px-0 mt-[5rem]">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem] text-center">Nos
            valeurs</h1>

        <div class="values-container items-center">
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="w-[250px] h-[300px] sm:w-[300px] sm:h-[400px] relative">
                    <div class="w-[8rem] h-[8rem] sm:w-[10rem] overflow-hidden rounded-md sm:h-[10rem]">
                        <img src="{{ asset('assets/images/brand/values1.jpg') }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                    <div
                        class="w-[8rem] h-[8rem] sm:w-[10rem] overflow-hidden rounded-md sm:h-[10rem] absolute right-0 top-1/2 -translate-y-1/2">
                        <img src="{{ asset('assets/images/brand/values2.jpg') }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                    <div
                        class="w-[8rem] h-[8rem] sm:w-[10rem] overflow-hidden rounded-md sm:h-[10rem] absolute left-0 bottom-0">
                        <img src="{{ asset('assets/images/brand/values3.jpg') }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 text-[0.875rem] md:text-[1rem] lg:text-[1rem] leading-6 mt-[1rem] md:mt-0">
                <ul class="px-0 md:px-[2rem] text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex flex-col gap-3">
                    <li>Nous nous investissons pleinement pour le développement et la valorisation des métiers de la
                        communication, en accompagnant nos membres dans leur évolution professionnelle.</li>

                    <li>La communication est en perpétuelle transformation. Nous encourageons la créativité, l’adoption de
                        nouvelles technologies et l’exploration de stratégies novatrices.</li>

                    <li>Nous prônons des pratiques responsables, honnêtes et respectueuses, en veillant à la déontologie et
                        à
                        l’intégrité de notre secteur.</li>

                    <li>L’union fait la force ! Nous croyons en l’échange de connaissances, en la mutualisation des
                        compétences
                        et en la solidarité entre professionnels.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem] text-center">Rapports
            d'activités
        </h1>
        @if ($reports && $reports->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($reports as $item)
                    <div class="border flex flex-col gap-4">
                        <a href="{{ route('view.post', $item->id) }}" class="h-[10rem]">
                            <img src="{{ asset($item->cover_image) }}" class="w-full h-full object-cover" alt="">
                        </a>
                        <div class="px-[10px] flex-1 flex flex-col justify-between gap-3">
                            <div class="">
                                <a href="{{ route('view.post', $item->id) }}"
                                    class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">{{ $item->getTranslation('title', app()->getLocale()) }}</a>
                            </div>

                            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                                {{ Str::limit($item->getTranslation('content', app()->getLocale()), 80, '...') }}</p>

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
                {{ $reports->links('pagination::tailwind') }}
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
