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
                        <h6 class="m-0 font-semibold text-gray-700">Riwayat</h6>
                        <div class="flex items-center justify-center">
                            <button href="" data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="py-1 px-3 bg-dgreen text-body font-semibold text-lwhite rounded-md flex items-center space-x-2">
                                <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 16 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                                </svg>
                                <span>Export</span>
                            </button>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <div class="overflow-x-auto mt-4">
                            @livewire('riwayat.show')
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
    @vite('resources/js/app.js')
</body>

</html>
