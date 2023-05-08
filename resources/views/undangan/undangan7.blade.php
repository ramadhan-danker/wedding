<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/lasmana.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/reslasmana.css') }}">
    <link rel="stylesheet" href="{{ asset('button/button.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Ms+Madi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Waterfall&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@200&family=Molengo&family=Noto+Serif+Lao:wght@200&family=Raleway:wght@500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg w-100 position-fixed">
      <div class="container">
        <a class="navbar-brand" href="#">
          Preview Design
        </a>
        <button class="btn-nav">GUNAKAN</button>
      </div>
    </nav>

    <!-- sampul -->
    <section id="sampul">
        <div class="sampul-bg w-100 position-absolute"></div>
        <div class="sampul text-center mx-auto">
            <img src="https://acarakami.com/wp-content/uploads/2020/08/Gunungan-Wayang.png" alt="">
            <h5>THE WEDDING OF</h5>
            <h1 class="mx-auto"> {{ $undangan->namaPanggilanPria }}  {{ $undangan->namaPanggilanPerempuan }}</h1>
            <h2 class="hari">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd') }}</h2>
            <h2 class="tanggal">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('D.MMMM.Y') }}</h2>
            <h3>We Invite You To Celebrate Our Wedding</h3>
        </div>
    </section>

    <!-- pasangan -->
    <section id="pasangan">
      <div class="pasangan-bg w-100 position-absolute"></div>
      <div class="row  mx-auto" style=" width: 700px;
      color: white;
      background-image: url({{ asset('/storage/' . $undangan->fotoSampul . '') }});
      background-size: cover;">
        <div class="male text-center">
          <div class="title">
            <h2>Raja {{ $undangan->namaPanggilanPria }} </h2>
            <h3>Putra {{ $undangan->anakKeBerapaPria }} Dari Pasangan</h3>
            <h4>Bapak {{ $undangan->namaBapakPria }} & Ibu {{ $undangan->namaIbuPria }}</h4>
            <h3>{{ $undangan->tempatLahirPria }}</h3>
          </div>
        </div>
        <div class="female text-center">
          <div class="title">
            <h2>Ratu {{ $undangan->namaPanggilanPerempuan }}</h2>
            <h3>Putra {{ $undangan->anakKeBerapaPerempuan }} Dari Pasangan</h3>
            <h4>Bapak {{ $undangan->namaBapakPerempuan }} & Ibu {{ $undangan->namaIbuPerempuan }}</h4>
            <h3>{{ $undangan->tempatLahirPerempuan }}</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- doa -->
    <section id="doa" class="position-relative">
        <div class="doa-bg w-100 position-absolute"></div>
        <div class="row mx-auto text-center">
            <div class="img mx-auto"></div>
            <img src="https://acarakami.com/wp-content/uploads/2020/08/Gunungan-Wayang.png" alt="">
            <h3 class="mx-auto">Ya Tuhanku Yang Maha Pengasih,
            anugrahkanlah kepada pasangan ini senantiasa kebahagiaan, kesehatan, tetap bersatu dan tidak pernah terpisahkan, panjang umur dan tinggal di rumah yang penuh kegembiraan
            bersama seluruh keturunannya</h3>
            <h1>RG VEDA X.85.42</h1>
        </div>
        <div class="wave w-100 position-absolute">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M194,99c186.7,0.7,305-78.3,306-97.2c1,18.9,119.3,97.9,306,97.2c114.3-0.3,194,0.3,194,0.3s0-91.7,0-100c0,0,0,0,0-0 L0,0v99.3C0,99.3,79.7,98.7,194,99z"></path>
            </svg>  
        </div>
    </section>

    <!-- undangan -->
    <section id="undangan" class="position-relative">
      <div class="undangan-card position-absolute text-center">
          <div class="sambutan">
            <h1>Om Swastyastu</h1>
            <h3 class="mx-auto">Atas Asung Kerta Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan yang Maha Esa, kami bermaksud mengundang Bapak/Ibu/Saudara/i, pada Acara Pawiwahan (Pernikahan) putra &amp; putri kami, yang akan dilaksanakan pada:</h3>
          </div>
          <div class="tanggal">
            <h2>{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd . D MMMM Y') }}</h2>
            <img src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg" alt=""><br>
            <h2>PUKUL</h2>
            <h2> {{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->format('H.i') }} S/D SELESAI</h2>
            <img src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg" alt="">
            <h2>BERTEMPAT DI</h2>
            <h2>{{ $undangan->alamat }}</h2>
          </div>
          <div class="penutup">
            <h3 class="head mx-auto">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</h3>
            <h3 class="mx-auto">Atas kehadiran dan doa restunya kami ucapkan terima kasih.</h3>
            <h1 class="mx-auto">Om Shanti Shanti Shanti Om</h1>
            <img src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg" alt="">
            <h2>Kami Yang Berbahagia</h2>
            <h3 class="end mx-auto">Kel. Bapak {{ $undangan->namaBapakPria }} & Kel. Ibu {{ $undangan->namaIbuPerempuan }}</h3>
          </div>
        </div>
    </section>

    <!-- gallery -->
    <section id="gallery" class="text-center">
      <h1>{{ $undangan->namaPanggilanPria }} &amp; {{ $undangan->namaPanggilanPerempuan }}</h1>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach ($undangan->galery as $foto)
          <div class="swiper-slide">
              <img src="{{ asset('storage/' . $foto) }}">
          </div>
      @endforeach
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- lokasi -->
    <section id="lokasi" class="text-center">
      <img class="title-img mx-auto" src="https://acarakami.com/wp-content/uploads/2020/10/icon-leaf-acarakami.svg" alt="">
      <h1 class="mx-auto">Lokasi Acara</h1>
      <div class="map mx-auto">
        {!! $undangan->map !!}
      </div>
      <a style="text-decoration: none;background-color: rgb(213,157,89);color:white" href="{{ $undangan->linkMap }}" class="btn btn ">PETUNJUK ARAH KE LOKASI</a>
    </section>

    <!-- ucapan -->
    <section id="ucapan" class="position-relative">
      <div class="ucapan-bg"></div>
      <div class="ucapan-body position-absolute text-center">
        <h1>RSVP</h1>
        <div class="kehadiran text-start">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
            <input type="email" class="form-control input1 border-bottom" id="exampleFormControlInput1" placeholder="Tulis Nama Anda">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email Anda</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tulis Email Anda">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kehadiran</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Konfirmasi Kehadiran Anda</option>
              <option value="1">Hadir</option>
              <option value="2">Mungkin Hadir</option>
              <option value="3">Tidak Hadir</option>
            </select>
          </div>
          <button class="btn-six">KONFIRMASI</button>
        </div>
      </div>    
    </section>

    <!-- footer -->
    <section id="footer" class="text-center">
      <h1><a class="text-decoration-none" href="/">© Copyright Acarakami.com</a></h1>
      <h2>Jasa Undangan Online</h2>
    </section>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
          // // Set the date we're counting down to
          // var countDownDate = new Date("Mar 28, 2023 15:37:25").getTime();

          // // Update the count down every 1 second
          // var x = setInterval(function () {
          // // Get today's date and time
          // var now = new Date().getTime();

          // // Find the distance between now and the count down date
          // var distance = countDownDate - now;

          // // Time calculations for days, hours, minutes and seconds
          // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          // var hours = Math.floor(
          //     (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          // );
          // var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          // var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // // Output the result in an element with id="demo"
          // document.getElementById("hari").innerHTML =  days;
          // document.getElementById("jam").innerHTML =  hours;
          // document.getElementById("menit").innerHTML =  minutes;
          // document.getElementById("detik").innerHTML =  seconds;

          // // If the count down is over, write some text
          // if (distance < 0) {
          //     clearInterval(x);
          //     document.getElementById("demo").innerHTML = "EXPIRED";
          // }
          // }, 1000);

          // swiper
          var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 15,
                loop: true,
                autoplay: {
                  delay: 4000,
                  disableOnInteraction: false
                },
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
                },
              });
    </script>
  </body>
</html>
