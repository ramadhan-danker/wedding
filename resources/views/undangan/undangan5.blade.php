<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style4.css">
    <link rel="shortcut icon" type="image"
        href="https://acarakami.com/wp-content/uploads/2019/10/acarakami-150x150.jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin: 20px auto;
        }

        .append-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .append-buttons button {
            display: inline-block;
            cursor: pointer;
            border: 1px solid #007aff;
            color: #007aff;
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 4px;
            margin: 0 10px;
            font-size: 13px;
        }
    </style>

    <title>Buat Undangan Online Nala - Desain Undangan Digital</title>
</head>

<body style="margin: 0px">
    {{-- BERANDA --}}
    <div id="BERANDA" class="sampul position-relative"
        style="background-image: url({{ asset('/storage/' . $undangan->fotoSampul . '') }});width: 100%;height: 100vh;background-repeat: no-repeat;background-position: 0px -150px;opacity: 1;position: relative;background-size: 1400px">
        <div style="width: 100%;height:100vh;background: rgba(0, 0, 0, .5)" class="bg-sampul position-absolute"></div>
        <div class="wedding position-absolute" style="text-align: center;color: #fff;margin-left: 500px">
            <h3 data-aos="fade-in" data-aos-duration="2000" class=""
                style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 35px;font-weight: 400;padding-top: 300px">
                The Wedding of</h3>
            <h3 data-aos="fade-up" data-aos-duration="1500" class="t1"
                style="font-family: 'Tangerine', cursive;font-size: 90px;line-height: 90px;font-weight: 600;font-style: italic">
                {{ $undangan->namaPanggilanPria }} &amp; {{ $undangan->namaPanggilanPerempuan }}</h3>
            <h3 data-aos="fade-up" data-aos-duration="2000" class=""
                style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600">
                {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd') }}</p>
            </h3>
            <h3 data-aos="fade-down" data-aos-duration="2000" class=""
                style="font-family: 'Tangerine', cursive;font-size: 35px;line-height: 35px;font-weight: 600;">
                {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('D MMMM Y') }}</p>
            </h3>
            <img data-aos="fade-down" data-aos-duration="2000" width="71" height="24"
                src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg"
                class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
            <h3 data-aos="fade-in" data-aos-duration="2000" class="t2"
                style="font-family: 'Cormorant Garamond', serif;font-size: 15px;line-height: 20px;font-weight: 600;margin-top: 50px">
                WE INVITED YOU TO CELEBRATE OUR WEDDING</h3>
        </div>
    </div>

    {{-- PROFILE --}}
    <div style="background-color: white" class="profile">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="2000" class="row justify-content-center">
                <div style="text-align: center;margin-top: 120px;margin-left: 0px" class="romeo col-6">
                    <img style="width: 109px;border: 3px solid #a9865b" class="rounded-circle"
                        src="https://acarakami.com/wp-content/uploads/2019/10/acarakami-150x150.jpg" alt="">
                    <h3 class=""
                        style="font-family: 'Tangerine', cursive;font-size: 40px;line-height: 40px;font-weight: 600;font-style: italic;color: #a9865b;margin-top: 25px">
                        Raja {{ $undangan->namaPanggilanPria }}</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 400;margin-top: 25px">
                        Putra {{ $undangan->anakKeBerapaPria }} dari Pasangan</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 600;font-style: italic">
                        Bapak {{ $undangan->namaBapakPria }} &amp; Ibu {{ $undangan->namaIbuPria }}</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 600;font-style: italic">
                        {{ $undangan->tempatLahirPria }}</h3>
                </div>
                <div style="text-align: center;margin-top: 120px;margin-left: -220px" class="juliet col-6">
                    <img style="width: 109px;border: 3px solid #a9865b" class="rounded-circle"
                        src="https://acarakami.com/wp-content/uploads/2019/10/acarakami-150x150.jpg" alt="">
                    <h3 class=""
                        style="font-family: 'Tangerine', cursive;font-size: 40px;line-height: 40px;font-weight: 600;font-style: italic;color: #a9865b;margin-top: 25px">
                        Ratu {{ $undangan->namaPanggilanPerempuan }}</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 400;margin-top: 25px">
                        Putri {{ $undangan->anakKeBerapaPerempuan }} dari Pasangan</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 600;font-style: italic">
                        Bapak {{ $undangan->namaBapakPerempuan }} &amp; Ibu {{ $undangan->namaIbuPerempuan }}</h3>
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 18px;line-height: 18px;font-weight: 600;font-style: italic">
                        {{ $undangan->tempatLahirPerempuan }}</h3>
                    </h3>
                </div>
                <img style="margin-top: 80px" width="102" height="33"
                    src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg"
                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy">
                <div style="text-align: center" class="doa">
                    <h3 class=""
                        style="font-family: 'Cormorant Garamond', serif;font-size: 16px;line-height: 22px;font-weight: 400;font-style: italic;width: 630px;margin-left: 245px;margin-top: 21px">
                        {{ $undangan->doa }}</h3>

                </div>
            </div>
        </div>
    </div>
    {{-- IMG --}}
    <div data-aos="fade-in" data-aos-duration="1500" style="text-align: center;margin-top: 80px" class="img1">
        <iframe class="video" style="width: 800px;height: 400px"
            src="{{ asset('/storage/' . $undangan->video . '') }}"
            title="Karel Marquez and Sean Fariñas Pre-Wedding Video" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>

    {{-- SALAM --}}
    <div data-aos="fade-up" data-aos-duration="1500" style="text-align: center;color: #a9865b;margin-top: 180px"
        class="salam">
        <h3 class="t1"
            style="font-family: 'Tangerine', cursive;font-size: 60px;line-height: 60px;font-weight: 600;font-style: italic;">
            Om Swastiastu</h3>
        <h3 class="t2"
            style="font-family: 'Cormorant Garamond', serif;font-size: 16px;line-height: 22px;font-weight: 400;font-style: italic;color: #54595f;width: 630px;margin-left: 360px;margin-top: 20px">
            Atas Asung Kerta Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan yang Maha Esa, kami bermaksud mengundang
            Bapak/Ibu/Saudara/i, pada Acara Pawiwahan ( Pernikahan ) putra &amp; putri kami, yang akan dilaksanakan
            pada:</h3>
        <h3 class=""
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;font-style: italic;margin-top: 50px">
            {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd') }}</h3>
        <h3 class=""
            style="font-family: 'Tangerine', cursive;font-size: 35px;line-height: 35px;font-weight: 600;font-style: italic;">
            {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('D MMMM Y') }}</p>
        </h3>
        <h3 class=""
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;font-style: italic;margin-top: 20px">
            Pukul</h3>
        <h3 class=""
            style="font-family: 'Tangerine', cursive;font-size: 35px;line-height: 35px;font-weight: 600;font-style: italic;margin-top: 20px">
            {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->format('H.i') }} s/d Selesai</h3>
        <h3 class=""
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;font-style: italic;margin-top: 30px">
            Bertempat di</h3>
        <h3 class=""
            style="font-family: 'Tangerine', cursive;font-size: 35px;line-height: 35px;font-weight: 600;font-style: italic;">
            {{ $undangan->alamat }}</h3>
        <h3 class="t2"
            style="font-family: 'Cormorant Garamond', serif;font-size: 16px;line-height: 22px;font-weight: 400;font-style: italic;color: #54595f;width: 630px;margin-left: 360px;margin-top: 50px">
            Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/ i, berkenan hadir untuk
            memberikan doa restu kepada putra-putri kami.</h3>
        <h3 class="t2"
            style="font-family: 'Cormorant Garamond', serif;font-size: 16px;line-height: 22px;font-weight: 400;font-style: italic;color: #54595f;margin-top: 20px">
            Atas kehadiran dan doa restunya kami ucapkan terima kasih.</h3>
        <h3 class="t1"
            style="font-family: 'Tangerine', cursive;font-size: 60px;line-height: 60px;font-weight: 600;font-style: italic;margin-top: 50px">
            Om Shanti Shanti Shanti Om</h3>
        <h3 class=""
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 400;font-style: italic;color: #54595f;margin-top: 50px">
            Kami yang berbahagia</h3>
        <h3 class="t3"
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;color: #54595f">
            Kel. Bapak {{ $undangan->namaBapakPria }} &amp; Kel. Bapak {{ $undangan->namaBapakPerempuan }} </h3>
    </div>

    {{-- GALERI --}}
    <div data-aos="fade-up" data-aos-duration="1500" style="text-align: center;color: #a9865b" class="galeri">
        <h3
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 400;font-style: italic;color: #54595f">
            Gallery Photo</h3>
        <h3 class="t1"
            style="font-family: 'Tangerine', cursive;font-size: 60px;line-height: 60px;font-weight: 600;font-style: italic">
            {{ $undangan->namaPanggilanPria }} &amp; {{ $undangan->namaPanggilanPerempuan }}</h3>
        <div style="width: 1120px" #swiperRef="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($undangan->galery as $foto)
                    <div class="swiper-slide">

                        <img style="width: 363px;height: 242px" src="{{ asset('storage/' . $foto) }}">

                    </div>
                @endforeach
            </div>
            <div style="font-size: 20px;color: #fff" class="swiper-button-next"></div>
            <div style="font-size: 20px;color: #fff" class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- COUNTDOWN --}}
    <div data-aos="fade-up" data-aos-duration="1000" style="text-align: center;color: #a9865b;margin-top: 100px"
        class="countdown">
        <h3
            style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 400;font-style: italic;color: #54595f">
            Countdown Timer</h3>
        <h3 class="t1"
            style="font-family: 'Tangerine', cursive;font-size: 60px;line-height: 60px;font-weight: 600;font-style: italic">
            {{ $undangan->namaPanggilanPria }} &amp; {{ $undangan->namaPanggilanPerempuan }} Wedding</h3>
    </div>
    <div data-aos="fade-up" data-aos-duration="1500" class="timer">
        <div class="row" style="width: 600px;margin-left: 420px">
            <div class="col-3" style="width: 150px">
                <h5
                    style="font-family: 'Tangerine', cursive;font-size: 50px;line-height: 50px;font-weight: 400;color: #a9865b;">
                    00 :</h5>
                <p
                    style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;color: #54595f;font-style: italic;">
                    Days</p>
            </div>
            <div class="col-3" style="width: 150px">
                <h5
                    style="font-family: 'Tangerine', cursive;font-size: 50px;line-height: 50px;font-weight: 400;color: #a9865b;">
                    00 :</h5>
                <p
                    style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;color: #54595f;font-style: italic;">
                    Hours</p>
            </div>
            <div class="col-3" style="width: 150px">
                <h5
                    style="font-family: 'Tangerine', cursive;font-size: 50px;line-height: 50px;font-weight: 400;color: #a9865b;">
                    00 :</h5>
                <p
                    style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;color: #54595f;font-style: italic;">
                    Minutes</p>
            </div>
            <div class="col-3" style="width: 150px">
                <h5
                    style="font-family: 'Tangerine', cursive;font-size: 50px;line-height: 50px;font-weight: 400;color: #a9865b;">
                    00 :</h5>
                <p
                    style="font-family: 'Cormorant Garamond', serif;font-size: 20px;line-height: 20px;font-weight: 600;color: #54595f;font-style: italic;">
                    Seconds</p>
                <img style="width: 102px;height: 34px;margin-left: -245px;margin-top: 80px"
                    src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg" alt="">
            </div>
            <div style="margin-top: 50px;text-align: center;margin-left: -45px" class="lokasi">
                <h3
                    style="font-family: 'Tangerine', cursive;font-size: 60px;line-height: 60px;font-weight: 600;font-style: italic;color: #a9865b;">
                    Lokasi Acara</h3>
                {!! $undangan->map !!}
                <a href="{{ $undangan->linkMap }}"
                    style="background-color: #a9865b;width: 233px;height: 38px;margin-top: 40px" class="btn rounded-1"
                    role="button" data-bs-toggle="button" aria-pressed="true">
                    <p
                        style="font-family: 'Cormorant Garamond', serif;font-size: 14px;line-height: 14px;font-weight: 900;color: #ffff;margin-top: 7px">
                        PETUNJUK ARAH KE LOKASI</p>
                </a>
            </div>
            <div style="margin-top: 150px;margin-left: 230px" class="icon">
                <i class="bi bi-pause-circle-fill" style="font-size: 21px"></i>
                <h3 style="margin-left: -75px;margin-top: 20px">
                    <a href="https://acarakami.com/" class="Copyright text-decoration-none"
                        style="font-family: 'Marcellus', serif;font-size: 15px;line-height: 15px;font-weight: 400;color: rgb(51,51,51)">©
                        Copyright Acarakami.com</a>
                </h3>
                <h3 style="margin-left: -45px;margin-top: -20px" class="t1">
                    <a style="font-family: 'Nunito Sans', sans-serif;font-size: 12px;line-height: 12px;font-weight: 400;color: rgb(124,122,103);text-decoration: none"
                        href="/">Jasa Undangan Online</a>
                </h3>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            loop: true,
            centeredSlides: true,
            spaceBetween: 5,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function(e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>
