// Agrega un evento click al botón para imprimir información del marcador
document.getElementById("printMarkerInfo").addEventListener("click", function() {
    // Obtiene el identificador del marcador que se debe imprimir (por ejemplo, "marker-1")
    var selectedMarkerId = $('#markerInfoModal').data('marker-id');

    // Obtiene los datos de temperatura y coordenadas del marcador
    var temperatureData = getTemperatureDataForMarker(selectedMarkerId);
    var markerCoordinates = getMarkerCoordinates(selectedMarkerId);

    // Captura la gráfica como una imagen utilizando html2canvas con un pequeño retraso
    setTimeout(function() {
        html2canvas(document.getElementById("weatherChart")).then(function(canvas) {
            var chartImage = canvas.toDataURL('image/png');
    
            // Configura el contenido que deseas imprimir en la ventana emergente
            var contentToPrint = `
                <div>
                <img src="./img/logo.png" alt="IchoClimaOnline" style="max-width: 100px; height: 100px;">
                <span  style="font-size: 50px;"">IchoClimaOnline</span>
                </div>
                <div style="text-align: center;">
                    <h1>Información del Marcador </h1>
                </div>
            <div style="text-align: left;">
                <h2>Reporte Técnico de Temperatura:</h2>
            </div>
                <p>Aquí puedes agregar el informe técnico de temperatura que deseas mostrar.</p>
                <p>Puedes proporcionar detalles y análisis sobre los datos de temperatura.</p>
            
            <div style="text-align: left;">
                <h2>Información del Marcador:</h2>
                <p>Temperatura: ${temperatureData.join(", ")}</p>
                <p>Coordenadas: ${markerCoordinates.join(", ")}</p>
                <h2>Gráfica del Clima</h2>
            </div>
            <img src="${chartImage}" alt="Gráfica del Clima" style="max-width: 100%; height: auto;">
            `;
    
            // Crea una ventana emergente con el contenido y llama a window.print()
            var printWindow = window.open('', '', 'width=900, height=900');
            printWindow.document.open();
            printWindow.document.write(`
                <html>
                <head>
                    <title>Información del Marcador</title>
                </head>
                <body>
                    ${contentToPrint}
                </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        });
    }, 100); // 100 ms de retraso (ajusta según sea necesario)
});
