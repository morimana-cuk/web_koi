<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        /* Atur warna latar belakang yang sesuai */
        body {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="flex flex-col h-screen">
    <div class="flex h-screen">
        @livewire('partials.sidebar')
        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            @livewire('partials.header')

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4">
                <div class="bg-white shadow-lg rounded-lg mb-4">
                    <div class="flex justify-between items-center px-4 py-3 border-b border-gray-200 bg-gray-50">
                        <h6 class="m-0 font-semibold text-gray-700">Karyawan</h6>
                        <button
                            class="bg-gray-800 text-white text-body px-3 py-1 rounded-md hover:bg-gray-700 focus:outline-none"
                            data-modal-target="default-modal" data-modal-toggle="default-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square inline-block mr-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path fill-rule="evenodd"
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            <span class="inline-block">Tambah</span>
                        </button>
                    </div>
                    <div class="px-4 pb-4">
                        <div class="overflow-x-auto mt-4">
                            <!-- Livewire Component untuk menampilkan data karyawan -->
                            @livewire('karyawan.show')
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            @livewire('partials.footer')

            <!-- Logout form (hidden by default) -->
            <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="logout" value="true">
            </form>
        </div>
    </div>
    @livewire('karyawan.createmodal')

    <!-- JavaScript untuk fitur-fitur seperti dropdown, modal, dll -->
    <script>
        // Fungsi untuk toggle dropdown
        function toggleDropdown(event) {
            var dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Fungsi untuk logout
        function logout() {
            document.getElementById('logout-form').submit();
        }
    </script>

    @vite('resources/js/app.js')
</body>

</html>
