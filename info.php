<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Info sekolah SD Negeri 3 Gelumbang</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(135deg, #fceabb, #f8b500);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #333;
    }

    .container {
      text-align: center;
    }

    .gear {
      width: 100px;
      height: 100px;
      margin: 0 auto 20px;
      background: url('https://i.ibb.co/TrKp3Ry/gear.png') no-repeat center;
      background-size: contain;
      animation: spin 3s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2rem;
      color: #444;
    }

    .emoji {
      font-size: 2rem;
      animation: bounce 1s infinite alternate;
    }

    @keyframes bounce {
      from { transform: translateY(0); }
      to { transform: translateY(-10px); }
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2rem;
      }

      .gear {
        width: 70px;
        height: 70px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="gear"></div>
    <h1>Halaman Dalam Pengembangan</h1>
    <p>Sabar ya... sedang dalam pengembangan! <span class="emoji">🚧</span></p>
  </div>
</body>
</html>
