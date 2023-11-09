window.addEventListener('load', obtenerGraficos);

function obtenerGraficos() {
  // Obtén el contexto del canvas
var canvas = document.getElementById('miGrafico');
var ctx = canvas.getContext('2d');
canvas.setAttribute('width', 500)
canvas.setAttribute('height', 250)
// Define los datos y opciones del gráfico
var data = {
labels: ['Etiqueta 1', 'Etiqueta 2', 'Etiqueta 3', 'Etiqueta 4', 'Etiqueta 5', 'Etiqueta 6'],
datasets: [{
    label: 'Mi Gráfico de Barras',
    data: [10, 20, 15, 70, 40, 50],
    backgroundColor: ['red', 'red', 'red']
}]
};

var options = {
    // Opciones del gráfico
};

  // Crea el gráfico
  var miGrafico = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });
}
