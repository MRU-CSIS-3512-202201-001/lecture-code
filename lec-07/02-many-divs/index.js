// write code that changes the text EVERY div when it is clicked
// notice where we've put our script tag

const allDaDivs = document.querySelectorAll("div");

allDaDivs.forEach((div) => {
  //
  div.addEventListener("click", () => {
    div.textContent = "Stop touching me.";
    div.style.fontSize = "3em";
  });
});

let titles = ["When Harry Met Sally", "A View to a Kill", "Unbroken"];

function isLongTitle(title) {
  return title.length > 10;
}

let longos = titles.filter((title) => title.length > 10);
