const revStr = (str) => {
    let ans = '';
    for(let i = str.length - 1; i > -1; i--){
        ans += str[i];
    }
    return ans;
}
let str = 'hello'
console.log(revStr("hellow"))
// console.log(str[0]);