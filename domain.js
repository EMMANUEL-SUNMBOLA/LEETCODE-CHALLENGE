// function to extract the domain name of a provided link

function domainName(url){
    let newArr = url.split("/");
    for(let i = 0; i < newArr.length; i++){
        if(newArr[i].includes(".com")){
            if((newArr[i].includes("www."))){
              let newerArr = newArr[i].split(".");
              return newerArr[1];
            }else{
                let newerArr = newArr[i].split(".");
                return newerArr[0];
            }
        }
    }
}

console.log(domainName("www.xakep.ru"));