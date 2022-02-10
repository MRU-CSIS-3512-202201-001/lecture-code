document.addEventListener("DOMContentLoaded", registerButtonClickHandler);

function registerButtonClickHandler() {
  document
    .querySelector(".container")
    .addEventListener("click", handleButtonClick);
}

function handleButtonClick(e) {
  if (e.target.nodeName == "BUTTON") {
    emptyCurrentResults();
    const city = e.target.textContent;
    startToPopulateResultsFor(city);
  }

  function startToPopulateResultsFor(city) {
    const endpoint = new Endpoint();
    fetch(endpoint.for(city))
    .then(function (response) {
      return response.json();
    }) 
    .then(function (imageObjects) {
      populateResultsWith(imageObjects)
    });
  }

  function emptyCurrentResults() {
    document.querySelector("#results").replaceChildren();
  }

  function jsonFor(city) {
    return city == "Banff" ? banffJson : calgaryJson;
  }

  function photosFor(city) {
    return JSON.parse(jsonFor(city));
  }

  function populateResultsWith(cityPhotos) {
    const titleDivs = cityPhotos.map(cityPhotoToTitleDiv);
    document.querySelector("#results").append(...titleDivs);
  }

  function cityPhotoToTitleDiv(photo) {
    let div = document.createElement("div");
    div.textContent = `${photo.title} (id:${photo.id}) `;
    div.classList.add("photo-box");

    div.append(cityPhotoToImgElem(photo));

    return div;
  }

  function cityPhotoToImgElem(photo) {
    let img = document.createElement("img");
    img.src = `https://res.cloudinary.com/keelian/image/upload/h_75,w_75/v1634018162/assig1-newAssets/${photo.filename}`;

    return img;
  }
}
