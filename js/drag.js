var theElement;
function grabber(evt) {
    //set global variable for the element to be move
    theElement=evt.currentTarget;
    console.log(theElement);
    //register the event handler for moving and dropping the word
    document.addEventListener("mousemove",mover,true);
    document.addEventListener("mouseup",dropper,true);
}
function mover(event) {
    theElement.style.left=event.clientX+"px";
    theElement.style.top=event.clientY+"px";
}
function dropper(event) {
    document.removeEventListener("mouseup",dropper,true);
    document.removeEventListener("mousemove",mover,true);
    
    
    
}