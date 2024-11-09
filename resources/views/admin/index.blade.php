@section('page-title')
    {{ 'Admin' }}
@endsection
<x-layout.app>
    <div class="bg-gray-100 pb-4 min-h-screen">
        <section class="bg-white  py-4 flex justify-center">
            <div class="container bg-white flex justify-between items-center">
                <h2 class="text-xl font-bold ">Welcome <span
                        class="text-primary">{{Auth::guard('admin')->user()->first_name." ".Auth::guard('admin')->user()->last_name}}</span>

                </h2>
                <span>Visit: <a href={{route('home')}} target="_blank" class="text-primary">Home</a> </span>
                <form method="POST" action="{{route('admin.logout')}}">
                    @csrf
                    <button type="submit" class="btn-primary">Logout</button>
                </form>
            </div>
        </section>


        {{--        nav and hero --}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Nav & Hero settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.nav') }}" id="nav_and_hero"
                          class="overflow-hidden duration-300" enctype="multipart/form-data">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')
                        <input name="id" value="{{$nav->id}}" hidden>
                        <input name="nav_logo_previous" value="{{$nav->nav_logo}}" hidden>
                        <input name="hero_bg_previous" value="{{$nav->hero_bg}}" hidden>
                        <input name="hero_bg_small_previous" value="{{$nav->hero_bg_small}}" hidden>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="p-1">
                                <label class="text-gray-700">Select a logo</label>
                                <input type="file" name="nav_logo"
                                       class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                       accept="image/*"/>

                                @error('nav_logo')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror

                            </div>

                            <div class="p-1">
                                <label class="text-gray-700">Select a background image</label>
                                <input type="file" name="hero_bg"
                                       class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                       accept="image/*"/>

                                @error('hero_bg')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Select a background image(small screen)</label>
                                <input type="file" name="hero_bg_small"
                                       class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                       accept="image/*"/>

                                @error('hero_bg_small')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror

                            </div>

                            <div class="p-1">
                                <label class="text-gray-700">Hero title Name</label>
                                <input name="hero_title" type="text" value="{{ $nav->hero_title }}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">

                                @error('hero_title')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="p-1">
                                <label class="text-gray-700">Hero tagline</label>
                                <input name="hero_tagline" type="text" value="{{ $nav->hero_tagline }}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">

                                @error('hero_tagline')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button
                                class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{--        about  --}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">About settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_about">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.about') }}" id="about"
                          class="overflow-hidden duration-300">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')

                        <div class="grid grid-cols-1 gap-6 mt-4">
                            <input name="id" value="{{$about->id}}" hidden>
                            <div class="p-1">
                                <label class="text-gray-700">Description</label>
                                <textarea name="description" type="text"
                                          class="h-32 resize-none block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">{{$about->description}}
                                </textarea>
                                @error('description')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button type="submit"
                                    class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{--        skills--}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Skills Settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_education">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div id="education" class="overflow-hidden duration-300">
                        <div class="grid sm:grid-cols-3 gap-2">
                            <div class="bg-gray-100 p-2">
                                <h2 class="text-lg font-semibold capitalize">Technology</h2>
                                <table class="table-auto w-full">
                                    @foreach($skillTech as $a)
                                        <tr class="border-b border-b-white">
                                            <td class="flex justify-between">
                                                <div>{{$a->name}}</div>
                                                <form method="POST" id="delete-tech"
                                                      action="{{ route('delete.skills',$a->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" form="delete-tech"
                                                            class="text-sm text-primary">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="bg-gray-100 p-2">
                                <h2 class="text-lg font-semibold capitalize">Framework</h2>
                                <table class="table-auto w-full">
                                    @foreach($skillFra as $a)
                                        <tr class="border-b border-b-white">
                                            <td class="flex justify-between">
                                                <div>{{$a->name}}</div>
                                                <form method="POST" id="delete-fra"
                                                      action="{{ route('delete.skills',$a->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" form="delete-fra"
                                                            class="text-sm text-primary">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="bg-gray-100 p-2">
                                <h2 class="text-lg font-semibold capitalize">Tools</h2>
                                <table class="table-auto w-full">
                                    @foreach($skillTool as $a)
                                        <tr class="border-b border-b-white">
                                            <td class="flex justify-between">
                                                <div>{{$a->name}}</div>
                                                <form method="POST" id="delete-tool"
                                                      action="{{ route('delete.skills',$a->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" form="delete-tool"
                                                            class="text-sm text-primary">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('add.skills') }}">
                            {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                            @csrf

                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <select name="title"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                        <option selected disabled>Select a title</option>
                                        <option value="technology">Technology</option>
                                        <option value="framework">Framework</option>
                                        <option value="tools">Tools</option>
                                    </select>
                                    @error('title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Name</label>
                                    <input name="name" type="text"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                                           placeholder="HTML5">
                                    @error('name')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Icon (Svg, Remove size from code)</label>
                                    <textarea name="icon" type="text"
                                              class="resize-none h-32 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"></textarea>
                                    @error('icon')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end mt-6">

                                <button type="submit"
                                        class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                    Add new
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        {{--        Education--}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Education Settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_education">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.education') }}" id="education"
                          class="overflow-hidden duration-300">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')
                        <input name="id" value="{{$education->id}}" hidden>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="p-1">
                                <label class="text-gray-700">Degree</label>
                                <input name="degree" type="text" value=" {{$education->degree}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('degree')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Major</label>
                                <input name="major" type="text" value="{{$education->major}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('major')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Institution</label>
                                <input name="institution" type="text" value="{{$education->institution}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('institution')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button type="submit"
                                    class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{--        Services  --}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Services settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_services">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.services') }}" id="services"
                          class="overflow-hidden duration-300">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')

                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="bg-gray-200 p-2 rounded">
                                <h2 class="font-bold text-xl">Service 1</h2>
                                <input name="services[0][id]" value="{{$services[0]->id}}" hidden>
                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <input name="services[0][title]" type="text" value=" {{$services[0]->title}}"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('services.0.title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Description</label>
                                    <textarea name="services[0][description]" type="text"
                                              class="resize-none overflow-y-auto block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">{{$services[0]->description}}
                                    </textarea>
                                    @error('services.0.description')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="bg-gray-200 p-2 rounded">
                                <h2 class="font-bold text-xl">Service 2</h2>
                                <input name="services[1][id]" value="{{$services[1]->id}}" hidden>
                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <input name="services[1][title]" type="text" value=" {{$services[1]->title}}"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('services.1.title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Description</label>
                                    <textarea name="services[1][description]" type="text"
                                              class="resize-none overflow-y-auto block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">{{$services[1]->description}}
                                    </textarea>
                                    @error('services.1.description')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="bg-gray-200 p-2 rounded">
                                <h2 class="font-bold text-xl">Service 3</h2>
                                <input name="services[2][id]" value="{{$services[2]->id}}" hidden>
                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <input name="services[2][title]" type="text" value=" {{$services[2]->title}}"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('services.2.title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Description</label>
                                    <textarea name="services[2][description]" type="text"
                                              class="resize-none overflow-y-auto block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">{{$services[2]->description}}
                                    </textarea>
                                    @error('services.2.description')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="bg-gray-200 p-2 rounded">
                                <h2 class="font-bold text-xl">Service 4</h2>
                                <input name="services[3][id]" value="{{$services[3]->id}}" hidden>
                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <input name="services[3][title]" type="text" value=" {{$services[3]->title}}"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('services.3.title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Description</label>
                                    <textarea name="services[3][description]" type="text"
                                              class="resize-none overflow-y-auto block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">{{$services[3]->description}}
                                    </textarea>
                                    @error('services.3.description')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button type="submit"
                                    class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{--        projects--}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Projects Settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_education">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div id="education" class="overflow-hidden duration-300">
                        <div class="">
                            <div class="bg-gray-100 p-2">
                                <h2 class="text-lg font-semibold capitalize">Projects</h2>
                                <table class="table-auto w-full">
                                    <tr class="border-b-2 border-b-white font-bold">
                                        <td>SL</td>
                                        <td>Title</td>
                                        <td>Tech</td>
                                        <td>Action</td>
                                    </tr>
                                    @foreach($projects as $a)
                                        <tr class="border-b border-b-white">
                                            <td>{{$loop->iteration}}.</td>
                                            <td>{{$a->title}}</td>
                                            <td>{{$a->technology}}</td>
                                            <td>
                                                <form method="POST" id="delete-pro{{$a->id}}"
                                                      action="{{ route('delete.projects',$a->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" form="delete-pro{{$a->id}}"
                                                            class="text-sm text-primary">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('add.project') }}" enctype="multipart/form-data">
                            {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                            @csrf

                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                                <div class="p-1">
                                    <label class="text-gray-700">Title</label>
                                    <input name="title" type="text"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('title')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Github Link</label>
                                    <input name="github_link" type="text"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('github_link')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Live Link</label>
                                    <input name="live_link" type="text"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('live_link')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Select a Image</label>
                                    <input type="file" name="image"
                                           class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                           accept="image/*"/>
                                    @error('image')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror

                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Tech(Use comma)</label>
                                    <input name="technology" type="text"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                    @error('technology')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="p-1">
                                    <label class="text-gray-700">Features(Text/HTML)</label>
                                    <textarea name="features" type="text"
                                              class="resize-none h-32 block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"></textarea>
                                    @error('features')
                                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex justify-end mt-6">
                                <button type="submit"
                                        class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                    Add new
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        {{--        Contacts --}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Contacts settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_contacts">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.contacts') }}" id="contacts"
                          class="overflow-hidden duration-300">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')
                        <input name="id" value="{{$contacts->id}}" hidden>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="p-1">
                                <label class="text-gray-700">Phone</label>
                                <input name="phone" type="text" value=" {{$contacts->phone}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('phone')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Email</label>
                                <input name="email" type="text" value="{{$contacts->email}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('email')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Address</label>
                                <input name="address" type="text" value="{{$contacts->address}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('address')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button type="submit"
                                    class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{--        Social links--}}
        <section class="flex justify-center">
            <div class="container">
                <div class=" p-6 mx-auto bg-white rounded-md shadow-md mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-primary capitalize">Social Link Settings</h2>
                        <div class="cursor-pointer rotate-180 duration-150" id="collapse_button_social">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('update.socials') }}" id="social_links"
                          class="overflow-hidden duration-300">
                        {{--                          class="overflow-hidden max-h-0 duration-300">--}}
                        @csrf
                        @method('PATCH')
                        <input name="id" value="{{$socials->id}}" hidden>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="p-1">
                                <label class="text-gray-700">Github (include https://)</label>
                                <input name="github" type="text" value=" {{$socials->github}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('github')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">LinkedIn (include https://)</label>
                                <input name="linkedin" type="text" value="{{$socials->linkedin}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('linkedin')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="p-1">
                                <label class="text-gray-700">Fiverr (include
                                    https://)</label>
                                <input name="fiverr" type="text" value="{{$socials->fiverr}}"
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                                @error('fiverr')
                                <span class="text-xs font-bold text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">

                            <button type="submit"
                                    class="bg-primary border border-primary rounded px-4 py-1.5 text-white hover:bg-rose-600 inline-flex items-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Restore scroll position
            if (localStorage.getItem("scrollPosition")) {
                window.scrollTo(0, localStorage.getItem("scrollPosition"));
                localStorage.removeItem("scrollPosition");
            }

            // Save scroll position before leaving the page
            window.addEventListener("beforeunload", function () {
                localStorage.setItem("scrollPosition", window.scrollY);
            });
        });
    </script>

</x-layout.app>

{{--{{ Auth::guard('admin')->user()->email }}--}}
