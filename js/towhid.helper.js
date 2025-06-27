let divs=document.querySelectorAll(".square");
divs.forEach((div)=>{
    div.addEventListener("click",(e)=>{
        alert(e.target.innerHTML);
    });    
});
