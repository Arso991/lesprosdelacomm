@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    {{-- START HERO --}}
    <section class="relative">
        <div style="background:url('{{ asset('assets/images/brand/banner3.webp') }}') center; background-repeat: no-repeat; background-size: cover;"
            class="h-[300px] w-full">
            <div class="h-full w-full bg-black opacity-60"></div>
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center">Contacts</h1>
            </div>
        </div>
    </section>
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <div class="about-container items-center gap-[4rem]">
            <div class="w-full md:w-1/2">
                <form action="{{ route('view.contact.store') }}" method="POST" class="flex justify-center">
                    @csrf
                    <div class="w-full">
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mb-[2rem] text-center">Besoin d'informations
                            complémentaires ? Envoyez-nous un message.</p>
                        <div class="flex flex-col gap-4 mb-4">
                            <div class="">
                                <label for="email" class="block text-[1rem] mb-1">Email</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}"
                                    class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                            </div>

                            <div class="">
                                <label for="object" class="block text-[1rem] mb-1">Objet</label>
                                <input type="text" id="object" name="object" value="{{ old('object') }}"
                                    class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                            </div>

                            <div class="">
                                <label for="message" class="block text-[1rem] mb-1">Message</label>
                                <textarea id="message" name="message" rows="6"
                                    class="w-full p-3 border border-gray-300 rounded-[5px] mt-1 focus:outline-none" placeholder="Entrez votre message"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="">
                            <button
                                class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-full h-[400px] md:w-1/2 mt-6 md:mt-0">
                <div id="map" style="height:100%; width:100%; border-radius:20px"></div>
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
