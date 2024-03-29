<?php 
// This way php interprets this file as a CSS stylesheet 
header("Content-type: text/css"); ?>

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, #608ba5, #80b6bb);
    background-size: cover; 
    max-width: 1440px;  
}
div{
    background-color: rgba(50, 47, 66, 0.856);
    position: absolute; /* the box will only occupy the space of its elements */
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%); /* it returns these values ​​on the x and y axes, respectively */  
    padding: 70px; /* adjustment of the internal space between the elements and the border of the box */
    border-radius: 10px;
    color:#fff;
}
.logged-in{
    display:flex;
    flex-direction: column;
}
h1{
    margin-top: 0px;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
}
.input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    border-radius: 5px;
}
a{
    text-decoration: none;
    text-align: center;
}
.sub-button, a{
    border:none;
    background-color: rgb(173, 167, 167);
    padding: 5%;
    border-radius: 5px;
    color:#fff;
    font-size:16px;
    font-weight: bold;
    letter-spacing: 2px;
}
.sub-button:hover, a:hover{
    background-color: rgb(131, 127, 127);
    cursor: pointer;
}

@media (min-width:374px) and (max-width: 424px){
    div{
        padding:60px;
    }

    h1{
        font-size: 28px;
    }

    .input{
        padding: 13px;
        font-size: 13px; 
    }
}

@media (min-width:321px) and (max-width: 373px){
    div{
        padding:50px;
    }

    h1{
        font-size: 28px;
    }

    .input{
        padding: 13px;
        font-size: 13px; 
    }    
}

@media (max-width: 320px){
    div{
        padding:40px;
    }

    h1{
        font-size: 20px;
    }

    .input{
        padding: 13px;
        font-size: 12px; 
    }
}