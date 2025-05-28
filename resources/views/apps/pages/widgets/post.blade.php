<section class="container mx-auto px-5 sm:px-0 mt-[5rem]">
    <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[2rem]">
        @lang('static.actualite et evenement')</h1>
    @if ($posts && $posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- <div class="h-full md:h-[250px] about-container border rounded-md gap-[1rem] cursor-pointer">
                <div class="h-[150px] md:h-full w-full md:w-1/3 overflow-hidden rounded-md">
                    <img src="{{ asset('assets/images/brand/banner2.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="p-2 w-full md:w-2/3 mt-[1rem] md:mt-[0]">
                    <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mb-[1rem]">Forum de la Communication 2025
                    </h1>
                    <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">Un événement phare réunissant experts et
                        passionnés du domaine pour débattre des tendances et
                        innovations
                        du secteur.</p>
                </div>
            </div> --}}
            @foreach ($posts as $item)
                <div class="border flex flex-col gap-4">
                    <div class="h-[10rem]">
                        <a href="{{ route('view.post', $item->id) }}">
                            <img src="{{ asset($item->cover_image) }}" class="w-full h-full object-cover"
                                alt="{{ $item->title }}">
                        </a>
                    </div>
                    <div class="px-[10px] flex-1 flex flex-col justify-between gap-3">
                        <div class="">
                            <a href="{{ route('view.post', $item->id) }}"
                                class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] hover:text-[#098752] block h-[4rem]">{{ $item->title }}</a>
                        </div>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                            {{ Str::limit($item->content, 80, '...') }}</p>
                        <div class="flex items-center justify-between ">
                            <div class="flex gap-2 items-center">
                                <div>
                                    <i class="fe fe-eye text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400">{{ $item->views }} @lang('static.vues')</p>
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
        <div class="text-center mt-[2rem]">
            <a class="text-[1rem] text-[#000000] hover:text-[#000000] hover:underline cursor-pointer"
                href="{{ route('view.posts') }}">@lang('static.voir') <span class="fa fa-arrow-right"></span> </a>
        </div>
    @else
        <div class="w-full flex flex-col items-center">
            @include('layouts.inc.no-data')
            <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mt-[1rem]">@lang('static.pas de données')</h2>
        </div>
    @endif
</section>
