var admission_canvas_two = document.getElementById("canvas_two");

var admissionData = {
    labels: _labels_donut,
    datasets: [
        {
            data: _data_donut,
            backgroundColor: [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145",
            ],
        },
    ],
};

var doughnutChart = new Chart(admission_canvas_two, {
    type: "doughnut",
    data: admissionData,
});
