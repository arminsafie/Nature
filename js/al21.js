let rem = 0;
let sum = 0;

function zorf(number) {
    if (number % 2 === 0) {
        return 1;
    } else {
        return 0;
    }
}

for (let i = 10; i <= 99; i++) {
    let num = i;
    let r = zorf(Math.floor(num / 10)) + zorf(num % 10);

    if (r === 0) {
        console.log(i);
    }
}