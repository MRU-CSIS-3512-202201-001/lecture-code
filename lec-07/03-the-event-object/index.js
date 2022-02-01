// toggle the active class when button is clicked
// where is our script being loaded?

const button = document.querySelector("button");
button.addEventListener("click", function (e) {
  button.classList.toggle("active");
  debugger;
  console.log(e);
});
