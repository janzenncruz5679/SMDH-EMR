var admission_canvas = document.getElementById("admission_canvas");
admission_canvas.height = 400;
var admissionData = {
    labels: _labels,
    datasets: [
        {
            data: _data,
            backgroundColor: ["#003D33", "#14C9C9", "#439889"],
        },
    ],
};

var pieChart = new Chart(admission_canvas, {
    type: "bar",
    data: admissionData,
    options: {
        plugins: {
            legend: {
                display: false,
            },
        },
        scales: {
            x: {
                title: {
                    font: {
                        size: 20,
                    },
                    color: "black",
                },

                ticks: {
                    font: {
                        size: 20,
                    },
                    color: "black",
                },
            },

            y: {
                title: {
                    font: {
                        size: 20,
                    },
                    color: "black",
                },

                ticks: {
                    beginAtZero: true,
                    stepSize: 1,
                    font: {
                        size: 20,
                    },
                    color: "black",
                },
            },
        },
    },
});
