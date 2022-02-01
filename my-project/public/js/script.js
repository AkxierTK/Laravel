let ul=document.getElementById("ul");
let contador=ul.children().length;
console.log(contador);
for (let index = 1; index <=contador; index++) {
    let li=document.getElementById(index);
    li.addEventListener("click",function(event){
        let li2=document.getElementById(index+10);
        if(li2.style.display=="none"){
            li2.style.display="block";
        }else{
            li.style.display="none";
        }
    });
}