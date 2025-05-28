<section class="mt-[5rem] bg-[#e7f1ea] py-[3rem]">
    <div class="container mx-auto px-5 sm:px-0">
        <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[2rem]">
            @lang('static.bureau')</h1>
        <div class="ms-[0rem] sm:ms-[5rem]">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($offices as $item)
                    <div class="h-[20rem] rounded-lg relative overflow-hidden">
                        <img src="{{ asset($item->image) }}" class="w-full h-full object-cover rounded-[20px]"
                            alt="">
                        <div class="bg-black h-full w-full top-0 left-0 absolute opacity-20 z-10 rounded-[20px]"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-start z-20">
                            <h2 class="text-[1.25rem] font-bold text-[#FFFFFF]">{{ $item->name }}</h2>
                            <p class="text-[1rem] text-[#FFFFFF]">{{ $item->role }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="h-[20rem] rounded-lg relative overflow-hidden">
                    <img src="{{ asset('assets/images/faces/face2.jpg') }}"
                        class="w-full h-full object-cover rounded-[20px] " alt="">
                    <div class="bg-black h-full w-full top-0 left-0 absolute opacity-20 z-10 rounded-[20px]"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-start z-20">
                        <h2 class="text-[1.25rem] font-bold text-[#FFFFFF]">John Doe</h2>
                        <p class="text-[1.25rem] text-[#FFFFFF]">Le Président</p>
                    </div>
                </div>

                <div class="h-[20rem] rounded-lg relative overflow-hidden">
                    <img src="{{ asset('assets/images/faces/face3.jpg') }}"
                        class="w-full h-full object-cover rounded-[20px]" alt="">
                    <div class="bg-black h-full w-full top-0 left-0 absolute opacity-20 z-10 rounded-[20px]"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-start z-20">
                        <h2 class="text-[1.25rem] font-bold text-[#FFFFFF]">John Doe</h2>
                        <p class="text-[1.25rem] text-[#FFFFFF]">Le Président</p>
                    </div>
                </div>

                <div class="h-[20rem] rounded-lg relative overflow-hidden">
                    <img src="{{ asset('assets/images/faces/face4.jpg') }}"
                        class="w-full h-full object-cover rounded-[20px]" alt="">
                    <div class="bg-black h-full w-full top-0 left-0 absolute opacity-20 z-10 rounded-[20px]"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-start z-20">
                        <h2 class="text-[1.25rem] font-bold text-[#FFFFFF]">John Doe</h2>
                        <p class="text-[1.25rem] text-[#FFFFFF]">Le Président</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="text-center mt-[2rem]">
        <a class="text-[1rem] text-[#000000] hover:text-[#000000] hover:underline cursor-pointer"
            href="{{ route('view.office') }}#memberSection">@lang('static.voir') <span class="fa fa-arrow-right"></span>
        </a>
    </div>
</section>
