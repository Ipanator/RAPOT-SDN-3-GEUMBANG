<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SDN 3 GELUMBANG </title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: radial-gradient(circle at top, #004aad, #001f3f);
      overflow: hidden;
      color: white;
      position: relative;
    }

    /* Efek partikel lembut */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 150%;
      height: 150%;
      background: radial-gradient(rgba(255,255,255,0.12) 1px, transparent 1px);
      background-size: 60px 60px;
      animation: moveBg 35s linear infinite;
      z-index: 0;
    }

    @keyframes moveBg {
      from { transform: translate(0,0); }
      to { transform: translate(-80px, -80px); }
    }

    /* Kontainer utama */
    .container {
      position: relative;
      text-align: center;
      z-index: 1;
      padding: 50px 40px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      backdrop-filter: blur(15px);
      box-shadow: 0 0 25px rgba(0,0,0,0.4);
      width: 90%;
      max-width: 480px;
      transition: transform 0.4s ease;
    }

    .container:hover {
      transform: scale(1.03);
    }

    /* Roda bergerak */
    .gear {
      width: 110px;
      height: 110px;
      margin: 0 auto 20px;
      background: url('https://i.ibb.co/TrKp3Ry/gear.png') no-repeat center;
      background-size: contain;
      animation: spin 4s linear infinite;
      filter: drop-shadow(0 0 10px rgba(255,255,255,0.6));
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* TEKS BERSINAR */
    h1 {
      font-size: 2rem;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 15px;
      letter-spacing: 1px;
      background: linear-gradient(90deg, #ffea00, #00ffff, #ff00ff, #ffea00);
      background-size: 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: glowText 4s linear infinite;
      text-shadow: 0 0 10px rgba(255,255,255,0.3);
    }

    @keyframes glowText {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    p {
      font-size: 1rem;
      line-height: 1.6;
      color: #e0e0e0;
      margin-bottom: 25px;
    }

    .emoji {
      font-size: 1.8rem;
      display: inline-block;
      animation: bounce 1s infinite alternate;
    }

    @keyframes bounce {
      from { transform: translateY(0); }
      to { transform: translateY(-8px); }
    }

    /* Tombol kembali — gradasi pelangi animasi */
    .back-btn {
      display: inline-block;
      padding: 14px 30px;
      font-size: 1rem;
      font-weight: 600;
      color: #fff;
      text-decoration: none;
      border-radius: 40px;
      background: linear-gradient(90deg, #ff00ff, #00ffff, #00ff88, #ffcc00, #ff00ff);
      background-size: 400%;
      animation: rainbow 6s linear infinite;
      box-shadow: 0 0 15px rgba(255,255,255,0.3);
      transition: all 0.3s ease;
    }

    @keyframes rainbow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .back-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 25px rgba(255,255,255,0.8);
    }

    .footer {
      margin-top: 25px;
      font-size: 0.85rem;
      color: #ccc;
      border-top: 1px solid rgba(255,255,255,0.2);
      padding-top: 10px;
      text-shadow: 0 0 5px rgba(255,255,255,0.2);
    }

    @media (max-width: 600px) {
      h1 { font-size: 1.6rem; }
      .gear { width: 80px; height: 80px; }
      .container { padding: 35px 25px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="gear"></div>
    <h1>Halaman Dalam Pengembangan</h1>
    <p>Website <b>SD Negeri 3 Gelumbang</b> sedang dalam pengembangan.<br><br>
     <span class="emoji">🚧</span></p>

    <a href="index.php" class="back-btn">⬅ Kembali</a>

    <div class="footer">
      © 2025 SD Negeri 3 Gelumbang. Hak Cipta Dilindungi Undang-Undang No. 28 Tahun 2014
    </div>
  </div>
</body>
</html>
