const TRAVEL_PHOTO_API_BASE =
  "https://www.randyconnolly.com/funwebdev/3rd/api/travel/images.php";

const url = photoApiUrlFor("Calgary");

const fetchResult = fetch(url); // here's our new friend

fetchResult
  .then((resp) => resp.json())
  .then((objs) => console.log(JSON.stringify(objs)));
console.log(fetchResult);

displayPhotos(fetchResult);

// Some helpers. I love helpers.

function photoApiUrlFor(cityName) {
  const cityId = cityIdFromName(cityName);
  return TRAVEL_PHOTO_API_BASE + `?city=${cityId}`;
}

function cityIdFromName(cityName) {
  if (cityName == "Calgary") {
    return 5913490;
  }
  return 5892532;
}

function displayPhotos(fetchResult) {
  console.log("displaying photos");
}
