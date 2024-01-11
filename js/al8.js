let num = 3022;
let rem = 0;
let sum = 0;
let numberArray = [];

let v = num.toString().length;

for (let i = 0; i < v; i++) {
  rem = num % 10;
  numberArray[i] = rem;
  num = parseInt(num / 10);
}

for (let j = 0; j < numberArray.length; j++) {
  let r = numberArray[j] * Math.pow(3, j);
  sum += r;
}

console.log(sum);

