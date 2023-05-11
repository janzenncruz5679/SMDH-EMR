var numecgItems = 2; // Update this value to match the actual number of ecg items

// Loop through each ecg item
for (var i = 1; i <= numecgItems; i++) {
    // Get the input elements for ecg_cost[i], ecg_qty[i], and ecg_total[i]
    var ecgCostInput = $("#ecg_cost_" + i);
    var ecgQtyInput = $("input[name='ecg_qty[" + i + "]']").eq(0);
    var ecgTotalInput = $("#ecg_total_" + i);

    // Define a closure to capture the values of ecgCostInput, ecgQtyInput, and ecgTotalInput
    (function (ecgCostInput, ecgQtyInput, ecgTotalInput) {
        // Add event listener to ecg_cost[i] input to listen for changes
        ecgCostInput.on("input", function () {
            // Get the values from ecg_cost[i] and ecg_qty[i]
            var ecgCostValue = parseFloat(this.value) || 0;
            var ecgQtyValue = parseInt(ecgQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var ecgTotalValue = ecgCostValue * ecgQtyValue;

            // Round the total to 2 decimal places
            ecgTotalValue = ecgTotalValue.toFixed(2);

            // Set the calculated total value to ecg_total[i]
            ecgTotalInput.val(ecgTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to ecg_qty[i] input to listen for changes
        ecgQtyInput.on("input", function () {
            // Get the values from ecg_cost[i] and ecg_qty[i]
            var ecgCostValue = parseFloat(ecgCostInput.val()) || 0;
            var ecgQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var ecgTotalValue = ecgCostValue * ecgQtyValue;

            // Round the total to 2 decimal places
            ecgTotalValue = ecgTotalValue.toFixed(2);

            // Set the calculated total value to ecg_total[i]
            ecgTotalInput.val(ecgTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(ecgCostInput, ecgQtyInput, ecgTotalInput); // Pass in the current values of ecgCostInput, ecgQtyInput, and ecgTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each ecg item
    for (var i = 1; i <= numecgItems; i++) {
        // Get the ecg_total[i] input element
        var ecgTotalInput = $("#ecg_total_" + i);

        // Get the value of ecg_total[i]
        var ecgTotalValue = parseFloat(ecgTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += ecgTotalValue;
    }

    // Set the grand total value to ecg_grandTotal input
    var ecgGrandTotalInput = $("#ecg_grandTotal");
    ecgGrandTotalInput.val(grandTotal.toFixed(2));
}
