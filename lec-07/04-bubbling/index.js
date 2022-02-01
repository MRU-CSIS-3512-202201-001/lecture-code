// Listen at various places
// Notice where the script tag is.

document.addEventListener("DOMContentLoaded", () => {
  // 🧠 how could you make Cletus log his id and nodeName when he's clicked?
  document.querySelector("#cletus").addEventListener("click", logEvent);

  // 🧠 if we click on Cletus, what will happen?

  // 🧠 how could you make Ma do the same?
  document.querySelector("#ma").addEventListener("click", logEvent);

  document.querySelector("#outer-pen").addEventListener("click", logEvent);

  // 🧠 if we click on Ma, what will happen?

  // 🧠 if we click on Cletus NOW, what will happen? WHY?

  // 💡 Notice any duplication of code? How could we clear it up?

  function logEvent(e) {
    console.log(`${e.target.nodeName}#${e.target.id} was clicked`);
  }
});
