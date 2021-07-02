<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tafee</title>
    <link rel="stylesheet" href="./src/css/style.css" />
    <link rel="stylesheet" href="./src/css/aos.css" />
    <script src="./src/js/aos.js"></script>
    <!-- javascript plugins -->
    <script src="./src/js/app.js"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo"><img src="./src/images/logo.png" /></a>
        <a href="about.php">ABOUT US</a>
        <a href="dataset.php">DATASET</a>
        <a href="predict.php">PREDICT</a>
        <a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="showNav()">&#9776;</a>
    </div>
    <div class="main">
        <div class="header">
            <div class="col-1">
                <h1 class="header-line">
                    <img src="./src/images/logo.png" alt="logo" />
                    <span class="expand-text-v2"> Tafee</span>
                </h1>
                <p data-aos="fade-down">
                    A travel fee predictor using <br>Multiple Linear Regression.
                </p>
                <a href="predict.php"><button class="btn-try-now">Let's Go</button></a>
            </div>
            <div class="col-2">
                <img src="./src/images/undraw_destinations_fpv7.png" data-aos="fade-up" />
            </div>
        </div>
        <div class="info-section">
            <div class="col-1">
                <h1 data-aos="fade-right">What is Multiple Linear Regression?</h1>
                <img src="./src/images/undraw_predictive_analytics_kf9n.png" data-aos="fade-left" />
            </div>
            <div class="col-2">
                <div class="def-container" data-aos="zoom-out">
                    <div class="def-header">
                        <h1>01</h1>
                    </div>
                    <div class="def-content">
                        <p>
                            Multiple linear regression is used to estimate the relationship
                            between two or more independent variables and one dependent variable.
                        </p>
                    </div>
                </div>
                <div class="def-container" data-aos="zoom-out">
                    <div class="def-header">
                        <h1>02</h1>
                    </div>
                    <div class="def-content">
                        <p>
                            Multiple linear regression analysis is an extension of simple linear
                            regression analysis.
                        </p>
                    </div>
                </div>
                <div class="def-container" data-aos="zoom-out">
                    <div class="def-header">
                        <h1>03</h1>
                    </div>
                    <div class="def-content">
                        <p>
                            Multiple linear regression makes all of the same assumptions as simple linear regression.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-section" data-aos="fade-up">
            <h1>What Taffee can do?</h1>
        </div>
        <div class="cards">
            <div class="card" data-aos="zoom-in">
                <h1>Giving you the Map</h1>
                <img src="./src/images/undraw_map_1r69.png" />
            </div>
            <div class="card" data-aos="zoom-out">
                <h1>Know your Location</h1>
                <img src="./src/images/undraw_Destination_re_sr74.png" />
            </div>
            <div class="card" data-aos="zoom-in">
                <h1>Get Directions</h1>
                <img src="./src/images/undraw_right_direction_tge8.png" />
            </div>
            <div class="card" data-aos="zoom-out">
                <h1>Fullfill your plan</h1>
                <img src="./src/images/undraw_travel_plans_li01.png" />
            </div>
        </div>
        <!-- information section 2 -->
        <div class="third-section">
            <div class="col-1">
                <h1>Supervised Machine learning</h1>
                <p>
                    Supervised learning uses a training set to teach models to yield the desired output.
                    This training dataset includes inputs and correct outputs,
                    which allow the model to learn over time. The algorithm measures
                    its accuracy through the loss function, adjusting until the error has been sufficiently minimized.
                    Supervised learning can be separated into two
                    types of problems when data mining—classification and regression.
                </p>
                <h1>Regression</h1>
                <p>
                    Regression is a statistical method used in finance, investing,
                    and other disciplines that attempts to determine the strength and
                    character of the relationship between one dependent variable
                    (usually denoted by Y) and a series of other variables (known as independent variables).
                </p>
                <h1>Simple Linear Regression</h1>
                <p>
                    Simple linear regression is used to model the relationship between two continuous variables. Often, the objective is to predict the value of an output variable (or response) based on the value of an input (or predictor) variable.
                    You can use regression to develop a more formal understanding of relationships between variables. In regression, and in statistical modeling in general, we want to model the relationship between an output variable, or a response, and one or more input variables, or factors.
                </p>
                <h1>Multiple Linear Regression</h1>
                <p>
                    Multiple linear regression is the most common form of linear regression analysis. As a predictive analysis, the multiple linear regression is used to explain the relationship between one continuous dependent variable and two or more independent variables. The independent variables can be continuous or categorical (dummy coded as appropriate).
                </p>
            </div>
        </div>
        <div class="footer">LSPU-SPCC CSEL-302(INTELLIGENT SYSTEMS)</div>
    </div>
</body>
<script>
    AOS.init({
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1200, // values from 0 to 3000, with step 50ms

    });
</script>

</html>
