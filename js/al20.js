


let rem = 0;
let sum = 0;
let numberArray = [];

function zorf(number) {
    if (number % 2 === 0) {
        return 1;
    } else {
        return 0;
    }
}

for (let i = 1000; i <= 9999; i++) {
    let num = i;
    for (let j = 0; j < 4; j++) {
        rem = num % 10;
        numberArray[j] = rem;
        num = Math.floor(num / 10);
    }

    let r1 = zorf(numberArray[0]) + zorf(numberArray[2]);
    let r2 = zorf(numberArray[1]) + zorf(numberArray[3]);

    if (r1 === 2 && r2 === 0) {
        console.log(i);
    }
}