<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        @livewire('partials.sidebar')
        <!-- Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            @livewire('partials.header')
            <!-- Logout form (hidden by default) -->
            <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="logout" value="true">
            </form>

            <!-- Main Content -->
            <main class="p-4">
                <div class="bg-white rounded-lg shadow-md mt-4 p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Karyawan</h2>
                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full bg-white border-collapse border border-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">Column 1</th>
                                    <th class="border border-gray-300 px-4 py-2">Column 2</th>
                                    <th class="border border-gray-300 px-4 py-2">Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Data 1</td>
                                    <td class="border border-gray-300 px-4 py-2">Data 2</td>
                                    <td class="border border-gray-300 px-4 py-2">Data 3</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Data 4</td>
                                    <td class="border border-gray-300 px-4 py-2">Data 5</td>
                                    <td class="border border-gray-300 px-4 py-2">Data 6</td>
                                </tr>
                                <!-- More rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            
        </div>
    </div>

    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.bg-gray-800').classList.toggle('hidden');
        });

        function toggleDropdown() {
            var dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }

        function logout() {
            // Simulate form submission for logout
            document.getElementById('logout-form').submit();
        }
    </script>
    @vite('resources/js/app.js')
</body>

</html>
