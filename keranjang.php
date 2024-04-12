<?php
session_start();
require 'function/connect.php';

if (!isset($_SESSION['login'])) {
    header('Location: auth/login.php');
    exit;
}

$result = query("SELECT * FROM user WHERE username = '$_SESSION[user]'");
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ok Laundry</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- mycss -->
    <link rel="stylesheet" href="asset/style.css" />
    <!-- flowbite-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- font awesome : icons -->
    <script src="https://kit.fontawesome.com/22f19496c5.js" crossorigin="anonymous"></script>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="font-[Poppins]">
    <!-- Start Navbar -->
    <nav class="bg-white bg-opacity-75 backdrop-blur-sm fixed w-full z-50 top-0 start-0 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" loading="lazy" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">OK Laundry</span>
            </a>

            <div class="flex gap-2 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                <?php
                if (isset($_SESSION['user']) && isset($_SESSION['login'])) {
                ?>
                    <a href="function/logout.php" class="text-white hidden md:block bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center pt-3">LOGOUT</a>
                <?php } else { ?>

                    <a href="auth/login.php" class="text-white hidden md:block bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 text-center pt-3">SIGN IN</a>

                    <a href="auth/register.php" class="hidden md:block text-slate-700 bg-white border-2 border-slate-500 hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-sky-300 font-bold rounded-lg text-sm px-4 py-2 text-center pt-3"> SIGN UP </a>

                <?php } ?>

                <a href="keranjang.php">
                    <div class="flex justify-center items-center border-2 border-slate-500 rounded-full max-h-10 max-w-10 p-5 px-6">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="px-2 font-bold">0</span>
                    </div>
                </a>

                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0" id="nav">
                    <li>
                        <a href="index.php#" class="nav-item block py-2 px-3 text-lg font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="index.php#layanan" class="nav-item block py-2 px-3 text-lg font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0">Services</a>
                    </li>
                    <li>
                        <a href="index.php#how" class="nav-item block py-2 px-3 text-lg font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0">How</a>
                    </li>
                    <li>
                        <a href="index.php#reviews" class="nav-item block py-2 px-3 text-lg font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0">Reviews</a>
                    </li>
                    <li>
                        <a href="index.php#benefit" class="nav-item block py-2 px-3 text-lg font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0">Benefit</a>
                    </li>
                    <li>
                        <a href="auth/login.php" class="block bg-sky-700 text-white md:hidden py-2 px-3 text-lg font-bold rounded hover:bg-gray-200 md:hover:bg-transparent  md:hover:text-sky-700 md:p-0 ">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <section class="py-32 bg-gradient-to-r from-indigo-500 via-teal-500 to-blue-500">
        <div class="container mx-auto px-8 lg:px-32 bg-transparent">
            <h1 class="text-3xl font-bold text-white mb-8">Keranjang</h1>
            <div class="shadow-xl rounded-md bg-white">

                <!-- item -->
                <?php foreach ($result as $row) : ?>
                    <div class="flex justify-between p-5 px-10 items-center">
                        <div id="main" class="w-full flex items-center gap-3">
                            <img src="asset/img/keranjang.png" class="rounded-sm h-20 w-auto lg:h-24" alt="">
                            <div>
                                <h3 class="text-lg font-semibold lg:text-xl lg:font-bold">Cuci Kering</h3>
                                <p class="text-sm font-light lg:text-base">Rp.15000 x 2 kg</p>
                            </div>
                        </div>
                        <p class="text-xl font-bold lg:text-2xl">Rp.30000</p>
                    </div>
                    <hr>

                    <!-- total -->
                    <div class="flex justify-between p-5 px-10 items-center">
                        <p class="text-lg font-bold lg:text-xl">Total Harga</p>
                        <p class="text-xl font-bold lg:text-2xl">Rp.30000</p>
                    </div>


                    <form class="space-y-4 px-10 py-10 md:px-32  md:space-y-6" action="" method="POST">
                        <h3 class="text-lg font-medium">Data Diri :</h3>

                        <div class="relative m-0">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-person"></i>
                            </div>
                            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" value="<?= $row["nama"] ?>">
                        </div>

                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <input type="text" id="alamat" name="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" value="<?= $row["alamat"] ?>">
                        </div>

                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <i class="fa-solid fa-address-book"></i>
                            </div>
                            <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" value="<?= $row["kontak"] ?>">
                        </div>

                    <?php endforeach; ?>

                    <button type="submit" class="w-fit text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Checkout</button>


                    <a href="index.php#layanan" class="block text-sm font-medium text-sky-600 hover:underline">&lt;&lt; Kembali ke Home</a>
                    </form>

            </div>
        </div>
    </section>

    <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- my script -->
    <script src="asset/navbar.js"></script>
</body>

</html>