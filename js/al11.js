// function printDivisors(n) {
//     for(let i = 1; i <= n; i++) {
//         if(n%i == 0){
//             if (i % 4 ==0){
//                 console.log(i);
//             }
//         }

//     }

// }


// let num = 24;


// printDivisors(num);



    let n = 12;

    let sum = 0;
    let count = 0;
    for(let i = 1; i <= n; i++) {
        if(n%i == 0){
            if (i % 4 == 0){
            console.log(i + "\n");;
            sum += i;
            count+= 1;
            }
        }

    }


    console.log("sum: " + sum );
    console.log("count: " + count );


  





