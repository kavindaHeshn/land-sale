<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GovSite - Sri Lanka</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>

<!-- Top Government Line -->
<div class="bg-primary text-white text-center py-2 fw-bold">
  ශ්‍රී ලංකාවේ නිල රජයේ මාර්ගෝපදේශ | Official Government Guidelines | இலங்கை அரசின் வழிகாட்டல்கள்
</div>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Capture.JPG" height="40" alt="Gov Logo"> GovSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">මුල් පිටුව</a></li>
        <li class="nav-item"><a class="nav-link" href="#">සේවාවන්</a></li>
        <li class="nav-item"><a class="nav-link" href="#">දැනුම්දීම්</a></li>
        <li class="nav-item"><a class="nav-link" href="#">අප ගැන</a></li>
        <li class="nav-item"><a class="nav-link" href="#">සම්බන්ධ වන්න</a></li>
      </ul>
      <select class="form-select ms-3 w-auto" onchange="changeLanguage(this)">
        <option value="si">සිංහල</option>
        <option value="en">English</option>
        <option value="ta">தமிழ்</option>
      </select>
    </div>
  </div>
</nav>

<!-- Main Sections -->
<div class="container my-5">
  <div class="row g-4">
    <div class="col-md-6 col-lg-3">
      <a href="post.php" class="text-decoration-none">
        <div class="card h-100 border-0 shadow-sm bg-info text-white">
          <div class="card-body">
            <h5 class="card-title">📮 Post Office</h5>
            <p class="card-text">Postal delivery, mail services & more.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-lg-3">
      <a href="police.html" class="text-decoration-none">
        <div class="card h-100 border-0 shadow-sm bg-success text-white">
          <div class="card-body">
            <h5 class="card-title">👮 Police Department</h5>
            <p class="card-text">Public safety and emergency support.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-lg-3">
      <a href="army.html" class="text-decoration-none">
        <div class="card h-100 border-0 shadow-sm bg-warning text-dark">
          <div class="card-body">
            <h5 class="card-title">🪖 Sri Lanka Army</h5>
            <p class="card-text">Defense, recruitment, and national security.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-lg-3">
      <a href="hospitals.html" class="text-decoration-none">
        <div class="card h-100 border-0 shadow-sm bg-danger text-white">
          <div class="card-body">
            <h5 class="card-title">🏥 Government Hospitals</h5>
            <p class="card-text">OPD, emergency care, and services.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-lg-3">
  <a href="education.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-primary text-white">
      <div class="card-body">
        <h5 class="card-title">🎓 Ministry of Education</h5>
        <p class="card-text">School updates, exams, and curriculum info.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="transport.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-secondary text-white">
      <div class="card-body">
        <h5 class="card-title">🚌 Public Transport</h5>
        <p class="card-text">Bus/train schedules and travel guidelines.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="agriculture.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-success-subtle text-dark">
      <div class="card-body">
        <h5 class="card-title">🌾 Agriculture Department</h5>
        <p class="card-text">Farming tips, fertilizer plans, and news.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="immigration.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-danger-subtle text-dark">
      <div class="card-body">
        <h5 class="card-title">🛂 Immigration & Emigration</h5>
        <p class="card-text">Visa, passport, and foreign travel rules.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="water-board.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-info-subtle text-dark">
      <div class="card-body">
        <h5 class="card-title">🚰 National Water Board</h5>
        <p class="card-text">Water supply updates and bill services.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="electricity.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-warning-subtle text-dark">
      <div class="card-body">
        <h5 class="card-title">💡 CEB (Electricity)</h5>
        <p class="card-text">Power outage notices, billing & safety tips.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="social-welfare.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-pink text-white">
      <div class="card-body">
        <h5 class="card-title">🤝 Social Welfare</h5>
        <p class="card-text">Elder care, Samurdhi, and support services.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="environment.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-success text-white">
      <div class="card-body">
        <h5 class="card-title">🌿 Environment Authority</h5>
        <p class="card-text">Green zones, recycling & awareness.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="finance.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-dark text-white">
      <div class="card-body">
        <h5 class="card-title">💰 Ministry of Finance</h5>
        <p class="card-text">Budget reports, taxes & economy updates.</p>
      </div>
    </div>
  </a>
</div>

<div class="col-md-6 col-lg-3">
  <a href="labour.html" class="text-decoration-none">
    <div class="card h-100 border-0 shadow-sm bg-light text-dark">
      <div class="card-body">
        <h5 class="card-title">⚖️ Labour Department</h5>
        <p class="card-text">Employee rights, EPF, and workplace laws.</p>
      </div>
    </div>
  </a>
</div>

  </div>
</div>

<script>
  function changeLanguage(select) {
    const lang = select.value;
    alert("Selected Language: " + lang);
    // Dynamic language switch logic goes here
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
