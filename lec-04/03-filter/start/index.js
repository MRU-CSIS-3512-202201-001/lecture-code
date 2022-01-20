let cats = [
  {
    name: "Prrfect",
    weight: 3,
  },
  {
    name: "Akebono",
    weight: 100,
  },
];

let filtered = cats.filter((cat) => cat.weight > 10);

// 🧠 So are the results COPIES or not? Let's find out!
cats[1].meowTone = "irritating";
