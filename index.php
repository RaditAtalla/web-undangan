<?php
require 'php/config.php';

$comments = read("SELECT * FROM comments");

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $comment = htmlspecialchars($_POST['comment']);

  create("INSERT INTO comments(name, comment) VALUES ('$name', '$comment')");
  echo "<script>alert('Komentar berhasil ditambah!'); window.location.href = './';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fauzan & Titi</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/mail.ico" type="image/x-icon">

  <!-- Sacramento font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet" />

  <!-- Merriweather font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Sacramento&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Simply countdown -->
  <link rel="stylesheet" href="css/simplyCountdown.theme.default.css" />
  <script src="js/simplyCountdown.min.js"></script>

  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <audio autoplay loop id="song">
    <source src="assets/audio/song.mp3" type="audio/mp3" />
  </audio>
  <section class="hero" id="hero">
    <div class="title">
      <p data-aos="fade-up" data-aos-duration="500">Wedding of</p>
      <h1 data-aos="fade-up" data-aos-duration="1000">Fauzan & Titi</h1>
    </div>

    <div class="date">
      <p data-aos="fade-up" data-aos-duration="1500">Save the date</p>
      <p data-aos="fade-up" data-aos-duration="2000">07 | 09 | 24</p>
    </div>

    <a href="#invitation" onclick="playSong()" class="cta-button" data-aos="fade-up" data-aos-duration="2500">Buka undangan</a>
  </section>

  <main id="invitation">
    <section class="countdown-wrapper" data-aos="flip-up" data-aos-duration="1000">
      <h2>Countdown</h2>
      <div class="simply-countdown"></div>
    </section>

    <section class="bride-wrapper">
      <div class="bride" data-aos="zoom-in" data-aos-duration="1000">
        <img src="assets/img/fauzan.jpg" loading="lazy" alt="Foto Titi" />
        <div class="bride-info">
          <h3>Ahmad Fauzan, ST.</h3>
          <p>
            Putra dari Bapak Awaluddin Kholid, S.Ag., M.Pd. dan Ibu Siti
            Afnizar, S.Ag., M.Pd.
          </p>
        </div>
      </div>

      <div class="bride" data-aos="zoom-in" data-aos-duration="1500">
        <div class="bride-info">
          <h3>Nurhayati Hazmar Ritonga, S.Pd</h3>
          <p>Putri dari Bapak Hamzah dan Ibu Maya Rusmiati, S.Pd.I</p>
        </div>
        <img src="assets/img/titi.jpg" loading="lazy" alt="Foto Titi" />
      </div>
    </section>

    <section class="story">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1000">Our Story</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <div class="story-wrapper">
        <div class="info-wrapper" data-aos="fade-down" data-aos-duration="1000">
          <h3>Engagement</h3>
          <p>24 Februari 2024</p>
        </div>
        <img src="assets/img/timeline.png" />
        <div class="info-wrapper" data-aos="fade-down" data-aos-duration="1000">
          <h3>Marriage</h3>
          <p>7 September 2024</p>
        </div>
      </div>
    </section>

    <section class="event">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1000">Tanggal Pesta</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <div class="event-wrapper">
        <div class="event-info" data-aos="zoom-in" data-aos-duration="1200">
          <h3>Akad</h3>
          <p>Sabtu, 07 September 2024</p>
          <p>Pukul 09:00 WIB</p>
        </div>
        <div class="v-line"></div>
        <div class="event-info" data-aos="zoom-in" data-aos-duration="1500">
          <h3>Resepsi</h3>
          <p>Sabtu, 07 September 2024</p>
          <p>Pukul 12:00 WIB</p>
        </div>
      </div>
    </section>

    <section class="location">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1200">Lokasi Pesta</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <div class="location-wrapper">
        <div class="map" data-aos="flip-up" data-aos-duration="1000">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1993819737363!2d98.67321707481102!3d3.5414199964328175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313009ed9571fd%3A0x705ece49118d2489!2sUnit%20of%20Agricultural%20Mechanization!5e0!3m2!1sen!2sid!4v1722677411613!5m2!1sen!2sid" class="iframe" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location-info" data-aos="fade-up" data-aos-duration="1000">
          <p>
            Jalan Jenderal Besar Dr. Abdul Haris Nasution No.7, Pangkalan
            Masyhur
          </p>
          <a href="https://maps.app.goo.gl/znGWQnW54BVaN23b9" class="button">Buka peta</a>
        </div>
      </div>
    </section>

    <section class="rsvp">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1000">RSVP</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <form method="post" action="https://script.google.com/macros/s/AKfycbx9kN0iKfHXIWu3rTDlLAqf_z0Uy-rs5FagvLv7Qruyzzf5LAKhwG85dWmQVkTpWGQ2/exec" class="rsvp-wrapper" id="my-form">
        <div class="rsvp-input">
          <div data-aos="fade-down" data-aos-duration="1000">
            <label for="nama">Nama:</label>
            <input class="input" type="text" id="nama" name="nama" required />
          </div>
          <div data-aos="fade-down" data-aos-duration="1000">
            <label for="jumlah">Jumlah yang hadir:</label>
            <input class="input" type="number" id="jumlah" name="jumlah" required />
          </div>
          <div data-aos="fade-down" data-aos-duration="1000">
            <label for="konfirmasi">Konfirmasi:</label>
            <select class="input" name="konfirmasi" id="konfirmasi" required>
              <option value="" disabled selected>==pilih==</option>
              <option value="Hadir">Hadir</option>
              <option value="Tidak hadir">Tidak hadir</option>
            </select>
          </div>
        </div>

        <button type="submit" class="button" style="font-size: 1.25em" data-aos="fade-down" data-aos-duration="1200">
          Kirim
        </button>
      </form>
    </section>

    <section class="gift">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1000">Hadiah</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <div class="gift-wrapper">
        <div class="bank" data-aos="zoom-in" data-aos-duration="1000">
          <img src="assets/img/bni.png" loading="lazy" alt="logo bni" />
          <p>0357915127</p>
          <p>a.n. Ahmad Fauzan</p>
        </div>
        <div class="bank" data-aos="zoom-in" data-aos-duration="1000">
          <img src="assets/img/mandiri.png" loading="lazy" alt="logo mandiri" />
          <p>1050017974902</p>
          <p>a.n. Nurhayati Hazmar Ritonga</p>
        </div>
      </div>
    </section>

    <section class="gallery">
      <img src="assets/img/prewed1.jpg" loading="lazy" data-aos="fade-up" data-aos-duration="1000" alt="Foto prewed">
      <img src="assets/img/prewed2.jpg" loading="lazy" data-aos="fade-up" data-aos-duration="1500" alt="Foto prewed">
      <img src="assets/img/prewed3.jpg" loading="lazy" data-aos="fade-up" data-aos-duration="2000" alt="Foto prewed">
      <img src="assets/img/prewed5.jpg" loading="lazy" data-aos="fade-up" data-aos-duration="2500" alt="Foto prewed">
      <img src="assets/img/prewed6.jpg" loading="lazy" data-aos="fade-up" data-aos-duration="3000" alt="Foto prewed">
    </section>

    <section class="comment">
      <div class="header">
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
        <h2 data-aos="fade-up" data-aos-duration="1000">Pesan</h2>
        <div class="line" data-aos="zoom-in" data-aos-duration="1000"></div>
      </div>

      <form method="post" action="" class="rsvp-wrapper">
        <div class="rsvp-input">
          <div data-aos="fade-down" data-aos-duration="1000">
            <label for="nama">Nama:</label>
            <input class="input" type="text" id="nama" name="name" required />
          </div>
          <div data-aos="fade-down" data-aos-duration="1000">
            <label for="comment">Komentar</label>
            <input class="input" type="text" id="comment" name="comment" required />
          </div>
        </div>

        <button name="submit" type="submit" class="button" style="font-size: 1.25em" data-aos="fade-down" data-aos-duration="1200">
          Kirim
        </button>
      </form>

      <div class="comment-wrapper">
        <?php foreach($comments as $comment) : ?>
          <div class="comment-box">
            <h3><?= $comment["name"]; ?></h3>
            <p><?= $comment["comment"]; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    
    <p class="wish">
      Atas kehadirannya kami ucapkan, <br><span>Terimakasih</span>
    </p>

  </main>

  <footer>
    <p>
      © 2024. Website made by
      <a href="https://instagram.com/radit.rchmd" target="_blank">@radit.rchmd</a>
    </p>
  </footer>

  <script>
    AOS.init();

    simplyCountdown(".simply-countdown", {
      year: 2024, // required
      month: 9, // required
      day: 7, // required
      hours: 0, // Default is 0 [0-23] integer
      minutes: 0, // Default is 0 [0-59] integer
      seconds: 0, // Default is 0 [0-59] integer
      words: {
        //words displayed into the countdown
        days: {
          singular: "Hari",
          plural: "Hari"
        },
        hours: {
          singular: "Jam",
          plural: "Jam"
        },
        minutes: {
          singular: "Menit",
          plural: "Menit"
        },
        seconds: {
          singular: "Detik",
          plural: "Detik"
        },
      },
    });

    function playSong() {
      let song = document.getElementById("song");
      song.volume = 0.25;
      song.play();
    }

    window.addEventListener("load", function() {
      const form = document.getElementById("my-form");
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
          method: "POST",
          body: data,
        }).then(() => {
          alert("RSVP sudah dikirim");
        });
      });
    });
  </script>
</body>

</html>