<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="./src/css/style.css" />
  <link rel="stylesheet" href="./src/css/aos.css" />
  <script src="./src/js/aos.js"></script>
  <script src="./src/js/app.js"></script>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="logo"><img src="./src/images/logo.png" /></a>
    <a href="about.php" class="active">ABOUT US</a>
    <a href="dataset.php">DATASET</a>
    <a href="predict.php">PREDICT</a>
    <a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="showNav()">&#9776;</a>
  </div>
  <div class="main">
    <div class="about-header">
      <div class="title-header">
        <h1 class="expand-text">Our team</h1>
        <p>CSEL 302- FINAL PROJECT</p>
      </div>
      <div class="card-container">
        <div class="person-card" data-aos="fade-up">
          <img src="./src/images/Ageo.jpg" alt="Ageo Agnote" />
          <h5>Ageo Agnote</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            "We cannot deny that machine learning will always be part of our life, it will help us a lot to achieve our goal and to cope up future challenges."
          </p>
        </div>
        <div class="person-card" data-aos="zoom-in">
          <img src="./src/images/Paul.jpg" alt="Paul anjelo Yamon" />
          <h5>Paul Anjelo Yamon</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            "Machine learning lessen the repetitive task because it can determine what is the right or wrong move in a certain task in which it benefit human to do less work."
          </p>
        </div>
        <div class="person-card" data-aos="fade-down">
          <img src="./src/images/Danica.jpg" alt="Danica Marie Del Rosario" />
          <h5>Danica Marie Del Rosario</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            "The advantages of machine learning for humans or students include the capacity to improve education by categorizing students and teachers based on their needs and availability. Because of its capacity to detect patterns, make predictions, and draw conclusions, it gives analysts and decision makers previously undiscovered skills.
          </p>
        </div>
        <div class="person-card" data-aos="fade-down">
          <img src="./src/images/Arjhay.jpg" alt="Arjhay Federio" />
          <h5>Arjhay Federio</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            "One of the benefits for us students Is the machine learning has it’s
            ability to use pattern recognition to predict learning outcomes.
          </p>
        </div>
        <div class="person-card" data-aos="zoom-in">
          <img src="./src/images/Ralfh.jpg" alt="Ralfh Reneil Basbas" />
          <h5>Ralfh Reneil Basbas</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            "There's a lot of benefits that a person can get on using machine learning. One of this is the automation,
            this one does not need a human to intervent. Another one is it is easily to idetifies trends and patterns."
          </p>
        </div>
        <div class="person-card" data-aos="fade-up">
          <img src="./src/images/Kristine.jpg" alt="Kristine Kaye Arida" />
          <h5>Kristine Kaye Arida</h5>
          <p class="course">BS COMPUTER SCIENCE</p>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi
            voluptate, a cumque provident dolorum cum magni saepe earum quo
            nemo reprehenderit illum unde hic voluptatibus libero placeat,
            odit amet iusto.
          </p>
        </div>
      </div>
    </div>
    <div class="page-info-section">
      <h1 data-aos="fade-up">Technologies</h1>
      <div class="info-container">
        <a href="http://project-osrm.org" data-aos="zoom-out"><img src="./src/images/OSRM.jpg" alt="OSRM" /></a>
        <a href="https://leafletjs.com/" data-aos="zoom-out"><img src="./src/images/leaftlet.png" alt="leaftlet.js" /></a>
        <a href="https://php-ml.readthedocs.io/en/latest/machine-learning/workflow/pipeline/" data-aos="zoom-out"><img src="./src/images/php-ml-logo.png" alt="php-ml" /></a>

        <a href="https://cloud.maptiler.com/" data-aos="zoom-out"><img src="./src/images/maptiler.jpg" alt="maptiler" /></a>

        <a href="https://www.chartjs.org/" data-aos="zoom-out"><img src="./src/images/chartjs.png" alt="Chart.js" /></a>
      </div>
    </div>
    <div class="footer">LSPU-SPCC CSEL-302(INTELLIGENT SYSTEMS)</div>
  </div>
</body>
<script>
  AOS.init({
    duration: 1200
  })
</script>

</html>