<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/guest-dashboard.css') }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="icon" type="png" href="{{ asset('favicon-32x32.png') }}"> --}}
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body class="w-full h-full bg-[#181727] text-white">
    <header class="flex w-full justify-between items-center px-12 py-6 mb-12">
        <img src="{{ asset('logo.png') }}" alt="Logo">
        <div class="flex space-x-6 items-center">
            <p class="text-white font-medium italic">Hai, <span class="font-bold">{{ $user->name }}</span></p>
            <a href="/home" class="text-[#28B8FF] font-bold">Home</a>
            <a href="/education"
                class="bg-gradient-to-r from-[#7C6CFB] from-10% to-[#28B8FF] to-100% px-4 py-2 text-white font-bold rounded-lg">Education</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="font-bold border-2 border-red-400 rounded-xl px-4 py-2 text-red-400 hover:bg-red-400 hover:text-white">Logout</button>
            </form>
        </div>
    </header>
    <main>
        {{-- <section class="flex flex-col text-white items-center">
            <div class="flex flex-col items-center space-y-9">
                <div class="flex flex-col items-center space-y-4">
                    <h1 class="text-5xl font-semibold">Strategi Dalam Market Crypto Untuk</h1>
                    <h1 class="text-5xl font-semibold">Melipat Gandakan Aset Anda</h1>
                    <h2 class="text-xl font-medium text-gray-400">Grand New Crypto Learning System</h2>
                </div>
                <object width="720" height="480" data="https://www.youtube.com/v/e0fbu5QvdWY"
                    type="application/x-shockwave-flash">
                    <param name="src" value="https://www.youtube.com/v/e0fbu5QvdWY" />
                </object>
            </div>
        </section>
        <section class="flex flex-col text-white items-center my-32">
            <p class="text-lg mb-3">Kurikulum Program</p>
            <h1 class="text-5xl font-semibold mb-20">Edukasi</h1>
            <div class="flex flex-col items-center px-44 space-y-20">
                @foreach ($course as $courses)
                    <div class="flex space-x-32 items-start">
                        <img class="w-[464px] rounded-2xl border-4 border-white"
                            src="{{ asset('course/' . $courses->gambar_course) }}" alt="Gambar Course">
                        <div class="space-y-9">
                            <h1 class="text-4xl font-medium">{{ $courses->nama_course }}</h1>
                            <p class="text-justify">{{ $courses->deskripsi_course }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="bg-gradient-to-r from-[#7C6CFB] from-10% to-[#28B8FF] to-100% px-12 py-2 text-white font-bold rounded-lg mt-32"
                href="/education">Open LMS</a>
        </section>
        <section class="flex flex-col items-center my-64">
            <div
                class="flex flex-col italic bg-[#131320] border-2 border-[#28B8FF] rounded-xl items-center px-20 py-12">
                <p class="font-semibold text-2xl">“If A Man Empties His Purse Into His</p>
                <p class="font-semibold text-2xl">Head, No Man Can Take It Away”</p>
                <p class="font-light text-xl mt-12">~ Benjamin Franklin ~</p>
            </div>
        </section> --}}
        <div class="container my-lg-5 my-md-3 my-sm-2">
            <h1 class="text-dashboard text-center">Strategi Dalam Market Crypto Untuk Melipat Gandakan Aset Anda</h1>
            <h5 class="text-dashboard text-sub-dashboard text-center">Grand New Crypto Learning System</h5>
    
    
            <div id="carouselExampleSlidesOnly" class="carousel slide mb-2" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="video-dashboard carousel-item active text-center">
                        <iframe class="text-center video-box" src="https://www.youtube.com/embed/e0fbu5QvdWY?autoplay=1"
                            title="Investasi Crypto Dari Nol Untuk Pemula" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    
            <div class="garis-dashboard"></div>
            <div class="text-center mt-4 pt-4">
                <h4 class="home-text ">Kurikulum Program</h4>
            </div>
            <h1 class="text-dashboard text-center mt-2">Edukasi</h1>
            <div class="mt-4 pt-4">
                <section class="sectionDashboard">
                    <div class="container">
                        <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                                <iframe class="section-dashboard" src="https://www.youtube.com/embed/16BMEGEsst4"
                                    title="Cara Belajar Trading Dari Nol" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="mx-xl-4 mx-lg-0 text-section">
                                    <h2 class="mb-xl-4 mb-lg-3 mb-md-3 mb-sm-2 judul-section-home">Edukasi Crypto & Crypto
                                        Learning
                                    </h2>
                                    <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                        dikuasai
                                        sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                        memenangkan
                                        game,
                                        pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                        aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                        menjadi
                                        pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/54cuS9Awros"
                                title="Cara Mencari Altcoin Yang Berpotensi Naik 100x" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Crypto Research</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/osLIXxolPaU"
                                title="Margin Call Episode 15: Bitcoin Terbang ke 41.500" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Market Outlook & Calls</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/1wNMCm7qwdM"
                                title="Rahasia Uang yang Tidak Diajarkan di Sekolah" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Mentor Speech</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/gfhy4HM2Izg"
                                title="Crypto Market Outlook 2024" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Cryptocurrency Price Real-Time</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/9nlsFcrDjBM"
                                title="Cara Beli Bitcoin Untuk Pemula" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Crypto Tools</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/gyMwXuJrbJQ"
                                title="Learn Blockchain, Solidity, and Full Stack Web3 Development with JavaScript – 32-Hour Course"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Blockchain Programming</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sectionDashboard">
                <div class="container">
                    <div class="row mb-xl-5 mb-lg-4 mb-md-3 mb-sm-4 pb-xl-5 pb-lg-4 pb-md-4 pb-sm-4">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                            <iframe class="section-dashboard" src="https://www.youtube.com/embed/RGgQPjjE66U"
                                title="Bongkar Rahasia Exchange Crypto" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="mx-xl-4 mx-lg-0 text-section">
                                <h2 class="mb-4 judul-section-home">Forum Diskusi</h2>
                                <p>Di kurikulim ini, Kalian akan belajar serta dipandu mengenai apa saja Edukasi yang harus
                                    dikuasai
                                    sebagai "the player of cryptomarket". Karena market adalah sebuah game, untuk
                                    memenangkan
                                    game,
                                    pemain harus memiliki skillset, kemampuan, mental, dan ilmu yang mumpuni serta berbagai
                                    aspek-aspek lainnya agar dapat memiliki seluruh skillset yang mumpuni, untuk bertarung
                                    menjadi
                                    pemenang dalam setiap tantangan dan kesempatan dalam market crypto yang sangat ganas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center mb-md-5 mb-sm-2 pb-4 pb-sm-2 mt-md-4 mt-sm-2">
            <button class="tombol btn-cryon my-2 my-sm-0">Open LMS</button>
        </div>
        <div class="garis-dashboard"></div>
    

        {{-- Quotes --}}
        <section class="flex flex-col items-center my-64">
            <div
                class="flex flex-col italic bg-[#131320] border-2 border-[#28B8FF] rounded-xl items-center px-20 py-12">
                <p class="font-semibold text-2xl">“If A Man Empties His Purse Into His</p>
                <p class="font-semibold text-2xl">Head, No Man Can Take It Away”</p>
                <p class="font-light text-xl mt-12">~ Benjamin Franklin ~</p>
            </div>
        </section>
    </main>

        </div>
    </main>
    <footer class="px-28 py-14 space-y-6 bg-[#14131F] border-t-2 border-[#28B8FF]">
        <img src="{{ asset('logo.png') }}" alt="Logo">
        <div class="flex justify-between items-center">
            <div class="space-y-3">
                <p class="text-white">tanya@cryon.com</p>
                <p class="text-white">+62 810 5105 51 (WA Only)</p>
            </div>
            <div class="space-y-3">
                <p class="text-white font-semibold">Crypto Education</p>
                <p class="text-white">Copyright © 2024 All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
