<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/leena.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/resleena.css') }}">
    <link rel="stylesheet" href="{{ asset('button/button.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

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
      <div class="row">
        <div class="col-lg-6 col-sm-12 first">
          <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img class="img-1" height="977px" src="{{ asset('storage/' . $undangan->fotoSampul1) }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="img-2" height="977px" src="{{ asset('storage/' . $undangan->fotoSampul2) }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item active">
                <img class="img-3" width="1000px" height="977px" src="{{ asset('storage/' . $undangan->fotoSampul3) }}" alt="...">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 second position-relative">
          <div class="sampul-cover"></div>
          <div class="sampul-title text-start position-absolute">
              <h5 class="head1">We Invite You To Celebrate Our Wedding</h5>
              <h5 class="head2">The Wedding Of</h5>
              <h1>{{ $undangan->namaPanggilanPria }} & {{ $undangan->namaPanggilanPerempuan }}</h1>
              <h5 class="head3">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd. D MMMM Y') }}</h5>
              <h5>Di ACARAKAMI Venue</h5>
              <div class="countdown">
                  <div class="row text-start">
                    <h4>Save The Date</h4>
                      <div class="col-3 text-center">
                          <h3 id="hari">0</h3>
                          <h5>Days</h5>
                      </div>
                      <div class="col-3 text-center">
                          <h3 id="jam">0</h3>
                          <h5>Hours</h5>
                      </div>
                      <div class="col-3 text-center">
                          <h3 id="menit">0</h3>
                          <h5>Minutes</h5>
                      </div>
                      <div class="col-3 text-center">
                          <h3 id="detik">0</h3>
                          <h5>Seconds</h5>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- pasangan -->
    <section id="pasangan">
      <div class="row mx-auto">
        <div style=" width: 300px;
        height: 479px;
        background-image: url({{ asset('storage/' . $undangan->fotoPria) }});
        background-size: 350px;
        background-position: -30px 0px;
        margin-right: 30px;
        border: 10px solid #f5f2ec;" class="text-center">
          <div class="title">
            <h1>{{ $undangan->namaPanggilanPria }}</h1>
            <h2>Raja {{ $undangan->namaPanggilanPria }}</h2>
            <h3>Putra {{ $undangan->anakKeBerapaPria }} Dari Pasangan</h3>
            <h4>Bapak {{ $undangan->namaBapakPria }} & Ibu {{ $undangan->namaIbuPria }}</h4>
            <h3>{{ $undangan->tempatLahirPria }}</h3>
          </div>
        </div>
        <div style=" width: 300px;
        height: 479px;
        background-image: url({{ asset('storage/' . $undangan->fotoPerempuan) }});
        background-size: 350px;
        background-position: -30px 0px;
        margin-left: 30px;
        border: 10px solid #f5f2ec;" class="text-center">
          <div class="title">
            <h1>{{ $undangan->namaPanggilanPerempuan }}</h1>
            <h2>Raja {{ $undangan->namaPanggilanPerempuan }}</h2>
            <h3>Putra {{ $undangan->anakKeBerapaPerempuan }} Dari Pasangan</h3>
            <h4>Bapak {{ $undangan->namaBapakPerempuan }} & Ibu {{ $undangan->namaIbuPerempuan }}</h4>
            <h3>{{ $undangan->tempatLahirPerempuan }}</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- doa -->
    <section id="doa">
      <div class="doa mx-auto position-relative">
        <div class="doa-bg"></div>
        <div class="doa-title position-absolute">
        <h1>"</h1>
          <h2>Ya Tuhanku Yang Maha Pengasih,anugrahkanlah kepada pasangan ini senantiasa kebahagiaan, kesehatan, tetap bersatu dan tidak pernah terpisahkan, panjang umur dan tinggal di rumah yang penuh kegembiraanbersama seluruh keturunannya</h2>
          <figcaption class="blockquote-footer">
          Rg Veda X.85.42
          </figcaption>
        </div>
      </div>
    </section>

    <!-- video -->
    <section id="video">
      <a href="" class="text-decoration-none text-center pt-2">
        <div class="mx-auto">
          <div class="videoWrapper">
            <iframe width="560" height="349" src="{{ asset('storage/' . $undangan->video) }}" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div> 
        <div class="flex items-center justify-center space-x-4">
        </div>
        </div>
      </a>
    </section>

    <!-- undangan -->
    <section id="undangan" class="position-relative">
      <div class="undangan-bg"></div>
      <div class="undangan-card position-absolute text-center">
          <div class="sambutan">
            <h1>Om Swastyastu</h1>
            <div class="row mx-auto">
              <div class="circle"></div>
              <div class="circle2"></div>
            </div>
            <h3 class="mx-auto">Atas Asung Kerta Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan yang Maha Esa, kami bermaksud mengundang Bapak/Ibu/Saudara/i, pada Acara Pawiwahan (Pernikahan) putra &amp; putri kami, yang akan dilaksanakan pada:</h3>
          </div>
          <div class="tanggal-tempat">
            <h3 class="head">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('dddd') }}</h3>
            <div class="row mx-auto">
              <div class="col-4 border-bottom border-top border-secondary">
                <h3 class="mt-3">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('MMMM') }}</h3>
              </div>
              <div class="col-4">
                <h2>{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('D') }}</h2>
              </div>
              <div class="col-4 border-bottom border-top border-secondary">
                <h3 class="mt-3">{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->isoFormat('Y') }}</h3>
              </div>
            </div>
            <button class="btn-second">SAVE THE DATA</button>
            <h3>PUKUL</h3>
            <h3>{{ \Carbon\Carbon::parse($undangan->tanggalResepsi)->format('H.i') }} - Selesai</h3>
            <img src="https://acarakami.com/wp-content/uploads/2021/08/flower-agata.png" alt="">
            <h3>BERTEMPAT DI</h3>
            <h3>{{ $undangan->alamat }}</h3>
          </div>
          <div class="penutup">
            <h3 class="head mx-auto">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberikan doa restu kepada putra-putri kami.</h3>
            <h3 class="mx-auto">Atas kehadiran dan doa restunya kami ucapkan terima kasih.</h3>
            <h1 class="mx-auto">Om Shanti Shanti Shanti Om</h1>
            <img src="https://acarakami.com/wp-content/uploads/2021/08/flower-agata.png" alt="">
            <h2>KAMI YANG BERBAHAGIA</h2>
            <h3 class="mx-auto">Keluarga Bapak {{ $undangan->namaBapakPria  }}  <br> & <br>Keluarga Ibu {{ $undangan->namaIbuPerempuan }}</h3>
          </div>
        </div>
    </section>

    <!-- gallery -->
    <section id="gallery" class="text-center">
      <h5>GALLERY PHOTOS</h5>
      <h1>Romeo & <br> Juliet</h1>
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
      <h1>Lokasi Acara</h1>
      {!! $undangan->map !!}
      <br>
      <a  href="{{ $undangan->linkMap }}" class="btn btn-secondary mt-3">PETUNJUK ARAH KE LOKASI</a>
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
          <button class="btn-second">KONFIRMASI</button>
        </div>
        <h2>Ucapkan Sesuatu</h2>
        <div class="kartu-ucapan">
          <div class="heading text-start">
            <img src="https://cdn-icons-png.flaticon.com/512/2571/2571562.png" alt=""><span> 2 Ucapan</span>
          </div>
          <div class="kartu-ucapan-body">
            <div class="mb-3">
              <input type="email" class="form-control input1 mx-auto" id="exampleFormControlInput1" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
              <textarea class="form-control" placeholder="Berikan Ucapan & Doa" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                <option selected>Konfirmasi Kehadiran Anda</option>
                <option value="1">Hadir</option>
                <option value="2">Mungkin Hadir</option>
                <option value="3">Tidak Hadir</option>
              </select>
            </div>
            <button class="btn-third float-start">Kirim</button>
          </div>
          <div class="kartu-ucapan-comment">
            <div class="row comment1">
              <div class="col-1">
                <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/2571/2571562.png" alt="">
              </div>
              <div class="col-11">
                <div class="row text-start">
                  <h5>Harry</h5>
                  <button class="btn-third"><i class="bi bi-check-circle-fill"></i>Hadir</button>
                  <i class="bi bi-clock">1 Bulan,2 Pekan yang lalu</i>
                  <p class="rb-zeplin-selected">May your love continue to grow each and every year. Best wishes on your wedding</p>
                </div>
              </div>
            </div>
            <div class="row comment">
              <div class="col-1">
                <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/2571/2571562.png" alt="">
              </div>
              <div class="col-11">
                <div class="row text-start">
                  <h5>Harry</h5>
                  <button class="btn-third"><i class="bi bi-check-circle-fill"></i>Hadir</button>
                  <i class="bi bi-clock">1 Bulan,2 Pekan yang lalu</i>
                  <p class="rb-zeplin-selected">May your love continue to grow each and every year. Best wishes on your wedding</p>
                </div>
              </div>
            </div>
          </div>
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
          // Set the date we're counting down to
          var countDownDate = new Date("{{ $undangan->tanggalResepsi }}").getTime();

          // Update the count down every 1 second
          var x = setInterval(function () {
          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor(
              (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          );
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Output the result in an element with id="demo"
          document.getElementById("hari").innerHTML =  days;
          document.getElementById("jam").innerHTML =  hours;
          document.getElementById("menit").innerHTML =  minutes;
          document.getElementById("detik").innerHTML =  seconds;

          // If the count down is over, write some text
          if (distance < 0) {
              clearInterval(x);
              document.getElementById("demo").innerHTML = "EXPIRED";
          }
          }, 1000);

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
