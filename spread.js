// i don't have time to fill the array, wo i want to fill it with a loop from 1 - 10
let arr1 = [];
for(let i = 0; i <= 10; i++){
    arr1.push(i);
}
// I learn that I could add elements to an array using spread operator....arr
let arr2= [...arr1, 11, 12, 13, 14];
console.log(arr2);