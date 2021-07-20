window.onscroll = function () {
    scroll();
}
function scroll() {
    let btn = document.getElementById("btnTop");
    if (document.documentElement.scrollTop > 50) {
        btn.style.display = "block";      
    } else {
        btn.style.display = "none";
    }  
}

function backToTop() {
    document.documentElement.scrollTop = 0;
}
	
function save(){
	document.documentElement.scrollTop = 0;
	document.getElementById("ebox4").style.display = "block";
	document.getElementById("ebox3").style.display = "none";
}

function Back(){
	document.documentElement.scrollTop = 0;
	document.getElementById("ebox3").style.display = "block";
	document.getElementById("ebox4").style.display = "none";
}