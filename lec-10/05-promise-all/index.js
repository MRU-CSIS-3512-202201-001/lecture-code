// What if we wanted to grab BOTH the Banff and Calgary image objects?
// Say we want to store them in session storage so we wouldn't need to worry
// about going over the network each time the button is clicked.
// We could do this in "order"...grab the Banff ones first and then the Calgary ones:

// 🧠 How will this work?

const endpoint = new Endpoint();

fetch(endpoint.for("Banff"))
  .then((response) => response.json())
  .then((banffPics) =>
    sessionStorage.setItem("banffPics", JSON.stringify(banffPics))
  );

fetch(endpoint.for("Calgary"))
  .then((response) => response.json())
  .then((calgaryPics) =>
    sessionStorage.setItem("calgaryPics", JSON.stringify(calgaryPics))
  );
