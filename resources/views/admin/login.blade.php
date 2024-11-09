<x-nav-main>
    <div class="h-screen flex justify-center bg-gray-100">
        <div class="container flex justify-center items-center">
            <form method="POST" action="{{route('admin.login')}}"
                  class="flex flex-col w-full max-w-lg p-12 rounded shadow-lg bg-white">
                @csrf
                <div>
                    <label for="email" class=" text-sm font-semibold">Email</label>
                    <input name="email" type="email" value="{{ Old('email') }}"
                           class="w-full border h-12 px-4 mt-2 rounded focus:outline-none focus:ring-2 ring-primary/40">
                    @error('email')
                    <span class="text-xs font-bold text-red-500">{{$message}}</span>
                    @enderror
                    @error('password')
                    <br><span class="text-xs font-bold text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class=" mt-3 text-sm font-semibold">Password</label>
                    <input name="password" type="password"
                           class=" w-full border h-12 px-4 mt-2 rounded focus:outline-none focus:ring-2 ring-primary/40">
                </div>
                <button type="submit"
                        class=" mt-3 btn-shadow px-3 py-2 sm:px-4 sm:py-3 text-xs sm:text-sm hover:bg-rose-700 text-center font-bold text-white bg-primary">
                    Login
                </button>
                <div class="flex justify-center mt-6 space-x-2 text-sm">
                    <a rel="noopener noreferrer" href="#"
                       class="p-1.5 rounded-md font-medium text-black hover:text-primary duration-75">Forgot
                        Password?</a>
                </div>
            </form>
        </div>
    </div>

</x-nav-main>
