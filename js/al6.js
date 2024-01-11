

// let num = 12;

// let sum = 0;
// let rem = 0;
// let realNumber = num;

// for (let i = 0; i <= num.length; i++){
//     rem = num % 10;
//     sum = sum + rem;
//     num = parseInt(num) / 10;
// }

// if (realNumber % sum == 0){
//     console.log("hast");
// }else{
//     console.log("nist");
// }


let num = 12;

let sum = 0;
let rem = 0;
let realNumber = num;

while (num > 0) {
  rem = num % 10;
  sum = sum + rem;
  num = parseInt(num / 10);
}

if (realNumber % sum === 0) {
  console.log("hast");
} else {
  console.log("nist");
}