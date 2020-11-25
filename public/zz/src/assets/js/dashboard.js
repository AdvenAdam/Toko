$(function () {
    "use strict";
    var StatsLineOptions = {
        scales: {
            responsive: false,
            maintainAspectRatio: true,
            yAxes: [{
                display: false
            }],
            xAxes: [{
                display: false
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        },
        stepsize: 100
    }
    if ($('#stat-line_1').length) {
        var lineChartCanvas = $("#stat-line_1").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#B721FF');
        gradientStroke.addColorStop(1, '#21D4FD');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_2').length) {
        var lineChartCanvas = $("#stat-line_2").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#08AEEA');
        gradientStroke.addColorStop(1, '#2AF598');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_3').length) {
        var lineChartCanvas = $("#stat-line_3").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#FEE140');
        gradientStroke.addColorStop(1, '#FA709A');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: '#6d7cfc',
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_4').length) {
        var lineChartCanvas = $("#stat-line_4").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#ff7fc7');
        gradientStroke.addColorStop(1, '#43b4ff');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: '#6d7cfc',
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_5').length) {
        var lineChartCanvas = $("#stat-line_5").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#B721FF');
        gradientStroke.addColorStop(1, '#21D4FD');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_6').length) {
        var lineChartCanvas = $("#stat-line_6").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#08AEEA');
        gradientStroke.addColorStop(1, '#2AF598');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_7').length) {
        var lineChartCanvas = $("#stat-line_7").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#FEE140');
        gradientStroke.addColorStop(1, '#FA709A');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: '#6d7cfc',
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
    if ($('#stat-line_8').length) {
        var lineChartCanvas = $("#stat-line_8").get(0).getContext("2d");
        var gradientStroke = lineChartCanvas.createLinearGradient(100, 60, 30, 0);
        gradientStroke.addColorStop(0, '#ff7fc7');
        gradientStroke.addColorStop(1, '#43b4ff');
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: {
                labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7", "Day 8", "Day 9", "Day 10", "Day 11", "Day 12", "Day 13"],
                datasets: [{
                    label: 'Profit',
                    data: [7, 6, 9, 7, 8, 6, 8, 5, 7, 8, 6, 7, 7],
                    borderColor: '#6d7cfc',
                    borderColor: gradientStroke,
                    borderWidth: 3,
                    fill: false
                }]
            },
            options: StatsLineOptions
        });
    }
 
    
});