function calculate() {
  // select the form inputs
  let form = document.forms["claorieCalculator"];
  let weight = form.weight;
  let height = form.height;
  let age = form.Age;
  let activity = form.activity;
  let gender = form.gender;
  let result = document.querySelector("#calorieResult");
  result.innerHTML = "";

  // validate inputs
  //validateInputs(form, weight, height, age, activity, gender);

  // calculate colorie intake
  let calorieNeed = calorieEquation(
    weight.value,
    height.value,
    age.value,
    gender.value,
    activity.value
  );

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
