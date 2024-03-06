<x-app-layout>
        <div class="container px-10 mx-auto">

        <section class="py-10">
            <div class="banner flex flex-wrap justify-center items-center gap-x-44">
                <div class="content-text flex flex-col gap-3">
                    <h1 class="text-4xl w-80 " style="font-family: 'Ubuntu', sans-serif;">Capture<span class="text-[#002D74] text-6xl"> Moment,</span>   create memories. Let your photos tell the story on our website</h1>
                    
                    <div class="grup-button">
                        <button onclick="window.location.href='/upload'" class="bg-[#002D74] hover:bg-[#011f4b] delay-75 text-white font-semibold px-10 py-3 rounded-full" >Upload Image</button>
                    </div>
                </div>
                <div class="content-poto lg:py-0 py-2">
    <dotlottie-player src="https://lottie.host/c0ab123b-cc7f-4d6e-810a-832f68e6f8e2/mtU3efiEUg.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></dotlottie-player>
                </div>
            </div>
        </section>
        
        <section class="container body mx-auto flex flex-col justify-center items-center">
        
            <div class="container mx-auto px-10 flex flex-wrap gap-5">
                @if ($dataImage->count() > 0)
                  @foreach($dataImage as $image)
                  <div id="default-modal-{{$image->fotoID}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <img class="w-full cursor-pointer image rounded-xl   object-cover" src="{{ asset('image/' . $image->lokasiFile) }}" alt="{{$image->judulFoto}}" />
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal-{{$image->fotoID}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-gray-300 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                
                            <div class="px-3 w-full">
                                <img class="w-full cursor-pointer image rounded-xl  h-64 object-cover" src="{{ asset('image/' . $image->lokasiFile) }}" alt="{{$image->judulFoto}}" />
                                <button data-modal-target="default-modal-{{$image->fotoID}}" data-modal-toggle="default-modal-{{$image->fotoID}}">
                                    <div class="absolute inset-0 shadow-md w-full h-64 container mx-auto text-center py-32 font-bold  text-white opacity-0 transition-opacity duration-300 hover:opacity-100">
                                        View Image
                                    </div>
                                </button>
                            </div>
                
                      <div>
                        <div class="flex justify-center items-center gap-2">
                            <span class="text-white text-xs font-bold rounded-lg bg-[#002D74]  inline-block  py-1.5 px-4 cursor-pointer">{{$image->categoryName}}</span>
                            <a href="{{ url('detailImageEdit/'.$image->fotoID. '/'. $image->id) }}">
                            <span class="text-white text-xs flex font-bold rounded-lg gap-2 py-1.5 px-4  cursor-pointer bg-[#002D74] transition ease-in-out delay-75 hover:bg-red-700 rounded-lg hover:-translate-y-1 hover:scale-110">
                                <svg width="10" viewBox="0 0 24 24" fill="none" class="hover:stroke-white " stroke="#ffff " xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Edit
                            </span>
                            </a>
                            <form  action="{{ route('dataImage.delete', $image->fotoID) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-[#002D74] transition ease-in-out delay-75 hover:bg-red-700 rounded-lg hover:-translate-y-1 hover:scale-110">
                                    <span class="text-white text-xs font-bold gap-1 rounded-lg flex  py-1.5 px-4 cursor-pointer hover:text-white">
                                    <svg fill="#ffffff" class="hover:fill-white hover:stroke-white" width="10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff ">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                    <g id="SVGRepo_iconCarrier">
                                    <path d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z"/>
                                    </g>
                                    </svg>
                                    Delete
                                    </span>
                                </button>
                
                            </form>
                        </div>
                        <h1 class="text-2xl mt-2 ml-4 font-bold text-gray-800 cursor-pointer hover:text-gray-900 transition duration-100">{{substr($image->judulFoto, 0, 50)}}</h1>
                        <div class="p-4">
                            <p id="deskripsi-foto-{{ $image->fotoID }}" class="select-all mt-1 mb-2 text-gray-700">
                                {{ substr($image->deskripsiFoto, 0, 50) }}...
                            </p>
                        </div>
                
                      </div>
                        <div class="p-6 pt-3">
                            <a href="{{ url('/detailImage/'.$image->fotoID. '/'. $image->id)}}">
                                <div
                                class="block w-full select-none rounded-lg bg-gray-900 py-3.5 px-7 text-center align-middle font-sans text-sm font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Detail Image
                                </div>
                            </a>
                        </div>
                    </div>
                
                  @endforeach
                  @else
                    <div class="flex  justify-center items-center">
                        <img class="w-96 lg:w-[30em]" src="https://img.freepik.com/free-vector/404-error-lost-space-concept-illustration_114360-7971.jpg?size=626&ext=jpg&ga=GA1.1.214594539.1708916087&semt=ais">
                       <div class="font-semibold mb-10 lg:text-3xl">
                        Image is not on the server <br><span class="text-[#6497B1]"> upload the picture</span>
                       </div>
                    </div>
                    @endif
                </div>
                
                
            
                
                
                
                
        </section>

    </div>
</x-app-layout>


