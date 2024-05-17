@assets
@endassets
<div x-data="dropdown">
    {{-- header --}}
    <x-header />

    {{-- swiper --}}
    <section class="mt-[5rem]">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper max-h-[70svh]">
                <!-- Slides -->
                <div class="swiper-slide object-cover"><img
                        src="{{ asset('assets/carousel/anthony-ievlev-nbgFgBdLQgE-unsplash.jpg') }}" alt=""></div>
                <div class="swiper-slide object-cover"><img
                        src="{{ asset('assets/carousel/prasanta-kr-dutta-KJUHnIhRKsE-unsplash.jpg') }}" alt="">
                </div>
                <div class="swiper-slide object-cover"><img
                        src="{{ asset('assets/carousel/tamara-malaniy-nBpJsP2WUhU-unsplash.jpg') }}" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>

    {{-- Best Seller --}}
    <section class="mt-[5rem]">
        <h1 class="flex items-center text-3xl font-bold font-serif mx-auto w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-11 h-w-11 text-green-400 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
            </svg>
            BEST SELLER
        </h1>

        <main class="grid grid-cols-4 gap-10 max-w-screen-xl mx-auto py-20">
            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F4bc9db6c-43ef-4ccf-b92d-333311d01288.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </main>
    </section>


    {{-- Best Seller --}}
    <section class="mt-[5rem]">
        <h1 class="flex items-center text-3xl font-bold font-serif mx-auto w-fit">
            LATEST PRODUCT
        </h1>

        <main class="grid grid-cols-4 gap-10 max-w-screen-xl mx-auto py-20">
            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="{{ route('product.view',['name'=>urlencode('dsadlakjdlakd dsaldkal dsa')]) }}">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F2fae6828-c7f4-4d05-9ff6-50e528f8ca1e.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="space-y-2 hover:scale-105 transition-all ease-in-out duration-500">

                <a href="">
                    <img src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2F4bc9db6c-43ef-4ccf-b92d-333311d01288.jpeg&w=3840&q=75"
                        class="rounded-t" alt="">
                </a>
                <a href="" class="font-semibold hover:underline">Daisy Flower Keychains With Name</a>
                <h2 class="opacity-90">₱100</h2>
                <div class="flex justify-end">
                    <button
                        class="flex items-center gap-2 opacity-50 px-4 py-2 hover:opacity-100  transition-all ease-linear duration-300 ">
                        Add to Cart
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </main>
    </section>

    {{-- footer --}}
    <x-footer />
</div>
@script
    <script>
        Alpine.data('dropdown', () => ({
            open: false,
            toggle() {
                this.open = !this.open
            },
            init() {
                const swiper = new Swiper('.swiper', {
                    direction: 'horizontal',
                    loop: true,



                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },


                });

            }
        }))
    </script>
@endscript
