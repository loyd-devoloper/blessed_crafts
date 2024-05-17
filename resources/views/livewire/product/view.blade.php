@assets
@endassets
<div x-data="dropdown" >
    {{-- header --}}
    <x-header />

    {{-- product section --}}
    <section class="mt-[5rem] bg-gray-100">
        <div class="max-w-screen-xl mx-auto py-20">
            <div class="grid grid-cols-3  p-6 border bg-white">
                <div class="w-full col-span-2 p-2">
                    <img src="{{ asset('assets/carousel/tamara-malaniy-nBpJsP2WUhU-unsplash.jpg') }}" class="w-full rounded " alt="">
                </div>
                <div class="w-full px-4">
                   <h1 class="text-xl" >Daisy Flower Keychains With Name</h1>
                   <h2 class="font-bold">₱149</h2>
                   <hr class="my-4">
                    <h2 class="opacity-55">Color: red</h2>
                    <div class="flex flex-wrap gap-2 items-center mt-2">
                       <button class="w-7 h-7 bg-red-600 rounded-full p-2 border-4 border-gray-200 focus:ring-[2px] ring-black"></button>
                       <button class="w-7 h-7 bg-green-600 rounded-full p-2 border-4 border-gray-200"></button>
                    </div>

                    <h2 class="mt-4 opacity-55">custom</h2>
                    <div  class="flex flex-wrap gap-2 items-center mt-2">
                      <button class="px-8 py-1 rounded-2xl border">Silver</button>
                      <button class="px-8 py-1 rounded-2xl border">Gold</button>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- footer --}}
    <x-footer  class=""/>
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
