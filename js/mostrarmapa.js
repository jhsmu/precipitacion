var mapInitialized = false; // Variable para realizar un seguimiento del estado del mapa
var map; // Variable para el objeto de mapa
var weatherChartInstance;


function showMap() {
    if (!mapInitialized) {
        // Obtiene el contenedor del mapa
        var mapContainer = document.getElementById("map-container");

        // Muestra el contenedor del mapa
        mapContainer.style.display = "block";

        // Crea un objeto de mapa con Leaflet y lo muestra en el contenedor
        map = L.map(mapContainer).setView([5.797153490784953, -76.61412006535376], 12);

        // Agrega una capa de mapa (por ejemplo, OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Agrega marcadores con títulos
        var markers = [
            {
                name: 'Marcador 1',
                id: 'marker-1'
            },
            {
                name: 'Marcador 2',
                id: 'marker-2'
            },
            {
                name: 'Marcador 3',
                id: 'marker-3'
            },
            {
                name: 'Marcador 4',
                id: 'marker-4'
            },
            {
                name: 'Marcador 5',
                id: 'marker-5'
            }
        ];

        // Agrega marcadores con bucle y maneja el clic en los marcadores para abrir el modal
        markers.forEach(function (markerData) {
            var marker = L.marker(getMarkerCoordinates(markerData.id), {
                data: markerData
            }).addTo(map);

            marker.on('click', function () {
                // Configura el nombre y el identificador del marcador en el modal
                $('#markerName').text(markerData.name);
                $('#markerInfoModal').data('marker-id', markerData.id);

                // Renderiza la gráfica del clima para el marcador seleccionado
                renderWeatherChart(markerData);
                
                // Muestra el modal
                $('#markerInfoModal').modal('show');
            });
        });

        mapInitialized = true; // Marca el mapa como inicializado
    }
}

// Define una función para obtener las coordenadas de un marcador
function getMarkerCoordinates(markerId) {
    // Aquí debes proporcionar las coordenadas reales para cada marcador o buscarlas en tu sistema
    // Por ahora, vamos a utilizar coordenadas fijas para el ejemplo
    var coordinates = {
        'marker-1': [5.797153490784953, -76.61412006535376],
        'marker-2': [5.810727743618043, -76.60637261964994],
        'marker-3': [5.797939606650515, -76.637712087422],
        'marker-4': [5.801965243311801, -76.62305815050503],
        'marker-5': [5.792318416218609, -76.59134434657116]
    };

    return coordinates[markerId];
}

// Define una función para renderizar la gráfica del clima para el marcador seleccionado
function renderWeatherChart(markerData) {
    if (weatherChartInstance) {
        weatherChartInstance.destroy();
    }
    var temperatureData = getTemperatureDataForMarker(markerData.id); // Debes implementar esta función

    var ctx = document.getElementById('weatherChart').getContext('2d');
    weatherChartInstance = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Hora 1', 'Hora 2', 'Hora 3', 'Hora 4', 'Hora 5'],
            datasets: [{
                label: 'Temperatura',
                data: temperatureData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function getTemperatureDataForMarker(markerId) {
    if (markerId === 'marker-1') {
        return [22, 23, 21, 20, 22]; // Datos específicos para Marcador 1
    } else if (markerId === 'marker-2') {
        return [24, 25, 23, 22, 24]; // Datos específicos para Marcador 2
    } else if (markerId === 'marker-3') {
        return [30, 25, 21, 20, 26]; // Datos específicos para Marcador 3
    }else if (markerId === 'marker-4') {
        return [12, 8, 50, 28, 27]; // Datos específicos para Marcador 4
    }else if (markerId === 'marker-5') {
        return [124, 125, 123, 222, 224]; // Datos específicos para Marcador 5
    }else {
        // Agrega más casos para otros marcadores si es necesario
    }
}