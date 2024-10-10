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
                                            <p class="text-white text-sm font-bold">
                                                Status : <span id="status1-text">Checking...</span>
                                                <span id="status1-circle" class="inline-block w-3 h-3 rounded-full ml-2" style="background-color: yellow;"></span>
                                            </p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="temperature1">
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
                                                    <p class="text-white text-md font-bold w-1/2" id="ph1">
                                                        {{ $ph1 ?? 'No pH data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Amonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="amonia1">
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
                                                    <p class="text-white text-md font-bold w-1/2" id="tds1">
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
                                                    <p class="text-white text-md font-bold w-1/2" id="do1">
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
                                            <p class="text-white text-sm font-bold">
                                                Status : <span id="status2-text">Checking...</span>
                                                <span id="status2-circle" class="inline-block w-3 h-3 rounded-full ml-2" style="background-color: yellow;"></span>
                                            </p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="temperature2">
                                                        {{ $temperature2 ?? 'No Temperature data available.' }} C
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">pH</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="ph2">
                                                        {{ $ph2 ?? 'No pH data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Amonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="amonia2">
                                                        {{ $amonia2 ?? 'No Amonia data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">TDS</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="tds2">
                                                        {{ $tds2 ?? 'No TDS data available.' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">DO</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2" id="do2">
                                                        {{ $do2 ?? 'No DO data available.' }}
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function fetchData(id_alat) {
            $.ajax({
                url: '/dashboard/data/' + id_alat,
                method: 'GET',
                success: function(data) {
                    let currentTime = new Date().getTime(); // Current time
                    let lastUpdated = new Date(data.created_at).getTime();
                    // console.log('Last updated:', new Date(lastUpdated)); // Debugging
                    // console.log('Current time:', new Date(currentTime)); // Debugging

                    let timeDifference = currentTime - lastUpdated;
                    // console.log('Time difference in ms:', timeDifference);

                    let status = timeDifference <= 600000 ? 'online' : 'offline'; // 10 minutes = 600000 ms

                    // Handle the status and other data for each device (Alat)
                    if (id_alat === 1) {
                        let statusTextElement1 = '#status1-text';
                        let statusCircleElement1 = '#status1-circle';

                        if (status === 'online') {
                            $(statusTextElement1).text('Online');
                            $(statusCircleElement1).css('background-color', 'green');
                        } else {
                            $(statusTextElement1).text('Offline');
                            $(statusCircleElement1).css('background-color', 'red');
                        }

                        // Update data for Alat 1
                        $('#temperature1').text(data.temperature + ' C');
                        $('#ph1').text(data.ph);
                        $('#tds1').text(data.tds);
                        $('#do1').text(data.do);
                        $('#amonia1').text(data.amonia);
                        $('#status1').text(status); // Update status text for Alat 1

                    } else if (id_alat === 2) {
                        let statusTextElement2 = '#status2-text';
                        let statusCircleElement2 = '#status2-circle';

                        if (status === 'online') {
                            $(statusTextElement2).text('Online');
                            $(statusCircleElement2).css('background-color', 'green');
                        } else {
                            $(statusTextElement2).text('Offline');
                            $(statusCircleElement2).css('background-color', 'red');
                        }

                        // Update data for Alat 2
                        $('#temperature2').text(data.temperature + ' C');
                        $('#ph2').text(data.ph);
                        $('#tds2').text(data.tds);
                        $('#do2').text(data.do);
                        $('#amonia2').text(data.amonia);
                        $('#status2').text(status); // Update status text for Alat 2
                    }
                }
            });
        }

        // Fetch data for both devices at intervals of 2 seconds
        setInterval(function() {
            fetchData(1); // Fetch for Alat 1
            fetchData(2); // Fetch for Alat 2
        }, 480000);
    </script>
</body>

</html>