<header class="bg-white border-b border-gray-200 p-4">
    <div class="flex justify-between items-center">
        <!-- Monitoring text -->
        <div class="text-lg font-semibold text-gray-800">Monitoring</div>

        <!-- Dropdown menu for profile -->
        <div class="relative flex ">
            <span class="mr-2 text-title2">{{ Auth::user()->name }}</span>
            <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                <img src="https://via.placeholder.com/40" alt="Profile" class="w-8 h-8 rounded-full">
            </button>
            <div id="profileDropdown"
                class="origin-top-right absolute right-0 mt-10 w-48 bg-white border border-gray-200 rounded-md shadow-lg py-1 hidden">
                <a href="{{ route('profile') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                @livewire('components.logout-button')
            </div>
        </div>
        
    </div>
</header>
