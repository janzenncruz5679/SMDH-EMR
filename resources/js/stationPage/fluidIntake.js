for (var i = 1; i <= 10; i++) {
    (function (i) {
        var op_GrandTotalInput = document.getElementById("opGrandTotal_" + i);

        var oral_FirstInput = document.getElementById("oral_" + i);
        var oral_SecondInput = document.getElementById("oral_" + i + "_1");
        var oral_ThirdInput = document.getElementById("oral_" + i + "_2");

        var parental_FirstInput = document.getElementById("parental_" + i);
        var parental_SecondInput = document.getElementById(
            "parental_" + i + "_1"
        );
        var parental_ThirdInput = document.getElementById(
            "parental_" + i + "_2"
        );

        var op_TotalInput = document.getElementById("opTotal_" + i);
        var op_SecondTotalInput = document.getElementById(
            "opTotal_" + i + "_1"
        );
        var op_ThirdTotalInput = document.getElementById("opTotal_" + i + "_2");

        var oral_OverallInput = document.getElementById("oral_overall_" + i);
        var parental_OverallInput = document.getElementById(
            "parental_overall_" + i
        );

        op_GrandTotalInput.addEventListener("input", function () {
            updateTotalGrand(
                op_GrandTotalInput,
                op_TotalInput,
                op_SecondTotalInput,
                op_ThirdTotalInput
            );
        });

        oral_FirstInput.addEventListener("input", function () {
            updateTotalHorizontal(
                op_TotalInput,
                oral_FirstInput,
                parental_FirstInput
            );
            updateTotalVertical(
                oral_FirstInput,
                oral_SecondInput,
                oral_ThirdInput,
                oral_OverallInput
            );
        });

        oral_SecondInput.addEventListener("input", function () {
            updateTotalHorizontalTwo(
                op_SecondTotalInput,
                oral_SecondInput,
                parental_SecondInput
            );
            updateTotalVertical(
                oral_FirstInput,
                oral_SecondInput,
                oral_ThirdInput,
                oral_OverallInput
            );
        });

        oral_ThirdInput.addEventListener("input", function () {
            updateTotalHorizontalThree(
                op_ThirdTotalInput,
                oral_ThirdInput,
                parental_ThirdInput
            );
            updateTotalVertical(
                oral_FirstInput,
                oral_SecondInput,
                oral_ThirdInput,
                oral_OverallInput
            );
        });

        parental_FirstInput.addEventListener("input", function () {
            updateTotalHorizontal(
                op_TotalInput,
                oral_FirstInput,
                parental_FirstInput
            );
            updateTotalVerticalParental(
                parental_FirstInput,
                parental_SecondInput,
                parental_ThirdInput,
                parental_OverallInput
            );
        });

        parental_SecondInput.addEventListener("input", function () {
            updateTotalHorizontalTwo(
                op_SecondTotalInput,
                oral_SecondInput,
                parental_SecondInput
            );
            updateTotalVerticalParental(
                parental_FirstInput,
                parental_SecondInput,
                parental_ThirdInput,
                parental_OverallInput
            );
        });

        parental_ThirdInput.addEventListener("input", function () {
            updateTotalHorizontalThree(
                op_ThirdTotalInput,
                oral_ThirdInput,
                parental_ThirdInput
            );
            updateTotalVerticalParental(
                parental_FirstInput,
                parental_SecondInput,
                parental_ThirdInput,
                parental_OverallInput
            );
        });
    })(i);
}

function updateTotalHorizontal(
    op_TotalInput,
    oral_FirstInput,
    parental_FirstInput
) {
    // Get the input field values
    var oralFirst = parseFloat(oral_FirstInput.value) || 0; // Use 0 if input is not a number
    var parentalFirst = parseFloat(parental_FirstInput.value) || 0; // Use 0 if input is not a number

    // Perform addition
    var sum = oralFirst + parentalFirst;

    // Set the opTotal in the third input field
    op_TotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalHorizontalTwo(
    op_SecondTotalInput,
    oral_SecondInput,
    parental_SecondInput
) {
    // Get the input field values
    var oralSecond = parseFloat(oral_SecondInput.value) || 0; // Use 0 if input is not a number
    var parentalSecond = parseFloat(parental_SecondInput.value) || 0; // Use 0 if input is not a number

    // Perform addition
    var sum = oralSecond + parentalSecond;

    // Set the opTotal in the third input field
    op_SecondTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalHorizontalThree(
    op_ThirdTotalInput,
    oral_ThirdInput,
    parental_ThirdInput
) {
    // Get the input field values
    var oralThird = parseFloat(oral_ThirdInput.value) || 0; // Use 0 if input is not a number
    var parentalThird = parseFloat(parental_ThirdInput.value) || 0; // Use 0 if input is not a number

    // Perform addition
    var sum = oralThird + parentalThird;

    // Set the opTotal in the third input field
    op_ThirdTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalGrand(
    op_GrandTotalInput,
    op_TotalInput,
    op_SecondTotalInput,
    op_ThirdTotalInput
) {
    // Get the input field values
    var opTotal = parseFloat(op_TotalInput.value) || 0; // Use 0 if input is not a number
    var opSecondTotal = parseFloat(op_SecondTotalInput.value) || 0; // Use 0 if input is not a number
    var opThirdTotal = parseFloat(op_ThirdTotalInput.value) || 0; // Use 0 if input is not a number

    // Perform addition
    var sum = opTotal + opSecondTotal + opThirdTotal;

    // Set the opGrandTotal in the input field
    op_GrandTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalVertical(
    oral_FirstInput,
    oral_SecondInput,
    oral_ThirdInput,
    oral_OverallInput
) {
    // Get the input field values
    var oralFirst = parseFloat(oral_FirstInput.value) || 0; // Use 0 if input is not a number
    var oral_Second = parseFloat(oral_SecondInput.value) || 0;
    var oral_Third = parseFloat(oral_ThirdInput.value) || 0;

    // Perform addition
    var sum = oralFirst + oral_Second + oral_Third;

    // Set the opTotal in the third input field
    oral_OverallInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalVerticalParental(
    parental_FirstInput,
    parental_SecondInput,
    parental_ThirdInput,
    parental_OverallInput
) {
    // Get the input field values
    var parental_First = parseFloat(parental_FirstInput.value) || 0; // Use 0 if input is not a number
    var parental_Second = parseFloat(parental_SecondInput.value) || 0;
    var parental_Third = parseFloat(parental_ThirdInput.value) || 0;

    // Perform addition
    var sum = parental_First + parental_Second + parental_Third;

    // Set the opTotal in the third input field
    parental_OverallInput.value = isNaN(sum) ? "" : sum;
}
