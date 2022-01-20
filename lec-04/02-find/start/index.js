let nums = [5, -13, 3, 3, 4, 2, 19];

// Here's our Bob.
function isEven(num) {
  return num % 2 == 0;
}

// 🧠 What will this do?
let result = nums.find(isEven);

// 🧠 How would you arrowfy it?

// -------------------------------------------------------

const hats = [
  {
    type: "top",
    adjective: "ostentatious",
  },
  {
    type: "beret",
    adjective: "brooding",
  },
  {
    type: "fedora",
    adjective: "adventurous",
  },
];

// 🧠 How would you find an "adventurous" hat?
let advHat = hats.find((hat) => hat.adjective == "adventurous");

// 🧠 What's going to happen here?

let nofindy = hats.find((hat) => hat.type == "bowler");
