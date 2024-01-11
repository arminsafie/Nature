let income = 1000;
function persent(val,total){
    return round((val*100/total),2);
}
if (income < 50000){
    console.log("moaf");
}else if (income <100000){
     console.log(income / 10);
}else if (income>=100000){
    let x = 15;
    console.log(x*income)/100;
}