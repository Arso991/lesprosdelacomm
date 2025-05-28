<section class="container mx-auto px-5 sm:px-0 mt-[5rem]">
    <h1 class="text-[1.25rem] md:text-[1.5rem] lg:text-[2rem] text-[#098752] text-center font-bold mb-[2rem]">
        @lang('static.temoignage')</h1>
    @if ($testimonials && $testimonials->count() > 0)
        <div class="testimonial-slider">
            @foreach ($testimonials as $item)
                <div>
                    <div class="flex flex-col gap-2 p-2 items-center">
                        <div class="h-[6rem] w-[6rem] p-1 border-[2px] border-[#F4D34D] rounded-full overflow-hidden">
                            <img src="{{ asset($item->image) }}" class="w-full h-full rounded-full object-cover"
                                alt="{{ $item->name }}">
                        </div>
                        <h1 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] font-bold">{{ $item->name }}</h1>
                        <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem]">{{ $item->profession }}</h2>
                        <p class="text-[0.875rem] md:text-[1rem] lg:text-[1rem] w-full lg:w-[25rem] text-center">
                            "{{ $item->description }}"</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="w-full flex flex-col items-center">
            @include('layouts.inc.no-data')
            <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mt-[1rem]">Pas de données pour le moment</h2>
        </div>
    @endif
</section>
