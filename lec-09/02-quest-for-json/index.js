// Our quest: log out the JS objects representing the photos for a given city

// const BASE_CITY_IMAGES_API_ENDPOINT =
//   "https://www.randyconnolly.com/funwebdev/3rd/api/travel/images.php";

// 🧠 What do you see when you go to this endpoint? (that's a new word)
// 🧠 Do we want ALL this JSON for our task? (what is our task again?)
// 5892532
// Try going to www.randyconnolly.com/funwebdev/3rd/api/travel/images.php?city=5913490
// 🧠 What do you notice about the JSON we get now?
// 🧠 What is that `city=5913490` part called? (think back to web 1 forms...)
// 🧠 Where did that 5913490 come from?
// 🧠 Where can we find a similar number for Banff?

// TODO: make a function that returns an API endpoint for a given city (but only Calgary & Banff)
// 🧠 What do you want to call it?
// function apiEndpointFor(city) {
//   return BASE_CITY_IMAGES_API_ENDPOINT + "?city=" + codeFor(city);
// }

// function codeFor(city) {
//   switch(city.toUpperCase()) {
//     case "BANFF": return 5892532 ;
//     case "CALGARY": return 5913490;
//     default: return -1;
//   }
// }

// TODO: this seems pretty useful.
// Make a constructor function for it and park it in its own file.

// OK - we've now got a way to easily figure out where the delicious JSON is.

// 🧠 What's our next step?

let endpoint = new Endpoint();
const fetchResult = fetch(endpoint.for("calgary"));
console.log(fetchResult);

// 🧠 Is `fetch` JavaScript?
// 🧠 What is fetch taking as its argument?
// 🧠 What kind of thing does fetch return, based on what we see in the console?
// 🧠 If you expand the Promise in the console, what do we see?
// 🧠 What's with the [[blahblah]]?
// 🧠 What's with the "pending" and the "fulfilled" and the blue i thingie?
// 🧠 What kind of thing is a Promise?
// 🧠 What properties does it have that you can access? How can you find out?
// 🧠 How do we get the JSON?!?

// How DO we get the JSON?

// 🧠 Expand the Promise again. What type of thing is the [[PromiseResult]]?
// 🧠 If you Google "response mdn" and look at the methods available...notice one dealing with json?

// Let's rename our "fetchResult" to "promiseContainingResponse". Normally,
// you're not going to do this, but it'll be helpful as we're poking this thing
// with sticks.

// 🧠 The only way we can "talk" to objects (like this dang Promise thingie) is via what?
// 🧠 And which () are available? How can you find out?

// Let's see what this "then" thing is doing.

// 🧠 What kind of things does "then" take as its arguments?
// We'll often just pass in one callback - the "if everything is ok" or "on fulfilled" callback.

const promiseContainingImages = fetchResult.then(function (response) {
  return response.json(); // this is like a "free" JSON.parse() going on
});

promiseContainingImages.then(function (imageObjects) {
  console.log(imageObjects); // whew. Quest finished. Kinda.
});

// While it's ok to store off these Promise objects in variables when you're
// trying to figure out what the HELL is going on, in "real life", you're not
// going to see this done very often.

// Since fetch and "then" each return Promise objects, we can chain them
// together like so:

// fetch(endpoint.for("calgary"))
//   .then(function (response) {
//     return response.json();
//   })
//   .then(function (imageObjects) {
//     console.log(imageObjects);
//   });

// And it's much more common to see this done with arrow syntax:

// fetch(endpoint.for("calgary"))
//   .then((response) => response.json())
//   .then((imageObjects) => console.log(imageObjects));
