function chekPrime(num){
    if (num ==1){
        return 0;
    }
    for (let i = 2; i <= num/2;i++){
        if (num % i == 0){
            return 0;
        }
    }
   return 1;
}

for (let num = 2; num<=1000; num++){
    let lag = chekPrime(num);
    if (lag == 1){
        console.log(num+"\n");
    }
}