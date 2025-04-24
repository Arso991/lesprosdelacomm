<section class="relative">
    <div class="banner-carousel">
        @foreach (json_decode($banner->images) as $image)
            <div style="background:url('{{ asset($image) }}') center; background-repeat: no-repeat; background-size: cover;"
                class="h-[550px] w-full">
                <div class="h-full w-full bg-black opacity-70"></div>
            </div>
        @endforeach
    </div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  w-[80%] md:w-[60%]">
        <div class="flex flex-col gap-[4rem]">
            <div>
                <h1 class="text-[#FFFFFF] text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-center font-bold">
                    {{ $banner->getTranslation('title', app()->getLocale()) }}</h1>
                <p class="text-[#FFFFFF] text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] text-center mt-[1rem]">
                    {{ $banner->getTranslation('subtitle', app()->getLocale()) }}</p>
            </div>
            <div class="flex justify-center">
                <a href="{{ route('view.about') }}#membership"
                    class="px-[2rem] py-[1rem] bg-[#FFFFFF] hover:bg-[#098752] transition-all ease-in-out duration-300 rounded-md font-bold hover:text-[#ffff]">Rejoignez-nous</a>
            </div>
        </div>
    </div>
</section>
