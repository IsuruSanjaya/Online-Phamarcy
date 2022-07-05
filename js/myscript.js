var counter=1;
setInterval(
function()
{
	document.getElementById('radio' + counter).checked=true;
	counter++;
	if(counter >3){
		counter = 1;
	}
}, 15000);

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 1; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}


function checkPassword(){
    if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value){
    alert("Password Mismatch");
    return false;
    }
    
    if((document.getElementById("pwd").length)<6){
    alert("Error: Password must contain at least six characters!");
    return false;
    }
    
    else{
    alert("Success");
    return true;
    }
    }
    
    
	
