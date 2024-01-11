


let numberToGuess = 235;
let count = 0;
let minRange = 0;
let maxRange = 1000;



while (true) {
    let guess = Math.floor((minRange + maxRange) / 2);
    count++;

    if (guess == numberToGuess) {
        console.log( `I guessed your number ${numberToGuess} in ${count} attempts!\n`); 
        break;
    } else if (guess < numberToGuess) {
        minRange = guess + 1;
    } else {
        maxRange = guess - 1;
    }
}


