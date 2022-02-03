// Listen at various places
// Notice where the script tag is.

document.addEventListener("DOMContentLoaded", () => {
  // 🧠 How could you make Cletus log his id and nodeName when he's clicked?
  document.querySelector("#cletus").addEventListener("click", (e) => {
    console.log(`${e.target.nodeName}, id ${e.target.id}`);
  });
  // 🧠 If we click on Cletus, what will happen?
  // 🧠 How could you make Ma do the same?

  document.querySelector("#ma").addEventListener("click", (e) => {
    console.log(`${e.target.nodeName}, id ${e.target.id}`);
  });

  // 🧠 If we click on Ma, what will happen?
  // 🧠 If we click on Cletus NOW, what will happen? WHY?
  // 💡 Notice any duplication of code? How could we clear it up?
  // 💡 The devtools are showing something interesting here....
  // 🧠 How many ancestors can we involve here? Try some. Each time: Who "hears"? Who reacts?
  //
  // 🧠 How can we get Sally Mae to react when a mouse enters her span?
  // 🧠 How can we get Bobby Bob to react when someone types in the input?
  // 🧠 And how can we get what's been typed? (very useful for assignment, yes?)
  //
  // 🧠 How can we stop an event from being "heard" by ancestors?
  // 🧠 How might that be a bit dangerous?
});
