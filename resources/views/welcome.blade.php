<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Gumukmas Multifarm - Kemitraan Domba dan Pakan Ternak Berkualitas</title>
    <meta property="og:title" content="Gumukmas Multifarm - Kemitraan Domba dan Pakan Ternak Berkualitas">
    <meta property="og:description"
        content="Bergabunglah dengan Gumukmas Multifarm untuk kemitraan domba, pakan ternak berkualitas, dan layanan terbaik di Jember, Jawa Timur.">
    <meta name="description"
        content="Gumukmas Multifarm menyediakan kemitraan domba, domba pejantan & indukan unggul, pengadaan bahan baku pakan ternak, dan produksi pakan ternak ruminansia di Jember, Jawa Timur. Hubungi kami untuk kemitraan sukses.">
    <meta name="keywords"
        content="Gumukmas Multifarm, kemitraan domba, domba pejantan, indukan unggul, pakan ternak, ruminansia, Jember, Jawa Timur, peternakan domba, kemitraan ternak, pakan ternak berkualitas, pengadaan pakan ternak, produksi pakan ternak, domba unggul, domba berkualitas, pakan ternak ruminansia, kemitraan sukses, peternak lokal, dukungan peternak, bimbingan kemitraan, ternak produktif, domba sehat, bahan baku pakan, pakan ruminansia, domba Jember, ternak Jember, domba Jawa Timur, ternak Jawa Timur, peternak Jawa Timur, supplier pakan ternak, distributor pakan ternak, penyedia pakan ternak, pakan ternak alami, pakan ternak sehat, pakan ternak efisien, produksi pakan berkualitas, ternak sehat, ternak unggul, ternak berkualitas, peternak unggul, peternakan modern, peternakan berkelanjutan, bisnis peternakan, investasi peternakan, usaha peternakan, pakan ternak murah, pakan ternak terbaik, nutrisi ternak, kebutuhan ternak, pakan ternak alami, kemitraan domba sukses, manajemen peternakan, agribisnis, agrikultur, peternakan Indonesia, ternak Indonesia, pasar ternak, peluang peternakan, ternak ruminansia, pakan ternak komplit, komposisi pakan ternak, formulasi pakan ternak, inovasi pakan ternak, teknologi peternakan, perkembangan peternakan, kemitraan peternakan, pengembangan peternakan, jasa peternakan, layanan peternakan, komunitas peternakan, industri peternakan, jaringan peternakan, kesehatan ternak, produktivitas ternak, perawatan ternak, pengelolaan ternak, sumber daya ternak, kualitas pakan ternak, standar pakan ternak, suplai pakan ternak, solusi pakan ternak, kebutuhan pakan ternak, stok pakan ternak, bahan pakan ternak, distribusi pakan ternak, pakan ternak premium, pakan ternak grosir, peternakan modern, tren peternakan, strategi peternakan, efisiensi peternakan, peternak sukses, peluang usaha peternakan, perkembangan agribisnis, pasar agrikultur, agrikultur Jawa Timur, peluang bisnis Jember, potensi peternakan, ternak Indonesia, dukungan peternak lokal, mitra peternak, usaha ternak, pengembangan ternak, bisnis ternak, pakan ternak lokal, peternakan lokal, ternak skala kecil, ternak skala besar, peternak mandiri, mitra peternak, pengusaha ternak">
    <meta name="author" content="Gumukmas Multifarm">
</head>

<body class="bg-lwhite">
    <!-- Start Hero Section -->
    <section id="hero" class="flex flex-col min-h-screen text-white bg-center bg-cover bg-blend-overlay "
        style="background-image: url('{{ asset('images/landingpage/herobackground.png') }}')">
        <div class="container">
            @livewire('components.header')
        </div>
        <div class="container">
            <div class="mx-auto p-4 md:py-8">
                <div class="flex-1 flex items-center">
                    <div class="text-center mx-auto">
                        <h1 class="text-h3 font-bold text-white xl:text-h1">Selamat Datang di</h1>
                        <h1 class="text-h3 font-bold text-white xl:text-h1">Gumukmas Multifarm (GMF)</h1>
                        <p class="text-title2 text-text mb-7">Kemitraan Domba dan Produksi Pakan Ternak Terbaik di
                            Jember,
                            Jawa
                            Timur, Indonesia</p>
                        <a href="#"
                            class="py-3 px-9 bg-orange text-title2 text-lwhite rounded-xl hover:bg-orange/80">Mulai
                            Bermitra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start About section -->
    <section id="about" class="py-16">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center sm:px-4 md:px-0">
                <div class="order-2 md:order-1 w-full md:w-1/3 flex justify-center md:justify-start mb-8 md:mb-0">
                    <img src="{{ asset('images/landingpage/aboutimage.png') }}" alt="About Image" class="max-w-full h-auto object-cover">
                </div>
                <div class="order-1 mb-16 md:order-2 w-full md:w-3/4 md:pl-4">
                    <h2 class="text-h2 text-dgreen font-bold mb-4">Tentang Kami</h2>
                    <p class="text-title2 text-tblack leading-relaxed mb-12">
                        Gumukmas Multifarm (GMF) adalah perusahaan yang berkomitmen untuk meningkatkan kualitas dan produktivitas peternakan di Indonesia. Kami fokus pada kemitraan domba serta penyediaan pakan ternak ruminansia berkualitas tinggi. Berlokasi di Jember, Jawa Timur, kami siap mendukung peternak lokal dengan layanan terbaik dan terpercaya.
                    </p>
                    <a href="#" class="py-3 px-9 mb-8 bg-orange text-title2 text-lwhite rounded-xl hover:bg-orange/80">Mulai Bermitra</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About section -->
    @livewire('components.about')
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
