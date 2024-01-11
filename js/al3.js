let count = 0;
for (let x = 0;x <900; x++) {
    if (x % 9 ==0){
        console.log(x + "\n");
        count += x;
    }
}


console.log(count);