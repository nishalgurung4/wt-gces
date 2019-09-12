function locateit(evt) {
	console.log(evt);
    var xcor=document.getElementById("x1");
    var ycor=document.getElementById("y1");
    xcor.value=evt.clientX;
    ycor.value=evt.clientY;
     var xcor1=document.getElementById("x2");
    var ycor1=document.getElementById("y2");
    xcor1.value=evt.screenX;
    ycor1.value=evt.screenY;

}