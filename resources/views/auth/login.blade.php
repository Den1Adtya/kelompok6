<x-guest-layout>
    <!-- Session Status -->
    
       
                    <x-auth-session-status :status="session('status')" />
                    <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 mx-auto items-center">
                        <div class="md:w-1/2 px-8 md:px-16">
                            <h2 class="font-bold text-3xl text-[#002D74]">Login</h2>
            <p class="text-sm mt-4 text-[#002D74]">Continue your journey by signing in to your account.</p>
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                        @csrf
                        
                            
                            <x-text-input id="email" p class="block mt-8 w-full rounded-xl" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            {{-- PASS --}}
                            <div class="relative">

                            <x-text-input id="password" class="block p-2 w-full rounded-xl"
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                {{-- END PASS --}}
                            </div>
                            <div class="button w-full">
                                <x-primary-button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">  
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form> 
                            <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                @endauth
                            </div>
                             <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                                <p>Don't have an account?</p> &nbsp; <a href="/register" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300" >Register</a></div>
                                
                        </div>
                    
                    
                     
        
                <!-- image -->
          <div class="md:block hidden w-2/5">
            <img class="rounded-2xl" src="https://images.unsplash.com/photo-1708913156542-9042bb5410eb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NXx8fGVufDB8fHx8fA%3D%3D">
          </div>
        </div>







        {{-- <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}
    </form>
</x-guest-layout>
