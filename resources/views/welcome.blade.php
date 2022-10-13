<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benihana-Skateshop</title>
    <link rel="icon" href="{{asset('images/Skate.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fa00524f83.js" crossorigin="anonymous"></script>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <a class="btn-wsp" target="_blank" href="https://api.whatsapp.com/send?phone=573193648237">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">

                        @guest
                        @if (Route::has('login'))
                        @endif
                        @else
                        <a class="font-bold">
                            {{ Auth::user()->name }}
                        </a>
                        @endguest

                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#About">Sobre Nosotros</a></li>
                    </ul>
                </nav>
                <div class="order-2 md:order-3 flex items-center" id="nav-content">

                    @guest
                    @if (Route::has('login'))
                    <a class="inline-block no-underline hover:text-black" href="{{ route('login') }}">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>
                    @endif
                    @else

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                    @endguest

                </div>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="/">
                    <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>
                    BENIHANA SKATESHOP
                </a>
            </div>

        </div>
    </nav>

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url(images/SkateFondo1.jpg);">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl my-4">Maderos de Skate!!!</p>
                            <p class="text-white">Excelente calidad y Excelente precio... <br> Incluye lija negra!</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url(images/SkateFondo2.jpg);;">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl my-4">Accesorios de Skate!!!</p>
                            <p class="text-white">Todo lo relacionado con Skatebording: <br> Zapatos, Ruedas, lijas, Shortys, Rodamientos, Elevadores, Llaves Y, etc... </p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">
                        Tienda
                    </a>

                </div>
            </nav>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/MaderoNature.jpg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Madero Border</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(MADERO BORDER)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$165.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/MaderoMariachi.jpg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Madero Border</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(MADERO BORDER)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$165.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/MaderoMexico.jpg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Madero Border</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(MADERO BORDER)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$165.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/MaderoBorder.jpg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Madero Border</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(MADERO BORDER)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$165.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/LijaNegra.jpg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Lija Negra Abrasiva</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(LIJAS)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$25.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/TrucksPolar.jpeg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Trucks Polar</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(TRUCKS)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$130.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/RuedasPolar.jpeg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Ruedas Polar</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(RUEDAS)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$70.000</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a>
                    <img class="hover:grow hover:shadow-lg" src="{{asset('images/RodamientosPolar.jpeg')}}">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Rodamientos Polar</p>
                        <a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!%20(RODAMIENTOS)">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <p class="pt-1 text-gray-900">$60.000</p>
                </a>
            </div>

        </div>

    </section>

    <section class="bg-white py-8" id="About">

        <div class="container py-8 px-6 mx-auto">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8">
                Sobre Nosotros
            </a>

            <p class="mt-8 mb-8">Somos una tienda virtual Colombiana que suministra productos relacionados con Skatebording netamente tienda virtual ubicada en la ciudad de Villavicencio:
                <br>
                <a class="text-gray-800 underline hover:text-gray-900" href="https://instagram.com/benihana_skate_shop?igshid=YmMyMTA2M2Y=" target="_blank"><strong>Benihana Skateshop</strong></a> fue creada por: <a class="text-gray-800 underline hover:text-gray-900" href="https://www.facebook.com/nicolas.erazo/"><strong>Nicolas Erazo Arce</strong></a> para suplir las necesidades de los skaters y promover el deporte en la ciudad.
            </p>

            <p class="mb-8"><strong>Benihana Skateshop</strong> sabe que con sentido social y haciendo las cosas bien, contribuye a la productividad de sus clientes y al desarrollo de las personas, ofreciendo productos y servicios innovadores, competitivos y rentables para garantizar un desarrollo sostenible.</p>

        </div>

    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Contacto</h3>
                        <h1 class="fn org">Nicolas Erazo Arce</h1>
                        <p>Teléfono: <a class="tel" href="tel:+573193648237">+57 (319) 3648237</a></p>
                        <p>
                            <span class="locality">Villavicencio - Meta</span><br>
                            <span class="country-name">Colombia</span>
                        </p>
                        <p><a class="email" href="mailto:nico.lacho@outlook.com">nico.lacho@outlook.com</a></p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Redes Sociales</h3>
                        <ul class="list-reset items-center pt-3">
                            <li><a href="https://www.facebook.com/BenihanaSkateShop"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/benihana_skate_shop?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/573193648237/?text=Hola%20estoy%20interesado%20en%20conocer%20mas%20acerca%20de%20los%20productos%20que%20ofrece%20la%20tienda,%20Gracias!"><i class="fa-brands fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>