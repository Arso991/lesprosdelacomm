@extends('layouts.main')

@section('title', 'Accueil')

@section('content')
    <!-- CONTAINER -->
    {{-- START HERO --}}
    @include('apps.pages.widgets.homeHero')
    {{-- END HERO --}}
    {{-- START GOALS --}}
    @include('apps.pages.widgets.goals')
    {{-- END GOALS --}}
    {{-- START ABOUT --}}
    @include('apps.pages.widgets.about')
    {{-- END ABOUT --}}
    {{-- START MEMBERS --}}
    @include('apps.pages.widgets.members')
    {{-- END MEMBERS --}}
    {{-- START POSTS --}}
    @include('apps.pages.widgets.post')
    {{-- END POSTS --}}
    {{-- START TESTIMONIALS --}}
    @include('apps.pages.widgets.testimonial')
    {{-- END TESTIMONIALS --}}
    {{-- START GALERIE --}}
    @include('apps.pages.widgets.gallery')
    {{-- END GALERIE --}}
    {{-- START PARTNERS --}}
    <section class="container mx-auto px-5 sm:px-0 my-[5rem]">
        @include('apps.pages.widgets.partner')

        <div class="text-center my-[2rem]">
            <button
                class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#FFFFFF] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold become-partner-open">@lang('static.devenir partenaire')</button>
        </div>
    </section>
    {{-- END PARTNERS --}}

    <div class="h-screen w-full fixed top-0 left-0 z-[99999999] flex justify-center items-center become-partner">
        <div class="w-full h-full bg-black opacity-50 become-partner-overlay"></div>
        <div class="absolute w-[80%] bg-white rounded-md shadow-md p-[1rem]">
            <div class="flex justify-end">
                <span class="fa fa-close text-[1.5rem] font-bold cursor-pointer become-partner-close"></span>
            </div>
            <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[1rem]">
                Devenir partenaire</h1>
            <form class="px-[2rem]" action="">
                <h2 class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mb-[2rem] text-center">Pour devenir partenaire,
                    veuillez renseigner vos informations puis envoyer !</h2>
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
                        <label for="phone" class="block text-[1rem] mb-1">Email</label>
                        <input type="text" id="phone" name="phone"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button
                        class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- CONTAINER CLOSED-->
@endsection
