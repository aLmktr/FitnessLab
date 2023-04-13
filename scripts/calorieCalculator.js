function calculate() {
  // select the form inputs
  let form = document.forms["claorieCalculator"];
  let weight = form.weight.value;
  let height = form.height.value;
  let age = form.Age.value;
  let activity = form.activeity.value;
  let gender = form.gender.value;
  let result = document.getElementById("calorieResult");
  result.innerHTML = "";

  // calculate colorie intake
  let calorieNeed = calorieEquation(weight, height, age, gender, activity);

  // display result
  countingTO(calorieNeed, result);

  return false;
}

function calorieEquation(weight, height, age, gender, activity) {
  // calculate the BMR
  BMR = 10 * weight + 6.25 * height - 5 * age;
  // change the parametres based on gender
  if (gender == "male") {
    BMR += 5;
  } else if (gender == "female") {
    BMR -= 161;
  }

  // calculate the total daliy need with activity factor
  TDEE = Math.round(BMR * activity);
  return TDEE;
}

// show number in couting effect
function countingTO(target, element) {
  let counter = target - 20;
  let interval = 40;
  let timer = setInterval(function () {
    counter++;
    element.textContent = counter;
    if (counter === target) {
      element.textContent += " Calories";
      clearInterval(timer);
    }
  }, interval);
}
