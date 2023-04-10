var numoxygenItems = 5; // Update this value to match the actual number of oxygen items

// Loop through each oxygen item
for (var i = 1; i <= numoxygenItems; i++) {
    // Get the input elements for oxygen_cost[i], oxygen_qty[i], and oxygen_total[i]
    var oxygenCostInput = $("#oxygen_cost_" + i);
    var oxygenQtyInput = $("input[name='oxygen_qty[" + i + "]']").eq(0);
    var oxygenTotalInput = $("#oxygen_total_" + i);

    // Define a closure to capture the values of oxygenCostInput, oxygenQtyInput, and oxygenTotalInput
    (function (oxygenCostInput, oxygenQtyInput, oxygenTotalInput) {
        // Add event listener to oxygen_cost[i] input to listen for changes
        oxygenCostInput.on("input", function () {
            // Get the values from oxygen_cost[i] and oxygen_qty[i]
            var oxygenCostValue = parseFloat(this.value) || 0;
            var oxygenQtyValue = parseInt(oxygenQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var oxygenTotalValue = oxygenCostValue * oxygenQtyValue;

            // Round the total to 2 decimal places
            oxygenTotalValue = oxygenTotalValue.toFixed(2);

            // Set the calculated total value to oxygen_total[i]
            oxygenTotalInput.val(oxygenTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to oxygen_qty[i] input to listen for changes
        oxygenQtyInput.on("input", function () {
            // Get the values from oxygen_cost[i] and oxygen_qty[i]
            var oxygenCostValue = parseFloat(oxygenCostInput.val()) || 0;
            var oxygenQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var oxygenTotalValue = oxygenCostValue * oxygenQtyValue;

            // Round the total to 2 decimal places
            oxygenTotalValue = oxygenTotalValue.toFixed(2);

            // Set the calculated total value to oxygen_total[i]
            oxygenTotalInput.val(oxygenTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(oxygenCostInput, oxygenQtyInput, oxygenTotalInput); // Pass in the current values of oxygenCostInput, oxygenQtyInput, and oxygenTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each oxygen item
    for (var i = 1; i <= numoxygenItems; i++) {
        // Get the oxygen_total[i] input element
        var oxygenTotalInput = $("#oxygen_total_" + i);

        // Get the value of oxygen_total[i]
        var oxygenTotalValue = parseFloat(oxygenTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += oxygenTotalValue;
    }

    // Set the grand total value to oxygen_grandTotal input
    var oxygenGrandTotalInput = $("#oxygen_grandTotal");
    oxygenGrandTotalInput.val(grandTotal.toFixed(2));
}
