@extends('layouts.main')

@section('title', 'Carrières')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => $career->title])
    {{-- END HERO --}}

    <section class="container mx-auto mt-[5rem] px-[1.5rem] sm:px-[5rem]">
        <div class="about-container gap-6">
            <div class="w-full md:w-2/3 flex flex-col gap-6">
                <div class="flex justify-between items-center">
                    <div class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] flex items-center gap-2">
                        <i class="fa fa-map-pin text-[#098752]"></i>
                        <p>
                            {{ $career->address }}
                        </p>
                    </div>
                    <p>Date limite : <span class="text-[#C52E36]">{{ $career->formatted_day }}</span></p>
                </div>

                <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">Description de l'emploi:</h1>

                <div class="job-container">
                    <h2>OFFRE DE STAGE EN SECRÉTARIAT</h2>

                    <p>Une petite structure située à PARANA LES PHARAONS recherche une jeune fille motivée pour un
                        stage en secrétariat. Cette opportunité vous permettra d'acquérir une expérience précieuse
                        dans le domaine.</p>

                    <h2>Missions :</h2>
                    <ul>
                        <li>Assistance administrative</li>
                        <li>Gestion de documents</li>
                        <li>Accueil et communication</li>
                    </ul>
                    <h2>Profil recherché :</h2>
                    <ul>
                        <li>Dynamique et respectueuse</li>
                        <li>Désireuse d'apprendre</li>
                        <li>Résidant aux alentours de LES PHARAONS à PARANA</li>
                    </ul>
                    <h2>Conditions :</h2>
                    <ul>
                        <li>Stage non rémunéré</li>
                        <li>Durée : 6 mois à 1 an</li>
                    </ul>
                    <h2>Candidature :</h2>
                    <p>Si vous êtes intéressée, veuillez nous contacter par WhatsApp uniquement au : 91299939</p>
                    <h2>Informations importantes :</h2>
                    <ul>
                        <li>Toujours se rendre aux entretiens accompagné(e).</li>
                        <li>Ne jamais payer pour un recrutement.</li>
                    </ul>

                    <h2>Diplôme exigé:</h2>
                    Non-défini

                    <h2>Anneés d'expériences</h2>
                    --

                    <h2>Niveau de langue</h2>
                    Français: Intermédiaire, Anglais: Débutant
                </div>

            </div>
            <div class="w-full md:w-1/3 mt-[2rem] md:mt-0">
                <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold mb-[1.5rem]">Informations sur
                    l'emploi:
                </h1>
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-calendar text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">date d'ajout</h2>
                            <p>{{ $career->created_at }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-user text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">titre de l'emploi</h2>
                            <p>{{ $career->title }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-map-marker text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">lieu de travail</h2>
                            <p>{{ $career->address }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-building text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">ville</h2>
                            <p>{{ $career->city }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-map-signs text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">département</h2>
                            <p>{{ $career->department }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-phone text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">téléphone</h2>
                            <p>{{ $career->phone }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="h-[2.5rem] w-[2.5rem] rounded-full flex justify-center items-center bg-[#e7f1ea]">
                            <i class="fa fa-envelope text-[1rem] text-[#098752]"></i>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase text-[1rem] text-[#098752] mb-1">email</h2>
                            <p>{{ $career->email ?? 'contact@lesprosdelacomm.bj' }}</p>
                        </div>
                    </div>
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
