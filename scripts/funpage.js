// selecte html elements
const cards = document.querySelectorAll(".memory-card"); //select all the cards
let winningMsg = document.getElementById("winningMsg"); //select the winning msg

// creting the variables
let first_Card;
let second_Card;
let has_Flipped_Card = false;
let can_click = true;
let matches = 0;

function flip_Card() {
  //flip card work with some conditions
  if (!can_click) {
    // cant click on delay
    return;
  }
  if (this === first_Card) {
    //if the user click the same card again
    return;
  }

  this.classList.add("flip");

  if (!has_Flipped_Card) {
    has_Flipped_Card = true;
    first_Card = this;

    return;
  }

  second_Card = this;
  Match_check();
}
function reset_Board() {
  //reseting after checking
  has_Flipped_Card = false;
  can_click = true;
  first_Card = null;
  second_Card = null;
}

function Match_check() {
  if (first_Card.getAttribute("name") === second_Card.getAttribute("name")) {
    //checking by name

    first_Card.removeEventListener("click", flip_Card);
    second_Card.removeEventListener("click", flip_Card);

    reset_Board();
    matches++;
    // check if user won
    if (matches === cards.length / 2) {
      displayWinningMsg();
    }
  } else {
    // the delay
    can_click = false;

    setTimeout(() => {
      first_Card.classList.remove("flip");
      second_Card.classList.remove("flip");

      reset_Board();
    }, 1240);
  }
}
// randomizing each refresh
cards.forEach((card) => {
  let randomPos = Math.floor(Math.random() * 12);
  card.style.order = randomPos;
});

// adding the flip event
cards.forEach((card) => card.addEventListener("click", flip_Card));

// display winning msg
function displayWinningMsg() {
  // create a button
  let button = document.createElement("button");
  button.className = "btn btn-outline-primary mt-3";
  button.innerText = "Play Again";
  button.addEventListener("click", () => {
    // reload the page
    location.reload();
  });

  // style the winning msg with bootstrap
  winningMsg.className = "alert alert-dark text-center mt-3";
  winningMsg.innerHTML =
    "<p class='display-5' style='color: black;'>You Won 🎉</p>";
  winningMsg.appendChild(button);
}
