<script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="h-screen  ">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div class="flex justify-between gap-2">
                <a href="/">
                <img class="w-10 cursor-pointer" src="{{asset('assets/image/logo.png')}}" alt="...">
                </a>
            </div>
          
            <ul class="text-center mb-6 text-[#002D74] text-2xl font-bold flex md:flex-row flex-col md:items-center mt-5 ">
                <div>
                <li class="px-10">
                    <a href="/">
                    Home</a>
                </li>
                </div>
            </ul>
            <div>

                @if(Route::has('login'))
                @auth
                   
              
                <button type="button" class="flex rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{asset('assets/image/profile.png')}}">
                  </button>
                  <!-- Dropdown menu -->
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    
                    <ul class="py-2" aria-labelledby="user-menu-button">
                      
                      <li>
                        <a href="dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="/akun" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                      </li>
                      <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <li>
                        <a href="route('logout')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault();
                        this.closest('form').submit();">{{ __('Log Out') }}</a>
                      </li>
                      </form>
                    </ul>
                    @else
                    <span class="btn px-5  inline-block px-5 rounded-full bg-[#002D74] hover:bg-white hover:text-[#002D74] focus:text-[#002D74] focus:bg-gray-200 text-gray-50 font-bold leading-loose transition duration-200" >
                        <a href="{{route('login')}}" class="justify-center">login</a>
                    </span>
                   
                @endauth
            </div>
            @endif
        </nav>
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>