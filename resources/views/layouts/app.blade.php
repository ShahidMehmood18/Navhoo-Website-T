<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <title>{{ @$title ? 'Technologies | ' . @$title : 'Technologies' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/output.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')


</head>

<body class="min-h-screen flex flex-col">
    <!-- Header Section Start -->
    <header>
        <div id="toggleDiv"
            class="mt-[70px] md:mt-[70px] lg:mt-[72px] min-[1200px]:px-[72px] bg-[#000435]  flex items-center z-[999] flex-col justify-center w-full transition-all duration-500 ease-in-out opacity-0 max-h-0 overflow-hidden">
            <div class="min-h-[670px] flex justify-center items-center my-10">
                <div class="flex flex-col gap-8 justify-center items-center">
                    <h1
                        class="bg-black font-bold text-white text-[36px] sm:text-[36px] lg:text-[52px] xl:text-[76px] xl:leading-tight px-4">
                        SEARCH COURSES
                    </h1>
                    <div
                        class="flex p-1 sm:min-w-[470px] md:min-w-[600px] min-h-[70px] lg:min-h-[80px] xl:min-w-[806px] bg-white border-white ">
                        <input type="text" placeholder="Find your dream course..."
                            class="w-full outline-none text-[18px] px-2">
                        <button class="bg-primary_orange p-1 px-3">
                            <img src="{{ asset('frontend/images/svgs/magnifierg.svg') }}"
                                class="w-6 h-6 md:w-10 md:h-10 shrink-0 " alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Navigation Start -->
        <div
            class="flex fixed bg min-h-[70px] bg-white  z-[999] w-full top-0 justify-between  px-4 md:px-8 lg:px-[30px] my-0 py-0 ">
            <a href="#" class=" self-center">
                <img src="{{ asset('frontend/images/pngs/header-logo.png') }}"
                    class="max-w-[160px] self-center  object-fill min-h-[48px] sm:min-h-[48px] sm:min-w-[200px] lg:min-w-[240px] lg:min-h-[48px] "
                    alt="">
            </a>
            <ul class="hidden list-none  min-[980px]:flex  font-ghothic text-[19px] gap-4 ">
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">Home</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">Courses</a>
                </li>
                <!-- <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">GCSE</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href="" class="active:underline decoration-crimson underline-offset-4">A
                        Levels</a>
                </li> -->
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">School</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">Diplomas</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">Graduation</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4">Master</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4 hidden min-[1100px]:block">Certifications</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href="#"
                        class="active:underline decoration-crimson underline-offset-4 hidden min-[1150px]:block">Faculty</a>
                </li>
                <li class="flex  items-center justify-center">
                    <a href="#"
                        class="active:underline decoration-crimson underline-offset-4 hidden min-[1200px]:block">Alumni</a>
                </li>

                <!-- <li class="hoverable list-none ">
                    <a href="#"
                        class="active:underline decoration-crimson underline-offset-4  h-full   justify-center flex items-center  hover:text-black">
                        <span>
                            More
                            Info
                        </span></a>
                    <div
                        class="mega-menu  mb-16 flex flex-wrap shadow-xl bg-[#000435] border-t-4  border-gray-600 py-6 px-4  sm:py-10 sm:px-6 lg:px-10 lg:py-12">
                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 list-none">

                            <div class="w-full flex flex-col gap-4">
                                <a href="#" class="flex gap-2 items-center mb-4">
                                    <img src="{{ asset('frontend/images/svgs/caret-right.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <h1 class="text-white text-[20px] font-semibold">Primary</h1>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Course information
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">The importance of Primary
                                        education
                                    </span>
                                </a>
                            </div>
                            <div class="w-full flex flex-col gap-4">
                                <a href="#" class="flex gap-2 items-center mb-4">
                                    <img src="{{ asset('frontend/images/svgs/caret-right.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <h1 class="text-white text-[20px] font-semibold">Primary</h1>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Course information
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">The importance of Primary
                                        education
                                    </span>
                                </a>
                            </div>
                            <div class="w-full flex flex-col gap-4">
                                <a href="#" class="flex gap-2 items-center mb-4">
                                    <img src="{{ asset('frontend/images/svgs/caret-right.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <h1 class="text-white text-[20px] font-semibold">Primary</h1>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Course information
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">The importance of Primary
                                        education
                                    </span>
                                </a>
                            </div>
                            <div class="w-full flex flex-col gap-4">
                                <a href="#" class="flex gap-2 items-center mb-4">
                                    <img src="{{ asset('frontend/images/svgs/caret-right.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <h1 class="text-white text-[20px] font-semibold">Primary</h1>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary subjects
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Course information
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Lower Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">Upper Primary Tutors
                                    </span>
                                </a>
                                <a href="" class="flex gap-2 items-center">
                                    <img src="{{ asset('frontend/images/svgs/caret-g.svg') }}" class="w-6 h-6"
                                        alt="">
                                    <span class="text-[18px] font-medium text-gray_one">The importance of Primary
                                        education
                                    </span>
                                </a>
                            </div>

                        </ul>


                    </div>

                </li> -->
                <li class="flex  items-center justify-center">
                    <a href=""
                        class="active:underline decoration-crimson underline-offset-4 hidden min-[1200px]:block">Contact
                        Us</a>
                </li>

            </ul>
            <div class="flex  min-[918px]:self-stretch  gap-4">
                <div class="flex  items-center gap-4">
                    <a id="toggleButton"
                        class="flex cursor-pointer no-underline justify-center items-center py-2 gap-3 text-lg font-medium">
                        <img src="{{ asset('frontend/images/svgs/magnifierg.svg') }}" class="w-6 h-6 md:w-8 md:h-8"
                            alt="">
                    </a>
                    <a href=""
                        class=" items-center  py-2 gap-3 text-lg font-medium active:underline decoration-crimson underline-offset-4 font-ghothic text-[19px]">Login</a>
                </div>
                <button id="menuButton"
                    class="flex no-underline justify-center items-center  py-2 gap-3 text-lg font-medium ">
                    <div class="flex flex-col gap-1   text-lg font-medium">
                        <div class="w-5 h-0.5 bg-primary rounded-full"></div>
                        <div class="w-5 h-0.5 bg-primary rounded-full"></div>
                        <div class="w-5 h-0.5 bg-primary rounded-full"></div>
                    </div>
                </button>
            </div>

        </div>
        <!-- Drawer Content Start -->
        <div id="menu"
            class="hidden fixed flex-col top-0 max-h-screen h-screen w-full bg-black p-4 z-[99999999] overflow-y-hidden">
            <div class="flex justify-between items-center flex-wrap gap-4 w-full">
                <a href="/">
                    <img src="{{ asset('frontend/images/pngs/header-logo-white.png') }}"
                        class="max-w-[160px] self-center  min-h-[60px] sm:min-h-[70px] sm:min-w-[200px] lg:min-w-[280px] lg:min-h-[90px]"
                        alt="">
                </a>
                <button id="closeButton" class="text-white">
                    <img src="{{ asset('frontend/images/svgs/cross.svg') }}" class="w-8 h-8" alt="">
                </button>
            </div>
            <!-- Drawer Links start -->
            <div
                class="flex  h-full self-start font-canela overflow-y-scroll flex-col gap-4 text-[36px] md:text-[36px] text-white mt-4 pr-3">
                <a href="/">Home</a>
                <a href="">Courses</a>
                <a href="">IGCSE</a>
                <a href="">A Levels</a>
                <a href="">Diploma</a>
                <a href="">Graduation</a>
                <a href="">Master</a>
                <a href="">Certifications</a>
                <a href="">Faculty</a>
                <a href="">Alumni</a>
            </div>
            <!-- Drawer Links End -->
            <div class="mt-auto  flex flex-col justify-end itmec flex-1 h-full ">
                <div class=" bg-white w-full h-[1px]"></div>
                <div class="flex  items-center gap-4  py-4 font-bold text-white  overflow-x-auto">
                    <span class="shrink-0">Quick Link</span>
                    <div class="flex gap-4">
                        <a class="shrink-0" href="">Admission</a>
                        <a class="shrink-0" href="">Calender</a>
                        <a class="shrink-0" href="">Berkeley Middle East & Africa</a>
                        <a class="shrink-0" href="">Berkeley Square London</a>
                        <a class="shrink-0" href="">Berkeley China</a>
                        <a class="shrink-0" href="">Exective Education</a>
                        <a class="shrink-0" href="">College</a>
                        <a class="shrink-0" href="">School</a>
                        <a class="shrink-0" href="">Study Abroad</a>
                        <a class="shrink-0" href="" target="blank">Migartion</a>
                        <a class="shrink-0" href="">Terms & Conditions</a>
                        <a class="shrink-0" href="">Privacy Policy</a>
                        <a class="shrink-0" href="">School Policies</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Drawer End -->

    @yield('content')

    
    <!-- footer start -->
    <footer
        class="card-hidden px-6 min-[1200px]:px-[72px]  min-h-[465px] flex items-center flex-col justify-center w-full py-8 bg-[#0E0E0E] mt-auto">
        <div class="grid w-full gap-4  grid-cols-1 sm:grid-cols-2 md:grid-cols-4 place-items-center ">
            <!-- Security and brand start -->
            <div class="flex flex-1 w-full flex-col justify-center items-center gap-2">
                <span class="text-white font-bold text-[18px] leading-[27px] ">Levels
                </span>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Diplomas
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Master
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Graduation
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Secondary
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Sixth
                    form
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">IGCSE
                </a>

            </div>
            <!-- Security and brand end -->
            <div class="flex flex-1 w-full flex-col justify-center items-center gap-2">
                <span class="text-white font-bold text-[18px] leading-[27px] ">Subject Areas
                </span>
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Entrepreneurship
                    & Innovation
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Leadership
                    & Management
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Finance
                    & Accounting
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in text-center duration-200 delay-100 hover:text-white underline-offset-4">Business
                    Essentials
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Business
                    & Society
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Strategy
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Marketing
                </a>
            </div>
            <!-- Website start -->
            <div class="flex flex-1 w-full flex-col justify-center items-center  gap-2">
                <span class="text-white font-bold text-[18px] leading-[27px] ">Important Links
                </span>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Berkeley
                    Middle East & Africa
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Berkeley
                    Square London
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Berkeley
                    China
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">Exective
                    Education</a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">College
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">School
                </a>

            </div>
            <!-- Website End -->
            <!-- Get in touch start -->
            <div class="flex flex-1 w-full flex-col justify-center items-center  gap-2">
                <span class="text-white font-bold text-[18px] leading-[27px] ">Legal
                </span>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Report
                    Copyright Infringement
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4">Complaints
                    & Misconduct
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Report
                    Security Issue
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4">Terms
                    & Conditions
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center">
                    Attendance Policies
                </a>
                <!-- <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4">General Policies
                </a> -->
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4">Privacy
                    Policy
                </a>
                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">School
                    Policies
                </a>

                <a href=""
                    class="text-gray_one font-bold  text-[16px] leading-[27px] hover:underline transition-all ease-in duration-200 delay-100 hover:text-white underline-offset-4 text-center ">Safeguarding
                </a>

            </div>
            <!-- Get in touch End -->
        </div>
        <div class="flex flex-col md:flex-row  w-full  justify-between gap-4 items-center   mt-16">
            <span
                class="flex flex-1 bg justify-center basis-100 flex-grow w-full text-white no-underline font-bold text-base items-center text-[16px]">
                Copyright © 1976 Berkeley Holdings
            </span>
            <div
                class="flex flex-1 justify-center basis-100 flex-grow w-full text-white no-underline font-normal text-base items-center">
                <img src="{{ asset('frontend/images/pngs/footer-logo.png') }}" class="w-[125px] h-[125px]" alt="">
            </div>
            <div class="flex flex-wrap justify-between flex-1 gap-5">
                <a href=""><img src="{{ asset('frontend/images/svgs/instagram.svg') }}" alt=""
                        class="w-[50px] h-[50px]"></a>
                <a href=""><img src="{{ asset('frontend/images/svgs/tiktok.svg') }}" alt=""
                        class="w-[50px] h-[50px]"></a>
                <a href=""><img src="{{ asset('frontend/images/svgs/linkedin.svg') }}" alt=""
                        class="w-[50px] h-[50px]"></a>
                <a href=""><img src="{{ asset('frontend/images/svgs/tiktok.svg') }}" alt=""
                        class="w-[50px] h-[50px]"></a>
                <a href=""><img src="{{ asset('frontend/images/svgs/youtube.svg') }}" alt=""
                        class="w-[50px] h-[50px]"></a>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script>
        // JS for Search bar start
        document.addEventListener('DOMContentLoaded', function () {
            var toggleButton = document.getElementById('toggleButton');
            var toggleDiv = document.getElementById('toggleDiv');

            toggleButton.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default action of the link
                if (toggleDiv.style.maxHeight) {
                    toggleDiv.style.maxHeight = null;
                    toggleDiv.style.opacity = '0';
                } else {
                    toggleDiv.style.maxHeight = toggleDiv.scrollHeight + 'px';
                    toggleDiv.style.opacity = '1';
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            });
        });


        // JS for Search bar End

        window.addEventListener("scroll", function () {
            const header = document.querySelector("header > div");
            if (window.scrollY > 0) {
                header.classList.add("shadow")
            } else {
                header.classList.remove("shadow")
            }
        })

        // For Animation effect of Section
        const hidenElement = document.querySelectorAll(".card-hidden");
        console.log(hidenElement);
        const obsarver = new IntersectionObserver((entries) => {
            console.log(entries);
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    entry.target.classList.remove("show");
                }
            });
        });
        hidenElement.forEach((el) => obsarver.observe(el));


        // Menu Button toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menu = document.getElementById('menu');
            const menuButton = document.getElementById('menuButton');
            const closeButton = document.getElementById(
                'closeButton'); // Targeting close button specifically by its ID

            menuButton.addEventListener('click', function () {
                console.log("show");
                menu.style.display = 'flex'; // Show the menu
            });

            closeButton.addEventListener('click', function () {
                console.log("show");

                menu.style.display = 'none'; // Hide the menu
            });
        });
    </script>
    @stack('script')
</body>

</html>