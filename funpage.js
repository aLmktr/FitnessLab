const cards = document.querySelectorAll(".memory-card"); //select all the cards

// creting the variables
let first_Card;
let second_Card;
let has_Flipped_Card = false;
let can_click = true;

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
