const m1 = [
    6,
    0,
];
const m2 = [
    7,
    2,
];


let sa1 = m1[1]-m2[1];
let sa2 = m1[0]-m2[0];

let a = sa1/sa2;

let b = m1[1] + a * m2[0];

console.log( "y = "+ a + "x + "+ b);