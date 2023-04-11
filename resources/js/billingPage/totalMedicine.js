var numMedicineItems = 10; // Update this value to match the actual number of medicine items

// Loop through each medicine item
for (var i = 1; i <= numMedicineItems; i++) {
    // Get the input elements for medicine_cost[i], medicine_qty[i], and medicine_total[i]
    var medicineCostInput = $("#medicine_cost_" + i);
    var medicineQtyInput = $("input[name='medicine_qty[" + i + "]']").eq(0);
    var medicineTotalInput = $("#medicine_total_" + i);

    // Define a closure to capture the values of medicineCostInput, medicineQtyInput, and medicineTotalInput
    (function (medicineCostInput, medicineQtyInput, medicineTotalInput) {
        // Add event listener to medicine_cost[i] input to listen for changes
        medicineCostInput.on("input", function () {
            // Get the values from medicine_cost[i] and medicine_qty[i]
            var medicineCostValue = parseFloat(this.value) || 0;
            var medicineQtyValue = parseInt(medicineQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var medicineTotalValue = medicineCostValue * medicineQtyValue;

            // Round the total to 2 decimal places
            medicineTotalValue = medicineTotalValue.toFixed(2);

            // Set the calculated total value to medicine_total[i]
            medicineTotalInput.val(medicineTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to medicine_qty[i] input to listen for changes
        medicineQtyInput.on("input", function () {
            // Get the values from medicine_cost[i] and medicine_qty[i]
            var medicineCostValue = parseFloat(medicineCostInput.val()) || 0;
            var medicineQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var medicineTotalValue = medicineCostValue * medicineQtyValue;

            // Round the total to 2 decimal places
            medicineTotalValue = medicineTotalValue.toFixed(2);

            // Set the calculated total value to medicine_total[i]
            medicineTotalInput.val(medicineTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(medicineCostInput, medicineQtyInput, medicineTotalInput); // Pass in the current values of medicineCostInput, medicineQtyInput, and medicineTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each medicine item
    for (var i = 1; i <= numMedicineItems; i++) {
        // Get the medicine_total[i] input element
        var medicineTotalInput = $("#medicine_total_" + i);

        // Get the value of medicine_total[i]
        var medicineTotalValue = parseFloat(medicineTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += medicineTotalValue;
    }

    // Set the grand total value to medicine_grandTotal input
    var medicineGrandTotalInput = $("#medicine_grandTotal");
    medicineGrandTotalInput.val(grandTotal.toFixed(2));
}
