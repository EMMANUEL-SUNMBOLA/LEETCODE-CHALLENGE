// ...a is used in functions that can have unlimited arguments
//note parameters are the placeholders while creating a function/ method
// arguments are the real values, used when we call the functions
//here "...a" is a parameter while "1, 2, 3, ..." are arguments
// I should probably be a csc lecturer
let sum = (...a) =>{
    let ans = 0;
    for(let i = 0; i < a.length; i++){
        ans += a[i];
    }
    return ans;
}

console.log(sum(1, 2, 3, 4, 5));