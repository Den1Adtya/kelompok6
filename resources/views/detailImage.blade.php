<x-app-layout>

    <div class="container mx-auto px-10">
            <div class="w-full max-w-10xl rounded  bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
                <div class="md:flex items-center -mx-10">
                    <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                        <div class="relative">
                            
                            <img src="{{ asset('image/'.$dataImage->lokasiFile) }}" class="w-full rounded-xl z-1 relative z-1" alt="">
                            <a href="{{ route('detailImage.unduh',$dataImage->lokasiFile) }}" target="_blank" class="absolute bottom-5 ml-2 p-5 bg-[#002D74] text-white hover:text-white  rounded-full py-2 mx-auto hover:bg-transparent shadow-md">Unduh Gambar</a>

                        </div>
                    </div>

                    <div class="w-full md:w-1/2 px-10 overflow-y-auto">
                        <div class="mb-10">
                            <div class="flex flex-col items-start">
                                <div class="logo flex items-center justify-center gap-5 py-10">
                                    <img src="https://i.ibb.co/S7HRZdm/Proyek-2.png" width="30" alt="logoPinterest" />
                                    <h1 class="font-bold text-[15px]">SINTEREST</h1>
                                </div>
                                <h1 class="font-bold  text-4xl">{{ $dataImage->judulFoto }}</h1>
                                <p class="text-1xl">{{ $dataImage->deskripsiFoto }}</p>
                            </div>

                        </div>
                        <div class="flex justify-between">
                            <div class="inline-block align-bottom mr-5">
                                <h1 class="font-bold text-2xl">{{$data->namalengkap}}</h1>
                                <h2>{{$data->alamat}}</h2>
                            </div>
                            <div class="inline-block align-bottom">
                                  <!-- Menampilkan Tombol Like -->

                            <form action="{{ route('like') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="fotoID" value="{{ $dataImage->fotoID }}">
                                    <button type="submit" class="flex justify-center items-center gap-2">
                                        <svg viewBox="0 -0.5 21 21" version="1.1" width="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#002D74" stroke="#002D74"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>like [#fd7272]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-259.000000, -760.000000)" fill="#002D74"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M203,620 L207.200006,620 L207.200006,608 L203,608 L203,620 Z M223.924431,611.355 L222.100579,617.89 C221.799228,619.131 220.638976,620 219.302324,620 L209.300009,620 L209.300009,608.021 L211.104962,601.825 C211.274012,600.775 212.223214,600 213.339366,600 C214.587817,600 215.600019,600.964 215.600019,602.153 L215.600019,608 L221.126177,608 C222.97313,608 224.340232,609.641 223.924431,611.355 L223.924431,611.355 Z" id="like-[#fd7272]"> </path> </g> </g> </g> </g></svg>
                                        <p class="font-bold">{{$like}}</p>
                                    </button>
                                </form>

                                {{-- <form action="{{ route('unlike') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="fotoID" value="{{ $dataImage->fotoID }}">
                                    <button type="submit" class="flex justify-center items-center gap-2">
                                   unlike
                                    </button>
                                </form> --}}


                            </div>
                        </div>

                    </div>
                </div>
            </div> <br>
            <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl text-[#002D74] ">Komentar </h1>
            @guest
            <div class="flex items-center bg-[#002D74] text-white text-sm font-bold px-4 py-3 rounded-lg" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>Yuk ikut berkomentar dan kasih like di gambarnya dengan Register dan Login</p>
              </div>
            @endguest
            </div>
            <section class="flex justify-center py-5 gap-5 antialiased">

                @auth
                    @include('profile.komentar')
                @endauth

                <div class="container w-full overflow-y-auto flex flex-col  h-96">
                @if ($komentar->count() > 0)
                    @foreach ($komentar as $Komentar)
                        <div class="bg-indigo-950 rounded-lg p-5 relative mb-5">
                            @php
                                $currentUser = $users->firstWhere('id', $Komentar->id);
                            @endphp
                            @if ($currentUser)
                                <h1 class="font-bold relative mb-2 text-white">{{$currentUser->namalengkap}}</h1>
                            @else
                                <p class="font-bold relative mb-2 text-white">Unknown User</p>
                            @endif
                            <p class="relative mb-2 text-white">{{ $Komentar->isiKomentar }}</p>
                            <h6 class="font-bold text-gray-300">{{ $Komentar->waktu }}</h6>
                        </div>
                    @endforeach
                @else
                <div class="flex justify-center items-center">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/822c45d2-ea42-4b95-b77e-45fa1d7d7981/wgdsjNirOY.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    <div class="w-80 text-1xl"><span class="text-[#002D74]">Belum ada komentar!</span>
                        @auth
                        Tambahkan satu untuk memulai percakapan.
                        @else
                        Yuk berkomentar dengan melakukan Register dan Login
                        @endauth

                        </div>
                </div>
                @endif
                </div>



                </div>
            </section>

            <section class="py-5 container mx-auto flex flex-col justify-center items-center">
                <h1 class="text-2xl">Lainnya untuk dijelajahi!!</h1>
            </section>
        </div>

</x-app-layout>
