// this is something that you see a lot when you're first starting out

// some global constants, where you plan to put "that result stuff from the API"
const results = [];

const endpoint = new Endpoint();

console.log("starting fetch process");

fetch(endpoint.for("calgary"))
  .then((response) => {
    console.log('response came back');
    return response.json();
  })
  .then((pictures) => {
    console.log('starting to copy results');
    pictures.forEach((picture) => {
      results.push(picture); // 🧠 What are we doing here?
    });
  });

for (let i = 0; i < 30000000000; i++) {
  let x = 1;
}

console.log("results are ready!", results);

// 😕 This kind of thing pops up a lot. The reasoning goes something like
// this: "if I can just make JS wait long enough somehow, then the fetch
// will have time to do its thing and fill the results array"

// This is, unfortunately, very untrue. Why?
