$(document).ready(function(){
    $("#documentation").click(function(){
        var dashBoard=document.getElementById("content-wrapper");
        console.log("hello");
        var p2=document.getElementById("p2");
        var p3=document.getElementById("p3");
        p2.style.left='-100%';
        dashBoard.style.left='100%';
    });
  });