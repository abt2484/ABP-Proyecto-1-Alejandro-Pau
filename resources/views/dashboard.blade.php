@extends("layouts.app")
@section("main")
{{-- <div class="w-full flex flex-wrap flex-row justify-between items-center">
    <!-- Contenedor -->
    <div class="shadow-md border border-[#AFAFAF] bg-white rounded-[15px] p-5 w-96 mb-10">
        <div class="flex justify-between items-center">
            <p class="text-[#012F4A] font-bold text-[20px]">Professionals actius</p>
            <svg class="w-8 h-8 text-[#012F4A]">
                <use xlink:href="#icon-users"></use>
            </svg>
        </div>
        <p class="text-3xl text-left font-bold py-5">11</p>
        
        <div class="flex flex-col gap-2 sm:flex-row sm:justify-between sm:items-center">
            <p class="font-bold text-[#335C68] text-md text-left">4 nous aquest mes</p>
            <a href="{{ route("users.index") }}" class="bg-[#FF7E13] text-white rounded-lg p-2 font-semibold flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full sm:w-32 text-sm shadow-md">
                Accedir
                <svg class="w-4 h-4">
                    <use xlink:href="#icon-up-right-arrow"></use>
                </svg>
            </a>
        </div>
    </div>

    <!-- Contenedor -->
    <div class="shadow-md border border-[#AFAFAF] bg-white rounded-[15px] p-5 w-96 mb-10">
        <div class="flex justify-between items-center">
            <p class="text-[#012F4A] font-bold text-[20px]">Centres</p>
                <svg class="w-8 h-8 text-[#012F4A]">
                    <use xlink:href="#icon-center"></use>
                </svg>
        </div>
        <p class="text-3xl text-left font-bold py-5">12</p>
        
        <div class="flex flex-col gap-2 sm:flex-row sm:justify-between sm:items-center">
            <p class="font-bold text-[#335C68] text-md text-left">5 centres inactius</p>
            
            <a href="{{ route("centers.index") }}" class="bg-[#FF7E13] text-white rounded-lg p-2 font-semibold flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full sm:w-32 text-sm shadow-md">
                Accedir
                <svg class="w-4 h-4">
                    <use xlink:href="#icon-up-right-arrow"></use>
                </svg>
            </a>

        </div>
    </div>

    <!-- Contenedor -->
    <div class="shadow-md border border-[#AFAFAF] bg-white rounded-[15px] p-5 w-96 mb-10">
        <div class="flex justify-between items-center">
            <p class="text-[#012F4A] font-bold text-[20px]">Projectes/Comissions</p>
            <svg class="w-8 h-8 text-[#012F4A]">
                <use xlink:href="#icon-folder"></use>
            </svg>
        </div>
        <p class="text-3xl text-left font-bold py-5">6</p>
        
        <div class="flex flex-col gap-2 sm:flex-row sm:justify-between sm:items-center">
            <p class="font-bold text-[#335C68] text-md text-left">3 urgents</p>
            <button type="button" class="bg-[#FF7E13] text-white rounded-lg p-2 font-semibold flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full sm:w-32 text-sm shadow-md">
                Accedir
                <svg class="w-4 h-4">
                    <use xlink:href="#icon-up-right-arrow"></use>
                </svg>
            </button>
        </div>
    </div>

    <!-- Contenedor -->
    <div class="shadow-md border border-[#AFAFAF] bg-white rounded-[15px] p-5 w-96 mb-10">
        <div class="flex justify-between items-center">
            <p class="text-[#012F4A] font-bold text-[20px]">Seguiments oberts</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#012F4A" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>
        </div>
        <p class="text-3xl text-left font-bold py-5">6</p>
        
        <div class="flex flex-col gap-2 sm:flex-row sm:justify-between sm:items-center">
            <p class="font-bold text-[#335C68] text-md text-left">3 urgents</p>
            <button type="button" class="bg-[#FF7E13] text-white rounded-lg p-2 font-semibold flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full sm:w-32 text-sm shadow-md">
                Accedir
                <svg class="w-4 h-4">
                    <use xlink:href="#icon-up-right-arrow"></use>
                </svg>
            </button>
        </div>
    </div>

</div> --}}
<h2 class="font-bold text-lg mb-5 text-[#011020]">APARTATS DEL SISTEMA</h2>


<!-- Apartados del sistema -->
<div class="w-full mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-blue-50 rounded-lg p-2 mb-3">
            <svg class="w-8 h-8 text-blue-600">
                <use xlink:href="#icon-users"></use>
            </svg>
        </div>

        <p class="text-[20px] font-bold text-[#011020]">Professionals</p>
        <p class="text-[#013148] text-sm" >Control i seguiment del personal del centre</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="{{ route("users.create") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Alta d'un professional nou
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("users.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Professional actius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("users.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13] justify-between">
                    Professional inactius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>

        <a href="{{ route("users.index") }}" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>
    </div>
    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-green-50 rounded-lg p-2 mb-3">
            <svg class="w-8 h-8 text-green-600">
                <use xlink:href="#icon-center"></use>
            </svg>
        </div>

        <p class="text-[20px] font-bold text-[#011020]">Centres</p>
        <p class="text-[#013148] text-sm" >Control i seguiment del personal del centre</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="{{ route("centers.create") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Alta d'un centre nou
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="#centresActius" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13] ">
                    Centres actius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="#centresInActius" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Centres inactius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>
        <a href="{{ route("centers.index") }}" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>
    </div>
    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-teal-50 rounded-lg p-2 mb-3">
            <svg class="w-8 h-8 text-teal-600">
                <use xlink:href="#icon-folder"></use>
            </svg>

        </div>

        <p class="text-[20px] font-bold text-[#011020]">Proyectes i comissions</p>
        <p class="text-[#013148] text-sm" >Control i seguiment del personal del centre</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="{{ route("projects.create") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Alta d'un nou projecte/comissió
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("projects.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Projectes
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("projects.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Comissions
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>
        <a href="{{ route("projects.index") }}" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>

    </div>
    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-violet-50 rounded-lg p-2 mb-3">
            <svg class="w-8 h-8 text-violet-600">
                <use xlink:href="#icon-book"></use>
            </svg>

        </div>

        <p class="text-[20px] font-bold text-[#011020]">Cursos</p>
        <p class="text-[#013148] text-sm" >Control i seguiment dels cursos</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="{{ route("courses.create") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Alta d'un nou curs
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("courses.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Cursos actius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="{{ route("courses.index") }}" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Cursos inactius
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>
        <a href="{{ route("courses.index") }}" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>

    </div>
    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-[#fee9d6] rounded-lg p-2 mb-3">
            <svg class="w-8 h-8 text-[#FF7E13]">
                <use xlink:href="#icon-knife"></use>
            </svg>
        </div>

        <p class="text-[20px] font-bold text-[#011020]">Serveis generals</p>
        <p class="text-[#013148] text-sm" >Control i seguiment del personal del centre</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>
        <a href="#test" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>
    </div>
    <!-- Container -->
    <div class="border border-[#AFAFAF] bg-white rounded-[15px] p-5 shadow-lg flex flex-col items-start min-w-[300px]">
        <div class="bg-red-50 rounded-lg p-2 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-red-600">
                <use xlink:href="#icon-group-user"></use>
            </svg>

        </div>

        <p class="text-[20px] font-bold text-[#011020]">Temes pendents RRHH</p>
        <p class="text-[#013148] text-sm" >Control i seguiment del personal del centre</p>

        <!-- Opciones -->
        <ul class="my-5 w-full">
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
            <li>
                <a href="google.com" class="p-2 rounded-lg mb-2 text-[#012F4A] flex flex-row items-center justify-between w-full cursor-pointer hover:bg-[#fef5eb] hover:text-[#FF7E13]">
                    Nou professional
                <svg class="w-6 h-6 text-[#012F4A]">
                    <use xlink:href="#icon-no-line-arrow"></use>
                </svg>
                </a>
            </li>
        </ul>
        <a href="#test" class="bg-[#FF7E13] text-white rounded-lg flex items-center justify-center cursor-pointer gap-2 hover:bg-[#FE712B] transition-all w-full p-2 font-bold">Accedir al apartat</a>

    </div>
</div>
@endsection

@section("footer")
@endsection

</body>
</html>