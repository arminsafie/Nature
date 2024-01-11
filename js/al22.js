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

for (let i = 100; i <= 990; i++) {
    let num = i;
    for (let j = 0; j < 3; j++) {
        rem = num % 10;
        numberArray[j] = rem;
        num = Math.floor(num / 10);
    }

    let r = zorf(numberArray[1]);

    if (numberArray[0] === numberArray[2] && r === 1) {
        console.log(i);
    }
}