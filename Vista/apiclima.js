let temperatura = 0;
window.addEventListener('load', obtenerDatosClima);

function obtenerDatosClima() {
  const apiKey = 'fb9f6041d255e02ee03672c9a2059f86'; // Reemplaza con tu clave de API de OpenWeatherMap

// Obtiene la ubicación del usuario desde la variable PHP
const ubicacionDataElement = document.getElementById('ubicacion-data');
const userLocation = ubicacionDataElement.getAttribute('data-ubicacion');

// Realiza la solicitud para obtener la latitud y longitud de la ubicación
fetch(`http://api.openweathermap.org/geo/1.0/direct?q=${userLocation},VE&limit=1&lang=es&appid=${apiKey}`)
  .then(response => response.json())
  .then(locationData => {
    if (locationData.length > 0) {
      const lat = locationData[0].lat;
      const lon = locationData[0].lon;

      // Realiza la solicitud para obtener los datos del clima
      return fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&lang=es&appid=${apiKey}`);
    } else {
      console.error('No se encontraron datos de ubicación para la consulta:', userLocation);
      throw new Error('Ubicación no encontrada');
    }
  })
  .then(response => response.json())
  .then(weatherData => {
    // Aquí puedes acceder a los datos meteorológicos y mostrarlos en tu página
    let temperatura = Math.round((weatherData.main.temp - 273.15));
    const icon = weatherData.weather[0].icon;
    const baseUrl = "https://openweathermap.org/img/wn/";
    const iconUrl = baseUrl + icon + ".png";
    const weatherIcon = document.getElementById("weatherIcon");
    weatherIcon.src = iconUrl;
    // Ejemplo de cómo mostrar la temperatura actual en un elemento con id "temperatura"
    document.getElementById("temperatura").textContent = `${temperatura} °C`;
  })
  .catch(error => {
    console.error('Error en la solicitud a la API de OpenWeatherMap:', error);
    // Maneja el error, puedes mostrar un mensaje de error en tu página
  });

}