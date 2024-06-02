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

    <!-- Start About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center sm:pt-4 md:px-0">
                <div class="order-2 md:order-1 w-full md:w-2/5 flex justify-center md:justify-start mb-8 md:mb-0">
                    <img src="{{ asset('images/landingpage/aboutimage.png') }}" alt="About Image"
                        class="max-w-full h-auto object-cover">
                </div>
                <div class="order-1 mb-16 md:order-2 w-full md:w-3/5 md:pl-4">
                    <h2 class="text-h2 text-dgreen font-bold mb-4">Tentang Kami</h2>
                    <p class="text-title2 text-tblack leading-relaxed mb-12">
                        Gumukmas Multifarm (GMF) adalah perusahaan yang berkomitmen untuk meningkatkan kualitas dan
                        produktivitas peternakan di Indonesia. Kami fokus pada kemitraan domba serta penyediaan pakan
                        ternak
                        ruminansia berkualitas tinggi. Berlokasi di Jember, Jawa Timur, kami siap mendukung peternak
                        lokal
                        dengan layanan terbaik dan terpercaya.
                    </p>
                    <a href="#"
                        class="py-3 px-9 mb-8 bg-orange text-title2 text-lwhite rounded-xl hover:bg-orange/80">Mulai
                        Bermitra</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    {{-- Start Service section --}}
    <section id="service" class="py-16 relative">
        <div class="container mx-auto relative z-10">
            <div class="flex flex-col md:flex-row items-center sm:px-4">
                <div class="w-full md:w-1/2 order-1">
                    <h2 class="text-h2 text-dgreen font-bold mb-4">Layanan Gumukmas Multifarm (GMF)</h2>
                    <p class="text-title2 font-bold text-orange leading-relaxed">Apa saja layanan yang kami sediakan?
                    </p>
                </div>
                <div class="w-full md:w-1/2 order-2">
                    <p class="text-title2 p-5 text-white leading-relaxed">
                        Kami menawarkan berbagai layanan yang dirancang untuk mendukung
                        kesuksesan peternakan Anda. Mulai dari kemitraan domba hingga
                        produksi pakan ternak berkualitas tinggi, kami berkomitmen untuk
                        memberikan solusi terbaik bagi peternak. Dengan layanan yang unggul
                        kami yang dapat membantu meningkatkan produktivitas dan efisiensi
                        usaha peternakan Anda.
                    </p>
                </div>
            </div>
        </div>

        <div class="absolute top-0 right-0 w-1/2 bg-dgreen mt-9 h-80 flex items-center justify-center z-0"
            style="background-image: url('{{ asset('images/footer/footer.png') }}');">
        </div>

        <div class="container flex items-center p-12 justify-center mx-auto relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="rounded-xl shadow-lg bg-white">
                    <div class="p-5 flex flex-col items-center">
                        <div class="rounded-full overflow-hidden mt-8 w-32 h-32 flex items-center justify-center">
                            <img class="w-full h-full object-cover" src="{{ asset('images/landingpage/layanan1.png') }}"
                                alt="">
                        </div>
                        <p class="title2 text-dgreen mt-6 font-bold">Kemitraan Domba
                            Gumukmas Multifarm</p>
                        <p class="text-body mt-4">
                            Bersama GMF, raih peluang kemitraan dengan sistem yang transparan dan menguntungkan.
                            Kami menyediakan bimbingan dan dukungan penuh untuk memastikan kesuksesan usaha Anda
                        </p>
                    </div>
                </div>
                <div class="rounded-xl shadow-lg  bg-white">
                    <div class="p-5 flex flex-col items-center">
                        <div class="rounded-full overflow-hidden mt-8 w-32 h-32 flex items-center justify-center">
                            <img class="w-full h-full object-cover" src="{{ asset('images/landingpage/layanan2.png') }}"
                                alt="">
                        </div>
                        <p class="title2 text-dgreen mt-6 font-bold">Domba Pejantan & Indukan
                            Kualitas Unggul</p>
                        <p class="text-body mt-4">
                            Kami menyediakan domba pejantan dan indukan unggul untuk mendukung program
                            pengembangbiakan domba Anda. Kualitas ternak kami terjamin, sehat, dan produktif.</p>
                    </div>
                </div>
                <div class="rounded-xl shadow-lg  bg-white">
                    <div class="p-5 flex flex-col items-center">
                        <div class="rounded-full overflow-hidden mt-8 w-32 h-32 flex items-center justify-center">
                            <img class="w-full h-full object-cover" src="{{ asset('images/landingpage/layanan3.png') }}"
                                alt="">
                        </div>
                        <p class="title2 text-dgreen mt-6 font-bold">Pengadaan Bahan Baku
                            Pakan Ternak</p>
                        <p class="text-body mt-4">
                            Dapatkan bahan baku pakan ternak terbaik dari kami. Kami menjamin kualitas dan ketepatan
                            waktu pengiriman untuk memenuhi kebutuhan ternak Anda.</p>
                    </div>
                </div>
                <div class="rounded-xl shadow-lg  bg-white">
                    <div class="p-5 flex flex-col items-center ">
                        <div class="rounded-full overflow-hidden mt-8 w-32 h-32 flex items-center justify-center">
                            <img class="w-full h-full object-cover" src="{{ asset('images/landingpage/layanan4.png') }}"
                                alt="">
                        </div>
                        <p class="title2 text-dgreen mt-6 font-bold">Produksi Pakan Ternak
                            Ruminansia</p>
                        <p class="text-body mt-4">
                            Kami memproduksi pakan ternak ruminansia dengan formulasi yang optimal untuk kesehatan
                            dan produktivitas ternak Anda. Produk kami terbuat dari bahan-bahan berkualitas tinggi
                            dan sudah teruji.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="py-16 relative">
        <div class="container mx-auto relative z-10">
            <div class="flex-1 flex items-center">
                <div class="text-center mx-auto">
                    <h1 class="text-h2 font-bold text-white xl:text-h1">Apa Kata Mereka</h1>
                    <h1 class="text-h2 font-bold text-white xl:text-h1">Tentang Gumukmas Multifarm ?</h1>
                    <p class="text-title2 text-text mb-7 text-white">Dengarkan pengalaman para peternak yang telah
                        merasakan
                        manfaat dari kemitraan dengan Gumukmas Multifarm (GMF). Kami bangga dengan hubungan yang kami
                        bangun dan hasil yang telah dicapai bersama mitra-mitra kami. Berikut adalah beberapa testimoni
                        dari mereka yang telah bekerja sama dengan kami dan merasakan perbedaan nyata dalam usaha
                        peternakan mereka.</p>
                </div>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-full h-3/5 bg-dgreen mt-9 flex items-center justify-center z-0"
            style="background-image: url('{{ asset('images/footer/footer.png') }}');">
        </div>
        <div class="container flex items-center p-12 justify-center mx-auto relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                <div class="rounded-xl shadow-lg bg-white">
                    <div class="mt-7 ml-6"><img src="{{ asset('images/landingpage/quote.png') }}" alt=""></div>
                    <div class="p-6 flex flex-col items-center">
                        <p class="text-body">
                            Saya sangat puas dengan pakan ternak dari GMF. Sebelum mengenal GMF, saya sering mengalami
                            masalah dengan kualitas pakan yang tidak konsisten. Namun, sejak menggunakan pakan dari GMF,
                            saya melihat perubahan signifikan pada kesehatan dan produktivitas ternak saya. Selain itu,
                            layanan pengiriman mereka selalu tepat waktu, sehingga saya tidak pernah kekurangan stok
                            pakan. Tim GMF juga selalu siap memberikan saran mengenai formulasi pakan yang tepat untuk
                            kebutuhan ternak saya. Layanan pelanggan mereka sangat responsif dan ramah.</p>
                    </div>
                    <div class="border-t border-gray-300"></div>
                    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4">
                        <img class="w-13 h-13 rounded-full" src="{{ asset('images/landingpage/profile.png') }}" alt="Profile Picture">
                        <div>
                            <div class="text-body font-bold text-black">Santoso Budi</div>
                            <p class="text-body text-grey">Peternak uang</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl shadow-lg bg-white">
                    <div class="mt-7 ml-6"><img src="{{ asset('images/landingpage/quote.png') }}" alt=""></div>
                    <div class="p-6 flex flex-col items-center">
                        <p class="text-body">
                            Saya sangat puas dengan pakan ternak dari GMF. Sebelum mengenal GMF, saya sering mengalami
                            masalah dengan kualitas pakan yang tidak konsisten. Namun, sejak menggunakan pakan dari GMF,
                            saya melihat perubahan signifikan pada kesehatan dan produktivitas ternak saya. Selain itu,
                            layanan pengiriman mereka selalu tepat waktu, sehingga saya tidak pernah kekurangan stok
                            pakan. Tim GMF juga selalu siap memberikan saran mengenai formulasi pakan yang tepat untuk
                            kebutuhan ternak saya. Layanan pelanggan mereka sangat responsif dan ramah.</p>
                    </div>
                    <div class="border-t border-gray-300"></div>
                    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4">
                        <img class="w-13 h-13 rounded-full" src="{{ asset('images/landingpage/profile.png') }}" alt="Profile Picture">
                        <div>
                            <div class="text-body font-bold text-black">Santoso Budi</div>
                            <p class="text-body text-grey">Peternak uang</p>
                        </div>
                    </div>
                </div> <div class="rounded-xl shadow-lg bg-white">
                    <div class="mt-7 ml-6"><img src="{{ asset('images/landingpage/quote.png') }}" alt=""></div>
                    <div class="p-6 flex flex-col items-center">
                        <p class="text-body">
                            Saya sangat puas dengan pakan ternak dari GMF. Sebelum mengenal GMF, saya sering mengalami
                            masalah dengan kualitas pakan yang tidak konsisten. Namun, sejak menggunakan pakan dari GMF,
                            saya melihat perubahan signifikan pada kesehatan dan produktivitas ternak saya. Selain itu,
                            layanan pengiriman mereka selalu tepat waktu, sehingga saya tidak pernah kekurangan stok
                            pakan. Tim GMF juga selalu siap memberikan saran mengenai formulasi pakan yang tepat untuk
                            kebutuhan ternak saya. Layanan pelanggan mereka sangat responsif dan ramah.</p>
                    </div>
                    <div class="border-t border-gray-300"></div>
                    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4">
                        <img class="w-13 h-13 rounded-full" src="{{ asset('images/landingpage/profile.png') }}" alt="Profile Picture">
                        <div>
                            <div class="text-body font-bold text-black">Santoso Budi</div>
                            <p class="text-body text-grey">Peternak uang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Service section --}}
    @livewire('components.about')
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>