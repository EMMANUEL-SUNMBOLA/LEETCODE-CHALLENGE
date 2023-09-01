const factorial = (num) =>{
    if(num <= 1){
        return 0;
    }else{
        let ans = 1;
        for(let i = num; i > 0; i--){
            ans *= i;
        }
        return ans;
    }
}

console.log(factorial(1));