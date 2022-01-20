const nums = [1, 2, 3, 4, 5, 6];

function log(something) {
  console.log(something);
}

// nums.forEach(log);

// 🧠 What would this look like with an arrow function?

// HOTEL CALIFORNIA
// Say you're the kind of person who likes to break out of a for....

const otherNums = [3, 5, -1, 17, 0];

otherNums.forEach((num) => {
  if (num == -1) {
    return;
  } else {
    console.log(num);
  }
});
