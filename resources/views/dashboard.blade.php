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
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="bg-white shadow-lg rounded-lg mb-4">
                            <div
                                class="flex justify-between items-center px-4 py-3 border-b border-gray-200 bg-gray-50">
                                <h6 class="m-0 font-semibold text-gray-700">Dashboard</h6>
                            </div>
                            <div class="px-4 pb-4">
                                <canvas id="chartDioksida"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4">
                        <div
                            class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                            <div class="flex justify-between w-full mb-6 items-center">
                                <p class="text-white text-sm font-bold">Karbon Dioksida</p>
                                <div class="flex items-center">
                                    <div id="colorIndicator" class="w-3 h-3 rounded-full mr-2"></div>
                                    <p class="text-white text-sm" id="percentageValue"></p>
                                </div>
                            </div>

                            <div class="progress-container">
                                <div id="progressFill" class="progress-bar-fill"></div>
                                <div id="progressNeedle" class="progress-needle"></div>
                            </div>
                            <div class="flex justify-between w-full mb-6">
                                <p class="text-white text-sm">Buruk</p>
                                <p class="text-white text-sm">Baik</p>
                            </div>
                            <p class="text-white text-sm">Kadar Karbon Dioksida (CO2)</p>
                            <p class="text-white text-sm">Saat ini</p>
                            <div id="latestValueDioksida" class="text-white text-5xl font-bold mb-4"></div>
                            <p id="lastUpdatedDioksida" class="text-white text-sm"></p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="bg-white shadow-lg rounded-lg mb-4">
                            <div
                                class="flex justify-between items-center px-4 py-3 border-b border-gray-200 bg-gray-50">
                                <h6 class="m-0 font-semibold text-gray-700">Dashboard</h6>
                            </div>
                            <div class="px-4 pb-4">
                                <canvas id="chartMetana"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4">
                        <div
                            class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                            <div class="flex justify-between w-full mb-6 items-center">
                                <p class="text-white text-sm font-bold">Karbon Metana (CH4)</p>
                                <div class="flex items-center">
                                    <div id="colorIndicatorMetana" class="w-3 h-3 rounded-full mr-2"></div>
                                    <p class="text-white text-sm" id="percentageValueMetana"></p>
                                </div>
                            </div>

                            <div class="progress-container">
                                <div id="progressFillMetana" class="progress-bar-fill"></div>
                                <div id="progressNeedleMetana" class="progress-needle"></div>
                            </div>

                            <div class="flex justify-between w-full mb-6">
                                <p class="text-white text-sm">Buruk</p>
                                <p class="text-white text-sm">Baik</p>
                            </div>

                            <p class="text-white text-sm">Kadar Metana (CH4)</p>
                            <p class="text-white text-sm">Saat ini</p>
                            <div id="latestValueMetana" class="text-white text-5xl font-bold mb-4"></div>
                            <p id="lastUpdatedMetana" class="text-white text-sm"></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var ctxDioksida = document.getElementById("chartDioksida").getContext('2d');
        var chartDioksida = new Chart(ctxDioksida, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Karbon Dioksida',
                    data: [],
                    borderColor: 'red', // Warna garis merah
                    borderWidth: 1,
                    backgroundColor: 'rgba(255, 0, 0, 0.2)' // Warna background dengan transparansi
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctxMetana = document.getElementById("chartMetana").getContext('2d');
        var chartMetana = new Chart(ctxMetana, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Metana',
                    data: [],
                    borderColor: 'green', // Warna garis hijau
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 255, 0, 0.2)' // Warna background dengan transparansi
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var updateChartDioksida = function() {
            $.ajax({
                url: "{{ route('api.chartdioksida') }}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Update chart
                    chartDioksida.data.labels = data.labels;
                    chartDioksida.data.datasets[0].data = data.data;
                    chartDioksida.update();

                    // Update the latest value and last updated time
                    var latestValue = data.latest.nilai_dioksida;
                    var lastUpdated = new Date(data.latest.updated_at).toLocaleString();
                    $('#latestValueDioksida').text(latestValue);
                    $('#lastUpdatedDioksida').text('Terakhir update ' + lastUpdated);

                    // Calculate the percentage for the progress bar and needle position
                    var minValue = 60;
                    var maxValue = 65;
                    var percentage = ((latestValue - minValue) / (maxValue - minValue)) * 100;

                    // Update the progress bar and needle position
                    var progressFill = $('#progressFill');
                    var progressNeedle = $('#progressNeedle');
                    progressFill.css('width', percentage + '%');
                    progressNeedle.css('left', percentage + '%');
                    $('#percentageValue').text(percentage.toFixed(2) + '%');

                    // Update the color of the small circle based on percentage
                    var colorIndicator = $('#colorIndicator');
                    if (percentage <= 33) {
                        colorIndicator.css('background-color', 'red');
                    } else if (percentage <= 66) {
                        colorIndicator.css('background-color', 'yellow');
                    } else {
                        colorIndicator.css('background-color', 'green');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

        var updateChartMetana = function() {
            $.ajax({
                url: "{{ route('api.chartmetana') }}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Update chart
                    chartMetana.data.labels = data.labels;
                    chartMetana.data.datasets[0].data = data.data;
                    chartMetana.update();

                    // Update the latest value and last updated time
                    var latestValue = data.latest.nilai_metana;
                    var lastUpdated = new Date(data.latest.updated_at).toLocaleString();
                    $('#latestValueMetana').text(latestValue);
                    $('#lastUpdatedMetana').text('Terakhir update ' + lastUpdated);

                    // Calculate percentage for the progress bar and needle position
                    var minValue = 20; // Ganti dengan nilai minimum kadar metana
                    var maxValue = 100; // Ganti dengan nilai maksimum kadar metana
                    var percentage = ((latestValue - minValue) / (maxValue - minValue)) * 100;

                    // Update the progress bar and needle position
                    var progressFill = $('#progressFillMetana');
                    var progressNeedle = $('#progressNeedleMetana');
                    progressFill.css('width', percentage + '%');
                    progressNeedle.css('left', percentage + '%');
                    $('#percentageValueMetana').text(percentage.toFixed(2) + '%');

                    // Update the color of the small circle based on percentage
                    var colorIndicator = $('#colorIndicatorMetana');
                    if (percentage <= 33) {
                        colorIndicator.css('background-color', 'red');
                    } else if (percentage <= 66) {
                        colorIndicator.css('background-color', 'yellow');
                    } else {
                        colorIndicator.css('background-color', 'green');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
        updateChartDioksida();
        updateChartMetana();
        setInterval(() => {
            updateChartDioksida();
            updateChartMetana();
        }, 3000);
    </script>
    @vite('resources/js/app.js')
</body>

</html>
