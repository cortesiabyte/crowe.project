var text = document.querySelector('.text');
var percent = document.querySelector('.percent');
var progress = document.querySelector('.progress');
var count = 4;
var per = 16;
var loading = setInterval(animate, 5);
function animate(){
  if(count == 100 && per == 400){
    text.textContent = "Completado";
    text.style.fontSize = "70px";
    text.classList.add("add");
    clearInterval(loading);
    location.href = "candidatos.html";
  }else{
    per = per + 4;
    count = count + 1;
    progress.style.width = per + 'px';
    percent.textContent = count + '%';
  }
}
