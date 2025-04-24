<section class="container mx-auto px-5 sm:px-0 mt-[5rem]">
    <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[2rem]">
        @lang('static.about')</h1>
    <div class="about-container items-center gap-8">
        <div class="w-[100%] md:w-1/2 flex justify-center h-[300px] sm:h-[400px]">
            <div class="w-[280px] sm:w-[350px] h-full relative">
                <div class="w-[160px] h-[180px] sm:w-[200px] sm:h-[220px] overflow-hidden rounded-md">
                    <img src="{{ asset(json_decode($about->images)[0]) }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div
                    class="w-[160px] h-[180px] sm:w-[200px] sm:h-[220px] overflow-hidden rounded-md absolute bottom-0 right-0 shadow-lg">
                    <img src="{{ asset(json_decode($about->images)[1]) }}" class="w-full h-full object-cover"
                        alt="">
                </div>
            </div>
        </div>
        <div class="w-[100%] md:w-1/2 mt-[2rem] md:mt-0">
            <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem]">
                {{ $about->getTranslation('text', app()->getLocale()) }}</p>
        </div>
    </div>
</section>
