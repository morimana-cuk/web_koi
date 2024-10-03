<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <style>
        .progress-container {
            position: relative;
            width: 100%;
            height: 20px;
            background: linear-gradient(to right, red, yellow, green);
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .progress-bar-fill {
            height: 100%;
            width: 0;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        .progress-needle {
            position: absolute;
            top: -10px;
            width: 2px;
            height: 40px;
            background: black;
            transition: left 0.5s;
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
                <div class="gap-4">
                    <div class="bg-white shadow-lg rounded-lg mb-4">
                        <div class="flex justify-between items-center px-4 py-3 border-b border-gray-200 bg-gray-50">
                            <h6 class="m-0 font-semibold text-gray-700">Dashboard</h6>
                        </div>
                        <div class="px-8 py-8">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('detail.dashboard1', ['id' => 1]) }}" class="col-span-1">
                                    <div
                                        class="bg-red-400 h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                                        <div class="w-full mb-6 items-center mt-4">
                                            <p class="text-white text-lg font-bold">Lokasi Alat 1</p>
                                            <p class="text-white text-sm font-bold">Keterangan Lokasi:</p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $temperature1 ?? 'No Temperature data available.' }} C
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">pH</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $ph1 ?? 'No pH data available.' }} %
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Amonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $amonia1 ?? 'No Amonia data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">TDS</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $tds1 ?? 'No TDS data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">DO</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $do1 ?? 'No DO data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                                <a href="{{ route('detail.dashboard2', ['id' => 2]) }}" class="col-span-1">
                                    <div
                                        class="bg-red-400 h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                                        <div class="w-full mb-6 items-center mt-4">
                                            <p class="text-white text-lg font-bold">Lokasi Alat 2</p>
                                            <p class="text-white text-sm font-bold">Keterangan Lokasi:</p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $temperature1 ?? 'No Temperature data available.' }} C
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">pH</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $ph1 ?? 'No pH data available.' }} %
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Amonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $amonia1 ?? 'No Amonia data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">TDS</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $tds1 ?? 'No TDS data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">DO</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        {{ $do1 ?? 'No DO data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
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