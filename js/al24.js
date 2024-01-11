
let targetAmount = 50;
let coin1 = 20;
let coin2 = 10;
let coin3 = 5;


let maxCoin1 = Math.floor(targetAmount / coin1);
let maxCoin2 = Math.floor(targetAmount / coin2);
let maxCoin3 = Math.floor(targetAmount / coin3);

for (let i = 0; i <= maxCoin1; i++) {
    for (let j = 0; j <= maxCoin2; j++) {
        for (let k = 0; k <= maxCoin3; k++) {
        let amount = (i * coin1) + (j * coin2) + (k * coin3);
            if (amount == targetAmount) {
                console.log(`${i} x ${coin1} cents + ${j} x ${coin2} cents + ${k} x ${coin3} cents = ${targetAmount} cents\n`);
            }
        }
    }
}
