const longest = (str) =>{
    let arr = str.split(" ");
    let min = 0;
    let ans = '';
    for(let i = 0; i < arr.length; i++){
        if(arr[i].length > min){
            min = arr[i].length;
            ans = arr[i];
        }
    }
    return ans;
}
let str = "I am a boy, I love gaming";
console.log(longest(str));