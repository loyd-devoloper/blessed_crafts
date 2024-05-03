@assets
@endassets
<div x-data="dropdown">
    {{-- header --}}
    <x-header />

    {{-- swiper --}}
    <section class="mt-[5rem]">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper max-h-[80svh]">
                <!-- Slides -->
                <div class="swiper-slide object cover"><img
                        src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2Fba783468-1ef0-4b4c-882f-6492fd0952c0.jpeg&w=3840&q=75"
                        alt=""></div>
                <div class="swiper-slide object cover"><img
                        src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2Fba783468-1ef0-4b4c-882f-6492fd0952c0.jpeg&w=3840&q=75"
                        alt=""></div>
                <div class="swiper-slide object cover"><img
                        src="https://blessed-crafts.shopboxo.io/_next/image?url=https%3A%2F%2Fshopboxo-media.s3.amazonaws.com%2Fmedia%2Fecommerce%2Fproducts%2Fba783468-1ef0-4b4c-882f-6492fd0952c0.jpeg&w=3840&q=75"
                        alt=""></div>


            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>
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
