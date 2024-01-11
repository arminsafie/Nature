

function Factorial(number){
    let factorial = 1;
    for (let i = 1; i <= number; i++){
        factorial = factorial * i;
    }
    return factorial;
}

let x = 2;
let sum = 0;
let n = 12;

let max = 2 * n - 1;

for (j = 3; j <= max; j+= 2 ){
    sum += x ** j / Factorial(j);
}

console.log(x - sum);


