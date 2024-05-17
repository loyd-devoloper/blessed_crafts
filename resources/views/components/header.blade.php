<div class="px-4 lg:px-10 xl:px-0  h-[5rem] max-h-[5rem] border fixed top-0 w-full z-10 bg-white">
    <header class=" h-full max-w-screen-xl mx-auto  ">

        <div class="grid grid-cols-3 items-center  h-full   w-full ">
            <div class="grid grid-cols-4 items-center h-full gap-3 w-fit">
                <a href=""
                    class="text-sm tracking-wide  h-full flex items-center justify-center  {{ request()->routeIs('home') ? 'border-b-4 border-Mainpink text-Mainpink font-bold mt-[4px]' : '' }} ">HOME</a>
                <a href=""
                    class="text-sm tracking-wide font-medium h-full flex  items-center justify-center  hover:text-Mainpink {{ request()->routeIs('product') ? 'border-b-4 border-Mainpink text-Mainpink font-bold mt-[4px]' : 'opacity-70' }}">PRODUCTS</a>
                <a href=""
                    class="text-sm tracking-wide font-medium h-full flex  items-center justify-center {{ request()->routeIs('product') ? 'border-b-4 border-Mainpink text-Mainpink font-bold mt-[4px]' : 'opacity-70' }}">ABOUT</a>
                <a href=""
                    class="text-sm tracking-wide font-medium h-full flex  items-center justify-center {{ request()->routeIs('product') ? 'border-b-4 border-Mainpink text-Mainpink font-bold mt-[4px]' : 'opacity-70' }}">CONTACT</a>
            </div>
            <h1 class="font-bold font-serif text-2xl text-center  text-Mainpink ">Blessed Crafts</h1>
            <div class="flex justify-end items-center gap-4  ">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                </a>
            </div>
        </div>
    </header>

</div>
