import './bootstrap';

const line = document.querySelector('.line');
const arrow = document.querySelector(".arrow-container");
const inicio = document.getElementById('inicio');
const historias = document.getElementById('historias');
const reportes = document.getElementById('reportes');
const inventario = document.getElementById('inventario');
// script.js
window.onload = function() {
    cargarVista('/inicio');
    line.style.width = '25%';
    line.style.marginLeft = '0%'; 
    inicio.style.color = 'rgb(0, 11, 155)'; 
    historias.style.color = '#0084ff'; 
    reportes.style.color = '#0084ff'; 
    inventario.style.color = '#0084ff';
    arrow.style.marginLeft = '11.4%'; 
  };

  function cargarVista(vista) {
    var container = document.getElementById('vista-container');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        container.innerHTML = this.responseText;
      }
    };
    xhttp.open('GET', vista, true);
    xhttp.send();

  }


  line.style.transition = 'width 0.3s ease, margin-left 0.3s ease';
  arrow.style.transition = 'width 0.3s ease, margin-left 0.3s ease';


inicio.addEventListener('click', function() {
    line.style.width = '24%';
    line.style.marginLeft = '0'; 
    inicio.style.color = 'rgb(0, 11, 155)'; 
    historias.style.color = '#0084ff'; 
    reportes.style.color = '#0084ff'; 
    inventario.style.color = '#0084ff'; 
    arrow.style.marginLeft = '11.4%'; 
    
  });
  
  historias.addEventListener('click', function() {
    line.style.width = '25%';
    line.style.marginLeft = '24%'; 
    inicio.style.color = '#0084ff'; 
    historias.style.color = 'rgb(0, 11, 155)'; 
    reportes.style.color = '#0084ff'; 
    inventario.style.color = '#0084ff'; 
    arrow.style.marginLeft = '37%'; 
    
  });
  inventario.addEventListener('click', function() {
    line.style.width = '25%';
    line.style.marginLeft = '49%'; 
    inicio.style.color = '#0084ff'; 
    historias.style.color = '#0084ff'; 
    reportes.style.color = '#0084ff'; 
    inventario.style.color = 'rgb(0, 11, 155)'; 
    arrow.style.marginLeft = '62%'; 
  });
  reportes.addEventListener('click', function() {
    line.style.width = '25%';
    line.style.marginLeft = '74%'; 
    inicio.style.color = '#0084ff'; 
    historias.style.color = '#0084ff'; 
    reportes.style.color = 'rgb(0, 11, 155)'; 
    inventario.style.color = '#0084ff'; 
    arrow.style.marginLeft = '87%'; 
  });
  


// Función para mover la flecha horizontalmente


  
