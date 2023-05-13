<?php 
      error_reporting(0);
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
        echo "<table class='table table-responsive table-striped table-borderless' id='table'>";
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

      displayExercises($legDayExercies);



      // check if the form has been submitted
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $exercise = $_POST['exercise'];
        $setsReps = $_POST['sets'];

        // add the exercise to the array
        array_push($legDayExercies, new Exercise($exercise, $setsReps));
 

        // remove old table 
        echo "<script>deleteTable();</script>";

        // display the exercises in a table
        displayExercises($legDayExercies);
      }

  ?>