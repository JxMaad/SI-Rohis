<div>
    <header class="absolute bg-transparent flex items-center top-0 w-full z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="text-white lg:text-2xl md:text-xl font-semibold pt-7 text-transparent bg-clip-text bg-white text-lg flex items-center justify-center py-6 gap-3">
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
                        <ul class="block font-bold lg:flex bg-primary lg:items-center text-white p-3 lg:bg-transparent lg:p-0">
                            <li class="group lg:my-3">
                                <a href="#home" class="mx-8 rounded group-hover:text-slate-700 text-md">Home</a>
                            </li>
                            <li class="group my-3">
                                <a href="#about" class="mx-8 rounded group-hover:text-slate-700 text-md">About</a>
                            </li>
                            <li class="group my-3">
                                <a href="#gallery" class="mx-8 rounded group-hover:text-slate-700 text-md">Gallery</a>
                            </li>
                            <li class="group my-3 border px-2 py-3 rounded-md hover:bg-slate-200 hover:cursor-pointer transition ease-in-out duration-300">
                                <a href="#Daftar" class="mx-8 rounded group-hover:text-primary text-md ">Daftar</a>
                            </li>
                            <li class="group lg:my-3">
                                <a href="#contact" class="mx-8 rounded group-hover:text-slate-700 text-md">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
