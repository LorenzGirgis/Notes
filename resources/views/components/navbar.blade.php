<div class="min-h-screen flex flex-col">
    <header class="flex justify-between items-center bg-black">
        <img class="w-8 h-8" src="{{ asset('logo.png') }}" alt="logo" /> 
        <div class="relative">
            @auth
                <button class="text-white font-semibold focus:outline-none" id="userDropdown">
                    {{ Auth::user()->name }} <span class="">&#x25BE;</span>
                </button>
                <ul class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-lg shadow-md z-10 hidden" id="dropdownMenu">
                    <li><a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-100 hover:text-spotify-dark transition-colors duration-300">Profile</a></li>
                    @if (Auth::user()->role == 'admin')
                    <li><a href="{{ route('admin') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-100 hover:text-spotify-dark transition-colors duration-300">Admin</a></li>
                @endif
                    <li><a href="{{ route('notes') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-100 hover:text-spotify-dark transition-colors duration-300">Notes</a></li>
                    <li><a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-blue-100 hover:text-spotify-dark transition-colors duration-300">Logout</a></li>
                </ul>
            @endauth
            @guest
            <a href="{{ route('login') }}"
               class="inline-block px-4 py-2 text-white font-semibold hover:text-gray-800 transition-colors duration-300">
                Login
            </a>
        @endguest
        
        
        </div>
    </header>
    <script>
        document.addEventListener('click', function (event) {
            var isClickInside = document.querySelector('.relative').contains(event.target);

            if (!isClickInside) {
                var dropdown = document.getElementById('dropdownMenu');
                dropdown.classList.add('hidden');
            }
        });
        document.getElementById('userDropdown').addEventListener('click', function () {
            var dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        });
    </script>