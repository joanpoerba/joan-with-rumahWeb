<?php
require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan with RumahWeb</title>

  <link rel="icon" href="../assets/Joan (1).ico">

  <link rel="preload" as="image" href="../assets/logo-rumahweb.svg">
  <link rel="preload" as="image" href="../assets/bankMandiri.avif">
  <link rel="preload" as="image" href="../assets/bankMayapada.avif">
  <link rel="preload" as="image" href="../assets/jawaPos.avif">
  <link rel="preload" as="image" href="../assets/zoya.avif">
  <link rel="preload" as="image" href="../assets/banner.avif">
  <link rel="preload" as="image" href="../assets/faq-animate.svg">
  <link rel="stylesheet" href="../style/rumahWeb.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <section class="splash container-fluid justify-content-center align-items-center">
    <img src="../assets/logo-rumahweb.svg" alt="">
  </section>

  <div class="wrapper container-fluid m-0 p-0">
    <div class="humbergerWrapper position-fixed d-flex flex-column justify-content-center align-items-center rounded-1">
      <div class="humberger rounded-5"></div>
    </div>
    <header class="container-fluid bg-light d-flex justify-content-center align-items-xxl-center align-items-lg-center align-items-md-start align-items-sm-start shadow-sm py-xxl-4 py-xl-4 py-lg-4 position-fixed p-md-4 p-sm-4">
      <div class="navbar container-lg d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start">
        <div>
          <h1 class="title fw-bold">
            <span>Jo</span><span>an</span>
          </h1>
        </div>
        <nav class="w-50 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3">
          <ul class="d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-evenly align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start">
            <li class="list-unstyled d-xxl-block d-xl-block d-lg-block d-md-flex d-sm-flex flex-row justify-content-center align-items-center fs-6 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-4 mx-sm-4">
              <i class="bi bi-house d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex justify-content-center align-items-center fs-4"></i>
              <a class="text-decoration-none ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-3 ms-sm-3" href="../home.php">Home</a>
            </li>
            <li class="list-unstyled d-xxl-block d-xl-block d-lg-block d-md-flex d-sm-flex flex-row justify-content-center align-items-center fs-6 mx-xxl-5 mx-xl-5 mx-lg-5 mx-md-4 mx-sm-4 my-xxl-0 my-xl-0 my-lg-0 my-md-3 my-sm-3">
              <i class="bi bi-person-vcard d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex justify-content-center align-items-center fs-4"></i>
              <a class="text-decoration-none ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-3 ms-sm-3" href="../view/about.php">About</a>
            </li>
            <li class="list-unstyled d-xxl-block d-xl-block d-lg-block d-md-flex d-sm-flex flex-row justify-content-center align-items-center fs-6 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-4 mx-sm-4">
              <i class="bi bi-list-task d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex justify-content-center align-items-center fs-4"></i>
              <a class="text-decoration-none ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-3 ms-sm-3" href="../view/portfolio.php">Portfolio</a>
            </li>
            <li class="list-unstyled d-xxl-block d-xl-block d-lg-block d-md-flex d-sm-flex flex-row justify-content-center align-items-center fs-6 ms-xxl-5 ms-xl-5 ms-lg-5 ms-md-4 ms-sm-4 my-xxl-0 my-xl-0 my-lg-0 my-md-3 my-sm-3">
              <i class="bi bi-headset d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex justify-content-center align-items-center fs-4"></i>
              <a class="text-decoration-none ms-xxl-0 ms-xl-0 ms-lg-0 ms-md-3 ms-sm-3 border-2 border-bottom" href="../view/rumahWeb.php">RumahWeb</a>
            </li>
          </ul>
        </nav>
        <div class="contactWrapper">
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6282275338090&text=Halo+Joan&type=phone_number&app_absent=0" class="btn bg-transparent rounded-0 py-1 px-3 fs-6">Contact Me</a>
        </div>
      </div>
    </header>

    <main class="container-fluid d-flex justify-content-center align-items-center">
      <section class="row flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-start align-items-sm-start">
        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-9">
          <div>
            <h2 class="fw-reguler">Bersama Rumahweb</h2>
          </div>
          <div class="my-2">
            <h1 class="fw-bold">#ThinkBig #GrowBigger</h1>
          </div>
          <div>
            <h3 class="fw-normal">Onlinekan Bisnismu Sekarang dengan Web Hosting Indonesia</h3>
          </div>
          <div class="mt-4">
            <h4 class="fw-normal">Buat website dan email untuk bisnismu dan mulai mendunia dengan layanan web hosting Indonesia bersama <span class="fw-bold">Rumahweb</span></h4>
          </div>
          <div class="mt-4">
            <a target="_blank" href="https://www.rumahweb.com/" class="btn fs-5 border-0 fw-reguler py-1 px-3 text-light">Kunjungi Rumahweb</a>
          </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-9">
          <img src="../assets/fast-loading-animate.svg" alt="">
        </div>
      </section>
    </main>

    <section class="partnerWrapper d-flex flex-column justify-content-center align-items-center py-5">
      <div class="text-center">
        <h2 class="text-light">Partnership with</h2>
      </div>
      <div class="container-fluid d-flex flex-row align-items-center m-auto pt-5">
        <img class="" src="../assets/bankMandiri.avif" alt="">
        <img class="ms-5 " src="../assets/bankMayapada.avif" alt="">
        <img class="ms-5 " src="../assets/jawaPos.avif" alt="">
        <img class="ms-5 " src="../assets/zoya.avif" alt="">
      </div>
    </section>

    <section class="bannerWrapper container-fluid"></section>

    <section class="benefitWrapper container-fluid d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-evenly align-items-center py-5">
      <div class="d-flex flex-column justify-content-center align-items-center rounded-2 text-light px-2">
        <i class="bi bi-headset fs-1 d-flex justify-content-center align-items-center"></i>
        <h5 class="mt-2">Siaga 24 jam</h5>
        <p class="mt-3 text-center">Kapan pun, dimanapun, Rumahweb selalu ada dan siaga disaat kamu membutuhkan bantuan. Jadi, jangan ragu ya!</p>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center rounded-2 text-light px-2 my-xxl-0 my-xl-0 my-lg-0 my-md-5 my-sm-5">
        <i class="bi bi-journal-text fs-1 d-flex justify-content-center align-items-center"></i>
        <h5 class="mt-2">Tutorial lengkap</h5>
        <p class="mt-3 text-center">Tidak hanya menjadi jasa hosting, Rumahweb juga memberi tutorial bagi para user, yang tentunya update terus.</p>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center rounded-2 text-light px-2">
        <i class="bi bi-check fs-1 d-flex justify-content-center align-items-center"></i>
        <h5 class="mt-2">Terpercaya</h5>
        <p class="mt-3 text-center">Banyak pihak yang sudah memakai jasa Rumahweb, jadi jangan khawatir, Rumahweb sudah terjamin keamanan nya loh ya</p>
      </div>
    </section>

    <section class="experienceWrapper container-fluid d-flex justify-content-center align-items-center">
      <div class="rounded-3 p-3">
        <h5 class="fw-normal">Saya sudah memakai jasa hosting dan domain gratis dari <span class="fw-semibold">Rumahweb</span>. Saat ini mereka membuka jasa free domain dengan beberapa syarat yang sangat mudah. Saya sendiri sudah memakai domainnya dan jujur, website pribadi saya menjadi urutan nomor 1 pencarian di google. Ya keget dong dengan domain gratis pemberian mereka, saya mendapat benefit seperti ini, kece deh <span class="fw-semibold">Rumahweb</span>. Jadi tunggu apa lagi? langsung cek di <span class="fw-semibold">Rumahweb</span></h5>
      </div>
    </section>

    <section class="faqWrapper container-fluid d-flex flex-column align-items-center py-5">
      <div>
        <h1>Frequently Asked Question</h1>
      </div>
      <section class="row flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-around align-items-center py-5">
        <div class="faqIllustrationWrapper col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-7">
          <img loading="lazy" src="../assets/faq-animate.svg" alt="">
        </div>
        <div class="question col-xxl-6 col-xl-6 col-lg-5 col-md-7 col-sm-10">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button text-light p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apa yang dimaksud Hosting?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body p-3">
                  <strong>Hosting atau web hosting</strong> adalah tempat untuk menyimpan semua file dan data website sehingga dapat diakses oleh banyak orang melalui internet. File dan data website tersebut bisa berupa video, gambar, email, script, aplikasi, dan database.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-light p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apa yang dimaksud Domain?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body p-3">
                  <strong>Nama domain (sering disebut domain)</strong> adalah nama yang mudah diingat yang terkait dengan alamat IP fisik di internet. Nama unik ini muncul setelah tanda <code>@</code> di alamat email, dan setelah <code>www.</code> di alamat web. Misalnya, nama domain <code>example.com</code> bisa diterjemahkan ke alamat fisik <code>198.102.434.8.</code>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-light p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Apa untungnya hosting?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body p-3">
                  Ada banyak manfaat dari menggunakan web hosting, di antaranya adalah <strong>meningkatkan kepercayaan pengunjung, memberikan kemudahan dalam mengelola website, serta meningkatkan performa dan kecepatan akses website.</strong> Selain itu, dengan memilih web hosting yang tepat, <strong>kamu juga bisa memperoleh fitur-fitur tambahan seperti keamanan website dan dukungan teknis yang memudahkan pengelolaan website.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-light p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Rumahweb itu apa sih?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body p-3">
                  <strong>Rumahweb</strong> adalah salah satu penyedia layanan web hosting terkemuka di Indonesia. <strong>Rumahweb</strong> menyediakan berbagai paket hosting yang dapat disesuaikan dengan kebutuhan pengguna, mulai dari pemula hingga profesional. <strong>Rumahweb</strong> juga menyediakan layanan domain registration serta layanan server dan VPS. Selain itu, <strong>Rumahweb</strong> juga memiliki fitur-fitur tambahan seperti backup otomatis, SSL gratis, dan dukungan teknis 24/7. Dengan reputasinya yang baik dan pelayanan yang terpercaya, <strong>Rumahweb</strong> menjadi pilihan yang populer bagi pengguna yang mencari solusi web hosting terbaik di Indonesia.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section class="commentWrapper container-fluid d-flex flex-column align-items-center py-5">
      <div>
        <h3 class="text-light">Ceritain pengalaman kamu tentang Rumahweb!!</h3>
      </div>
      <form class="d-flex flex-column justify-content-center align-items-center my-3" action="" method="post">
        <input class="rounded-3 border-0 py-2 px-2 w-100" type="text" name="username" placeholder="username" autocomplete="off" required>
        <textarea class="border-0 rounded-3 p-2 mt-2" name="comment" rows="7" placeholder="kalo aku sih..." required></textarea>
        <button class="w-100 border-0 text-light rounded-2 py-1 px-3 mt-3 shadow-sm" name="kirim">Kirim</button>
      </form>
      <section class="commentTextWrapper bg-light rounded-3">
        <div class="w-100 shadow-sm py-2 px-4">
          <h4>Comments</h4>
        </div>
        <div class="px-5 d-flex flex-column">
          <?php while ($comment = mysqli_fetch_assoc($selectResult)) : ?>
            <div>
              <h5 class="mt-3"><?= stripslashes(htmlspecialchars_decode($comment["username"])); ?></h5>
              <p class="mt-1"><?= stripslashes(htmlspecialchars_decode($comment["comment"])); ?></p>
              <span class="fw-light text-secondary float-end"><?= $comment["time"]; ?></span>
            </div>
            <hr>
          <?php endwhile; ?>
        </div>
      </section>
    </section>

    <footer class="container-fluid d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-column flex-sm-column justify-content-around align-items-start p-5">
      <div class="d-flex flex-column">
        <div>
          <img src="../assets/logo-rumahweb.svg" alt="">
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
          <a target="_blank" href="https://www.facebook.com/RumahwebIndonesia/">
            <i class="bi bi-facebook fs-2 text-light"></i>
          </a>
          <a target="_blank" href="https://instagram.com/rumahwebgram">
            <i class="bi bi-instagram fs-2 text-light"></i>
          </a>
          <a target="_blank" href="https://www.linkedin.com/company/rumahweb">
            <i class="bi bi-linkedin fs-2 text-light"></i>
          </a>
          <a target="_blank" href="https://youtube.com/rumahwebtv">
            <i class="bi bi-youtube fs-2 text-light"></i>
          </a>
        </div>
      </div>
      <div class="infoWrapper mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5">
        <div>
          <h4><b>Kantor</b></h4>
        </div>
        <div class="d-flex flex-column align-items-start mt-3">
          <div class="text-light">
            <h6>Yogyakarta (Headquarter)</h6>
            <p>Jalan Lempongsari No. 39C Sleman, Yogyakarta 55581</p>
          </div>
          <div class="text-light mt-3">
            <h6>Jakarta (Branch)</h6>
            <p>CityLoft Sudirman Unit #2503 Jl. KH. Mas Mansyur No. 121 Karet Tengsin, Jakarta Pusat</p>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5">
        <div>
          <h4><b>Hubungi</b></h4>
        </div>
        <div class="d-flex flex-column align-items-start mt-3">
          <div class="text-light">
            <p><b>Telpon :</b> 0274-882257</p>
          </div>
          <div class="text-light mt-2">
            <p><b>Email :</b> info@rumahweb.com</p>
          </div>
          <div class="text-light mt-2">
            <p><b>Techical Support :</b> teknis@rumahweb.com</p>
          </div>
        </div>
        <div class="mt-xxl-3 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5">
          <div>
            <h4><b>Link</b></h4>
          </div>
          <div class="d-flex flex-column align-items-start mt-3">
            <div class="text-light">
              <a class="text-light text-decoration-none" href="https://www.rumahweb.com/journal/">Journal</a>
            </div>
            <div class="text-light">
              <a class="text-light text-decoration-none" href="https://blog.rumahweb.com/?_ga=2.104175176.997122791.1679884393-1704109058.1679884393">Blog</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="../js/splash.js"></script>
</body>

</html>