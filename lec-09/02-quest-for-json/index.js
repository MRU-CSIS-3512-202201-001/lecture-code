// spike
// web api endpoint
// suss out citycode
// query string (lots in PHP)
//

BASE_CITY_IMAGES_API_ENDPOINT =
  "https://www.randyconnolly.com/funwebdev/3rd/api/travel/images.php";

// 🧠 What do you see when you go to this endpoint? (that's a new word)
// 🧠 Do we want ALL this JSON for our task? (what is our task again?)

// Try going to www.randyconnolly.com/funwebdev/3rd/api/travel/images.php?city=5913490
// 🧠 What do you notice about the JSON we get now?
// 🧠 What is that `city=5913490` part called? (think back to web 1 forms...)
// 🧠 Where did that 5913490 come from?
// 🧠 Where can we find a similar number for Banff?

// TODO: make a function that returns an API endpoint for a given city (but only Calgary & Banff)
// 🧠 What do you want to call it?

// TODO: this seems pretty useful.
// Make a constructor function for it and park it in its own file.

// OK - we've now got a way to easily figure out where the delicious JSON is.

// 🧠 What's our next step?

const endpoint = new Endpoint();
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
