

// variables
let num = 7034056;
let rem = 0;
let sum = 0;
let zoj = 0;
let fard = 0;
let sefr = 0;
let numberArray = [];
let v = num.toString().length;

//this function can find if a number is even or odd
function zorf(number) {
    if (number % 2 === 0) {
        return 1;
    } else {
        return 0;
    }
}

// this loop can give you the digits of a number
for (let i = 0; i < v; i++) {
    rem = num % 10;
    numberArray[i] = rem;
    num = Math.floor(num / 10);
}

// this loop can determine how many even, odd, or zeros a number has
for (let j = 0; j < numberArray.length; j++) {
    if (zorf(numberArray[j]) === 1) {
        if (numberArray[j] === 0) {
            sefr += 1;
        } else {
            zoj += 1;
        }
    } else if (zorf(numberArray[j]) === 0) {
        fard += 1;
    }
}


// results
console.log("zoj: " + zoj);
console.log("fard: " + fard);
console.log("sefr: " + sefr);