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
                                <a href="{{ route('detail.dashboard', ['id' => 1]) }}" class="col-span-1">
                                    <div
                                        class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
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
                                                        @if ($Temperature1->isNotEmpty())
                                                            @foreach ($Temperature1 as $temperature)
                                                                {{ $temperature->nilai_suhu }} C
                                                            @endforeach
                                                        @else
                                                            <p>No Temperature data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Kelembapan</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Humidity1->isNotEmpty())
                                                            @foreach ($Humidity1 as $humidity)
                                                                {{ $humidity->nilai_humidity }} %
                                                            @endforeach
                                                        @else
                                                            <p>No Humidity data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Ammonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Amonia1->isNotEmpty())
                                                            @foreach ($Amonia1 as $amonia)
                                                                {{ $amonia->nilai_amonia }}
                                                            @endforeach
                                                        @else
                                                            <p>No Amonia data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Karbon Dioksida</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Dioksida1->isNotEmpty())
                                                            @foreach ($Dioksida1 as $dioksida)
                                                                {{ $dioksida->nilai_dioksida }}
                                                            @endforeach
                                                        @else
                                                            <p>No Dioksida data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Metana</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Metana1->isNotEmpty())
                                                            @foreach ($Metana1 as $metana)
                                                                {{ $metana->nilai_metana }}
                                                            @endforeach
                                                        @else
                                                            <p>No Metana data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('detail.dashboard', ['id' => 2]) }}" class="col-span-1">
                                    <div
                                        class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
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
                                                        @if ($Temperature2->isNotEmpty())
                                                            @foreach ($Temperature2 as $temperature)
                                                                {{ $temperature->nilai_suhu }} C
                                                            @endforeach
                                                        @else
                                                            <p>No Temperature data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Kelembapan</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Humidity2->isNotEmpty())
                                                            @foreach ($Humidity2 as $humidity)
                                                                {{ $humidity->nilai_humidity }} %
                                                            @endforeach
                                                        @else
                                                            <p>No Humidity data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Ammonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Amonia2->isNotEmpty())
                                                            @foreach ($Amonia2 as $amonia)
                                                                {{ $amonia->nilai_amonia }}
                                                            @endforeach
                                                        @else
                                                            <p>No Amonia data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Karbon Dioksida</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Dioksida2->isNotEmpty())
                                                            @foreach ($Dioksida2 as $dioksida)
                                                                {{ $dioksida->nilai_dioksida }}
                                                            @endforeach
                                                        @else
                                                            <p>No Dioksida data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Metana</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Metana2->isNotEmpty())
                                                            @foreach ($Metana2 as $metana)
                                                                {{ $metana->nilai_metana }}
                                                            @endforeach
                                                        @else
                                                            <p>No Metana data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <a href="{{ route('detail.dashboard', ['id' => 3]) }}" class="col-span-1">
                                    <div
                                        class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                                        <div class="w-full mb-6 items-center mt-4">
                                            <p class="text-white text-lg font-bold">Lokasi Alat 3</p>
                                            <p class="text-white text-sm font-bold">Keterangan Lokasi:</p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Temperature3->isNotEmpty())
                                                            @foreach ($Temperature3 as $temperature3)
                                                                {{ $temperature->nilai_suhu }} C
                                                            @endforeach
                                                        @else
                                                            <p>No Temperature data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Kelembapan</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Humidity3->isNotEmpty())
                                                            @foreach ($Humidity3 as $humidity)
                                                                {{ $humidity->nilai_humidity }} %
                                                            @endforeach
                                                        @else
                                                            <p>No Humidity data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Ammonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Amonia3->isNotEmpty())
                                                            @foreach ($Amonia3 as $amonia)
                                                                {{ $amonia->nilai_amonia }}
                                                            @endforeach
                                                        @else
                                                            <p>No Amonia data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Karbon Dioksida</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Dioksida3->isNotEmpty())
                                                            @foreach ($Dioksida3 as $dioksida)
                                                                {{ $dioksida->nilai_dioksida }}
                                                            @endforeach
                                                        @else
                                                            <p>No Dioksida data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Metana</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Metana3->isNotEmpty())
                                                            @foreach ($Metana3 as $metana)
                                                                {{ $metana->nilai_metana }}
                                                            @endforeach
                                                        @else
                                                            <p>No Metana data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('detail.dashboard', ['id' => 4]) }}" class="col-span-1">
                                    <div
                                        class="bg-dgreen h-full px-8 rounded-lg shadow-lg flex flex-col justify-center items-center">
                                        <div class="w-full mb-6 items-center mt-4">
                                            <p class="text-white text-lg font-bold">Lokasi Alat 4</p>
                                            <p class="text-white text-sm font-bold">Keterangan Lokasi:</p>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Suhu</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Temperature4->isNotEmpty())
                                                            @foreach ($Temperature4 as $temperature)
                                                                {{ $temperature->nilai_suhu }} C
                                                            @endforeach
                                                        @else
                                                            <p>No Temperature data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Kelembapan</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Humidity4->isNotEmpty())
                                                            @foreach ($Humidity4 as $humidity)
                                                                {{ $humidity->nilai_humidity }} %
                                                            @endforeach
                                                        @else
                                                            <p>No Humidity data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Ammonia</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Amonia4->isNotEmpty())
                                                            @foreach ($Amonia4 as $amonia)
                                                                {{ $amonia->nilai_amonia }}
                                                            @endforeach
                                                        @else
                                                            <p>No Amonia data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Karbon Dioksida</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Dioksida4->isNotEmpty())
                                                            @foreach ($Dioksida4 as $dioksida)
                                                                {{ $dioksida->nilai_dioksida }}
                                                            @endforeach
                                                        @else
                                                            <p>No Dioksida data available.</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-6">
                                            <div class="flex justify-between">
                                                <div class="flex w-full">
                                                    <p class="text-white text-md font-bold w-1/3">Metana</p>
                                                    <p class="text-white text-md font-bold w-1/6">:</p>
                                                    <p class="text-white text-md font-bold w-1/2">
                                                        @if ($Metana4->isNotEmpty())
                                                            @foreach ($Metana4 as $metana)
                                                                {{ $metana->nilai_metana }}
                                                            @endforeach
                                                        @else
                                                            <p>No Metana data available.</p>
                                                        @endif
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

        var ctxHumidity = document.getElementById("chartHumidity").getContext('2d');
        var chartHumidity = new Chart(ctxHumidity, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Humidity',
                    data: [],
                    borderColor: 'blue', // Warna garis biru
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 0, 255, 0.2)' // Warna background biru dengan transparansi
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


        var ctxTemperature = document.getElementById("chartTemperature").getContext('2d');
        var chartTemperature = new Chart(ctxTemperature, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Temperature',
                    data: [],
                    borderColor: 'purple', // Warna garis ungu
                    borderWidth: 1,
                    backgroundColor: 'rgba(128, 0, 128, 0.2)' // Warna background ungu dengan transparansi
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

        var ctxAmonia = document.getElementById("chartAmonia").getContext('2d');
        var chartAmonia = new Chart(ctxAmonia, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Amonia',
                    data: [],
                    borderColor: 'orange', // Warna garis ungu
                    borderWidth: 1,
                    backgroundColor: 'rgba(255, 165, 0, 0.2)'
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

        var updateChartHumidity = function() {
            $.ajax({
                url: "{{ route('api.charthumidity') }}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Update chart
                    chartHumidity.data.labels = data.labels;
                    chartHumidity.data.datasets[0].data = data.data;
                    chartHumidity.update();

                    // Update the latest value and last updated time
                    var latestValue = data.latest.nilai_humidity;
                    var lastUpdated = new Date(data.latest.updated_at).toLocaleString();
                    $('#latestValueHumidity').text(latestValue);
                    $('#lastUpdatedHumidity').text('Terakhir update ' + lastUpdated);

                    // Calculate percentage for the progress bar and needle position
                    var minValue = 20; // Ganti dengan nilai minimum kadar metana
                    var maxValue = 100; // Ganti dengan nilai maksimum kadar metana
                    var percentage = ((latestValue - minValue) / (maxValue - minValue)) * 100;

                    // Update the progress bar and needle position
                    var progressFill = $('#progressFillHumidity');
                    var progressNeedle = $('#progressNeedleHumidity');
                    progressFill.css('width', percentage + '%');
                    progressNeedle.css('left', percentage + '%');
                    $('#percentageValueHumidity').text(percentage.toFixed(2) + '%');

                    // Update the color of the small circle based on percentage
                    var colorIndicator = $('#colorIndicatorHumidity');
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

        var updateChartTemperature = function() {
            $.ajax({
                url: "{{ route('api.charttemperature') }}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Update chart
                    chartTemperature.data.labels = data.labels;
                    chartTemperature.data.datasets[0].data = data.data;
                    chartTemperature.update();

                    // Update the latest value and last updated time
                    var latestValue = data.latest.nilai_temperature;
                    var lastUpdated = new Date(data.latest.updated_at).toLocaleString();
                    $('#latestValueTemperature').text(latestValue);
                    $('#lastUpdatedTemperature').text('Terakhir update ' + lastUpdated);

                    // Calculate percentage for the progress bar and needle position
                    var minValue = 20; // Ganti dengan nilai minimum kadar metana
                    var maxValue = 100; // Ganti dengan nilai maksimum kadar metana
                    var percentage = ((latestValue - minValue) / (maxValue - minValue)) * 100;

                    // Update the progress bar and needle position
                    var progressFill = $('#progressFillTemperature');
                    var progressNeedle = $('#progressNeedleTemperature');
                    progressFill.css('width', percentage + '%');
                    progressNeedle.css('left', percentage + '%');
                    $('#percentageValueTemperature').text(percentage.toFixed(2) + '%');

                    // Update the color of the small circle based on percentage
                    var colorIndicator = $('#colorIndicatorTemperature');
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

        var updateChartAmonia = function() {
            $.ajax({
                url: "{{ route('api.chartamonia') }}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // Update chart
                    chartAmonia.data.labels = data.labels;
                    chartAmonia.data.datasets[0].data = data.data;
                    chartAmonia.update();

                    // Update the latest value and last updated time
                    var latestValue = data.latest.nilai_amonia;
                    var lastUpdated = new Date(data.latest.updated_at).toLocaleString();
                    $('#latestValueAmonia').text(latestValue);
                    $('#lastUpdatedAmonia').text('Terakhir update ' + lastUpdated);

                    // Calculate percentage for the progress bar and needle position
                    var minValue = 20; // Ganti dengan nilai minimum kadar metana
                    var maxValue = 100; // Ganti dengan nilai maksimum kadar metana
                    var percentage = ((latestValue - minValue) / (maxValue - minValue)) * 100;

                    // Update the progress bar and needle position
                    var progressFill = $('#progressFillAmonia');
                    var progressNeedle = $('#progressNeedleAmonia');
                    progressFill.css('width', percentage + '%');
                    progressNeedle.css('left', percentage + '%');
                    $('#percentageValueAmonia').text(percentage.toFixed(2) + '%');

                    // Update the color of the small circle based on percentage
                    var colorIndicator = $('#colorIndicatorAmonia');
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
        updateChartHumidity();
        updateChartTemperature();
        updateChartAmonia();

        setInterval(() => {
            updateChartDioksida();
            updateChartMetana();
            updateChartHumidity();
            updateChartTemperature();
            updateChartAmonia();

        }, 3000);
    </script>
    @vite('resources/js/app.js')
</body>

</html>
