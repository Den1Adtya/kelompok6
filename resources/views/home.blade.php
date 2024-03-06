@extends('layouts.main')
@section('content')

<div class="container mx-auto px-10">
     {{-- === header === --}}
    <div class="banner w-full">
        <section class="py-5">
            <div class="banner flex lg:flex-row sm:gap-10 flex-col-reverse justify-center items-center gap-x-20">
                
                <div class="content-text flex flex-col gap-3">
                    <h1 class="text-4xl w-80 " style="font-family: 'Ubuntu', sans-serif;"><span class="text-[#002D74] text-6xl">Sinterest,</span> <p> Unleash your creativity with our diverse photo gallery. Start exploring!   </p>
                    <div class="grupsearch ">
                        <form class="py-2" action="{{ url('/search')}}" method="GET">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-[#011f4b] focus:border-[#011f4b] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Search Image..." required>
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#002D74] hover:bg-[#011f4b] focus:ring-4 focus:outline-none focus:ring-[#011f4b] font-medium rounded-3xl text-sm px-4 py-2 dark:bg-[#002D74] dark:hover:bg-[#011f4b]dark:focus:ring-[#011f4b]">Search</button>
                        </div>
                    </form>

                    </div>
                </div>
                <div class="content-poto lg:py-0 pl-1 ">
                    <img src="{{asset('assets/image/image.png')}}" class="w-[30em]" alt="objek">
                </div>  
            </div>
        </section>
    </div>
     {{-- === akhir header === --}}
    
    <div class="mb-10">
     <form  id="categoryForm" action="{{ url('/categori')}}" method="GET">
        <select name="categori" class="rounded-full transform transition duration-500 hover:border-[#002D74] float-right mr-20 select-none px-3  py-1" id="categori">
            <option selected>Select Category</option>
            @foreach ($category as $kategori)
            <option value="{{$kategori->categoryName}}">{{$kategori->categoryName}}</option>
            @endforeach 
            {{-- === Looping Data Category akhir === --}}
        </select>
    </form>
</div>
    <div class="container py-3 mx-auto ">
        <div class="content">
            
        {{-- === data image === --}}
        @if ($dataImage->count() > 0)
<div class="grid grid-cols-2 md:grid-cols-3 gap-4 lg:px-10 px-4  py-5">

    @foreach ( $dataImage as $image )
    <div>
        {{-- <a href="{{ route('detail', ['fotoID' => $image->fotoID]) }}"> --}}
            <a href="{{ url('/detailImage/'.$image->fotoID. '/'. $image->id)}}">
        <img class="object-cover  w-[1080px] w-64 h-64 rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl" src="{{ asset('image/' . $image->lokasiFile) }}"  alt="{{$image->judulFoto}}"></a>
    </div>
    @endforeach

</div>
@else
<div class="container mx-auto">
    <div class="flex flex-col justify-center items-center">
        <div class="image p-10 items-center"> 
            <img class="w-80 mx-auto" src="https://img.freepik.com/free-vector/oops-404-error-with-broken-robot-concept-illustration_114360-1932.jpg?size=626&ext=jpg&ga=GA1.1.2035906727.1705982959&semt=ais">
        </div>
        <div class="text  font-semibold text-2xl text-center mb-10 ">
            Image not yet available on the server <br> <span class="text-[#002D74]">please login and upload the image</span>
        </div>
    </div>
</div>
    @endif

    </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('categori').addEventListener('change', function() {
            document.getElementById('categoryForm').submit();
        });
    });
</script>





