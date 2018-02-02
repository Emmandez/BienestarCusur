  window.addEventListener('load', function(){
    var cuadros = document.getElementsByClassName('grade');

    for(var i=0; i<cuadros.length; i++){
      var c = cuadros[i].getElementsByTagName('p');
      if(c[0].textContent == 5){
        cuadros[i].style.backgroundColor = "#FF0000";
        c[0].style.color = "#FFFFFF";
      }
      else if(c[0].textContent == 4){
        cuadros[i].style.backgroundColor = "#741216";
        c[0].style.color = "#FFFFFF";
      }
      else if(c[0].textContent == 3){
        cuadros[i].style.backgroundColor = "#FFFF00";
        c[0].style.color = "#741216";
      }
      else if(c[0].textContent == 2){
        cuadros[i].style.backgroundColor = "#FFC20E";
        c[0].style.color = "rgb(3, 28, 94)";
      }
      else if(c[0].textContent == 1){
        cuadros[i].style.backgroundColor = "#008000";
        c[0].style.color = "#FFFFFF";
      }
    }
  });
