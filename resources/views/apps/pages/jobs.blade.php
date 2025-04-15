@extends('layouts.main')

@section('title', 'Carrières')

@section('content')
    {{-- START HERO --}}
    <section class="relative">
        <div style="background:url('{{ asset('assets/images/brand/banner3.webp') }}') center; background-repeat: no-repeat; background-size: cover;"
            class="h-[300px] w-full">
            <div class="h-full w-full bg-black opacity-60"></div>
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center">Carrières</h1>
            </div>
        </div>
    </section>
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        <div class="flex flex-col gap-8">
            <div class="border flex flex-col gap-4 rounded-md">
                <div class="flex items-center gap-4">
                    <div class="w-[10rem] h-[8rem] overflow-hidden">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Poste : <span
                                class="font-bold">Designer UI/UX</span></h1>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Date de cloture : <span
                                class="font-bold">30/05/2025</span></h1>
                    </div>
                </div>
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="mb-[.6rem]">
                    <a href="mailto:contact@lesprosdelacomm.bj"
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">Postuler</a>
                </div>
            </div>

            <div class="border flex flex-col gap-4 rounded-md">
                <div class="flex items-center gap-4">
                    <div class="w-[10rem] h-[8rem] overflow-hidden">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Poste : <span
                                class="font-bold">Designer UI/UX</span></h1>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Date de cloture : <span
                                class="font-bold">30/05/2025</span></h1>
                    </div>
                </div>
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="mb-[.6rem]">
                    <a href="mailto:contact@lesprosdelacomm.bj"
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold ">Postuler</a>
                </div>
            </div>

            <div class="border flex flex-col gap-4 rounded-md">
                <div class="flex items-center gap-4">
                    <div class="w-[10rem] h-[8rem] overflow-hidden">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Poste : <span
                                class="font-bold">Designer UI/UX</span></h1>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Date de cloture : <span
                                class="font-bold">30/05/2025</span></h1>
                    </div>
                </div>
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="mb-[.6rem]">
                    <a href="mailto:contact@lesprosdelacomm.bj"
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold ">Postuler</a>
                </div>
            </div>

            <div class="border flex flex-col gap-4 rounded-md">
                <div class="flex items-center gap-4">
                    <div class="w-[10rem] h-[8rem] overflow-hidden">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Poste : <span
                                class="font-bold">Designer UI/UX</span></h1>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Date de cloture : <span
                                class="font-bold">30/05/2025</span></h1>
                    </div>
                </div>
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="mb-[.6rem]">
                    <a href="mailto:contact@lesprosdelacomm.bj"
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold ">Postuler</a>
                </div>
            </div>
        </div>
    </section>

    {{-- START PARTNERS --}}
    <section class="container mx-auto my-[5rem]">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[2rem]">
            Partenaires</h1>

        <div class="partner-slider">
            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner1.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner2.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner1.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner2.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner1.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

            <div class="h-[6rem] mx-2">
                <img src="{{ asset('assets/images/logos/partner2.jpg') }}" class="h-full w-full object-cover"
                    alt="">
            </div>

        </div>

    </section>
    {{-- END PARTNERS --}}
@endsection
