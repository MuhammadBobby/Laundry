<?php
if (isset($_GET['berhasil'])) {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Pesanan berhasil dimasukkan ke dalam keranjang'
        }
    )
    </script>";
} else if (isset($_GET['review'])) {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Review Berhasil Direkam',
        text: 'Terimakasih telah menilai laundry kami'
        }
    )
    </script>";
}

?>



<!-- start jumbotron -->
<section class="bg-center bg-no-repeat bg-[url('asset/img/bg-laundry.webp')] bg-gray-700 bg-blend-multiply bg-cover min-h-screen">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"><span class="text-cyan-500">OK Laundry</span>, Shuttle Every Day</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            <span class="underline">OK Laundry</span> adalah sebuah platform yang menyediakan jasa laundry. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus!
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#layanan" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 dark:focus:ring-sky-900">
                Laundry Now
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <a href="#how" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                See More
            </a>
        </div>
    </div>
</section>
<!-- end jumbotron -->

<!-- start layanan -->
<section id="layanan" class="py-20 max-w-7xl mx-auto px-8 text-center">
    <div class="text-center mb-8 max-w-xl m-auto">
        <h1 class="text-xl text-sky-800 font-extrabold md:text-5xl">Layanan Kami</h1>
        <p class="text-sm font-light text-slate-600 md:font-normal"><span class="text-sky-500 font-semibold">OK Laudry</span> punya 3 layanan yang dapat anda pilih. Sesuaikan layanan dengan kebutuhan anda ya😁</p>
    </div>

    <div class="flex flex-wrap gap-3 justify-center">
        <!-- layanan 1 -->
        <div class="w-full md:w-1/4 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between p-3">
            <div>
                <button data-modal-target="layanan-cuci-basah" data-modal-toggle="layanan-cuci-basah">
                    <img class="rounded-t-lg" src="asset/img/bersih.jpg" alt="product image" loading="lazy" />
                </button>

                <div class="px-5 py-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white md:text-3xl">Layanan Cuci Basah</h5>
                        <p class="text-xs font-light text-white">Layanan Cuci Basah adalah layanan yang paling basic dari OK Laundry. Layanan ini memberikan anda pengalaman mencuci tanpa harus khawatir kehabisan waktu dengan harga yang sangat terjangkau.</p>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="bg-sky-100 text-sky-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-sky-200 dark:text-sky-800 ms-3">5.0</span>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Rp. <span class="text-sky-500">10.000</span> / Kg</span>
                    <button data-modal-target="layanan-cuci-basah" data-modal-toggle="layanan-cuci-basah" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Add to cart</button>
                </div>
            </div>
        </div>

        <!-- layanan 2 -->
        <div class="w-full md:w-1/4 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between p-3">
            <div>
                <button data-modal-target="layanan-cuci-kering" data-modal-toggle="layanan-cuci-kering">
                    <img class="rounded-t-lg" src="asset/img/bersih.jpg" alt="product image" loading="lazy" />
                </button>

                <div class="px-5 py-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white md:text-3xl">Layanan Cuci Kering</h5>
                        <p class="text-xs font-light text-white">Layanan Cuci Kering menjadi BestSeller dalam OK Laundry. Menjadi pilihan terbaik bagi kalian yang ingin menjadikan pakaian kalian bersih tanpa harus memikirkan lagi untuk menjemur pakaian kalian. Dengan harga yang masih terjangkau, kalian bisa mendapatkan pakaian tanpa harus kebingungan mengeringkannya.</p>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="bg-sky-100 text-sky-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-sky-200 dark:text-sky-800 ms-3">5.0</span>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Rp. <span class="text-sky-500">15.000</span> / Kg</span>
                    <button data-modal-target="layanan-cuci-kering" data-modal-toggle="layanan-cuci-kering" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Add to cart</button>
                </div>
            </div>
        </div>

        <!-- layanan 3-->
        <div class="w-full md:w-1/4 bg-slate-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between p-3">
            <div>
                <button data-modal-target="layanan-kombo" data-modal-toggle="layanan-kombo">
                    <img class="rounded-t-lg" src="asset/img/bersih.jpg" alt="product image" loading="lazy" />
                </button>
                <div class="px-5 py-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white md:text-3xl">Layanan Cuci Kering + Setrika</h5>
                        <p class="text-xs font-light text-white">Layanan ini adalah layanan paling premium dari OK Laundry. Dengan layanan ini, pakaian bagus kalian akan terawat, bersih, wangi, hingga rapi dan mulus hingga kalian hanya perlu langsung memakainya. Layanan ini sangat direkomendasikan bagi kalian yang tidak ada waktu sama sekali untuk memikirkan pakaian kalian. serahkan pada kami dengan layanan premium kami, dan kamu hanya perlu memakainya.</p>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="bg-sky-100 text-sky-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-sky-200 dark:text-sky-800 ms-3">5.0</span>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Rp. <span class="text-sky-500">20.000</span> / Kg</span>
                    <button data-modal-target="layanan-kombo" data-modal-toggle="layanan-kombo" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Add to cart</butt>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- end layanan -->

<!-- start about -->
<section id="how" class="py-20 px-8 flex gap-5 justify-center items-center">
    <div class="hidden w-1/3 md:block">
        <img src="asset/img/keranjang.png" alt="basket" loading="lazy" class="w-full" />
    </div>
    <div class="w-full md:w-1/4">
        <h1 class="text-center text-xl font-extrabold tracking-wide text-slate-900 md:text-2xl py-8">Bagaimana Cara Kerjanya?</h1>
        <div class="flex justify-center items-center py-5 md:py-3">
            <div class="w-1/3">
                <i class="fa-solid fa-cart-plus text-sky-500 text-6xl"></i>
            </div>
            <div class="w-1/2">
                <h3 class="text-lg font-semibold md:text-xl">Pesan Laundry Anda</h3>
                <p class="text-sm font-light text-justify text-slate-700">Pesan laundry dengan mudah melalui platform kami. Dijamin <span class="text-cyan-300 font-bold">100%</span> aman.</p>
            </div>
        </div>
        <div class="flex justify-center items-center py-5 md:py-3">
            <div class="w-1/3">
                <i class="fa-solid fa-cart-plus text-sky-500 text-6xl"></i>
            </div>
            <div class="w-1/2">
                <h3 class="text-lg font-semibold md:text-xl">Pesan Laundry Anda</h3>
                <p class="text-sm font-light text-justify text-slate-700">Pesan laundry dengan mudah melalui platform kami. Dijamin <span class="text-cyan-300 font-bold">100%</span> aman.</p>
            </div>
        </div>
        <div class="flex justify-center items-center py-5 md:py-3">
            <div class="w-1/3">
                <i class="fa-solid fa-cart-plus text-sky-500 text-6xl"></i>
            </div>
            <div class="w-1/2">
                <h3 class="text-lg font-semibold md:text-xl">Pesan Laundry Anda</h3>
                <p class="text-sm font-light text-justify text-slate-700">Pesan laundry dengan mudah melalui platform kami. Dijamin <span class="text-cyan-300 font-bold">100%</span> aman.</p>
            </div>
        </div>
    </div>
</section>
<!-- end about -->


<!-- start reviews -->
<section id="reviews" class="py-36 px-8 md:py-48 bg-sky-900 relative">
    <!-- wave -->
    <div class="custom-shape-divider-top-1709721751">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="text-center mb-8">
        <p class="text-sm font-light text-white md:font-normal">Ingin lihat berbagai testimoni dan review customer kami yang merasa puas?</p>
        <h1 class="text-xl text-sky-200 font-extrabold md:text-5xl">Reviews Customer</h1>
    </div>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <?php
            $review = mysqli_query($conn, "SELECT r.*
            FROM review r
            JOIN (
                SELECT reviewer, MAX(bintang) AS highest_rating
                FROM review
                WHERE bintang BETWEEN 4 AND 5
                GROUP BY reviewer
            ) as max_rev ON r.reviewer = max_rev.reviewer AND r.bintang = max_rev.highest_rating
            ORDER BY r.reviewer, r.bintang DESC
            LIMIT 5;            
            ");
            while ($data = mysqli_fetch_array($review)) {
            ?>

                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex justify-center items-center h-full">
                        <div class="w-4/5 mx-auto p-5 bg-sky-200 border-2 border-slate-400 shadow-md rounded-md md:w-1/2">
                            <div class="flex justify-between items-center md:justify-start">
                                <h1 class="text-lg font-bold text-slate-600"><?= $data['reviewer'] ?></h1>
                                <div class="text-xs text-yellow-500 ms-5 text-right md:text-sm md:text-left">
                                    <?php for ($i = 0; $i < $data['bintang']; $i++) { ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php } ?>
                                    <p class="mt-1">(<?= $data['bintang'] ?>) <span class="text-slate-600"><?= $data['tanggal'] ?></span></p>
                                </div>
                            </div>

                            <p class="text-xs font-medium mt-3 text-justify md:text-base text-summary"><?= $data['review'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="flex justify-center items-center h-full">
                    <div class="w-4/5 mx-auto p-5 bg-sky-200 border-2 border-slate-400 shadow-md rounded-md md:w-1/2">
                        <div class="flex justify-between items-center md:justify-start">
                            <img src="asset/img/keranjang-kotor.jpg" alt="reviewer" class="w-10 rounded-full md:w-20" loading="lazy" />
                            <div class="text-xs text-yellow-500 ms-5 text-right md:text-sm md:text-left">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <p class="mt-1">(4.5) <span class="text-slate-600">01/01/2024</span></p>
                            </div>
                        </div>

                        <p class="text-xs font-medium mt-3 text-justify md:text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis debitis neque quaerat possimus non vero iste voluptatibus fugit</p>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- wave -->
    <div class="custom-shape-divider-bottom-1709721933">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
<!-- end reviews -->

<!-- start benefit -->
<section id="benefit" class="py-20 max-w-7xl mx-auto px-8 text-center">
    <h1 class="text-xl font-extrabold md:text-4xl">Benefit Laundry di <span class="text-sky-500">OK Laundry</span></h1>
    <p class="text-sm font-light text-slate-700 md:font-normal">Kamu ingin tau apa aja yang bakal kamu dapatkan dari laundry kami?</p>
    <div class="flex flex-wrap items-center justify-center py-10 md:gap-3">
        <!-- first -->
        <div class="w-2/3 bg-slate-100 border-2 border-slate-300 rounded-md shadow-md md:w-1/4 my-3">
            <img src="asset/img/bersih.jpg" alt="1" class="object-cover" loading="lazy" />
            <div class="p-3 md:px-10">
                <h3 class="text-lg font-bold py-3 leading-5 md:text-xl">Pengalaman Layanan <span class="text-sky-800">Terbaik</span></h3>
                <p class="text-sm font-extralight text-slate-700">Pengalaman terbaik akan kami berikan kepada anda dan pakaian anda. Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <!-- second -->
        <div class="w-2/3 bg-slate-100 border-2 border-slate-300 rounded-md shadow-md md:w-1/4 my-3">
            <img src="asset/img/bersih.jpg" alt="1" class="object-cover" loading="lazy" />
            <div class="p-3 md:px-10">
                <h3 class="text-lg font-bold py-3 leading-5 md:text-xl">Pengalaman Layanan <span class="text-sky-800">Terbaik</span></h3>
                <p class="text-sm font-extralight text-slate-700">Pengalaman terbaik akan kami berikan kepada anda dan pakaian anda. Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <!-- third -->
        <div class="w-2/3 bg-slate-100 border-2 border-slate-300 rounded-md shadow-md md:w-1/4 my-3">
            <img src="asset/img/bersih.jpg" alt="1" class="object-cover" />
            <div class="p-3 md:px-10">
                <h3 class="text-lg font-bold py-3 leading-5 md:text-xl">Pengalaman Layanan <span class="text-sky-800">Terbaik</span></h3>
                <p class="text-sm font-extralight text-slate-700">Pengalaman terbaik akan kami berikan kepada anda dan pakaian anda. Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>
    </div>
</section>
<!-- end benefit -->

<!-- feed back -->
<section class="py-20 max-w-5xl px-8 mx-auto">
    <div class="text-center">
        <h1 class="font-bold text-3xl text-gray-800 md:text-5xl ">Masukan & Review</h1>
        <p class="font-light text-slate-600 text-xs md:text-sm">Berikan masukan dan Review anda untuk kami agar kami dapat berkembang menjadi lebih baik.</p>
    </div>

    <?php
    $username = $_SESSION['user'];
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    ?>

    <form action="function/review.php" method="POST">

        <div class="flex my-5">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md ">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
            </span>
            <input type="text" id="reviewer" name="reviewer" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 " value="<?= $user ? $user['nama'] : 'Jhon Doe' ?>" readonly>
        </div>

        <div class="flex my-5">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md ">
                <i class="fa-solid fa-star text-gray-500"></i>
            </span>
            <input type="number" min="0" max="5" id="bintang" name="bintang" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 " placeholder="Rating" reaquired>
        </div>

        <textarea id="review" name="review" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Masukan/Saran/Review..." required></textarea>

        <button type="submit" class="text-white my-5 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
    </form>

    <p class="font-light">... atau isi form feedback melalui link dibawah ini. semua feedback anda sangat membantu kami. <span class="font-bold">TERIMA KASIH 🙏</span></p>
    <a href="" class="text-blue-500 underline">&rarr; Google Form</a>
</section>
<!-- end feed back -->





<!-- layanan modal -->
<!-- modal layanan-cuci-basah -->
<!-- Main modal -->
<div id="layanan-cuci-basah" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Masukkan data pemesanan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="layanan-cuci-basah">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="function/proses.php" method="POST">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama layanan</label>
                        <input type="text" name="layanan" id="layanan" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="Layanan Cuci Basah" readonly>
                    </div>
                    <div class="col-span-2">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga perkilo</label>
                        <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="10000" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="berat" class="block text-sm font-medium text-gray-900 dark:text-white">Berat barang</label>
                        <p class="text-sm font-light text-red-500  mb-2">*max 20kg</p>
                        <input type="number" name="berat" id="berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:text-white dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="1" min="1" max="20" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal & waktu pengambilan</label>
                        <input type="datetime-local" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div class="col-span-2">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                        <textarea id="catatan" name="catatan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan catatan untuk kami..."></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add to cart
                </button>
            </form>
        </div>
    </div>
</div>
<!-- modal layanan-cuci-kering -->
<!-- Main modal -->
<div id="layanan-cuci-kering" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Masukkan data pemesanan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="layanan-cuci-kering">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="function/proses.php" method="POST">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama layanan</label>
                        <input type="text" name="layanan" id="layanan" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="Layanan Cuci Kering" readonly>
                    </div>
                    <div class="col-span-2">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga perkilo</label>
                        <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="15000" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="berat" class="block text-sm font-medium text-gray-900 dark:text-white">Berat barang</label>
                        <p class="text-sm font-light text-red-500  mb-2">*max 20kg</p>
                        <input type="number" name="berat" id="berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:text-white dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="1" min="1" max="20" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal & waktu pengambilan</label>
                        <input type="datetime-local" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div class="col-span-2">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                        <textarea id="catatan" name="catatan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan catatan untuk kami..."></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add to cart
                </button>
            </form>
        </div>
    </div>
</div>
<!-- modal layanan-kombo -->
<!-- Main modal -->
<div id="layanan-kombo" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Masukkan data pemesanan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="layanan-kombo">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="function/proses.php" method="POST">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama layanan</label>
                        <input type="text" name="layanan" id="layanan" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="Layanan Cuci Kering + Setrika" readonly>
                    </div>
                    <div class="col-span-2">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga perkilo</label>
                        <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-sky-600 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="20000" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="berat" class="block text-sm font-medium text-gray-900 dark:text-white">Berat barang</label>
                        <p class="text-sm font-light text-red-500  mb-2">*max 20kg</p>
                        <input type="number" name="berat" id="berat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:text-white dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" value="1" min="1" max="20" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal & waktu pengambilan</label>
                        <input type="datetime-local" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div class="col-span-2">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                        <textarea id="catatan" name="catatan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan catatan untuk kami..."></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add to cart
                </button>
            </form>
        </div>
    </div>
</div>
<!-- end layanan modal -->