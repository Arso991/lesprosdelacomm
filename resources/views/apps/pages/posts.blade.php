@extends('layouts.main')

@section('title', 'Actualités')

@section('content')
    {{-- START HERO --}}
    <section class="relative">
        <div style="background:url('{{ asset('assets/images/brand/banner3.webp') }}') center; background-repeat: no-repeat; background-size: cover;"
            class="h-[300px] w-full">
            <div class="h-full w-full bg-black opacity-60"></div>
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center">Actualités</h1>
            </div>
        </div>
    </section>
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy
                            text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy
                            text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border flex flex-col gap-4">
                <div class="h-[10rem]">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="px-[10px]">
                    <div class="mb-[1rem]">
                        <a href="#"
                            class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752]">Première
                            édition du forum des
                            métiers de la com</a>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mt-[.5rem]">Lorem Ipsum is simply dummy
                            text
                            of
                            the
                            printing and typesetting industry. Lorem...</p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-eye text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">29 vues</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div>
                                <i class="fe fe-clock text-gray-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">2 min</p>
                            </div>
                        </div>
                    </div>
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
