function render_chart(nomConteneur, contenuTest) {
    // Decode json
    contenuTest = JSON.parse(contenuTest);

    var chart = new CanvasJS.Chart(nomConteneur, {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: ""
        },
        axisY: {
            includeZero: false
        },
        data: [{
            type: "line",
            dataPoints: contenuTest
        }],
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
    chart.render();
}
