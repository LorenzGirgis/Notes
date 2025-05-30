<nav class="w-1/4 bg-white p-4 shadow-md rounded-lg">
    <ul>
        <li class="mb-3 relative">
            <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-200">
                @if (Auth::user()->profile_picture)
                    <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}" class="object-cover w-full h-full">
                @else
                    <img src="https://via.placeholder.com/150" alt="Default Profile Picture" class="object-cover w-full h-full">
                @endif
            </div>
            <button @click="open = true" class="absolute top-0  right-0 shadow-m transition-colors duration-300">
                <i class="fas fa-pen"></i>
            </button>
            <p class="text-center mt-2 text-lg font-semibold">{{ Auth::user()->name }}</p>
        </li>
        <li class="mb-2">
            <a href="{{ route('notes') }}"
               class="flex items-center space-x-2 py-2 px-2 rounded-md hover:bg-blue-100 transition-colors duration-300 @if(Request::is('notes')) bg-blue-100 @endif">
               Notes
            </a>
        </li>
        <li class="mb-2">
            <a href="{{ route('profile') }}"
               class="flex items-center space-x-2 py-2 px-2 rounded-md hover:bg-blue-100 transition-colors duration-300 @if(Request::is('profile')) bg-blue-100 @endif">
                Account Details
            </a>
        </li>
        <li>
            <a href="{{ route('password') }}"
               class="flex items-center space-x-2 py-2 px-2 rounded-md hover:bg-blue-100 transition-colors duration-300 @if(Request::is('password')) bg-blue-100 @endif">
                Change Password
            </a>
        </li>
    </ul>
</nav>
