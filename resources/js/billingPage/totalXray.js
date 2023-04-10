var numxrayItems = 3; // Update this value to match the actual number of xray items

// Loop through each xray item
for (var i = 1; i <= numxrayItems; i++) {
    // Get the input elements for xray_cost[i], xray_qty[i], and xray_total[i]
    var xrayCostInput = $("#xray_cost_" + i);
    var xrayQtyInput = $("input[name='xray_qty[" + i + "]']").eq(0);
    var xrayTotalInput = $("#xray_total_" + i);

    // Define a closure to capture the values of xrayCostInput, xrayQtyInput, and xrayTotalInput
    (function (xrayCostInput, xrayQtyInput, xrayTotalInput) {
        // Add event listener to xray_cost[i] input to listen for changes
        xrayCostInput.on("input", function () {
            // Get the values from xray_cost[i] and xray_qty[i]
            var xrayCostValue = parseFloat(this.value) || 0;
            var xrayQtyValue = parseInt(xrayQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var xrayTotalValue = xrayCostValue * xrayQtyValue;

            // Round the total to 2 decimal places
            xrayTotalValue = xrayTotalValue.toFixed(2);

            // Set the calculated total value to xray_total[i]
            xrayTotalInput.val(xrayTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to xray_qty[i] input to listen for changes
        xrayQtyInput.on("input", function () {
            // Get the values from xray_cost[i] and xray_qty[i]
            var xrayCostValue = parseFloat(xrayCostInput.val()) || 0;
            var xrayQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var xrayTotalValue = xrayCostValue * xrayQtyValue;

            // Round the total to 2 decimal places
            xrayTotalValue = xrayTotalValue.toFixed(2);

            // Set the calculated total value to xray_total[i]
            xrayTotalInput.val(xrayTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(xrayCostInput, xrayQtyInput, xrayTotalInput); // Pass in the current values of xrayCostInput, xrayQtyInput, and xrayTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each xray item
    for (var i = 1; i <= numxrayItems; i++) {
        // Get the xray_total[i] input element
        var xrayTotalInput = $("#xray_total_" + i);

        // Get the value of xray_total[i]
        var xrayTotalValue = parseFloat(xrayTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += xrayTotalValue;
    }

    // Set the grand total value to xray_grandTotal input
    var xrayGrandTotalInput = $("#xray_grandTotal");
    xrayGrandTotalInput.val(grandTotal.toFixed(2));
}
