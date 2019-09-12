var helper=["first name,m,init,last name","roll must be in number","address less than 255 characters",
            "Place your mouse over any text box to get help"];

function message(i) {
    var dom=document.getElementById("guide");
    dom.value=helper[i];
}