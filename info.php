<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Rapot SD Negeri 3 Gelumbang</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: radial-gradient(circle at top left, #e0f2fe, #f8fafc);
      font-family: "Poppins", sans-serif;
      color: #1e293b;
      overflow: hidden;
    }

    .glow {
      position: absolute;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      filter: blur(100px);
      opacity: 0.6;
      animation: float 8s ease-in-out infinite alternate;
    }

    .glow.blue {
      background: #3b82f6;
      top: -80px;
      left: -120px;
    }

    .glow.gold {
      background: #facc15;
      bottom: -100px;
      right: -100px;
    }

    @keyframes float {
      from { transform: translateY(0); opacity: 0.6; }
      to { transform: translateY(30px); opacity: 0.8; }
    }

    .card {
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      padding: 45px 40px;
      text-align: center;
      width: 90%;
      max-width: 460px;
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(25px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .icon {
      width: 85px;
      height: 85px;
      margin: 0 auto 20px;
      background: url('https://i.ibb.co/TrKp3Ry/gear.png') no-repeat center;
      background-size: contain;
      animation: spin 5s linear infinite;
      filter: drop-shadow(0 0 8px rgba(59,130,246,0.4));
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    h1 {
      font-size: 2rem;
      font-weight: 600;
      color: #1e3a8a;
      margin-bottom: 12px;
    }

    p {
      font-size: 1.05rem;
      color: #334155;
      line-height: 1.6;
      margin-bottom: 28px;
    }

    .btn {
      display: inline-block;
      padding: 12px 28px;
      background: linear-gradient(135deg, #2563eb, #1e3a8a);
      color: #fff;
      text-decoration: none;
      border-radius: 30px;
      font-weight: 500;
      box-shadow: 0 4px 12px rgba(37,99,235,0.3);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #1d4ed8, #1e3a8a);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(37,99,235,0.45);
    }

    footer {
      margin-top: 30px;
      font-size: 0.9rem;
      color: #64748b;
    }

    @media (max-width: 600px) {
      h1 { font-size: 1.7rem; }
      p { font-size: 1rem; }
      .icon { width: 70px; height: 70px; }
    }
  </style>
</head>
<body>
  <div class="glow blue"></div>
  <div class="glow gold"></div>

  <div class="card">
    <div class="icon"></div>
    <h1>e-Rapot Sementara Offline</h1>
    <p>
      Layanan <strong>e-Rapot SD Negeri 3 Gelumbang</strong> sedang diperbarui.<br>
      Kami sedang menyiapkan sistem agar kembali online dalam waktu dekat.<br>
      Terima kasih atas pengertiannya.
    </p>
    <a href="https://sdn3gelumbang.my.id/" class="btn">⬅ Kembali ke Beranda</a>
    <footer>© 2025 SD Negeri 3 Gelumbang</footer>
  </div>
</body>
</html>
