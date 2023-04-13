function calculate() {
  let form = document.forms["claorieCalculator"];
  let weight = form.weight.value;
  let height = form.height.value;
  let age = form.Age.value;
  let activity = form.activeity.value;
  let gender = form.gender.value;
  let result = document.getElementById("calorieResult");
  result.innerHTML = "";

  let calorieNeed = calorieEquation(weight, height, age, gender, activity);

  result.innerHTML += `<p class="h3 text-dark">${calorieNeed} Calorie<p>`;
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

  // calculate the final total daliy need with activity factor
  TDEE = Math.round(BMR * activity);
  return TDEE;
}
