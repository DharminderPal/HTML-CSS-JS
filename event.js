<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


#blub{
    /* background-color: yellowgreen; */
    border: 5px solid black;
    border-radius: 10rem;
height: 100px;
width: 100px;

}
#button{
margin-left: 2.4rem;
}
</style>
<body>


<div id="blub"></div>
<button id="button">ON</button>

    <script>
let button =document.getElementById("button");
let blub =document.getElementById("blub");

let any =false;

button.addEventListener("click",function(){
    if(any==false){
        blub.style.backgroundColor ="yellowgreen";
        console.log("ON")
        any=true
    }else{
        blub.style.backgroundColor ="transparent";
        console.log("OFF")
        any=false;

    }
})




    </script>
</body>
</html>