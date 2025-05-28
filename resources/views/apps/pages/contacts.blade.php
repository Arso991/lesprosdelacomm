@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    {{-- START HERO --}}
    @include('apps.pages.widgets.destinationHero', ['section' => __('static.contacts')])
    {{-- END HERO --}}
    <section class="container mx-auto mt-[5rem] px-5 sm:px-0">
        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] mb-[1rem] text-center">@lang('static.informations')</p>
        <div class="about-container items-center gap-[4rem]">
            <div class="w-full md:w-1/2">
                <form action="{{ route('view.contact.store') }}" method="POST" class="flex justify-center">
                    @csrf
                    <div class="w-full">
                        <div class="flex flex-col gap-4 mb-4">
                            <div class="">
                                <label for="email" class="block text-[1rem] mb-1">Email</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}"
                                    class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                            </div>

                            <div class="">
                                <label for="object" class="block text-[1rem] mb-1">@lang('static.objet')</label>
                                <input type="text" id="object" name="object" value="{{ old('object') }}"
                                    class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm">
                            </div>

                            <div class="">
                                <label for="message" class="block text-[1rem] mb-1">Message</label>
                                <textarea id="message" name="message" rows="6"
                                    class="w-full p-3 border border-gray-300 rounded-[5px] mt-1 focus:outline-none" placeholder="@lang('static.entrez')"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="">
                            <button
                                class="px-[1.5rem] py-[.8rem] bg-[#000000] text-[#ffffff] hover:bg-[#098752] hover:text-[#ffff] transition-all ease-in-out duration-300 rounded-md font-bold">@lang('static.envoyer')</button>
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
        @include('apps.pages.widgets.partner')
    </section>
    {{-- END PARTNERS --}}
@endsection
