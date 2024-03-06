<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white w-1/3 mt-10 rounded-lg">
          <div class="flex items-center justify-center pt-10 flex-col">
            <img src="{{asset('assets/image/profile.png')}}" class="rounded-full w-32">
            <h1 class="text-gray-800 font-semibold text-xl mt-5">{{$user->namalengkap}}</h1>
            <h1 class="text-gray-500 text-sm">{{$user->email}}</h>
              
          </div>
          <div class="flex justify-between p-4 mt-10">
             <div>
                <h1 class="text-xs uppercase text-gray-500">Address</Address></h1>
                <h1 class="text-sm text-black font-bold"> {{$user->alamat}}</h>
              </div>
            <div>
              <h1 class="text-xs uppercase text-gray-500">Account created</h1>
              <h1 class="text-sm text-black font-bold"> {{date('Y-m-d')}}</h>
            </div>
            
         <div>
            <button
  class="inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110" x-data=""
  x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
>
  <svg
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-5 w-5 mr-2"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
      stroke-width="2"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
  {{ __('Delete Account') }}
</button>

         </div>
          </div>
          {{-- <div class="flex items-center justify-center mt-3 mb-6 flex-col">
            <h1 class="text-xs text-gray-500">Get Connected</h1>
            <div class="flex mt-2">
            <img src="https://www.iconsdb.com/icons/preview/gray/facebook-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">  
                 <img src="https://www.iconsdb.com/icons/preview/gray/twitter-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">
             <img src="https://www.iconsdb.com/icons/preview/gray/google-plus-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full mr-3">
              <img src="https://www.iconsdb.com/icons/preview/gray/instagram-6-xxl.png" alt="" class="w-6 border-2 p-1 rounded-full">  
            </div>
            
          </div> --}}
        </div>
      
      </div>
      
{{-- <div class="container mx-auto px-1">
    <div class="flex flex-wrap justify-center items-center gap-10">

        <dotlottie-player src="https://lottie.host/44cc8e9b-98a6-4ec7-b909-6f31b361f4cc/2bw16EnMEz.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>

        <div class="card-profile relative -left-10 lg:left-0">
                <div class="w-96 h-56 m-auto bg-[#6497B1] rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">
                    <div class="w-full px-8 absolute top-8">
                        <div class="flex justify-between">
                            <div class="">
                                <p class="font-light">
                                    Name
                                </h1>
                                <p class="font-medium tracking-widest">
                                    {{$user->namalengkap}}
                                </p>
                            </div>
                            <img class="w-14" src="https://i.ibb.co/bRFCjDL/20240223-232826.png" />
                        </div>
                        <div class="pt-1">
                            <p class="font-light">
                                Email Akun
                            </h1>
                            <p class="font-medium tracking-more-wider">
                                {{$user->email}}
                            </p>
                        </div>
                        <div class="pt-6 pr-6">
                            <div class="flex justify-between">
                                <div class="">
                                    <p class="font-light text-xs">
                                        Alamat
                                    </h1>
                                    <p class="font-medium tracking-wider text-sm">
                                        {{$user->alamat}}
                                    </p>
                                </div>
                                <div class="">
                                    <p class="font-light text-xs text-xs">
                                        Tanggal Akun
                                    </h1>
                                    <p class="font-medium tracking-wider text-sm">
                                        {{date('Y-m-d')}}
                                    </p>
                                </div>

                                <div class="">
                                    <p class="font-light text-xs">
                                        Hapus Akun
                                    </p>
                                    <p class="font-bold tracking-more-wider text-sm">
                                    <x-danger-button
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                >{{ __('Delete Account') }}</x-danger-button>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-12 h-12 flex items-center text-gray-600 mx-auto"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
            <h2 class="text-lg font-medium text-white dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <button
                class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border-2 border-gray-600 hover:border-gray-700 text-gray-300 rounded-full hover:shadow-lg hover:bg-gray-800 transition ease-in duration-300" x-on:click="$dispatch('close')"
              >
              {{ __('Cancel') }}
              </button>
                <button
                    class="bg-red-500 hover:bg-red-600 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-300 hover:border-red-500 text-white rounded-full transition ease-in duration-300"
                  >
                  {{ __('Delete Account') }}
                  </button>
            </div>
        </form>
    </x-modal>
</div>
</x-app-layout>
