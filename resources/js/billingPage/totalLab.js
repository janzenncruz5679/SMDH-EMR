var numlabItems = 10; // Update this value to match the actual number of lab items

// Loop through each lab item
for (var i = 1; i <= numlabItems; i++) {
    // Get the input elements for lab_cost[i], lab_qty[i], and lab_total[i]
    var labCostInput = $("#lab_cost_" + i);
    var labQtyInput = $("input[name='lab_qty[" + i + "]']").eq(0);
    var labTotalInput = $("#lab_total_" + i);

    // Define a closure to capture the values of labCostInput, labQtyInput, and labTotalInput
    (function (labCostInput, labQtyInput, labTotalInput) {
        // Add event listener to lab_cost[i] input to listen for changes
        labCostInput.on("input", function () {
            // Get the values from lab_cost[i] and lab_qty[i]
            var labCostValue = parseFloat(this.value) || 0;
            var labQtyValue = parseInt(labQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var labTotalValue = labCostValue * labQtyValue;

            // Round the total to 2 decimal places
            labTotalValue = labTotalValue.toFixed(2);

            // Set the calculated total value to lab_total[i]
            labTotalInput.val(labTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to lab_qty[i] input to listen for changes
        labQtyInput.on("input", function () {
            // Get the values from lab_cost[i] and lab_qty[i]
            var labCostValue = parseFloat(labCostInput.val()) || 0;
            var labQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var labTotalValue = labCostValue * labQtyValue;

            // Round the total to 2 decimal places
            labTotalValue = labTotalValue.toFixed(2);

            // Set the calculated total value to lab_total[i]
            labTotalInput.val(labTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(labCostInput, labQtyInput, labTotalInput); // Pass in the current values of labCostInput, labQtyInput, and labTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each lab item
    for (var i = 1; i <= numlabItems; i++) {
        // Get the lab_total[i] input element
        var labTotalInput = $("#lab_total_" + i);

        // Get the value of lab_total[i]
        var labTotalValue = parseFloat(labTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += labTotalValue;
    }

    // Set the grand total value to lab_grandTotal input
    var labGrandTotalInput = $("#lab_grandTotal");
    labGrandTotalInput.val(grandTotal.toFixed(2));
}
