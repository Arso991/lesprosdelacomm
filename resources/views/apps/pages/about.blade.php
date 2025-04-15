@extends('layouts.main')

@section('title', 'Notre Association')

@section('content')
    {{-- START HERO --}}
    <section class="relative">
        <div style="background:url('{{ asset('assets/images/brand/banner3.webp') }}') center; background-repeat: no-repeat; background-size: cover;"
            class="h-[300px] w-full">
            <div class="h-full w-full bg-black opacity-60"></div>
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center">Notre Association</h1>
            </div>
        </div>
    </section>
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Les Pros de la comm du
            Bénin</h1>
        <div class="about-container gap-[2rem]">
            <div class="w-full md:w-1/2 text-[0.875rem] md:text-[1rem] lg:text-[1rem] leading-6">
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Les Pros de la Comm du Bénin rassemble les
                    professionnels de la communication du Bénin. Pour être reconnu comme professionnel de la communication,
                    il convient d’avoir acquis la compétence nécessaire par ses études, ses travaux ou son expérience et
                    d’avoir, pour activité essentielle, apporté ses services à un groupe (collectivité, entreprise), afin
                    d’étudier les problèmes de communication qui se posent à ce groupe, de les résoudre en proposant les
                    solutions nécessaires et en mettant en œuvre les méthodes, voies et moyens convenables pour améliorer la
                    communication tant à l’intérieur qu’à l’extérieur.</p>
            </div>
            <div class="mt-[1rem] md:mt-[0px] w-full md:w-1/2 flex justify-center">
                <div class="w-[300px] h-[300px] reveal revealright">
                    <div class="w-full h-1/2 overflow-hidden">
                        <img src="{{ asset('assets/images/brand/banner1.jpg') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div class="w-full h-1/2 flex gap-4 mt-4">
                        <div>
                            <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/brand/banner3.webp') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Nos missions</h1>
        <ul class="px-[0px] md:px-[1rem] text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex flex-col gap-3">
            <li class="reveal revealbottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</li>
            <li class="reveal revealbottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</li>
            <li class="reveal revealbottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</li>
            <li class="reveal revealbottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</li>
        </ul>
    </section>

    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Nos évènements</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="about-container border rounded-md">
                <div class="w-full md:w-[12rem] h-[10rem] md:h-full overflow-hidden">
                    <img src="{{ asset('assets/images/brand/banner1.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="flex-1 p-[1rem]">
                    <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Les Rencontres PROSCOMM</h1>
                    <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Un événement annuel réunissant les
                        professionnels de la communication, du marketing, des médias et
                        des relations publiques. Au programme : panels d’experts, speed networking, stands de partenaires et
                        pitchs de projets innovants.</p>
                </div>
            </div>

            <div class="about-container border rounded-md">
                <div class="w-full md:w-[12rem] h-[10rem] md:h-full overflow-hidden">
                    <img src="{{ asset('assets/images/brand/banner1.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="flex-1 p-[1rem]">
                    <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Masterclass : L’Art du Personal
                        Branding</h1>
                    <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Un atelier intensif animé par des experts en
                        image, storytelling et influence digitale pour apprendre à maîtriser sa communication personnelle et
                        se positionner comme une référence dans son domaine.</p>
                </div>
            </div>

            <div class="about-container border rounded-md">
                <div class="w-full md:w-[12rem] h-[10rem] md:h-full overflow-hidden">
                    <img src="{{ asset('assets/images/brand/banner1.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="flex-1 p-[1rem]">
                    <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Bootcamp Communication Digitale
                    </h1>
                    <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Une formation immersive mêlant théorie et cas
                        pratiques pour se former aux stratégies social media, content marketing, publicité en ligne et
                        outils de performance digitale.</p>
                </div>
            </div>

            <div class="about-container border rounded-md">
                <div class="w-full md:w-[12rem] h-[10rem] md:h-full overflow-hidden">
                    <img src="{{ asset('assets/images/brand/banner1.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="flex-1 p-[1rem]">
                    <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Les Trophées de la Comm’ Bénin
                    </h1>
                    <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Une soirée de gala pour récompenser les
                        meilleures campagnes, talents émergents, agences créatives et initiatives inspirantes du secteur. Un
                        moment fort de reconnaissance et de valorisation des acteurs locaux.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="membership" class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[1rem]">Rejoindre
            l'Association</h1>
        <form action="{{ route('view.membership.store') }}" method="POST" class="flex justify-center">
            @csrf
            <div class="w-full md:w-[60%]">
                <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mb-[2rem] text-center">Veuillez remplir le
                    formulaire ci-dessous
                    puis envoyer
                    votre demande.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="">
                        <label for="lastname" class="block text-[1rem] mb-1">Nom</label>
                        <input type="text" id="lastname" name="lastname"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                    </div>

                    <div class="">
                        <label for="firstname" class="block text-[1rem] mb-1">Prénom</label>
                        <input type="text" id="firstname" name="firstname"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                    </div>

                    <div class="">
                        <label for="enterprise" class="block text-[1rem] mb-1">Nom d'entreprise</label>
                        <input type="text" id="enterprise" name="enterprise"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                    </div>

                    <div class="">
                        <label for="phone" class="block text-[1rem] mb-1">Numéro de téléphone</label>
                        <input type="text" id="phone" name="phone"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                    </div>

                </div>

                <div class="mb-[1.5rem]">
                    <label for="email" class="block text-[1rem] mb-1">Email</label>
                    <input type="text" id="email" name="email"
                        class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                </div>

                <div class="flex justify-center">
                    <button
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">Envoyer
                        la
                        demande</button>
                </div>
            </div>
        </form>
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
