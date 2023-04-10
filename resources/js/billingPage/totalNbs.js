var numnbsItems = 3; // Update this value to match the actual number of nbs items

// Loop through each nbs item
for (var i = 1; i <= numnbsItems; i++) {
    // Get the input elements for nbs_cost[i], nbs_qty[i], and nbs_total[i]
    var nbsCostInput = $("#nbs_cost_" + i);
    var nbsQtyInput = $("input[name='nbs_qty[" + i + "]']").eq(0);
    var nbsTotalInput = $("#nbs_total_" + i);

    // Define a closure to capture the values of nbsCostInput, nbsQtyInput, and nbsTotalInput
    (function (nbsCostInput, nbsQtyInput, nbsTotalInput) {
        // Add event listener to nbs_cost[i] input to listen for changes
        nbsCostInput.on("input", function () {
            // Get the values from nbs_cost[i] and nbs_qty[i]
            var nbsCostValue = parseFloat(this.value) || 0;
            var nbsQtyValue = parseInt(nbsQtyInput.val()) || 0;

            // Calculate the total by multiplying cost and quantity
            var nbsTotalValue = nbsCostValue * nbsQtyValue;

            // Round the total to 2 decimal places
            nbsTotalValue = nbsTotalValue.toFixed(2);

            // Set the calculated total value to nbs_total[i]
            nbsTotalInput.val(nbsTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });

        // Add event listener to nbs_qty[i] input to listen for changes
        nbsQtyInput.on("input", function () {
            // Get the values from nbs_cost[i] and nbs_qty[i]
            var nbsCostValue = parseFloat(nbsCostInput.val()) || 0;
            var nbsQtyValue = parseInt(this.value) || 0;

            // Calculate the total by multiplying cost and quantity
            var nbsTotalValue = nbsCostValue * nbsQtyValue;

            // Round the total to 2 decimal places
            nbsTotalValue = nbsTotalValue.toFixed(2);

            // Set the calculated total value to nbs_total[i]
            nbsTotalInput.val(nbsTotalValue);

            // Call the function to update the grand total
            updateGrandTotal();
        });
    })(nbsCostInput, nbsQtyInput, nbsTotalInput); // Pass in the current values of nbsCostInput, nbsQtyInput, and nbsTotalInput as arguments to the closure
}

// Function to update the grand total
function updateGrandTotal() {
    var grandTotal = 0;
    // Loop through each nbs item
    for (var i = 1; i <= numnbsItems; i++) {
        // Get the nbs_total[i] input element
        var nbsTotalInput = $("#nbs_total_" + i);

        // Get the value of nbs_total[i]
        var nbsTotalValue = parseFloat(nbsTotalInput.val()) || 0;

        // Add the value to the grand total
        grandTotal += nbsTotalValue;
    }

    // Set the grand total value to nbs_grandTotal input
    var nbsGrandTotalInput = $("#nbs_grandTotal");
    nbsGrandTotalInput.val(grandTotal.toFixed(2));
}
