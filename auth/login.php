<?php
session_start();
require '../function/connect.php';

// pemeriksaan apabila sudah login
if (isset($_SESSION['login'])) {
    header('Location: ../keranjang.php');
    exit;
}

// pemeriksaan login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekUser = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cekUser) > 0) {
        $user = mysqli_fetch_assoc($cekUser);
        if ($password === $user['password']) {
            $_SESSION['login'] = true;
            $_SESSION['user'] = $username;
            header('Location: ../keranjang.php');
            exit;
        }
    }

    header("Location: ?salah=true");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>


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

    <?php
    if (isset($_GET['salah'])) : ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Username atau Password Anda Salah!",
                footer: "Masukkan username dan password yang benar!"
            });
        </script>
    <?php elseif (isset($_GET['berhasil'])) : ?>
        <script>
            Swal.fire({
                title: "Registrasi Sukses!",
                text: "Silahkan Login!",
                icon: "success"
            });
        </script>
    <?php endif; ?>



    <section class="bg-gradient-to-r from-indigo-500 via-teal-500 to-blue-500 h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 shadow-lg">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-700 md:text-2xl">
                        <span class="text-sky-600">Sign in</span> dengan akun anda.
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="" method="POST">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-semibold text-gray-900 ">Username</label>
                            <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 " placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-semibold text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 " required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky-300 " required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-sky-600 hover:underline">Forgot password?</a>
                        </div>
                        <button type="submit" name="login" class="w-full text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Sign in</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Belum memiliki akun? <a href="register.php" class="font-medium text-sky-600 hover:underline ">Sign up</a>
                        </p>
                        <a href="../index.php" class="text-sm font-medium text-sky-600 hover:underline">&lt;&lt; Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- script flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- my script -->
    <script src="asset/navbar.js"></script>
</body>

</html>