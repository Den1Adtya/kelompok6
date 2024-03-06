<x-guest-layout>

    <x-auth-session-status :status="session('status')" />
    <div class="bg-gray-100 flex rounded-3xl shadow-lg max-w-4xl p-5 mx-auto items-center">
        <div class="md:w-1/2 px-8 md:px-20">
            <h2 class="font-bold text-3xl text-[#002D74]">Register</h2>
<p class="text-sm mt-4 text-[#002D74]">Create your account to begin.</p>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
                @csrf
                {{-- colummn1 --}}
                <div class="flex flex-wrap -mx-10">
                    <div class="w-full md:w-1/2 px-1 md:mb-0">
                        <x-text-input id="username" class="block mt-8 w-full rounded-xl" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="Username"/>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                
                    <div class="w-full md:w-1/2 px-1">
                        <x-text-input id="namalengkap" class="block mt-8 w-full rounded-xl" type="text" name="namalengkap" :value="old('namalengkap')" required autofocus autocomplete="namalengkap" placeholder="Full Name"/>
                        <x-input-error :messages="$errors->get('namalengkap')" class="mt-2" />
                    </div>
                </div>
                
                <div class="flex flex-wrap -mx-10">
                    <div class="w-full md:w-1/2 px-1 md:mb-0">
                        <x-text-input id="password" class="block mt-3 w-full rounded-xl" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                
                    <div class="w-full md:w-1/2 px-1">
                        <x-text-input id="email" class="block mt-3 w-full rounded-xl" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                
                </div>

                <div class="flex flex-wrap -mx-10">
                    <div class="w-full md:w-1/2 px-1 md:mb-0">
                     

                        <x-text-input id="password_confirmation" class="block mt-3 w-full rounded-xl"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                      </div>

                      <div class="w-full md:w-1/2 px-1 md:mb-0">
                     
                        <x-text-input id="alamat" class="block mt-3 w-full rounded-xl" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" placeholder="Addres"/>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                </div>
                <div class="flex flex-wrap -mx-5">
                    <div class="Remember flex justify-center items-center gap-2 text-[12px] ">
                        <input type="checkbox" class="rounded-lg" name="remember" id="remember">
                        <div>Remember Me</div>
                    </div>
                </div>
                  <div class="button w-full ">
                    <x-primary-button class=" rounded-xl text-white py-2 hover:scale-105 duration-300">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                
                    <div class="mt-1 text-xs flex justify-between items-center text-[#002D74]"> Have Account? &nbsp; <a href="/login" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Login</a></div>
                

            </form>
            
        </div>
        <div class="md:block hidden w-2/5">
            <img class="rounded-2xl" src="https://images.unsplash.com/photo-1708913156542-9042bb5410eb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NXx8fGVufDB8fHx8fA%3D%3D">
          </div>
    </div>
    </div>

</x-guest-layout>




