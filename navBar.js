let navbar = ` <!--NavBar-->
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
        <a
          class="nav-link"
          href="index.html"
          style="
            border-radius: 25px;
            border: rgba(255, 255, 255, 0.637);
            background-color: rgba(255, 255, 255, 0.637);
            color: black;
          "
          >Home</a
        >
        <a class="nav-link" href="training.html">Training Plans</a>
        <a class="nav-link" href="health.html">Health</a>
        <a class="nav-link" href="contact.html">Contact</a>
        <a class="nav-link" href="about.html">About us</a>
        <a class="nav-link" href="questionnaire.html">Questionnaire</a>
      </div>
    </div>
  </div>
</nav>`;

let htmlNav = document.querySelector("#nav-bar");
htmlNav.innerHTML += navbar;
