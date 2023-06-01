var admission_canvas = document.getElementById("admission_canvas");
admission_canvas.height = 80;

// Define the chart data for each option in the dropdown
var chartData = {
    option1: {
        labels: _labels_daily,
        datasets: [
            {
                data: _data_daily,
                backgroundColor: ["#003D33", "#14C9C9", "#439889"],
            },
        ],
    },
    option2: {
        labels: _labels,
        datasets: [
            {
                data: _data,
                backgroundColor: ["#003D33", "#14C9C9", "#439889"],
            },
        ],
    },
    option3: {
        labels: _labels_monthly,
        datasets: [
            {
                data: _data_monthly,
                backgroundColor: ["#003D33", "#14C9C9", "#439889"],
            },
        ],
    },
    option4: {
        labels: _labels_yearly,
        datasets: [
            {
                data: _data_yearly,
                backgroundColor: ["#003D33", "#14C9C9", "#439889"],
            },
        ],
    },
};

// Define the chart options (shared by both options)
var chartOptions = {
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
                stepSize: 10,
                font: {
                    size: 20,
                },
                color: "black",
            },
        },
    },
};

// Create the chart with the default data and options (option 1)
var pieChart = new Chart(admission_canvas, {
    type: "bar",
    data: chartData.option1,
    options: chartOptions,
});

// Function to update the chart with new data and options
function updateChart(chart, data, options) {
    chart.data = data;
    chart.options = options;
    chart.update();
}

var dateRangeSelect = $("#date-range");

// Function to update the chart data based on the selected option
function updateChartData() {
    var selectedOption = $("#date-range").val();
    var newData;

    if (selectedOption === "last-week") {
        newData = chartData.option2;
    } else if (selectedOption === "last-month") {
        newData = chartData.option3;
    } else if (selectedOption === "last-year") {
        newData = chartData.option4;
    } else {
        newData = chartData.option1;
    }

    // Update the chart with the new data and options
    updateChart(pieChart, newData, chartOptions);
}

// Listen to the change event on the dropdown and update the chart accordingly
$("#date-range").change(updateChartData);

$("#reset-btn").click(function () {
    updateChart(pieChart, chartData.option1, chartOptions); // reset to option 1
    $("#date-range").val("yesterday"); // reset the dropdown to "Last Week"
});
