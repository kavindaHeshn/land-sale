<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Department of Posts - Sri Lanka</title>
  <link rel="icon" href="favicon.png" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-color: #f8f9fa;
      --text-color: #000;
      --card-bg: #fff;
      --btn-gradient: linear-gradient(to right, #d60000, #ff6600);
      --btn-gradient-hover: linear-gradient(to right, #b00000, #cc5200);
    }

    body.dark-mode {
      --bg-color: #1e1e1e;
      --text-color: #f1f1f1;
      --card-bg: #2a2a2a;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      margin: 0;
      padding: 0;
      transition: 0.3s;
    }

    .top-bar {
      background-color: white;
      padding: 10px 0;
      border-bottom: 2px solid #ccc;
    }

    .language-links {
      text-align: right;
      padding-right: 20px;
      font-weight: bold;
    }

    .language-links a {
      margin-left: 15px;
      color: goldenrod;
      text-decoration: none;
    }

    .language-links a:hover {
      text-decoration: underline;
    }

    .logo-bar {
      text-align: center;
      margin: 20px 0;
    }

    .logo-bar img {
      height: 90px;
    }

    .dept-name {
      font-size: 26px;
      font-weight: bold;
      color: #cc0000;
    }

    .navbar-custom {
      background: var(--btn-gradient);
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .navbar-custom .nav-link {
      color: white !important;
      font-weight: 500;
    }

    .navbar-custom .nav-link:hover {
      text-decoration: underline;
    }

    .service-buttons {
      max-width: 650px;
      margin: 50px auto;
      background-color: var(--card-bg);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .service-buttons h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #d60000;
      font-weight: 600;
    }

    .btn-service {
      display: block;
      width: 100%;
      padding: 12px 20px;
      margin: 10px 0;
      background: var(--btn-gradient);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      text-align: left;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.3s ease;
      text-decoration: none;
    }

    .btn-service:hover {
      background: var(--btn-gradient-hover);
      transform: translateX(5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .search-dark {
      display: flex;
      justify-content: end;
      gap: 10px;
      padding: 10px 20px;
    }

    .search-dark input[type="text"] {
      padding: 6px 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .search-dark button {
      border: none;
      padding: 6px 12px;
      background: #d60000;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }

    .search-dark button:hover {
      background: #a10000;
    }

    .toggle-dark-btn {
      background: #222;
      color: white;
    }

    @media (max-width: 768px) {
      .dept-name {
        font-size: 20px;
      }

      .logo-bar img {
        height: 70px;
      }

      .service-buttons {
        margin: 20px 15px;
        padding: 20px;
      }

      .btn-service {
        font-size: 15px;
        padding: 10px 15px;
      }

      .search-dark {
        flex-direction: column;
        align-items: stretch;
      }
    }
  </style>
</head>
<body>

  <!-- Top Language and Logo Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <img src="Capture.JPG" height="30" alt="Gov Logo"/>
        </div>
        <div class="col language-links">
          <a href="#">සිංහල</a>
          <a href="#">தமிழ்</a>
          <a href="#">English</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logo and Department Name -->
  <div class="logo-bar">
    <img src="Capture.JPG" alt="Postal Logo"/>
    <div class="dept-name mt-2">
      ශ්‍රී ලංකා තැපැල් දෙපාර්තමේන්තුව<br/>
      Department of Posts - Sri Lanka
    </div>
  </div>

  <!-- Search and Dark Mode Toggle -->
  <div class="search-dark">
    <input type="text" id="searchBox" placeholder="Search Postal Services...">
    <button onclick="search()">Search</button>
    <button class="toggle-dark-btn" onclick="toggleDarkMode()">🌙 Dark Mode</button>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Information</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Media Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Notices</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Site Map</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Postal Services Section -->
  <div class="service-buttons">
    <h2>Postal Services</h2>
    <a href="Letters.php" class="btn-service">📩 Letters</a>
    <a href="#" class="btn-service">📝 Postcards</a>
    <a href="#" class="btn-service">📦 Printed Matter and Open Packets</a>
    <a href="#" class="btn-service">📰 Periodicals Registered as Newspapers</a>
    <a href="#" class="btn-service">♿ Sending Postal Articles to Visually Impaired</a>
    <a href="#" class="btn-service">📨 Business Reply Envelopes and Cards</a>
    <a href="#" class="btn-service">🚚 Parcel Post</a>
    <a href="#" class="btn-service">🔁 Re-Directing Mail</a>
    <a href="#" class="btn-service">✅ Registered Mail</a>
  </div>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle("dark-mode");
    }

    function search() {
      const input = document.getElementById('searchBox').value.toLowerCase();
      const services = document.querySelectorAll('.btn-service');
      services.forEach(btn => {
        const text = btn.textContent.toLowerCase();
        btn.style.display = text.includes(input) ? 'block' : 'none';
      });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
