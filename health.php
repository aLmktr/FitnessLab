<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <link
      rel="icon"
      type="image/x-icon"
      href="/src/fitnesslab-favicon-dark.png"
    />

    <link rel="stylesheet" href="styles/style.css" />
    <script defer src="scripts/calorieCalculator.js"></script>
    <style>
      p.h3 {
        color: white;
        font-family: inherit;
        font-size: 1.8em;
        font-weight: lighter;
      } 
    </style>
    <title>Health & nutrition</title>
  </head>
  <body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img
            src="src/FitnessLab-logo-noBg-white.png"
            alt="logo"
            height="60"
            width="70"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.html">Home</a>
            <a class="nav-link" href="training.php">Training Plans</a>
            <a
              class="nav-link"
              href="health.php"
              style="
                border-radius: 25px;
                border: rgba(255, 255, 255, 0.637);
                background-color: rgba(255, 255, 255, 0.637);
                color: black;
              "
              >Health</a
            >
            <a class="nav-link" href="contact.php">Contact</a>
            <a class="nav-link" href="questionnaire.php">Questionnaire</a>
            <a class="nav-link" href="funpage.html">Game</a>
          </div>
        </div>
      </div>
    </nav>

    <!--body-->

    <div class="container">
      <p class="display-6 text-center mb-5">Calorie Calculator</p>
      <div class="row">
        <!--Calculator-->
        <div class="col-md-6">
          <div class="calorieCalculator">
            <form
              id="claorieCalculator"
              name="claorieCalculator"
              onsubmit="return calculate()"
            >
              <div class="mb-3">
                <input
                  class="form-control"
                  type="text"
                  name="weight"
                  placeholder="Weight(kg)"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  class="form-control"
                  type="text"
                  name="height"
                  placeholder="Height(Cm)"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  class="form-control"
                  type="text"
                  name="Age"
                  placeholder="Age"
                  required
                />
              </div>

              <div class="mb-3">
                <select
                  class="form-select"
                  name="activity"
                  id="activeity"
                  required
                >
                  <option value="" selected hidden>Activity Level*</option>
                  <option value="1.2">sedentary</option>
                  <option value="1.375">lightly active</option>
                  <option value="1.475">moderately active</option>
                  <option value="1.725">very active</option>
                </select>
              </div>

              <div class="form-check text-light">
                <label for="male">Male</label>
                <input
                  class="form-check-input"
                  type="radio"
                  name="gender"
                  value="male"
                  required
                />
              </div>
              <div class="form-check text-light">
                <label for="female">Female</label>
                <input
                  class="form-check-input"
                  type="radio"
                  name="gender"
                  value="female"
                  required
                />
              </div>

              <br />
              <button class="btn btn-outline-light mb-5" type="submit">
                Calculate
              </button>
            </form>
          </div>
        </div>
        <!--Result-->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <p class="h3 text-dark" id="calorieResult"></p>
            </div>
            <div class="card-body">
              <div class="progress mb-2">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                  role="progressbar"
                  style="width: 50%"
                >
                  50% Carb
                </div>

                <div
                  class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                  role="progressbar"
                  style="width: 35%"
                >
                  35% Protein
                </div>

                <div
                  class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                  role="progressbar"
                  style="width: 15%"
                >
                  15% Fats
                </div>
              </div>
              <div class="card-text mt-4">
                This is the amount of calories you need to maintain your current
                weight. Adjust your calorie intake to achieve your health and
                fitness goals, and remember to make healthy food choices and
                exercise regularly.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Below Calculator-->
      <!--Q1-->
      <div class="row">
        <div class="col-md-6 col-lg-auto">
          <p class="h3 mb-3">
            FoodyDB - Discover the appropriate food that matches your required calorie intake!
          </p>
          <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
            class = "mb-5" 
            method="POST"
          >
            <div class="row">
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  name="calorie"
                  placeholder="Calories less than ..."
                />
              </div>
              <div class="col">
                <input
                  type="submit"
                  class="btn btn-outline-light"
                  value="Search"
                />
              </div>
            </div>
            </div>
          </form>
          <div class="row mt-2">
              <div class="col">
                <?php include 'php/health/foodData.php' ?>
              </div>
        </div>
      </div>
      <!--Q2-->
        <div class="row my-5">
          <div class="col">
              <p class="h3 mb-4">What does activity level mean?</p>
              <?php include 'php/health/activity_table_data.php';?>
          </div>
        </div>
    </div>
  </body>
</html>
