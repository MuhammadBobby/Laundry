<?php
include 'config.php';
// Set lokal ke Indonesia
setlocale(LC_TIME, 'id_ID.utf8');
session_start();
require 'function/connect.php';

if (!isset($_SESSION['login'])) {
    header('Location: auth/login.php');
    exit;
}

$result = query("SELECT *, transaksi.id as idTransaksi FROM transaksi JOIN user ON transaksi.user = user.username WHERE user = '$_SESSION[user]' && status = 'pending'");
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

    <!-- midtrans payment -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-swwccgD0Jfc-pvk-"></script>

    <!-- ajax jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="font-[Poppins]">
    <?php
    if (isset($_GET['berhasil'])) :
    ?>
        <script>
            Swal.fire({
                title: "Berhasil Menghapus Item!",
                icon: "success"
            });
        </script>
    <?php endif; ?>


    <?php include 'navbar.php'; ?>


    <section class="py-32 bg-gradient-to-r from-indigo-500 via-teal-500 to-blue-500">
        <div class="container mx-auto px-8 lg:px-32 bg-transparent">
            <h1 class="text-3xl font-bold text-white mb-8">Keranjang</h1>
            <div class="shadow-xl rounded-md bg-white">

                <!-- item -->
                <?php

                foreach ($result as $row) : ?>
                    <div class="flex justify-between p-5 px-10 items-center">
                        <div id="main" class="flex items-center gap-3">
                            <img src="asset/img/keranjang.png" class="rounded-sm h-20 w-auto lg:h-24" alt="">
                            <div>
                                <h3 class="text-lg font-semibold lg:text-xl lg:font-bold"><?= $row["name"] ?></h3>
                                <p class="text-sm font-light lg:text-base">Rp <?= number_format($row['price'], 0, ',', '.'); ?> x <?= $row["quantity"] ?> kg</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-5">
                            <p class="text-xl font-medium">Rp <?= number_format($row['total'], 0, ',', '.'); ?></p>
                            <a href="function/remove-item.php?id=<?= $row['idTransaksi'] ?>" class="text-red-500 text-xl" onclick="return confirm('Apakah kamu yakin ingin menghapus item ini?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>

                <!-- total -->
                <?php
                $totalHarga = "SELECT SUM(total) as totalHarga FROM transaksi WHERE user = '$_SESSION[user]' && status = 'pending'";
                $total = query($totalHarga);
                ?>
                <div class="flex justify-between p-5 px-10 items-center">
                    <p class="text-lg font-bold lg:text-xl">Total Harga</p>
                    <p class="text-xl font-bold lg:text-2xl">Rp <?= number_format($total[0]["totalHarga"], 0, ',', '.'); ?></p>
                </div>


                <?php if ($result) : ?>
                    <form class="space-y-4 px-10 py-10 md:px-32  md:space-y-6" id="payment-form">
                        <h3 class="text-lg font-medium">Data Diri :</h3>
                        <p class="text-xs font-light md:text-sm">Silahkan lengkapi data diri untuk proses pemesanan</p>

                        <?php
                        $json = json_encode($result);
                        ?>

                        <input type="hidden" name="layanan" id="layanan" value='<?= htmlspecialchars($json); ?>'>
                        <input type="hidden" name="total" id="total" value="<?= $total[0]["totalHarga"] ?>">
                        <input type="hidden" name="user" id="user" value="<?= $_SESSION["user"] ?>">

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
                            <input type="text" id="kontak" name="kontak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" value="<?= $row["kontak"] ?>">
                        </div>

                        <button type="button" id="pay-button" class="w-fit text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Checkout</button>

                        <a href="index.php#layanan" class="block text-sm font-medium text-sky-600 hover:underline">&lt;&lt; Lanjutkan Pemesanan layanan</a>
                    </form>

                <?php else : ?>
                    <div class="py-20">
                        <h1 class="text2xl font-bold text-red-500 text-center md:text-3xl">Keranjang Kosong</h1>
                        <a href="index.php#layanan" class="block text-center mt-5 text-sm font-medium text-sky-600 hover:underline">&lt;&lt; Lanjutkan Pemesanan layanan</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Modal toggle -->
    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="fixed text-xl bottom-10 right-10 text-cyan-500 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full px-5 py-4 text-center md:text-3xl" title="Riwayat Pemesanan" type="button">
        <i class="fa-solid fa-clock-rotate-left"></i>
    </button>


    <?php include 'footer.php' ?>





    <!-- modal -->

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Riwayat Pemesanan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="relative sm:rounded-lg overflow-x-hidden">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500  rounded-md">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Layanan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal & Waktu
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Berat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $riwayat = query("SELECT * FROM transaksi JOIN user ON transaksi.user = user.username WHERE user = '$_SESSION[user]' && status = 'selesai' ORDER BY tanggal DESC  LIMIT 5");
                            foreach ($riwayat as $data) :

                                $tanggal = $data['tanggal'];
                                $date = new DateTime($tanggal);
                                $tanggalFormat = $date->format('d F Y H:i');
                            ?>

                                <tr class="bg-white border-b  hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <?= $data['name'] ?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $tanggalFormat ?>WIB
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $data['quantity'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp <?= number_format($data['price'], 0, ',', '.') ?>
                                    </td>
                                    <td class="px-6 py-4 text-right font-bold">
                                        Rp <?= number_format($data['total'], 0, ',', '.') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="bg-white p-5">
                        <h1 class="text-xl font-semibold text-gray-900">Cetak Invoice</h1>
                        <form action="function/invoice.php" method="POST">
                            <label for="tanggal" class="inline-block mb-2 text-sm font-medium text-gray-900 mt-3">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                            <input type="hidden" name="user" id="user" value="<?= $_SESSION["user"] ?>">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- my script -->
    <script src="asset/navbar.js"></script>

    <!-- script payment -->
    <script src="asset/payment.js"></script>
</body>

</html>