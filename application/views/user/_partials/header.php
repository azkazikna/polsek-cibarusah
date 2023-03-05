<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/dist/img/polisi-ri.png" />
    <title>Beranda | Control Command Center Polsek Cibarusah</title>

    <!-- Font Awesome 5 -->
    <script src="https://kit.fontawesome.com/27e42df87e.js" crossorigin="anonymous"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Modal -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/modal.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/output.css">
    <?php if($this->uri->segment(2) == 'informasi') : ?>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="<?= base_url() ?>dist/css/swiper.css" />
    <?php endif; ?>
    <script>
        function read_more() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("btn_more");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Selengkapnya";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Sembunyikan";
                moreText.style.display = "inline";
            }
        }
    </script>
    <style>
        body:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.085;
            background-image: url('<?= base_url() ?>/dist/img/bg.png');
            background-position: 50% 0;
            background-size: contain;
            z-index: -9999;
        }

        @media only screen and (max-width: 1024px) and (min-width: 640px)  {
            body:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.085;
            background-image: url('<?= base_url() ?>/dist/img/bg-big.png');
            background-position: 50% 0;
            background-size: contain;
            z-index: -9999;
            }
        }
        
        @media only screen and (min-width: 1024px)  {
            body:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.085;
            background-image: url('<?= base_url() ?>/dist/img/bg-very-big.png');
            background-position: 50% 0;
            background-size: contain;
            z-index: -9999;
            }
        }
    </style>
</head>

<body class="font-quicksand bg-[#f7f7f7] relative">
    <!-- Header Start -->
    <header
        class="bg-cover md:bg-top absolute top-0 left-0 w-full flex items-center justify-evenly z-index-10 transition duration-500 py-5 lg:py-4"
        style="background-image: url('<?= base_url() ?>/dist/img/bg-pattern.png');">
        <div class="container max-w-screen-xl lg:px-7">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="<?= base_url() ?>" class="flex items-center">
                        <img src="<?= base_url() ?>/dist/img/logo.png" alt="" class="w-32 lg:w-48">
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="buton" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white backdrop-blur-sm shadow-lg rounded-b-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:backdrop-blur-0 lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none z-[999] mt-5 lg:mt-0">
                        <ul class="block lg:flex">
                            <li class="group" id="subnav"><a href="<?= base_url() ?>"
                                    class="text-sm lg:text-base text-gray-700 lg:text-white font-medium py-2 mx-8 flex transition duration-500 ease-in-out">Beranda</a>
                            </li>
                            <li class="group" id="subnav"><a href="<?= base_url('user/informasi') ?>"
                                    class="text-sm lg:text-base text-gray-700 lg:text-white font-medium py-2 mx-8 flex transition duration-500 ease-in-out">Informasi</a>
                            </li>
                            <hr class="text-dark mt-5 mb-2 lg:hidden">
                            <?php if(!$profile_user) { ?>
                            <li class="group" id="subnav"><a href="<?= base_url('auth') ?>"
                                    class="text-sm text-gray-700 font-medium py-2 justify-center flex transition duration-500 ease-in-out lg:hidden">Masuk</a>
                            </li>
                            <li class="group" id="subnav"><a href="<?= base_url('auth/daftar') ?>"
                                    class="text-sm font-medium text-white px-4 py-2 bg-primary shadow-lg lg:hidden mx-8 my-2 block rounded-sm text-center">Daftar
                                    Baru</a></li>
                            <?php } else { ?>
                                <li class="text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium w-full rounded-lg text-sm px-4 py-2.5 text-center inline-flex md:hidden items-center">
                                    <div class="flex items-center gap-2">
                                        <img src="<?= base_url('upload/profil/') . $profile_user[0]->image ?>" alt="" class="w-8 h-8 rounded-full shadow-md border-2 border-[#f7f7f7] object-cover object-top">
                                        <div class="flex flex-col justify-start">
                                            <p class="text-gray-700 font-medium">Hai, <?= $profile_user[0]->nama_depan; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?= base_url('user/riwayat/') . $this->session->userdata('id_user2') ?>" class="block py-2 hover:bg-gray-100 text-gray-700 text-sm mx-8 lg:hidden"><i class="fa-solid fa-clock-rotate-left"></i>&nbsp; Riwayat</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 hover:bg-gray-100 text-gray-700 text-sm mx-8 lg:hidden"><i class="fa-solid fa-gear"></i>&nbsp; Pengaturan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('auth/logout') ?>" class="block py-2 hover:bg-gray-100 text-red-500 text-sm mx-8 lg:hidden"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Keluar</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <?php if(!$profile_user) { ?>
                <div class="lg:flex items-center gap-10 hidden">
                    <a href="<?= base_url('auth') ?>" class="text-base font-medium text-white">Masuk</a>
                    <a href="<?= base_url('auth/daftar') ?>"
                        class="text-base font-medium text-bgdarken px-4 py-2 bg-white shadow-lg rounded-full">Daftar
                        Baru</a>
                </div>
                <?php } else { ?>
                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center hidden lg:inline-flex items-center" type="button">
                <div class="flex items-center gap-2">
                    <img src="<?= base_url('upload/profil/') . $profile_user[0]->image ?>" alt="" class="w-8 h-8 rounded-full shadow-md border-2 border-white object-cover object-top">
                    <div class="flex flex-col justify-start">
                        <p class="text-white font-medium">Hai, <?= $profile_user[0]->nama_depan; ?></p>
                    </div>
                </div>
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDividerButton">
                    <?php if($this->session->userdata('id_admin')) { ?>
                    <li>
                        <a href="<?= base_url('admin') ?>" class="block px-4 py-2 hover:bg-gray-100"><i class="fa fa-tachometer"></i>&nbsp; Dashboard</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?= base_url('user/riwayat/') . $this->session->userdata('id_user2') ?>" class="block px-4 py-2 hover:bg-gray-100"><i class="fa-solid fa-clock-rotate-left"></i>&nbsp; Riwayat</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100"><i class="fa-solid fa-gear"></i>&nbsp; Pengaturan</a>
                    </li>
                    </ul>
                    <div class="py-2">
                    <a href="<?= base_url('auth/logout') ?>" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Keluar</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </header>
    <!-- Header End -->
