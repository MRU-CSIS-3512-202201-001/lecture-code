// write code that changes the text of the div when it is clicked
// notice where we've put our script tag

document.addEventListener("DOMContentLoaded", function () {
  const div = document.querySelector("div");
  div.addEventListener("click", () => {
    //
    div.textContent = "Stop touching me.";
    div.style.fontSize = "3em";
  });
});
