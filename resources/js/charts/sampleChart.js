var admission_canvas = document.getElementById("admission_canvas");
var admission_canvas_two = document.getElementById("admission_canvas_two");

var admissionData = {
    labels: _labels,
    datasets: [
        {
            data: _data,
            backgroundColor: ["#FF6384", "#63FF84", "#6384FF"],
        },
    ],
};

var pieChart = new Chart(admission_canvas, {
    type: "pie",
    data: admissionData,
});

var doughnutChart = new Chart(admission_canvas_two, {
    type: "doughnut",
    data: admissionData,
});
