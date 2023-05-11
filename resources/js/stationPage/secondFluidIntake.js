for (var i = 1; i <= 10; i++) {
    (function (i) {
        var udo_GrandTotalInput = document.getElementById("udoGrandTotal_" + i);

        var urine_FirstInput = document.getElementById("urine_" + i);
        var urine_SecondInput = document.getElementById("urine_" + i + "_1");
        var urine_ThirdInput = document.getElementById("urine_" + i + "_2");

        var drainage_FirstInput = document.getElementById("drainage_" + i);
        var drainage_SecondInput = document.getElementById(
            "drainage_" + i + "_1"
        );
        var drainage_ThirdInput = document.getElementById(
            "drainage_" + i + "_2"
        );

        var others_FirstInput = document.getElementById("others_" + i);
        var others_SecondInput = document.getElementById("others_" + i + "_1");
        var others_ThirdInput = document.getElementById("others_" + i + "_2");

        var udo_TotalInput = document.getElementById("udoTotal_" + i);
        var udo_SecondTotalInput = document.getElementById(
            "udoTotal_" + i + "_1"
        );
        var udo_ThirdTotalInput = document.getElementById(
            "udoTotal_" + i + "_2"
        );

        var urine_OverallInput = document.getElementById("urine_overall_" + i);
        var drainage_OverallInput = document.getElementById(
            "drainage_overall_" + i
        );
        var others_OverallInput = document.getElementById(
            "others_overall_" + i
        );

        udo_GrandTotalInput.addEventListener("input", function () {
            updateTotalGrand(
                udo_GrandTotalInput,
                udo_TotalInput,
                udo_SecondTotalInput,
                udo_ThirdTotalInput
            );
        });

        urine_FirstInput.addEventListener("input", function () {
            updateTotalHorizontal(
                udo_TotalInput,
                urine_FirstInput,
                drainage_FirstInput,
                others_FirstInput
            );
            updateTotalVerticalUrine(
                urine_FirstInput,
                urine_SecondInput,
                urine_ThirdInput,
                urine_OverallInput
            );
        });

        urine_SecondInput.addEventListener("input", function () {
            updateTotalHorizontalTwo(
                udo_SecondTotalInput,
                urine_SecondInput,
                drainage_SecondInput,
                others_SecondInput
            );
            updateTotalVerticalUrine(
                urine_FirstInput,
                urine_SecondInput,
                urine_ThirdInput,
                urine_OverallInput
            );
        });

        urine_ThirdInput.addEventListener("input", function () {
            updateTotalHorizontalThree(
                udo_ThirdTotalInput,
                urine_ThirdInput,
                drainage_ThirdInput,
                others_ThirdInput
            );
            updateTotalVerticalUrine(
                urine_FirstInput,
                urine_SecondInput,
                urine_ThirdInput,
                urine_OverallInput
            );
        });

        drainage_FirstInput.addEventListener("input", function () {
            updateTotalHorizontal(
                udo_TotalInput,
                urine_FirstInput,
                drainage_FirstInput,
                others_FirstInput
            );
            updateTotalVerticalDrainage(
                drainage_FirstInput,
                drainage_SecondInput,
                drainage_ThirdInput,
                drainage_OverallInput
            );
        });

        drainage_SecondInput.addEventListener("input", function () {
            updateTotalHorizontalTwo(
                udo_SecondTotalInput,
                urine_SecondInput,
                drainage_SecondInput,
                others_SecondInput
            );
            updateTotalVerticalDrainage(
                drainage_FirstInput,
                drainage_SecondInput,
                drainage_ThirdInput,
                drainage_OverallInput
            );
        });

        drainage_ThirdInput.addEventListener("input", function () {
            updateTotalHorizontalThree(
                udo_ThirdTotalInput,
                urine_ThirdInput,
                drainage_ThirdInput,
                others_ThirdInput
            );
            updateTotalVerticalDrainage(
                drainage_FirstInput,
                drainage_SecondInput,
                drainage_ThirdInput,
                drainage_OverallInput
            );
        });

        others_FirstInput.addEventListener("input", function () {
            updateTotalHorizontal(
                udo_TotalInput,
                urine_FirstInput,
                drainage_FirstInput,
                others_FirstInput
            );
            updateTotalVerticalOthers(
                others_FirstInput,
                others_SecondInput,
                others_ThirdInput,
                others_OverallInput
            );
        });

        others_SecondInput.addEventListener("input", function () {
            updateTotalHorizontal(
                udo_SecondTotalInput,
                urine_SecondInput,
                drainage_SecondInput,
                others_SecondInput
            );
            updateTotalVerticalOthers(
                others_FirstInput,
                others_SecondInput,
                others_ThirdInput,
                others_OverallInput
            );
        });

        others_ThirdInput.addEventListener("input", function () {
            updateTotalHorizontal(
                udo_ThirdTotalInput,
                urine_ThirdInput,
                drainage_ThirdInput,
                others_ThirdInput
            );
            updateTotalVerticalOthers(
                others_FirstInput,
                others_SecondInput,
                others_ThirdInput,
                others_OverallInput
            );
        });
    })(i);
}

function updateTotalGrand(
    udo_GrandTotalInput,
    udo_TotalInput,
    udo_SecondTotalInput,
    udo_ThirdTotalInput
) {
    // Get the input field values
    var udoTotal = parseFloat(udo_TotalInput.value) || 0; // Use 0 if input is not a number
    var udoSecondTotal = parseFloat(udo_SecondTotalInput.value) || 0; // Use 0 if input is not a number
    var udoThirdTotal = parseFloat(udo_ThirdTotalInput.value) || 0; // Use 0 if input is not a number

    // Perform addition
    var sum = udoTotal + udoSecondTotal + udoThirdTotal;

    // Set the opGrandTotal in the input field
    udo_GrandTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalHorizontal(
    udo_TotalInput,
    urine_FirstInput,
    drainage_FirstInput,
    others_FirstInput
) {
    // Get the input field values
    var urine_First = parseFloat(urine_FirstInput.value) || 0; // Use 0 if input is not a number
    var drainage_First = parseFloat(drainage_FirstInput.value) || 0; // Use 0 if input is not a number
    var others_First = parseFloat(others_FirstInput.value) || 0;

    // Perform addition
    var sum = urine_First + drainage_First + others_First;

    // Set the opTotal in the third input field
    udo_TotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalHorizontalTwo(
    udo_SecondTotalInput,
    urine_SecondInput,
    drainage_SecondInput,
    others_SecondInput
) {
    // Get the input field values
    var urine_Second = parseFloat(urine_SecondInput.value) || 0; // Use 0 if input is not a number
    var drainage_Second = parseFloat(drainage_SecondInput.value) || 0; // Use 0 if input is not a number
    var others_Second = parseFloat(others_SecondInput.value) || 0;

    // Perform addition
    var sum = urine_Second + drainage_Second + others_Second;

    // Set the opTotal in the third input field
    udo_SecondTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalHorizontalThree(
    udo_ThirdTotalInput,
    urine_ThirdInput,
    drainage_ThirdInput,
    others_ThirdInput
) {
    // Get the input field values
    var urine_Third = parseFloat(urine_ThirdInput.value) || 0; // Use 0 if input is not a number
    var drainage_Third = parseFloat(drainage_ThirdInput.value) || 0; // Use 0 if input is not a number
    var others_Third = parseFloat(others_ThirdInput.value) || 0;

    // Perform addition
    var sum = urine_Third + drainage_Third + others_Third;

    // Set the opTotal in the third input field
    udo_ThirdTotalInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalVerticalUrine(
    urine_FirstInput,
    urine_SecondInput,
    urine_ThirdInput,
    urine_OverallInput
) {
    // Get the input field values
    var urine_first = parseFloat(urine_FirstInput.value) || 0; // Use 0 if input is not a number
    var urine_second = parseFloat(urine_SecondInput.value) || 0;
    var urine_third = parseFloat(urine_ThirdInput.value) || 0;

    // Perform addition
    var sum = urine_first + urine_second + urine_third;

    // Set the opTotal in the third input field
    urine_OverallInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalVerticalDrainage(
    drainage_FirstInput,
    drainage_SecondInput,
    drainage_ThirdInput,
    drainage_OverallInput
) {
    // Get the input field values
    var drainage_first = parseFloat(drainage_FirstInput.value) || 0; // Use 0 if input is not a number
    var drainage_second = parseFloat(drainage_SecondInput.value) || 0;
    var drainage_third = parseFloat(drainage_ThirdInput.value) || 0;

    // Perform addition
    var sum = drainage_first + drainage_second + drainage_third;

    // Set the opTotal in the third input field
    drainage_OverallInput.value = isNaN(sum) ? "" : sum;
}

function updateTotalVerticalOthers(
    others_FirstInput,
    others_SecondInput,
    others_ThirdInput,
    others_OverallInput
) {
    // Get the input field values
    var others_first = parseFloat(others_FirstInput.value) || 0; // Use 0 if input is not a number
    var others_second = parseFloat(others_SecondInput.value) || 0;
    var others_third = parseFloat(others_ThirdInput.value) || 0;

    // Perform addition
    var sum = others_first + others_second + others_third;

    // Set the opTotal in the third input field
    others_OverallInput.value = isNaN(sum) ? "" : sum;
}
