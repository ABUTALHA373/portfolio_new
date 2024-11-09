<!-- resources/views/layout/welcome.blade.php -->

<x-layout.app>
    <style>
        header {
            background-image: url('{{ asset('storage/'.$nav->hero_bg_small) }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        @media (min-width: 1281px) {
            header {
                background-image: url('{{ asset('storage/'.$nav->hero_bg) }}');
                background-position: right;
            }
        }
    </style>
    <div id="loading-screen" class="fixed inset-0 bg-[#07192f] flex flex-col items-center justify-center z-50">
        <!-- Screen Loader -->
        <div>
            <img class="h-16 md:h-24 w-full scale-up-animation" src="{{ asset('storage/'.$nav->nav_logo) }}"
                 alt=""/>
        </div>
    </div>

    <!-- section header  -->
    <header id="sec-header"
            class="relative min-h-[45rem] lg:h-screen border-b bg-transparent border-gray-300 shadow-sm z-0 flex flex-col">
        <!-- overlay  -->
        <div id="overlay"
             class="z-10 backdrop-blur-sm xl:backdrop-blur-none bg-black/30 xl:bg-transparent absolute inset-0"></div>
        <!-- navbar -->
        <nav class="container mx-auto relative z-40 pt-8">
            <!-- big screen  -->
            <div class="h-16 flex justify-between items-center">
                <div>
                    <a href="/"><img src="{{ asset('storage/'.$nav->nav_logo) }}" class="h-12 w-full"
                                     alt="abuTalha-logo"/></a>
                </div>
                <div class="hidden gap-4 text-center md:flex">
                    <a href="/" class="p-1.5 rounded-md font-medium text-white hover:text-primary duration-75">Home</a>
                    <a href="#sec-about"
                       class="p-1.5 rounded-md font-medium text-white hover:text-primary duration-75">About</a>
                    <a href="#sec-services"
                       class="p-1.5 rounded-md font-medium text-white hover:text-primary duration-75">Services</a>
                    <a href="{{ route('projects') }}"
                       class="p-1.5 rounded-md font-medium text-white hover:text-primary duration-75">Project</a>
                    <a href="#sec-contact"
                       class="p-1.5 rounded-md font-medium text-white hover:text-primary duration-75">Contact</a>
                </div>
                <div class="md:flex flex-row gap-2 hidden">
                    <a href="{{$socials->linkedin}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"/>
                            </g>
                        </svg>
                    </a>
                    <a href="{{$socials->fiverr}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="-2.5 -2 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z"/>
                            <circle cx="14.375" cy="1.875" r="1.875"/>
                        </svg>
                    </a>
                    <a href="{{$socials->github}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 97.707 97.707">
                            <path
                                d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"/>
                        </svg>
                    </a>
                </div>
                <div class="md:hidden cursor-pointer" id="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" class="size-7 stroke-primary duration-300" id="hamburger-icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" class="size-7 stroke-primary hidden duration-300" id="x-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </div>
            </div>
            <!-- small screen / collapsible menu  -->
            <div id="collapsible-menu"
                 class="container block md:hidden overflow-hidden transition-all duration-300 absolute left-0 top-full w-full"
                 style="height: 0px">
                <div class="bg-white p-1">
                    <a href="/" class="p-1.5 block text-primary hover:bg-primary hover:text-white duration-75">Home</a>
                    <a href="#sec-about"
                       class="p-1.5 block text-primary hover:bg-primary hover:text-white duration-75">About</a>
                    <a href="#sec-services"
                       class="p-1.5 block text-primary hover:bg-primary hover:text-white duration-75">Services</a>
                    <a href="{{ route('projects') }}"
                       class="p-1.5 block text-primary hover:bg-primary hover:text-white duration-75">Project</a>
                    <a href="#sec-contact"
                       class="p-1.5 block text-primary hover:bg-primary hover:text-white duration-75">Contact</a>
                </div>
                <div class="bg-white p-4 border-t border-primary">
                    <div class="flex flex-row gap-2 justify-center">
                        <a href="{{$socials->linkedin}}" target="_blank"
                           class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                            <svg class="h-full w-full fill-white p-0.5" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"/>
                                </g>
                            </svg>
                        </a>
                        <a href="{{$socials->fiverr}}" target="_blank"
                           class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                            <svg class="h-full w-full fill-white p-0.5" viewBox="-2.5 -2 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z"/>
                                <circle cx="14.375" cy="1.875" r="1.875"/>
                            </svg>
                        </a>
                        <a href="{{$socials->github}}" target="_blank"
                           class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                            <svg class="h-full w-full fill-white p-0.5" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 97.707 97.707">
                                <path
                                    d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- hero items  -->
        <div id="hero" class="container mx-auto z-30 relative flex-grow flex justify-center items-center h-full">
            <div class="w-full md:grid md:grid-cols-2">
                <div class="text-center md:text-left">
                    <!-- <h5 class="text-white  text-xl">Hello I'm </h5> -->
                    <h1 class="font-afcad font-bold text-white text-6xl sm:text-7xl mb-1 sm:mb-1 z-30 tracking-wide">
                        {{ $nav->hero_title }}
                    </h1>
                    <h4 class="text-white font-afcad text-xl sm:text-3xl leading-5 font-semibold">
                        I'm a
                        <span class="text-primary font-afcad text-xl sm:text-3xl leading-5 font-semibold"
                              id="element"></span>
                    </h4>
                    <div class="mt-4 sm:mt-6 flex justify-center md:justify-start gap-5">
                        <a href="#sec-contact"
                           class="btn-shadow bg-transparent border border-primary px-3 py-2 sm:px-4 sm:py-3 text-xs sm:text-sm hover:text-white text-primary hover:bg-primary group inline-flex items-center">Contact
                            <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor"
                                class="size-3 ml-1 stroke-primary group-hover:stroke-white transition-all group-hover:translate-y-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"/>
                            </svg>
                        </a>
                        <a href="{{ route('projects') }}"
                           class="bg-primary border border-primary px-3 py-2 sm:px-4 sm:py-3 text-xs sm:text-sm text-white group inline-flex items-center">Projects
                            <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor"
                                class="size-3 ml-1 stroke-white group-hover:stroke-white transition-all group-hover:translate-x-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </header>


    <!-- section about -->
    <section class="bg-white" id="sec-about">
        <div class="container mx-auto py-20">
            <!-- section title   -->
            <h2
                class="py-2 m-0 font-afcad font-semibold text-primary text-center text-4xl sm:text-5xl sm:mb-3 z-30 tracking-wide">
                About & Expertise
            </h2>
            <!-- section items  -->
            <div class="grid gap-16 md:grid-cols-2">
                <div class="flex items-center justify-center">
                    <dotlottie-player autoplay loop playMode="normal" src="./src/images/animation/devani.lottie"
                                      class="max-w-[28rem]">
                    </dotlottie-player>
                </div>
                <div class="md:pt-20">
                    <div class="block">
                        <div class="flex sm:block justify-center">
                            <div class="tab inline-flex border mb-4 border-primary">
                                <button
                                    class="tablinks font-tilt bg-primary px-3 py-2 font- text-white group inline-flex items-center"
                                    onclick="openTab(event, 'about_me')">
                                    About Me
                                </button>
                                <button
                                    class="tablinks font-tilt bg-transparent px-3 py-2 font- text-primary hover:text-white hover:bg-primary group inline-flex items-center transition duration-300"
                                    onclick="openTab(event, 'skills')">
                                    Skills
                                </button>
                                <button
                                    class="tablinks font-tilt bg-transparent px-3 py-2 font- text-primary hover:text-white hover:bg-primary group inline-flex items-center transition duration-300"
                                    onclick="openTab(event, 'education')">
                                    Education
                                </button>
                            </div>
                        </div>
                        <div class="r">
                            <div id="about_me" class="tabcontent">
                                <p class="text-base text-justify">
                                    {{$about->description}}
                                </p>
                            </div>
                            <div id="skills" class="tabcontent hidden">
                                <div class="grid grid-cols-3 xl:grid-cols-4 grid-flow-col auto-cols-max gap-2">
                                    <div class="">
                                        <h2 class="font-tilt font-semibold text-primary text-lg lg:text-xl">
                                            Technology
                                        </h2>
                                        <ul class="">
                                            @foreach($skillTech as $item)
                                                <li class="flex items-center justify-start gap-1 mb-1 text-sm lg:text-base">
                                                <span class="size-4 lg:size-5">
                                                    {!! html_entity_decode($item->icon, ENT_QUOTES, 'UTF-8') !!}
                                                </span>
                                                    <span>{{ $item->name }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h2 class="font-tilt font-semibold text-primary text-lg lg:text-xl">
                                            Framework
                                        </h2>
                                        <ul class="">
                                            @foreach($skillFra as $item)
                                                <li class="flex items-center justify-start gap-1 mb-1 text-sm lg:text-base">
                                                <span class="size-4 lg:size-5">
                                                    {!! html_entity_decode($item->icon, ENT_QUOTES, 'UTF-8') !!}
                                                </span>
                                                    <span>{{ $item->name }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h2 class="font-tilt font-semibold text-primary text-lg lg:text-xl">
                                            Tools
                                        </h2>
                                        <ul class="">
                                            @foreach($skillTool as $item)
                                                <li class="flex items-center justify-start gap-1 mb-1 text-sm lg:text-base">
                                                <span class="size-4 lg:size-5">
                                                    {!! html_entity_decode($item->icon, ENT_QUOTES, 'UTF-8') !!}
                                                </span>
                                                    <span>{{ $item->name }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="education" class="tabcontent hidden">
                                <p>{{$education->degree}} in {{$education->major}}</p>
                                <h2 class="font-tilt font-semibold text-primary text-xl">
                                    {{$education->institution}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section services -->
    <section class="bg-gray-100" id="sec-services">
        <div class="container mx-auto py-20">
            <!-- section title  -->
            <h2
                class="py-2 mb-12 font-afcad font-semibold text-primary text-center text-4xl sm:text-5xl z-30 tracking-wide">
                Services
            </h2>
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- card 1-->
                <div
                    class="flex-grow grid grid-rows-[9rem_auto_auto_auto] bg-white rounded-lg px-8 py-12 group hover:scale-105 shad duration-200">
                    <!-- icon-rounded  -->
                    <div
                        class="mx-auto w-24 h-24 rounded-full bg-orange-500 border-transparent flex justify-center items-center group-hover:shadow-none orange-shadow transform duration-200">
                        <div class="">
                            <svg class="group-hover:flip transform duration-1000" width="44" height="44"
                                 viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.682 3.66663H14.3187C7.64533 3.66663 3.66699 7.64496 3.66699 14.3183V29.6633C3.66699 36.355 7.64533 40.3333 14.3187 40.3333H29.6637C36.337 40.3333 40.3153 36.355 40.3153 29.6816V14.3183C40.3337 7.64496 36.3553 3.66663 29.682 3.66663ZM29.7003 33.4583C27.6287 33.4583 25.942 31.7716 25.942 29.7C25.942 28.49 26.5287 27.4266 27.427 26.73C26.657 24.7133 24.732 23.32 22.5687 23.3933L18.792 23.4116H18.7737C17.6553 23.4116 16.592 23.0816 15.6937 22.5133V26.2166C17.087 26.7666 18.077 28.1233 18.077 29.7C18.077 31.7716 16.3903 33.4583 14.3187 33.4583C12.247 33.4583 10.5603 31.7716 10.5603 29.7C10.5603 28.105 11.5503 26.7666 12.9437 26.2166V18.2416C11.5503 17.6 10.5603 16.2066 10.5603 14.575C10.5603 12.3566 12.3753 10.5416 14.5937 10.5416C16.812 10.5416 18.627 12.3566 18.627 14.575C18.627 16.3716 17.4353 17.875 15.8037 18.4066C16.1703 19.745 17.3803 20.68 18.7737 20.68C18.7737 20.68 18.7737 20.68 18.792 20.68L22.5687 20.6616C22.587 20.6616 22.587 20.6616 22.6053 20.6616C25.9787 20.6616 29.0037 22.8066 30.1037 25.9966C31.992 26.1983 33.477 27.775 33.477 29.7183C33.4587 31.7716 31.772 33.4583 29.7003 33.4583Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-lg text-center text-primary font-semibold mb-2 place-self-start w-full">
                        {{$services[0]->title}}
                    </h2>
                    <p class="text-center text-slate-500 font-light">
                        {{$services[0]->description}}
                    </p>
                    <!-- arrow right -->
                    <div class="mx-auto flex justify-center items-center place-self-end mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-8 fill-slate-500 group-hover:bg-white group-hover:fill-orange-500">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <!-- card 2-->
                <div
                    class="flex-grow grid grid-rows-[9rem_auto_auto_auto] bg-white rounded-lg px-8 py-12 group hover:scale-105 shad duration-200">
                    <!-- icon-rounded  -->
                    <div
                        class="mx-auto w-24 h-24 rounded-full bg-green-500 border-transparent flex justify-center items-center group-hover:shadow-none green-shadow transform duration-200">
                        <div class="">
                            <svg class="group-hover:flip transform duration-1000" width="44" height="44"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.3517 7.61665L15.3929 4.05375C14.2651 3.03868 13.7012 2.53114 13.0092 2.26562L13 5.00011C13 7.35713 13 8.53564 13.7322 9.26787C14.4645 10.0001 15.643 10.0001 18 10.0001H21.5801C21.2175 9.29588 20.5684 8.71164 19.3517 7.61665Z"
                                    fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10 22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14V13.5629C22 12.6901 22 12.0344 21.9574 11.5001H18L17.9051 11.5001C16.808 11.5002 15.8385 11.5003 15.0569 11.3952C14.2098 11.2813 13.3628 11.0198 12.6716 10.3285C11.9803 9.63726 11.7188 8.79028 11.6049 7.94316C11.4998 7.16164 11.4999 6.19207 11.5 5.09497L11.5092 2.26057C11.5095 2.17813 11.5166 2.09659 11.53 2.01666C11.1214 2 10.6358 2 10.0298 2C6.23869 2 4.34315 2 3.17157 3.17157C2 4.34315 2 6.22876 2 10V14C2 17.7712 2 19.6569 3.17157 20.8284C4.34315 22 6.22876 22 10 22ZM10.9697 15.4697C11.2626 15.1768 11.7374 15.1768 12.0303 15.4697L13.0303 16.4697C13.3232 16.7626 13.3232 17.2374 13.0303 17.5303L12.0303 18.5303C11.7374 18.8232 11.2626 18.8232 10.9697 18.5303C10.6768 18.2374 10.6768 17.7626 10.9697 17.4697L11.4393 17L10.9697 16.5303C10.6768 16.2374 10.6768 15.7626 10.9697 15.4697ZM10.7022 14.2633C10.8477 13.8755 10.6512 13.4432 10.2633 13.2978C9.8755 13.1523 9.44319 13.3488 9.29775 13.7367L7.79775 17.7367C7.65231 18.1245 7.84882 18.5568 8.23666 18.7022C8.6245 18.8477 9.05681 18.6512 9.20225 18.2633L10.7022 14.2633ZM7.53033 13.4697C7.82322 13.7626 7.82322 14.2374 7.53033 14.5303L7.06066 15L7.53033 15.4697C7.82322 15.7626 7.82322 16.2374 7.53033 16.5303C7.23744 16.8232 6.76256 16.8232 6.46967 16.5303L5.46967 15.5303C5.17678 15.2374 5.17678 14.7626 5.46967 14.4697L6.46967 13.4697C6.76256 13.1768 7.23744 13.1768 7.53033 13.4697Z"
                                      fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-lg text-center text-primary font-semibold mb-2 place-self-start w-full">
                        {{$services[1]->title}}
                    </h2>
                    <p class="text-center text-slate-500 font-light">
                        {{$services[1]->description}}
                    </p>
                    <!-- arrow right -->
                    <div class="mx-auto flex justify-center items-center place-self-end mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-8 fill-slate-500 group-hover:bg-white group-hover:fill-green-500">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <!-- card 3-->
                <div
                    class="flex-grow grid grid-rows-[9rem_auto_auto_auto] bg-white rounded-lg px-8 py-12 group hover:scale-105 shad duration-200">
                    <!-- icon-rounded  -->
                    <div
                        class="mx-auto w-24 h-24 rounded-full bg-sky-500 border-transparent flex justify-center items-center group-hover:shadow-none sky-shadow transform duration-200">
                        <div class="">
                            <svg class="group-hover:flip transform duration-1000" width="44" height="44"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM9.94 13.27C9.26 14.29 8.32 15.12 7.22 15.67C7.12 15.72 7 15.75 6.89 15.75C6.61 15.75 6.35 15.6 6.22 15.34C6.03 14.97 6.18 14.52 6.56 14.33C7.43 13.9 8.17 13.24 8.7 12.44C8.88 12.17 8.88 11.83 8.7 11.56C8.16 10.76 7.42 10.1 6.56 9.67C6.18 9.49 6.03 9.04 6.22 8.66C6.4 8.29 6.85 8.14 7.22 8.33C8.32 8.88 9.26 9.71 9.94 10.73C10.46 11.5 10.46 12.5 9.94 13.27ZM17 15.75H13C12.59 15.75 12.25 15.41 12.25 15C12.25 14.59 12.59 14.25 13 14.25H17C17.41 14.25 17.75 14.59 17.75 15C17.75 15.41 17.41 15.75 17 15.75Z"
                                    fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-lg text-center text-primary font-semibold mb-2 place-self-start w-full">
                        {{$services[2]->title}}
                    </h2>
                    <p class="text-center text-slate-500 font-light">
                        {{$services[2]->description}}
                    </p>
                    <!-- arrow right -->
                    <div class="mx-auto flex justify-center items-center place-self-end mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-8 fill-slate-500 group-hover:bg-white group-hover:fill-sky-500">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <!-- card 4-->
                <div
                    class="flex-grow grid grid-rows-[9rem_auto_auto_auto] bg-white rounded-lg px-8 py-12 group hover:scale-105 shad duration-200 lg:col-start-2 xl:col-start-auto">
                    <!-- icon-rounded  -->
                    <div
                        class="mx-auto w-24 h-24 rounded-full bg-fuchsia-500 border-transparent flex justify-center items-center group-hover:shadow-none fuchsia-shadow transform duration-200">
                        <div class="">
                            <svg class="group-hover:flip transform duration-1000" width="44" height="44"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM13.4881 6.44591C13.8882 6.55311 14.1256 6.96437 14.0184 7.36447L11.4302 17.0237C11.323 17.4238 10.9117 17.6613 10.5116 17.5541C10.1115 17.4468 9.8741 17.0356 9.98131 16.6355L12.5695 6.97624C12.6767 6.57614 13.088 6.3387 13.4881 6.44591ZM14.9697 8.46967C15.2626 8.17678 15.7374 8.17678 16.0303 8.46967L16.2387 8.67801C16.874 9.3133 17.4038 9.84308 17.7678 10.3202C18.1521 10.8238 18.4216 11.3559 18.4216 12C18.4216 12.6441 18.1521 13.1762 17.7678 13.6798C17.4038 14.1569 16.874 14.6867 16.2387 15.322L16.0303 15.5303C15.7374 15.8232 15.2626 15.8232 14.9697 15.5303C14.6768 15.2374 14.6768 14.7626 14.9697 14.4697L15.1412 14.2981C15.8229 13.6164 16.2797 13.1574 16.5753 12.7699C16.8577 12.3998 16.9216 12.1843 16.9216 12C16.9216 11.8157 16.8577 11.6002 16.5753 11.2301C16.2797 10.8426 15.8229 10.3836 15.1412 9.70191L14.9697 9.53033C14.6768 9.23744 14.6768 8.76257 14.9697 8.46967ZM7.96986 8.46967C8.26275 8.17678 8.73762 8.17678 9.03052 8.46967C9.32341 8.76257 9.32341 9.23744 9.03052 9.53033L8.85894 9.70191C8.17729 10.3836 7.72052 10.8426 7.42488 11.2301C7.14245 11.6002 7.07861 11.8157 7.07861 12C7.07861 12.1843 7.14245 12.3998 7.42488 12.7699C7.72052 13.1574 8.17729 13.6164 8.85894 14.2981L9.03052 14.4697C9.32341 14.7626 9.32341 15.2374 9.03052 15.5303C8.73762 15.8232 8.26275 15.8232 7.96986 15.5303L7.76151 15.322C7.12617 14.6867 6.59638 14.1569 6.23235 13.6798C5.84811 13.1762 5.57861 12.6441 5.57861 12C5.57861 11.3559 5.84811 10.8238 6.23235 10.3202C6.59638 9.84308 7.12617 9.31331 7.76151 8.67801L7.96986 8.46967Z"
                                      fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-lg text-center text-primary font-semibold mb-2 place-self-start w-full">
                        {{$services[3]->title}}
                    </h2>
                    <p class="text-center text-slate-500 font-light">
                        {{$services[3]->description}}
                    </p>
                    <!-- arrow right -->
                    <div class="mx-auto flex justify-center items-center place-self-end mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-8 fill-slate-500 group-hover:bg-white group-hover:fill-fuchsia-500">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section projects -->
    <section class="bg-white" id="sec-projects">
        <div class="container mx-auto py-20">
            <!-- section title  -->
            <h2
                class="py-2 mb-12 font-afcad font-semibold text-primary text-center text-4xl sm:text-5xl z-30 tracking-wide">
                Projects
            </h2>
            <div class="grid grid-col-1 md:grid-cols-2 gap-8">
                <!-- project card -->
                @foreach($projects as $project)
                    <div
                        class="bg-white grid grid-flow-row grid-rows-[14rem_3rem] sm:grid-rows-[20rem_3rem] md:grid-rows-[14rem_3rem] lg:grid-rows-[20rem_4rem] xl:grid-rows-[24rem_4rem] border shadow-md group">
                        <div class="bg-white border-b overflow-hidden relative">
                            <img class="w-full h-full object-cover" src="{{ asset('storage/'.$project->image) }}"
                                 alt=""/>
                            <h2
                                class="w-full font-semibold text-xl md:2xl lg:text-3xl text-white bg-gradient-to-t from-black absolute bottom-0 px-4 pb-4 pt-12 group-hover:tracking-wide duration-200">{{ $project->title }}</h2>
                        </div>
                        <div class="bg-white flex justify-center items-center">
                            <button id="modalBtnProject{{$project->id}}"
                                    class="bg-transparent border border-primary px-2 py-1 hover:text-white text-primary hover:bg-primary group inline-flex items-center duration-200">
                                Details
                            </button>
                            <a href="{{ $project->live_link }}" target="_blank"
                               class="ml-2 bg-transparent border border-primary px-2 py-1 hover:text-white text-primary hover:bg-primary group inline-flex items-center duration-200">Live
                            </a>
                            <a href="{{ $project->github_link}}" target="_blank"
                               class="ml-2 bg-transparent border border-primary px-2 py-1 hover:text-white text-primary hover:bg-primary group inline-flex items-center duration-200">Github
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- All work link  -->
            <div class="text-base text-primary flex justify-end relative  mt-4"><a href="{{ route('projects') }}"
                                                                                   class="grid grid-cols-[auto_auto] gap-2"><span
                        class="flex items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-4 slide-hide-animation">
                            <path fill-rule="evenodd"
                                  d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                  clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                  clip-rule="evenodd"/>
                        </svg>

                    </span><span class="flex items-center mr-1 font-normal duration-200">All
                        Works</span></a>
            </div>
        </div>
    </section>

    <!-- section experience  -->
    <!-- section testimonial -->
    <!-- section contact  -->
    <section class="bg-gray-100" id="sec-contact">
        <div class="container mx-auto py-20">
            <!-- section title   -->
            <h2
                class="py-2 m-0 font-afcad font-semibold text-primary text-center text-4xl sm:text-5xl sm:mb-3 z-30 tracking-wide">
                Contact
            </h2>
            <!-- section items  -->
            <div class="grid gap-8 lg:gap-4 lg:grid-cols-2">
                <div class="grid md:gap-4 lg:gap-0 md:grid-cols-2 lg:grid-rows-[auto_auto] lg:grid-cols-none">
                    <div class="flex items-center justify-center">
                        <dotlottie-player autoplay loop playMode="normal"
                                          src="./src/images/animation/contact.lottie" class="max-w-[22rem]">
                        </dotlottie-player>
                    </div>
                    <div class="flex justify-center items-center">
                        <ul>
                            <li class="flex items-center justify-start gap-4"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="size-4 fill-primary">
                                        <path fill-rule="evenodd"
                                              d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </span><span>+{{$contacts->phone}}</span></li>
                            <li class="flex items-center justify-start gap-4"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="size-4 fill-primary">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"/>
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"/>
                                    </svg>

                                </span><span>{{$contacts->email}}</span></li>
                            <li class="flex items-center justify-start gap-4"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="size-4 fill-primary">
                                        <path fill-rule="evenodd"
                                              d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                              clip-rule="evenodd"/>
                                    </svg>

                                </span><span>{{$contacts->address}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-center items-end">
                    <form name="contact" method="POST" netlify class="basis-[30rem]">
                        <input type="hidden" name="form-name" value="contact">
                        <input type="hidden" name="bot-field">

                        <div class="mb-1">
                            <label for="email" class="block mb-1 text-sm font-medium text-gray-900 ">Your
                                email:</label>
                            <input type="email" id="email" name="email"
                                   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                   placeholder="name@example.com" required>
                        </div>
                        <div class="mb-1">
                            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 ">Name:</label>
                            <input type="text" id="name" name="name"
                                   class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 "
                                   placeholder="Your name" required>
                        </div>
                        <div class="mb-3 sm:col-span-2">
                            <label for="message" class="block mb-1 text-sm font-medium text-gray-900 ">Your
                                message:</label>
                            <textarea id="message" name="message" rows="6"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                                      placeholder="Your message"></textarea>
                        </div>
                        <div class="">
                            <button type="submit"
                                    class="w-full text-center border border-primary px-2 py-1 text-white bg-primary group items-center duration-200">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- section footer  -->
    <footer class="relative py-16 bg-slate-900">
        <!-- <div class=" absolute inset-0 backdrop-blur-sm bg-black/40">
        </div> -->
        <div class="">
            <!-- <svg class="relative fill-gray-100 top-0 left-0 right-0" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1440 320">
                <path
                    d="M0,320L60,288C120,256,240,192,360,165.3C480,139,600,149,720,176C840,203,960,245,1080,245.3C1200,245,1320,203,1380,181.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg> -->
            <div class="flex justify-center items-center flex-col relative">
                <!-- <img src="./src/images/logo/logo-white.png" class="w-36 md:w-60 mb-6 sm:mb-10" alt=""> -->
                <div class="flex flex-row gap-2 mb-4">
                    <a href="{{$socials->linkedin}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"/>
                            </g>
                        </svg>
                    </a>
                    <a href="{{$socials->fiverr}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="-2.5 -2 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z"/>
                            <circle cx="14.375" cy="1.875" r="1.875"/>
                        </svg>
                    </a>
                    <a href="{{$socials->github}}" target="_blank"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 97.707 97.707">
                            <path
                                d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"/>
                        </svg>
                    </a>
                </div>
                <p class="text-lg md:text-xl font-medium text-center text-white">Designed & Developed by <span
                        class="text-lg md:text-xl font-medium text-primary">Abu Talha</span></p>
            </div>
        </div>
    </footer>


    <!-- modals  -->
    <section class="">
        <!-- Main modals -->
        @foreach($projects as $project)
            <div id="modalBgProject{{$project->id}}"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center h-full w-full bg-slate-950/40">
                <div id="modalBodyProject{{$project->id}}" class="relative p-4 w-full max-w-2xl">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-semibold text-primary ">
                                Project Details
                            </h3>
                            <button type="button" aria-hidden="true"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-primary rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 max-h-[30rem] md:max-h-96 overflow-x-hidden overflow-y-auto">
                            <h4 class="text-lg font-bold text-primary">Title:{{ $project->title }}</h4>
                            <h4 class="text-lg font-bold text-primary mt-1">Technology used:</h4>
                            @php
                                $tech = explode(',',$project->technology)
                            @endphp
                            <p class=" text-gray-500">
                                @foreach($tech as $a)
                                    <span
                                        class="text-xs px-1.5 py-1 rounded-full border-primary text-white bg-primary border font-medium">{{$a}}</span>
                                @endforeach

                            </p>
                            <h4 class="text-lg font-bold text-primary mt-1">Features:</h4>
                            <ul class="list-disc pl-6 m-0 mt-1">
                                {!!html_entity_decode($project->features, ENT_QUOTES, 'UTF-8')!!}
                            </ul>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-1 border-t border-gray-200 rounded-b">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                modal({
                    modalToggle: "modalBtnProject{{$project->id}}",    // ID of the button to open modal
                    modalBg: "modalBgProject{{$project->id}}",      // ID of the modal background
                    modalMain: "modalBodyProject{{$project->id}}",    // ID of the main modal
                });
            </script>
        @endforeach

    </section>
    @php
        $developerTypes = explode(',', $nav->hero_tagline);
    @endphp
    <script>
        new TypeIt("#element", {
            strings: @json($developerTypes),
            speed: 100,
            breakLines: false,
            loop: true,
        }).go();
    </script>


</x-layout.app>
