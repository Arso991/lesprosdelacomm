@extends('layouts.main')

@section('title', 'Bureau Général')

@section('content')
    {{-- START HERO --}}
    <section class="relative">
        <div style="background:url('{{ asset('assets/images/brand/banner3.webp') }}') center; background-repeat: no-repeat; background-size: cover;"
            class="h-[300px] w-full">
            <div class="h-full w-full bg-black opacity-60"></div>
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
            <div class="flex flex-col gap-4">
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center">Le Bureau Général</h1>
            </div>
        </div>
    </section>
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Mot du
            président</h1>
        <div class="flex gap-8">
            <div class="w-full md:w-1/2 text-[0.875rem] md:text-[1rem] lg:text-[1rem] leading-6">
                <p>C’est avec un immense plaisir que je vous souhaite la bienvenue au sein de l’Association des
                    Professionnels de la Communication du Bénin. Notre ambition est claire : créer un espace de partage,
                    d’apprentissage et d’innovation pour tous ceux qui font vivre la communication sous ses multiples
                    formes.</p>

                <p> Dans un monde en constante évolution, la communication joue un rôle clé dans le développement des
                    entreprises, des institutions et des talents. À travers nos actions, nous nous engageons à fédérer les
                    acteurs du secteur, à proposer des formations adaptées aux réalités du marché et à promouvoir des
                    pratiques éthiques et responsables.</p>

                <p>Nous comptons sur votre engagement et votre dynamisme pour faire de cette association un véritable
                    levier de succès collectif. Ensemble, bâtissons un réseau solide où chacun trouve sa place et contribue
                    à l’évolution de notre métier.</p>

                <p> Merci de votre confiance !</p>
            </div>
            <div class="w-1/2 md:flex justify-center hidden">
                <div class="w-[18rem] h-[20rem] reveal revealright">
                    <img src="{{ asset('assets/images/faces/face5.jpeg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-[5rem] px-5 sm:px-0 scroll-section" id="memberSection">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Les membres du
            Bureau
            Général</h1>
        <div class="wrappe">
            <div role="list" class="list">
                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white p-6">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face5.jpeg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face6.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face7.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <div role="listitem" class="item">
                    <div class="flex flex-col items-center gap-2 bg-white">
                        <div class="w-[12rem] h-[16rem] overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/faces/face8.jpg') }}" class="w-full h-full object-cover"
                                alt="">
                        </div>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">John Doe</h2>
                        <p class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">Le Président</p>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] text-center">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-5 sm:px-0 mt-[-2rem]">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Nos valeurs</h1>

        <div class="values-container">
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="w-[250px] h-[300px] sm:w-[300px] sm:h-[400px] relative">
                    <div class="w-[8rem] h-[8rem] sm:w-[10rem] sm:h-[10rem]">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                    <div class="w-[8rem] h-[8rem] sm:w-[10rem] sm:h-[10rem] absolute right-0 top-1/2 -translate-y-1/2">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="object-cover w-full h-full"
                            alt="">
                    </div>
                    <div class="w-[8rem] h-[8rem] sm:w-[10rem] sm:h-[10rem] absolute left-0 bottom-0">
                        <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="object-cover w-full h-full"
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
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] font-bold mb-[2rem]">Rapports d'activités
        </h1>
        <ul class="px-0 md:px-[2rem] text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex flex-col gap-3">
            <li class="flex gap-1 reveal revealleft"> <span
                    class="h-[1rem] w-[1rem] bg-[#098752] rounded-full block"></span>
                <p class="flex-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                </p>
            </li>

            <li class="flex gap-1 reveal revealleft"> <span
                    class="h-[1rem] w-[1rem] bg-[#098752] rounded-full block"></span>
                <p class="flex-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                </p>
            </li>
        </ul>
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
