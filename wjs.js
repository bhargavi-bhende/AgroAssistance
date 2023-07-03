window.addEventListener('load', function() {
  const API_KEY = '9172eef03c670316951c4f0caecd4437'; // Replace with your OpenWeatherMap API key
  const API_URL = `https://api.openweathermap.org/data/2.5/weather?q=London&appid=${API_KEY}&units=metric`; // Replace 'London' with the desired location

  // Fetch weather data from OpenWeatherMap API
  fetch(API_URL)
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      // Extract relevant weather information from the response data
      const temperature = data.main.temp;
      const description = data.weather[0].description;

      // Display the weather information in the weather-data element
      const weatherDataElement = document.getElementById('weather-data');
      weatherDataElement.innerHTML = `<p>Temperature: ${temperature} &#8451;</p>
                                      <p>Description: ${description}</p>`;
    })
    .catch(function(error) {
      console.log('Error:', error);
      const weatherDataElement = document.getElementById('weather-data');
      weatherDataElement.innerHTML = '<p>Failed to fetch weather data.</p>';
    });
});
