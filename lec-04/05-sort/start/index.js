// 🧠 How could we sort these?
const colourNames = [
  "Red",
  "Orange",
  "Yellow",
  "Green",
  "Blue",
  "Indigo",
  "Violet",
  "Unicorn",
];

// 🧠 How could we sort these?
const shoeSizes = [8, 12, 6.5, 11, 16, 9, 8];

function shoeComparator(shoeSize1, shoeSize2) {
  return shoeSize2 - shoeSize1;
}

const adventurers = [
  {
    name: "Jampa",
    class: "Barbarian",
    level: 5,
    hp: 74,
    ac: 4,
  },
  {
    name: "Flame of the Evading Desert",
    class: "Rogue",
    level: 6,
    hp: 52,
    ac: 2,
  },
  {
    name: "Zog Mothra",
    class: "Wizard",
    level: 3,
    hp: 11,
    ac: 8,
  },
  {
    name: "Jassan",
    class: "Wizard",
    level: 5,
    hp: 23,
    ac: 7,
  },
];

// 🧠 This was on my coding midterm last year. How would you sort these by level descending?
let sortedByLevel = adventurers.sort((adv1, adv2) => adv2.level - adv1.level);

// 🧠 Reverse alphabetical order by name?
let sortedByNameReverse = adventurers.sort((adv1, adv2) =>
  adv2.name.localeCompare(adv1.name)
);
