<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      />
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
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #7cb9e8;
        }
        h1 {
          text-align: center;
          margin-top: 50px;
          margin-bottom: 30px;
          color: white;
        }
        form {
          width: 600px;
          margin: 0 auto;
          background-color: #ffffff;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        input[type="submit"] {
          background-color: #4caf50;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          font-size: 16px;
          margin-top: 5px;
          float: right;
        }
        input[type="submit"]:hover {
          background-color: #3e8e41;
        }
        label {
          display: block;
          margin-bottom: 10px;
          font-weight: bold;
          color: #333;
        }
        input[type="text"],
        input[type="email"],
        textarea {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-bottom: 20px;
          font-size: 16px;
        }
        input[type="radio"],
        input[type="checkbox"] {
          margin-right: 10px;
        }
        input[type="radio"] + label,
        input[type="checkbox"] + label {
          display: inline-block;
          margin-right: 20px;
          font-weight: normal;
          color: #333;
        }
        .error {
          color: red;
          font-size: 12px;
          margin-top: 5px;
        }
      </style>
      <title>Questionnaire</title>
    </head>
    <body>
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
              <a class="nav-link" href="health.php">Health</a>
              <a class="nav-link" href="contact.php">Contact</a>
              <a
                class="nav-link"
                href="questionnaire.php"
                style="
                  border-radius: 25px;
                  border: rgba(255, 255, 255, 0.637);
                  background-color: rgba(255, 255, 255, 0.637);
                  color: black;
                "
                >Questionnaire</a
              >
              <a class="nav-link" href="funpage.html">Game</a>
            </div>
          </div>
        </div>
      </nav>

      <h1>Customer Feedback Questionnaire</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />

        <label for="rating">Overall satisfaction:</label>
        <input type="radio" id="rating1" name="rating" value="1" />
        <label for="rating1">1</label>
        <input type="radio" id="rating2" name="rating" value="2" />
        <label for="rating2">2</label>
        <input type="radio" id="rating3" name="rating" value="3" />
        <label for="rating3">3</label>
        <input type="radio" id="rating4" name="rating" value="4" />
        <label for="rating4">4</label>
        <input type="radio" id="rating5" name="rating" value="5" />
        <label for="rating5">5</label>

        <label for="feedback">What did you like about our service?</label>
        <textarea id="feedback" name="feedback" rows="5" placeholder="Feedback"></textarea>

        <label for="improvements">How can we improve our service?</label>
        <input
          type="checkbox"
          id="improvements1"
          name="improvements"
          value="faster"
        />
        <label for="improvements1">Faster</label>
        <input
          type="checkbox"
          id="improvements2"
          name="improvements"
          value="cheaper"
        />
        <label for="improvements2">Cheaper</label>
        <input
          type="checkbox"
          id="improvements3"
          name="improvements"
          value="better"
        />
        <label for="improvements3">Better</label>

        <label for="newsletter">Subscribe to our newsletter?</label>
        <input type="checkbox" id="newsletter" name="newsletter" value="yes" />

        <input type="submit" value="Submit" />
        <?php include 'php/questionnaire/questionnaire_validation.php' ?>
      </form>
      
    </body>
  </html>
</html>
