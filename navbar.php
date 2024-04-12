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