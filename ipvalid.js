function isValidIp(str){
    let newStr = str.split('.');
    let reg = /[0-225]/
    if((newStr.length === 4)){
        for(let i = 0; i < newStr.length; i++){
            let nums = parseInt(newStr[i]);
            if((!Number.isNaN) && (nums > 0) && (nums < 225)){
                if((newStr[i].length > 1) && newStr[i].startsWith('0')){
                    return true;
                }else{
                    return false
                }
            }else{
                return false
            }
        }
    }else{
        return false;
    }
}

console.log(isValidIp('1.2.3.4\n'))
// let num = 865;
// console.log(isInt())