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
    <script
      defer
      src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"
    ></script>
    <script defer src="scripts/trainingTable.js"></script>
    <link rel="icon" href="src/fitnesslab-favicon-dark.png" />
    <link rel="stylesheet" href="styles/style.css" />
    <style>
      a > li {
        color: black;
        text-decoration: none;
      }
      p.h3 {
        color: white;
        font-family: inherit;
        font-size: 1.8em;
        font-weight: lighter;
      }
      .small-nav {
        background-color: aliceblue;
        border-radius: 2em;
      }
      ul {
        text-align: center;
        list-style: none;
      }
      li {
        transition: transform 0.2s ease-out;
        display: inline-block;
        margin: 0 2em 0 2em;
        padding: 0.2em;
      }
      li:hover {
        transform: scale(1.2, 1.2);
        cursor: pointer;
      }
      .h4 {
        color: white;
      }
      .small-nav li {
        font-size: 1em;
      }

      @media (max-width: 768px) {
        .small-nav li {
          font-size: 0.8em;
        }
      }

      @media (max-width: 517px) {
        .small-nav li {
          font-size: 0.69em;
        }
      }

      @media (max-width: 470px) {
        .small-nav li {
          font-size: 0.62em;
        }
      }

      @media (max-width: 412px) {
        .small-nav li {
          display: block;
          font-size: 1em;
        }
      }
    </style>
    <title>Training Plans</title>
  </head>
  <body ng-app="table-app">
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
            <a
              class="nav-link"
              href="training.html"
              style="
                border-radius: 25px;
                border: rgba(255, 255, 255, 0.637);
                background-color: rgba(255, 255, 255, 0.637);
                color: black;
              "
              >Training Plans</a
            >
            <a class="nav-link" href="health.html">Health</a>
            <a class="nav-link" href="contact.html">Contact</a>
            <a class="nav-link" href="questionnaire.html">Questionnaire</a>
            <a class="nav-link" href="funpage.html">Game</a>
          </div>
        </div>
      </div>
    </nav>

    <!--body-->
    <div class="container">
      <div class="row mt-3">
        <div class="col text-center">
          <p class="display-6">Choose Your Fitness Journey</p>
        </div>
      </div>
      <!--nav-->
      <div class="row mt-3">
        <div class="col mx-auto">
          <div class="small-nav">
            <ul>
              <a href="#Strength"><li>Strength</li></a>
              <a href="#Cardio"><li>Cardio</li></a>
              <a href="#Weight_Loss"><li>Weight Loss</li></a>
              <a href="#Bodyweight"><li>Bodyweight</li></a>
            </ul>
          </div>
        </div>
      </div>
      <!--Training plans-->
      <div class="row mt-5" id="Strength">
        <p class="display-6 mb-4">Strength 🏋️‍♂️</p>
        <!--Legs-->
        <div class="row">
        <div class="col-md-6">
              <?php 

              // class to maintain information about one row 
              class Exercise {
                private $exercise;
                private $setsReps;

                // constructor
                public function __construct($exercise, $setsReps){
                  $this->exercise = $exercise;
                  $this->setsReps = $setsReps;
                }

                // get sets and reps
                public function getSetsReps(){
                  return $this->setsReps;
                }

                // get exercise
                public function getExercise(){
                  return $this->exercise;
                }
              }

              // array of objects to maintain info about exercises
              $legDayExercies = [
                new Exercise("Squats", "3 x 12"),
                new Exercise("Deadlifts", "3 x 10"),
                new Exercise("Lunges", "3 x max"),
                new Exercise("Leg Press", "3 x 15"),
                new Exercise("Calf Raises", "4 x 12"),
                new Exercise("Leg Extension", "3 x 15, 12, 10"),
                new Exercise("Glute-Ham Raises", "3 x 10")
              ];

              // display the exercises in a table
              function displayExercises($data){
                echo "<table class='table table-responsive table-striped table-borderless'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Exercise</th>";
                echo "<th>Sets & Reps</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach($data as $exercise){
                  echo "<tr>";
                  echo "<td>" . $exercise->getExercise() . "</td>";
                  echo "<td>" . $exercise->getSetsReps() . "</td>";
                  echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
              }

              $display = displayExercises($legDayExercies);
              ?>
              
            </div>
          <div class="col-md-6">
            <p class="h3">Day 1 / Legs</p>
            <p class="mt-4" style="font-family: inherit">
              Leg day workouts can be intense and challenging, as the lower body
              muscles are some of the largest and strongest muscles in the body.
              They also play a critical role in everyday movements, such as
              walking, running, and jumping. Therefore, strengthening these
              muscles can improve overall athletic performance and help prevent
              injuries.
            </p>
            <form id="insert-row">
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    id="exercise"
                    class="form-control"
                    placeholder="Exercise"
                    required
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    id="sets"
                    class="form-control"
                    placeholder="Sets & Reps"
                    required
                  />
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-outline-light w-100">
                    Add
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    class="form-control mt-3 mb-3"
                    id="search"
                    placeholder="Search for exercise"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--Chest-->
        <div class="row">
          <div class="col-md-6">
            <p class="h3">Day 2 / Chest and Triceps</p>
            <p class="mt-4" style="font-family: inherit">
              Chest and triceps day is all about building a strong and defined
              upper body. It's a challenging workout that will push your limits
              and leave you feeling accomplished.
            </p>
            <p class="" style="font-family: inherit">
              And don't forget, the key to building a strong and defined chest
              and triceps is consistency. So keep showing up and putting in the
              work, and you'll see results in no time.
            </p>
          </div>
          <div class="col-md-6">
            <table
              class="table table-responsive table-striped table-borderless"
            >
              <thead>
                <tr>
                  <th>Exercise</th>
                  <th>Sets x Reps</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bench Press</td>
                  <td>3 x 10</td>
                </tr>
                <tr>
                  <td>Dumbbell Fly</td>
                  <td>3 x 12</td>
                </tr>
                <tr>
                  <td>Machine Chest Press</td>
                  <td>3 x 15</td>
                </tr>
                <tr>
                  <td>Cable Crossover</td>
                  <td>3 x 15</td>
                </tr>
                <tr>
                  <td>Dips</td>
                  <td>3 x 10</td>
                </tr>
                <tr>
                  <td>Pushdowns</td>
                  <td>3 x 15</td>
                </tr>
                <tr>
                  <td>Overhead Extensions</td>
                  <td>3 x 12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--Back-->
        <div class="row">
          <div class="col-md-6">
            <table
              class="table table-borderless table-responsive table-striped"
            >
              <thead>
                <tr>
                  <th>Exercise</th>
                  <th>Sets x Reps</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Barbell Rows</td>
                  <td>4 x 8</td>
                </tr>
                <tr>
                  <td>T-Bar Rows</td>
                  <td>3 x 10</td>
                </tr>
                <tr>
                  <td>Lat Pulldowns</td>
                  <td>3 x 12</td>
                </tr>
                <tr>
                  <td>Pull-Up</td>
                  <td>3 x max</td>
                </tr>
                <tr>
                  <td>Seated Rows</td>
                  <td>3 x 10</td>
                </tr>
                <tr>
                  <td>Hammer Curls</td>
                  <td>3 x 12</td>
                </tr>
                <tr>
                  <td>Seated Curls</td>
                  <td>3 x 12</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <p class="h3">Day 3 / Back and Biceps</p>
            <p class="mt-4" style="font-family: inherit">
              On Back and Biceps day, we'll be focusing on the muscles on the
              back of our body, including the lats, rhomboids, and erector
              spinae, as well as our biceps. We'll be doing a variety of
              exercises, including barbell rows, T-bar rows, lat pulldowns,
              pull-ups, seated rows, and hammer curls, to name a few. By
              targeting these muscle groups, we'll not only improve our overall
              strength and endurance, but also our posture and upper body
              aesthetics.
            </p>
          </div>
        </div>
        <!--Shoulder-->
        <div class="row">
          <div class="col-md-6">
            <p class="h3">Day 4 / Shoulder</p>
            <p class="mt-4" style="font-family: inherit">
              Shoulder day is a workout that focuses on developing the shoulder
              muscles, traps, and forearms. This routine includes exercises such
              as Shoulder Press, Lateral Raise, Reverse Fly, Shrugs, Upright
              Row, Wrist Curls, and Farmer's Walk. These exercises will help to
              improve strength, stability, and mobility of the shoulders, while
              also promoting overall upper body strength and fitness
            </p>
          </div>
          <div class="col-md-6">
            <table
              class="table table-borderless table-responsive table-striped"
            >
              <thead>
                <tr>
                  <th>Exercise</th>
                  <th>Sets X Reps</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shoulder Press</td>
                  <td>4-8</td>
                </tr>
                <tr>
                  <td>Lateral Raise</td>
                  <td>3-15</td>
                </tr>
                <tr>
                  <td>Reverse Fly</td>
                  <td>3-12</td>
                </tr>
                <tr>
                  <td>Shrugs</td>
                  <td>3-max</td>
                </tr>
                <tr>
                  <td>Upright Row</td>
                  <td>3-10</td>
                </tr>
                <tr>
                  <td>Wrist Curls</td>
                  <td>3-max</td>
                </tr>
                <tr>
                  <td>Farmer's Walk</td>
                  <td>3-max</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row mt-5" id="Cardio">
        <p class="display-6 mb-4">Cardio 🏃‍♂️</p>
        <div class="col-md-6">
          <table class="table table-responsive table-borderless table-striped">
            <thead>
              <tr>
                <th>Week</th>
                <th>Day</th>
                <th>Duration</th>
                <th>Intensity</th>
                <th>Type</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">1-2</td>
                <td>1</td>
                <td>20 min</td>
                <td>Low</td>
                <td>Walking</td>
              </tr>
              <tr>
                <td>2</td>
                <td>25 min</td>
                <td>Low</td>
                <td>Running</td>
              </tr>
              <tr>
                <td>3</td>
                <td>30 min</td>
                <td>Low-Moderate</td>
                <td>Jogging</td>
              </tr>
              <tr>
                <td rowspan="3">3-4</td>
                <td>1</td>
                <td>30 min</td>
                <td>High</td>
                <td>Stair Climbing</td>
              </tr>
              <tr>
                <td>2</td>
                <td>35 min</td>
                <td>Moderate-High</td>
                <td>HIIT</td>
              </tr>
              <tr>
                <td>3</td>
                <td>40 min</td>
                <td>Moderate</td>
                <td>Running</td>
              </tr>
              <tr>
                <td rowspan="3">5-6</td>
                <td>1</td>
                <td>35 min</td>
                <td>Low</td>
                <td>Walking</td>
              </tr>
              <tr>
                <td>2</td>
                <td>40 min</td>
                <td>Moderate</td>
                <td>Swimming</td>
              </tr>
              <tr>
                <td>3</td>
                <td>45 min</td>
                <td>High-Intense</td>
                <td>Jogging</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mt-4">
          <p class="h4">Running</p>
          <p>
            A high-impact exercise that involves running at a moderate to high
            intensity.
          </p>
          <p class="h4">Jogging</p>
          <p>A low-impact exercise that involves running at a steady pace.</p>

          <p class="h4">Stair Climbing</p>
          <p>
            A high-impact exercise that involves climbing stairs or using a
            stair climber machine.
          </p>

          <p class="h4">HIIT (High-Intensity Interval Training)</p>
          <p>
            A workout style that involves alternating periods of high-intensity
            exercise with periods of rest or lower-intensity exercise.
          </p>
        </div>
      </div>
      <div class="row mt-5" id="Weight_Loss">
        <p class="display-6 mb-4">Weight Loss 🔥</p>
        <p>
          Actually, there isn't really a category of exercises specifically
          designed for "weight loss". Rather, the best approach is to combine
          strength training exercises with cardio workouts in order to achieve
          your desired weight loss goals. By adopting this approach, you can
          ensure that you are effectively burning calories, building muscle, and
          improving your overall fitness level. So, it's just a matter of
          finding the right combination of exercises that work best for you and
          your body.
        </p>
        <p>
          You don't know your calorie intake ?? don't worry - we've got you
          covered.
          <a href="health.html" style="color: rgb(8, 18, 78)"
            >FitnessLab calorie calculator</a
          >
          allows you to easily calculate your daily calorie intake for free
        </p>
      </div>
      <div class="row mt-5" id="Bodyweight">
        <p class="display-6 mb-4">Bodyweight 💪</p>
        <div class="col-md-6 mt-4">
          <table class="table table-responsive table-borderless table-striped">
            <thead>
              <tr>
                <th>Exercise</th>
                <th>Description</th>
                <th>Repetitions</th>
                <th>Sets</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Push-ups</td>
                <td>
                  A classic exercise that targets the chest, shoulders, and
                  triceps.
                </td>
                <td>10-15</td>
                <td>3-4</td>
              </tr>
              <tr>
                <td>Squats</td>
                <td>
                  A lower-body exercise that targets the glutes, quads, and
                  hamstrings.
                </td>
                <td>10-15</td>
                <td>3-4</td>
              </tr>
              <tr>
                <td>Lunges</td>
                <td>
                  A unilateral lower-body exercise that targets the glutes,
                  quads, and hamstrings.
                </td>
                <td>10-15 (each leg)</td>
                <td>3-4</td>
              </tr>
              <tr>
                <td>Plank</td>
                <td>
                  A core exercise that strengthens the abs, back, and shoulders.
                </td>
                <td>30-60 seconds</td>
                <td>3-4</td>
              </tr>
              <tr>
                <td>Mountain climbers</td>
                <td>
                  A full-body exercise that targets the abs, shoulders, and
                  legs.
                </td>
                <td>10-15 (each leg)</td>
                <td>3-4</td>
              </tr>
              <tr>
                <td>Jumping jacks</td>
                <td>
                  A full-body exercise that increases heart rate and works the
                  arms and legs.
                </td>
                <td>30-60 seconds</td>
                <td>3-4</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 mt-5">
          <p>
            Please keep in mind that the bodyweight training plan provided here
            is just an example, and it's important to customize it based on your
            own fitness goals and abilities. You can adjust the exercises,
            repetitions, and sets to suit your specific needs and preferences.
            It's always recommended to consult with a fitness professional
            before starting any new exercise program to ensure that it's safe
            and effective for you.
          </p>
        </div>
      </div>
    </div>
    <!--footer-->
    <div class="footer nav-fixed-bottom">
      <footer class="text-center text-light">
        <!-- Copyright -->
        <div class="text-center p-5">© 2023 Copyright: FitnessLab</div>
      </footer>
    </div>
  </body>
</html>