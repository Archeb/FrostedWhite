<?php header("Content-Type:application/javascript"); ?>
 var bloginfo= new Waypoint({
  element: document.getElementById('bloginfo'),
  handler: function(direction) {
   if(direction=="down"){
    headbar=document.getElementById('headbar');
    headbar.style.backgroundColor='rgba(239,235,247,0.9)';
   }else{
    headbar=document.getElementById('headbar');
    headbar.style='';
   }
  }});
 


 artx=document.getElementById('art1');
 artx.className="animated fadeInRight";
  artx=document.getElementById('art2');
 artx.className="animated fadeInRight";
  artx=document.getElementById('sideba');
 artx.className="animated fadeInRight sidebar col-3";
   artx=document.getElementById('bloginfo');
 artx.className="animated fadeInRight bloginfo col-12";
 
  