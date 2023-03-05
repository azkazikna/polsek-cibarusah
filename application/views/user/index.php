<!-- Map and Jumbotron Start -->
<div class="h-[23vh] md:h-30v w-full bg-cover md:bg-top"
    style="background-image: url('<?= base_url() ?>/dist/img/bg-pattern.png');">
</div>
<div class="w-full mt-[-95px] md:mt-[-150px] overflow-hidden flex justify-center">
    <div class="gmap_canvas"><iframe class="min-w-[90vw] md:w-[80vw] md:max-w-xl h-[150px] md:h-[300px] rounded-t-xl" id="gmap_canvas"
            src="https://maps.google.com/maps?q=SMK%20PLUS%20PELITA%20NUSANTARA&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <div class="flex justify-between p-2 font-semibold bg-white rounded-b-xl text-sm shadow-md text-secondary">
            <a href="" class="text-text text-xs md:text-sm">Info Lokasi Rawan</a>
            <a href="" class="text-text text-xs md:text-sm">SELENGKAPNYA</a>
        </div>
        <br>
    </div>
</div>
<!-- Map and Jumbotron End -->

<!-- flashData Start -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
<div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
<!-- flashData End -->

<!-- Layanan Start -->
<section id="layanan" class="pt-5 lg:pt-12">
    <div class="container max-w-screen-xl px-6 md:px-14 2xl:px-0 mx-auto">
        <h5 class="font-bold text-base md:text-xl lg:text-2xl text-text">Layanan Control Command Center Polsek
            Cibarusah
        </h5>
        <p class="mt-2 text-sm md:text-base">Pilih layanan yang Anda butuhkan</p>
        <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-7 xl:grid-cols-8 mt-5 content-center gap-8 lg:gap-10">
            <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                data-micromodal-trigger="modal-darurat" href="javascript:;">
                <img src="<?= base_url() ?>/dist/img/panggilan-darurat.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">Panggilan Darurat</p>
            </a>
            <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                data-micromodal-trigger="modal-laporan" href="javascript:;">
                <img src="<?= base_url() ?>/dist/img/buat-laporan.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">Buat Laporan</p>
            </a>
            <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                data-micromodal-trigger="modal-skck" href="javascript:;">
                <img src="<?= base_url() ?>/dist/img/skck.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">SKCK</p>
            </a>
            <button data-popover-target="popover-animation" data-popover-trigger="click"
                class="text-center flex flex-col justify-between hover:brightness-75 transition">
                <img src="<?= base_url() ?>/dist/img/tilang.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">Lalu Lintas</p>
            </button>
            <!-- Popover Lalu Lintas -->
            <div data-popover id="popover-animation" role="tooltip"
                class="absolute bg-[#f7f7f7] z-10 invisible inline-block text-sm md:text-base transition-opacity duration-300 border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div
                    class="px-3 py-2 bg-primary border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-sm md:text-base uppercase text-white">Layanan Satlantas</h3>
                </div>
                <p class="text-sm md:text-base px-3 py-2">Pilih layanan SATLANTAS yang anda butuhkan</p>
                <div class="px-3 pb-2 grid grid-cols-4 md:grid-cols-6 lg:grid-cols-7 xl:grid-cols-8 mt-5 content-center gap-8 lg:gap-10">
                    <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                    data-micromodal-trigger="modal-skck" href="javascript:;">
                        <img src="<?= base_url() ?>/dist/img/stnk.svg" alt="">
                        <p class="font-bold mt-2 text-text text-sm md:text-base">STNK</p>
                    </a>
                    <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                    data-micromodal-trigger="modal-skck" href="javascript:;">
                        <img src="<?= base_url() ?>/dist/img/sim.svg" alt="">
                        <p class="font-bold mt-2 text-text text-sm md:text-base">SIM</p>
                    </a>
                    <a class="text-center flex flex-col justify-between hover:brightness-75 transition"
                    data-micromodal-trigger="modal-skck" href="javascript:;">
                        <img src="<?= base_url() ?>/dist/img/tilang.svg" alt="">
                        <p class="font-bold mt-2 text-text text-sm md:text-base">Tilang</p>
                    </a>
                </div>
                <div data-popper-arrow></div>
            </div>
            <a class="text-center flex flex-col justify-between hover:brightness-75 transition" href="">
                <img src="<?= base_url() ?>/dist/img/izin-keramaian.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">Izin Keramaian</p>
            </a>
            <a class="text-center flex flex-col justify-between hover:brightness-75 transition" href="">
                <img src="<?= base_url() ?>/dist/img/laporan-kehilangan.svg" alt="">
                <p class="font-bold mt-2 text-text text-sm md:text-base">Laporan Kehilangan</p>
            </a>
        </div>
    </div>
</section>
<!-- Layanan End -->

<!-- Informasi Start -->
<section id="informasi" class="pt-10 lg:pt-24">
    <div class="container max-w-screen-xl px-6 md:px-14 2xl:px-0  mx-auto">
        <h5 class="font-bold text-base md:text-xl lg:text-2xl text-text">Apa yang baru?</h5>
        <p class="mt-2 text-sm md:text-base">Informasi terbaru seputar Cibarusah</p>
        <div class="grid lg:grid-cols-2 gap-4 mt-5">
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">SuaraBekaci.id - Pembangunan Jalan
                            Cikarang-Cibarusah...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_jalan_cibarusah.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">BEKASI, KOMPAS.com - Setidaknya 11 bangunan liar
                            yan...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_satpol_pp.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">SuaraBekaci.id - Pembangunan Jalan
                            Cikarang-Cibarusah...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_jalan_cibarusah.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">BEKASI, KOMPAS.com - Setidaknya 11 bangunan liar
                            yan...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_satpol_pp.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">SuaraBekaci.id - Pembangunan Jalan
                            Cikarang-Cibarusah...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_jalan_cibarusah.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">BEKASI, KOMPAS.com - Setidaknya 11 bangunan liar
                            yan...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_satpol_pp.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">SuaraBekaci.id - Pembangunan Jalan
                            Cikarang-Cibarusah...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_jalan_cibarusah.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">BEKASI, KOMPAS.com - Setidaknya 11 bangunan liar
                            yan...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_satpol_pp.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">SuaraBekaci.id - Pembangunan Jalan
                            Cikarang-Cibarusah...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_jalan_cibarusah.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
            <a href=""
                class="w-full bg-white rounded-xl px-5 py-3 gap-3 flex justify-between border-[0.5px] border-opacity-20 border-dark group shadow-sm">
                <div class="text flex flex-col justify-between">
                    <div class="">
                        <h1 class="text-base md:text-lg font-bold text-text group-hover:text-bgdarken transition">
                            Pembangunan Jalan Cikarang-Cibarusah Belum Rampung
                        </h1>
                        <p class="text-sm md:text-base">BEKASI, KOMPAS.com - Setidaknya 11 bangunan liar
                            yan...</p>
                    </div>
                    <p class="text-dark text-xs md:text-sm mt-2"><i class="fa-regular fa-clock"></i> 19 February
                        2023 - 17:00
                        WIB
                    </p>
                </div>
                <img src="<?= base_url() ?>/dist/img/berita_satpol_pp.jpg" alt=""
                    class="rounded-xl w-4/12 lg:w-3/12 object-cover">
            </a>
        </div>
    </div>
</section>
<!-- Informasi End -->