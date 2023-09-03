/*Complete the solution so that the function will break up camel casing, using a space between words. */
function solution(str){
    let match = /[A-Z]/;
    let ans = "";
    for(let i = 0; i < str.length; i++){
        if(match.test(str[i])){
            ans += " " + str[i];
        }else{
            ans += str[i];
        }
    }
    return ans;
}

console.log(solution("cameCase"));