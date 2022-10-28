let pay1="UPI";


const nodeList = document.querySelectorAll(".from");
for (let i = 0; i < nodeList.length; i++) 
{
    nodeList[i].addEventListener('click', function(){
        myFunction1(nodeList[i].name);

    },false);
}


function myFunction1(x){
    document.getElementById("fromloc").innerHTML=x;
}



const nodeList2 = document.querySelectorAll(".dest");
for (let i = 0; i < nodeList2.length; i++) 
{
    nodeList2[i].addEventListener('click', function(){
        myFunction2(nodeList2[i].name);

    },false);
}



function myFunction2(x){
    document.getElementById("destloc").innerHTML=x;
}


const nodeList3 = document.querySelectorAll(".trip");
for (let i = 0; i < nodeList3.length; i++) 
{
    nodeList3[i].addEventListener('click', function(){
        myFunction3(nodeList3[i].name);

    },false);
}



function myFunction3(x){
    document.getElementById("triptype").innerHTML=x;
}

const nodeList4 = document.querySelectorAll(".trip");
for (let i = 0; i < nodeList4.length; i++) 
{
    nodeList4[i].addEventListener('click', function(){
        myFunction4(nodeList4[i].name);

    },false);
}



function myFunction4(x){
    document.getElementById("triptype").innerHTML=x;
}


const nodeList5 = document.querySelectorAll(".payment");
for (let i = 0; i < nodeList5.length; i++) 
{
    nodeList5[i].addEventListener('click', function(){
        myFunction5(nodeList5[i].name);
    },false);
}



function myFunction5(x){
    document.getElementById("paymeth").innerText=x;
    pay1=x;
}




let conf=document.querySelector(".confirm");
conf.addEventListener('click', function(){
    if(pay1=="UPI"){
        window.location.href = "upi.php";
    }
    else if(pay1=="Cash"){
        window.location.href = "cash.php";
    }
},false);

