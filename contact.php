<!DOCTYPE html>
<html lang="en">
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
      input {
        background-color: black;
      }
      .social > a {
        color: white;
        margin: 1.5em;
      }
    </style>
    <title>Contact us</title>
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
            <a class="nav-link" href="health.php">Health</a>
            <a
              class="nav-link"
              href="contact.html"
              style="
                border-radius: 25px;
                border: rgba(255, 255, 255, 0.637);
                background-color: rgba(255, 255, 255, 0.637);
                color: black;
              "
              >Contact</a
            >
            <a class="nav-link" href="questionnaire.html">Questionnaire</a>
            <a class="nav-link" href="funpage.html">Game</a>
          </div>
        </div>
      </div>
    </nav>

    <!--body-->
    <div class="container">
      <p class="display-6 text-center mb-5">Contact us</p>
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
            method="get"
            enctype="application/x-www-form-urlencoded"
          >
            <div class="form-outline mb-3">
              <input class="form-control" type="text" placeholder="Name" name="name"/>
            </div>
            <div class="form-outline mb-3">
              <input class="form-control" type="email" placeholder="Email" name="email"/>
            </div>
            <div class="from-outline mb3">
              <textarea
                name="body"
                id="body"
                class="form-control"
                placeholder="Tell Us"
                rows="4"
              ></textarea>
            </div>
            <input
              type="hidden"
              value="Hello FitnessLab 👋"
              name="subject"
              id="subject"
            />
            <button type="submit" class="btn btn-light w-100 mt-3">Send</button>
          </form>
          <?php include 'php/contact/contact_from.php' ?>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-auto mx-auto text-center">
          <p class="display-6">You can also find us on</p>
          <div class="social m-auto">
            <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-snapchat fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--footer-->
    <div class="footer fixed-bottom">
      <footer class="text-center text-light">
        <!-- Copyright -->
        <div class="text-center p-5">© 2023 Copyright: FitnessLab</div>
      </footer>
    </div>
  </body>
</html>
