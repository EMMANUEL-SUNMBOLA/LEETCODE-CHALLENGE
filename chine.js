function chimeral(num){
    let ans = "";
    let str = num.toString();
    let len = str.length;
    for(let i = 0; i < len; i++){
        if(parseInt(str[i]) == 0){
            ans += "Ling";
        }else if(parseInt(str[i]) == 1){
            ans += "Yi";
        }else if(parseInt(str[i]) == 2){
            ans += "Er";
        }else if(parseInt(str[i]) == 3){
            ans += "San";
        }else if(parseInt(str[i]) == 4){
            ans += "Si";
        }else if(parseInt(str[i]) == 5){
            ans += "Wu";
        }
    }
    console.log(ans);
}
chimeral(123456789);