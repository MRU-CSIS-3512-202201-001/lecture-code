// this is something that you see a lot when you're first starting out

// some global constants, where you plan to put "that result stuff from the API"
const results = [];

const endpoint = new Endpoint();

fetch(endpoint.for("calgary"))
  .then((response) => response.json())
  .then((pictures) => {
    pictures.forEach((picture) => {
      results.push(picture); // 🧠 What are we doing here?
    });
  });

// 😕 This kind of thing pops up a lot. The reasoning goes something like
// this: "if I can just make JS wait long enough somehow, then the fetch
// will have time to do its thing and fill the results array"

// This is, unfortunately, very untrue. Why?
