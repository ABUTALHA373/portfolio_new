<x-layout.app>
    <style>
        #sec-projects-header {
            background-image: url('{{ asset('storage/pro-bg/bgpro.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
    <!-- section header  -->
    <header id="sec-projects-header" class="h-40 md:h-52 lg:h-64 flex justify-center items-center">
        <div class="text-2xl font-normal text-white flex relative"><a href="{{ route("home") }}"
                                                                      class="grid grid-cols-[auto_auto] gap-2 hover:text-primary"><span
                    class="flex items-center"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"/>
                        <path
                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"/>
                    </svg>
                </span><span class="flex items-center mr-1 font-medium">Home</span></a><span>/ Projects</span>
        </div>
    </header>

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
                    <a href="https://www.linkedin.com/in/abutalha373/" target="_blank" id="myln"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"/>
                            </g>
                        </svg>
                    </a>
                    <a href="https://www.fiverr.com/abutalha373" target="_blank" id="myfr"
                       class="h-7 w-7 bg-primary border-2 border-white flex items-center justify-center">
                        <svg class="h-full w-full fill-white p-0.5" viewBox="-2.5 -2 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z"/>
                            <circle cx="14.375" cy="1.875" r="1.875"/>
                        </svg>
                    </a>
                    <a href="https://github.com/abutalha373" target="_blank" id="mygh"
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

</x-layout.app>
