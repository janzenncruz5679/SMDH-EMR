// Get the initial values of grandTotals
var medicineTotal = parseFloat(
    document.getElementById("medicine_grandTotal").value
);
var labTotal = parseFloat(document.getElementById("lab_grandTotal").value);
var xrayTotal = parseFloat(document.getElementById("xray_grandTotal").value);
var ecgTotal = parseFloat(document.getElementById("ecg_grandTotal").value);
var oxygenTotal = parseFloat(
    document.getElementById("oxygen_grandTotal").value
);
var nbsTotal = parseFloat(document.getElementById("nbs_grandTotal").value);

// Calculate the initial overallTotal
var overallTotal =
    medicineTotal + labTotal + xrayTotal + ecgTotal + oxygenTotal + nbsTotal;

// Set the initial overallTotal in the input field
document.getElementById("overall_total").value = overallTotal;

// Add event listeners to grandTotal input fields
document
    .getElementById("medicine_grandTotal")
    .addEventListener("input", updateOverallTotal);
document
    .getElementById("lab_grandTotal")
    .addEventListener("input", updateOverallTotal);
document
    .getElementById("xray_grandTotal")
    .addEventListener("input", updateOverallTotal);
document
    .getElementById("ecg_grandTotal")
    .addEventListener("input", updateOverallTotal);
document
    .getElementById("oxygen_grandTotal")
    .addEventListener("input", updateOverallTotal);
document
    .getElementById("nbs_grandTotal")
    .addEventListener("input", updateOverallTotal);

// Function to update the overallTotal
function updateOverallTotal() {
    // Get the updated values of grandTotals
    medicineTotal = parseFloat(
        document.getElementById("medicine_grandTotal").value
    );
    labTotal = parseFloat(document.getElementById("lab_grandTotal").value);
    xrayTotal = parseFloat(document.getElementById("xray_grandTotal").value);
    ecgTotal = parseFloat(document.getElementById("ecg_grandTotal").value);
    oxygenTotal = parseFloat(
        document.getElementById("oxygen_grandTotal").value
    );
    nbsTotal = parseFloat(document.getElementById("nbs_grandTotal").value);

    // Calculate the updated overallTotal
    overallTotal =
        medicineTotal +
        labTotal +
        xrayTotal +
        ecgTotal +
        oxygenTotal +
        nbsTotal;

    // Set the updated overallTotal in the input field
    document.getElementById("overall_total").value = overallTotal;
}
