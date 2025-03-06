@props(['product'])
<li class="w-[16.6%] group">
    <a href="#!" class="">
        <div class="relative mb-[16px]">
            <img src="{{ url('storage', $product->image) }}" alt="" class="w-full group-hover:scale-[1.05] duration-300">
            <button class="h-[32px] w-[32px] flex justify-center items-center rounded-[50%] bg-white absolute bottom-[16px] right-[16px] cursor-pointer">
                <img src="{{ url('img/outline.svg')}}" alt="" class="w-[16px]">
            </button>
        </div>
        <h3 class="px-[16px] text-[#424551] text-[18px]">{{ $product->title }}</h3>
        <span class="font-semibold px-[16px] text-[#1E212C] text-[20px]">${{ $product->price }}</span>
    </a>
</li>
