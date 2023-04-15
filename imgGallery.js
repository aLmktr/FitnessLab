// select the gallery div
let gallery = document.querySelector("#gallery");

// set the style for the gallery
gallery.style.cssText = `display: flex; text-align: center; flex-wrap: wrap; justify-content: center; align-items: center;`;

// images sources

let sources = {
  img1: ["/src/noImg.webp", "This is the first image"],
  img2: ["/src/noImg.webp", "This is the second image"],
  img3: ["/src/noImg.webp", "This is the third image"],
};

// display the images in the gallery
function displayImages(sources) {
  for (key in sources) {
    // check if the property/key is defined in the object itself, not in parent
    if (sources.hasOwnProperty(key)) {
      let imgSrc = sources[key][0];
      let description = sources[key][1];
      let img = `<div class="gallery" style = "background-color: white; margin: 2em;">
            <img
             src="${[imgSrc]}"
             alt="no Imgae"
             width="300"
             height="250"
                            />
            <div class="description">${description}</div>
            </div>`;
      gallery.innerHTML += img;
    }
  }
}

displayImages(sources);
