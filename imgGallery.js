// select the gallery div
let gallery = document.querySelector("#gallery");

// set the style for the gallery
gallery.style.cssText = `display: flex; text-align: center; flex-wrap: wrap; justify-content: center; align-items: center;`;

// images sources

let sources = {
  img1: [
    "src/cardio.png",
    "We offer customized cardio plans tailored to your fitness goals and level of fitness",
  ],
  img2: [
    "src/supplements.jpg",
    "We offer expert advice on supplements for optimal health and wellness.",
  ],
  img3: [
    "src/calorie.png",
    "We offer a calorie calculator service to help you track your daily intake",
  ],
};

// display the image
function displayImages(sources, key) {
  let imgSrc = sources[key][0];
  let description = sources[key][1];
  let img = `<div class="gallery" style = "background-color: white; border-radius: 0.5em;">
            <img
             src="${[imgSrc]}"
             alt="no Imgae"
             width = 100%
             height = 100%;
             style = "border-radius:0.5em 0.5em 0 0;"/>
            <div style = "padding: 1em; fon">${description}</div>
            </div>`;
  gallery.innerHTML = img;
}

// change image each 5 seconds
function changeImage() {
  let i = 0;
  let interval = 5000;
  let keys = Object.keys(sources);

  // display first image when the page loads
  displayImages(sources, keys[i]);

  let timer = setInterval(function () {
    i = (i + 1) % keys.length;
    let key = keys[i];
    displayImages(sources, key);
  }, interval);
}

changeImage();
