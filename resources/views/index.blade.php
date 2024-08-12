<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Rodamu</title>
    <!-- CSS Connection -->
    <link href="{{ asset('tampilan/css/output.css')}}" rel="stylesheet">
    <!-- End CSS -->
    
    <style>
        * {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- End Font -->
</head>
<body>
    <!-- Navbar untuk Rohis -->
    <div>
        <header class="absolute bg-transparent flex items-center top-0 w-full z-10">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="text-primary lg:text-2xl md:text-xl font-semibold pt-7 text-transparent bg-clip-text bg-white text-lg flex items-center justify-center py-6 gap-3">
                            <img src="{{ asset('tampilan/img/assests/Logo_rohis.png') }}" alt="MAMANG APIT" class="w-12" />
                            <h1>Rodamu</h1>
                        </a>
                    </div>
                    <div class="flex px-4 items-center">
                        <button class="block absolute right-5 lg:hidden" id="hamburger-menu" type="button">
                            <span class="hamburger-menu rounded transition duration-300 ease-in-out origin-top-left"></span>
                            <span class="hamburger-menu rounded transition duration-300 ease-in-out"></span>
                            <span class="hamburger-menu rounded transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>
                        <nav id="nav-menu" class="hidden absolute bg-transparent bg-white border shadow-lg top-full rounded-sm max-w-full w-full right-1 lg:block lg:static lg:bg-transparent lg:max-w-full lg:border-none lg:shadow-none lg:rounded-none lg:backdrop-blur-0">
                            <ul class="block font-bold lg:flex bg-primary text-white p-3 lg:bg-transparent lg:p-0">
                                <li class="group lg:my-3">
                                    <a href="#home" class="mx-8 rounded group-hover:text-primary text-md">Home</a>
                                </li>
                                <li class="group my-3">
                                    <a href="#about" class="mx-8 rounded group-hover:text-primary text-md">About</a>
                                </li>
                                <li class="group my-3">
                                    <a href="#gallery" class="mx-8 rounded group-hover:text-primary text-md">Gallery</a>
                                </li>
                                <li class="group my-3">
                                    <a href="#projects" class="mx-8 rounded group-hover:text-primary text-md">Project</a>
                                </li>
                                <li class="group lg:my-3">
                                    <a href="#contact" class="mx-8 rounded group-hover:text-primary text-md">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- End Navbar untuk Rohis -->

    <!-- Section Hero Untuk Rohis Darrul Muttaqein -->
    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('tampilan/img/assests/Background-Rohis.png') }}')">
        <section id="home" class="pt-32 lg:pt-36 pb-32">
            <div class="container">
                <div class="flex flex-wrap items-center justify-center">
                    <div class="w-full px-4 md:w-1/2">
                        <h1 class="text-xl font-semibold text-white md:text-3xl lg:text-5xl leading-relaxed lg:font-bold">Selamat Datang Di Ekstrakulikuler Rohis Darul Muttaqein</h1>
                        <h2 class="leading-relaxed text-slate-100 text-sm font-normal md:font-medium md:text-sm lg:text-xl my-5 max-w-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quia soluta eaque, voluptatibus.</h2>
                        <div class="flex items-center mt-3 gap-3">
                            <a href="https://wa.me/+6289518001464">
                                <button class="px-5 py-3 bg-white text-slate-800 rounded-md font-medium hover:translate-y-2 transition duration-300 ease-in-out">Hubungi Kami</button>
                            </a>
                            <a href="#daftar">
                                <button class="ring-1 ring-white px-5 py-3 text-white hover:bg-primary rounded-md hover:text-white font-semibold transition duration-300 ease-in-out hover:translate-y-2 daftar">Daftar</button>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mt-8">
                        <img src="{{ asset('tampilan/img/assests/Banner pendaftaran Rohis.jpg') }}" alt="Gambar-Rohis" class="rounded-md overflow-hidden" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Section Hero Untuk Rohis Darrul Muttaqein -->

    <!-- Section About Untuk Rohis Darrul Muttaqein -->
    <section id="about" class="pt-20 pb-20">
        <div class="container">
            <div class="text-center">
                <h2 class="font-semibold text-lg md:text-2xl lg:text-3xl">About Us</h2>
                <h3 class="text-md text-abu font-medium my-3 md:text-xl lg:text-2xl max-w-lg mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, porro?</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 lg:grid-cols-3 place-items-center border">
                <div class="w-full px-4 shadow-md bg-white rounded-md">
                    <div class="rounded-md overflow-hidden">
                        <div>
                            <img src="https://placehold.co/600x400" alt="600x400" class="object-cover" />
                        </div>
                        <h1 class="my-3 font-bold text-xl md:text-2xl">PSDM</h1>
                        <p class="text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel amet mollitia, consequatur nesciunt hic maiores qui! Omnis, nostrum quia.</p>
                        <a href="#" class="underline"><p class="font-medium text-md my-3">Lebih Lanjut</p></a>
                    </div>
                </div>
                <div class="w-full px-4 shadow-md bg-white rounded-md">
                    <div class="rounded-md overflow-hidden">
                        <div>
                            <img src="https://placehold.co/600x400" alt="600x400" class="object-cover" />
                        </div>
                        <h1 class="my-3 font-bold text-xl md:text-2xl">Humas</h1>
                        <p class="text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel amet mollitia, consequatur nesciunt hic maiores qui! Omnis, nostrum quia.</p>
                        <a href="#" class="underline"><p class="font-medium text-md my-3">Lebih Lanjut</p></a>
                    </div>
                </div>
                <div class="w-full px-4 shadow-md bg-white rounded-md">
                    <div class="rounded-md overflow-hidden">
                        <div>
                            <img src="https://placehold.co/600x400" alt="600x400" class="object-cover" />
                        </div>
                        <h1 class="my-3 font-bold text-xl md:text-2xl">Syiar</h1>
                        <p class="text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel amet mollitia, consequatur nesciunt hic maiores qui! Omnis, nostrum quia.</p>
                        <a href="#" class="underline"><p class="font-medium text-md my-3">Lebih Lanjut</p></a>
                    </div>
                </div>
            </div>
            <div class="flex items-center flex-wrap justify-center mt-10 border gap-5">
                <div class="w-full px-4 shadow-md bg-white rounded-md lg:w-1/3">
                    <div class="rounded-md overflow-hidden">
                        <div>
                            <img src="https://placehold.co/600x400" alt="600x400" class="object-cover" />
                        </div>
                        <h1 class="my-3 font-bold text-xl md:text-2xl">SO</h1>
                        <p class="text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel amet mollitia, consequatur nesciunt hic maiores qui! Omnis, nostrum quia.</p>
                        <a href="#" class="underline"><p class="font-medium text-md my-3">Lebih Lanjut</p></a>
                    </div>
                </div>
                <div class="w-full px-4 shadow-md bg-white rounded-md lg:w-1/3">
                    <div class="rounded-md overflow-hidden">
                        <div>
                            <img src="https://placehold.co/600x400" alt="600x400" class="object-cover" />
                        </div>
                        <h1 class="my-3 font-bold text-xl md:text-2xl">DKM</h1>
                        <p class="text-abu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores vel amet mollitia, consequatur nesciunt hic maiores qui! Omnis, nostrum quia.</p>
                        <a href="#" class="underline"><p class="font-medium text-md my-3">Lebih Lanjut</p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section About Untuk Rohis Darrul Muttaqein -->

    <!-- Gallery Rohis -->
    <section id="gallery" class="pt-12">
        <div class="container">
            <div class="px-4">
                <h1 class="text-center font-bold text-lg">Our <span class="text-primary">Gallery</span></h1>
            </div>
            <div class="grid grid-cols-1 px-4"></div>
        </div>
    </section>
    <!-- End Gallery Rohis -->
</body>
<script src="{{ asset('tampilan/js/index.js') }}"></script>
</html>
