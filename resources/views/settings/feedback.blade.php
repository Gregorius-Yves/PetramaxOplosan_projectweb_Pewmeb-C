<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Feedback - inaRISK Web</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
    }

    h2 {
      text-align: center;
      color: #f65400;
      font-size: 28px;
      margin-bottom: 10px;
    }

    p.subtext {
      text-align: center;
      color: #666;
      font-size: 16px;
      margin-bottom: 30px;
    }

    .stars {
      text-align: center;
      margin-bottom: 30px;
    }

    .stars span {
      font-size: 28px;
      cursor: pointer;
      color: #f65400;
    }

    h4 {
      margin: 20px 0 10px;
      color: #333;
    }

    .tag-group {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 25px;
    }

    .tag {
      padding: 8px 14px;
      border-radius: 20px;
      font-size: 14px;
      cursor: pointer;
      border: 1px solid #f65400;
      color: #f65400;
      background-color: #fff5f0;
      transition: all 0.2s ease;
    }

    .tag.selected {
      background-color: #f65400;
      color: white;
    }

    textarea {
      width: 100%;
      padding: 12px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 10px;
      resize: vertical;
      min-height: 100px;
      margin-bottom: 25px;
    }

    button {
      width: 100%;
      background-color: #f65400;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    button:hover {
      background-color: #d94400;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      color: #888;
      font-size: 13px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Rate this web</h2>
  <p class="subtext">Bagaimana penilaian Anda terhadap platform ini?</p>

  <div class="stars" id="stars">
    <span data-value="1">★</span>
    <span data-value="2">★</span>
    <span data-value="3">★</span>
    <span data-value="4">★</span>
    <span data-value="5">★</span>
  </div>

  <h4>Apa yang Anda sukai?</h4>
  <div class="tag-group" id="likes">
    <div class="tag">Mudah digunakan</div>
    <div class="tag">Lengkap</div>
    <div class="tag">Bermanfaat</div>
    <div class="tag">Cepat</div>
    <div class="tag">Tampilan menarik</div>
  </div>

  <h4>Apa yang bisa ditingkatkan?</h4>
  <div class="tag-group" id="improvements">
    <div class="tag">Kurang komponen</div>
    <div class="tag">Terlalu kompleks</div>
    <div class="tag">Tidak interaktif</div>
    <div class="tag">Hanya Bahasa Indonesia</div>
  </div>

  <h4>Ada hal lain?</h4>
  <textarea placeholder="Tulis saran atau komentar Anda di sini..."></textarea>

  <button>Kirim Masukan</button>
</div>

<footer>
  © 2025 inaRISK Project Team. Versi Web 1.0
</footer>

<script>
  // Fungsi pemilihan bintang
  const stars = document.querySelectorAll("#stars span");
  stars.forEach((star, index) => {
    star.addEventListener("click", () => {
      stars.forEach((s, i) => {
        s.style.color = i <= index ? "#f65400" : "#ccc";
      });
    });
  });

  // Fungsi toggle tag
  const tags = document.querySelectorAll(".tag");
  tags.forEach(tag => {
    tag.addEventListener("click", () => {
      tag.classList.toggle("selected");
    });
  });
</script>

</body>
</html>
