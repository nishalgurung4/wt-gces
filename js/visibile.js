function showhide() {
    
    var dom=document.getElementById("pic").style;
    
    var b=document.getElementById("btn");
    if (b.value=="hide") {
        dom.visibility="hidden";
        b.value="show";
    }
    else{
        dom.visibility="visible";
        b.value="hide";
    }
}