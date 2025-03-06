<header>
    <div class="bg-[#1E212C]">
        <x-container>
            <ul class="flex py-[12px] justify-between opacity-[60%]">
                <li class="text-white text-[14px]">
                    <a href="tel:4055550128" class="">Available 24/7 at <span class="font-black ">(405) 555-0128</span></a>
                </li>
                <ul class="mx-[195px] flex gap-[32px] text-white">
                    <li class="">
                        <a href="#!" class="">Delivery & returns</a>
                    </li>
                    <li class="">
                        <a href="#!" class="">Track order</a>
                    </li>
                    <li class="">
                        <a href="#!" class="">Blog</a>
                    </li>
                    <li class="">
                        <a href="#!" class="">Contacts</a>
                    </li>
                </ul>
                <li>
                    @if (Route::has('login'))
                        @auth
                            <a href="/dashboard" class="text-white hover:opacity-[60%]">
                                Dashboard
                            </a>
                        @else
                        <span class="text-white">
                            <a href="{{ route('login') }}" class="hover:opacity-[60%]">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                /
                                <a href="{{ route('register') }}" class="hover:opacity-[60%]">
                                    Register
                                </a>
                            @endif
                        </span>
                        @endauth
                    @endif
                </li>
            </ul>

        </x-container>
    </div>
    <x-container>
        <div class="flex justify-between py-[20px] items-center">
            <a href="/" class="" alt='Logo'>
                <img src="{{ url('img/logo.png ') }}" alt="Logo">
            </a>
            <ul class="flex gap-[40px] text-[#424551] font-bold">
                <li class="">
                    <a href="#!" class="">Women</a>
                </li>
                <li>
                    <a href="#!" class="">Men</a>
                </li>
                <li>
                    <a href="#!" class="">Girls</a>
                </li>
                <li>
                    <a href="#!" class="">Boys</a>
                </li>
                <li class="text-[#FF4242]">
                    <a href="#!" class="">Sale</a>
                </li>
            </ul>
            <div class="max-w-[380px] flex relative">
                <input type="text" placeholder="Search for products..." class="w-[380px] px-[16px] py-[12px] border-1 border-[#D7DADD] rounded-[4px]">
                <button class="absolute top-[50%] translate-y-[-50%] right-[16px] cursor-pointer">
                    <img src="{{ url('img/search.svg') }}" alt="">
                </button>
            </div>
            <ul class="flex gap-[40px] font-normal">
                <li>
                    <a href="#!" class="flex items-center gap-[8px]">
                        <img src="{{ url('img/outline.svg') }}" alt="">
                        <span class="text-[#424551]">2</span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="flex items-center gap-[8px]">
                        <img src="{{ url("img/cart.png") }}" alt="">
                        <span class="bg-[#03CEA4] px-[8px] rounded-[4px] text-white">4</span>
                    </a>
                </li>
            </ul>
        </div>
    </x-container>
        <div class="py-[8px] bg-[#17696A]">
            <x-container>
                <div class="flex justify-center gap-[12px]">
                    <img src="{{ url("img/left-chevron.svg")}}" alt="Arrow" class="">
                    <h3 class="font-bold text-white">
                        Up to 70% Off.
                        <span class="font-normal underline-offset-1 underline">Shop our latest sale styles</span>
                    </h3>
                    <img src="{{ url("img/right-chevron.svg")}}" alt="Arrow" class="">
                </div>
            </x-container>
        </div>
</header>
