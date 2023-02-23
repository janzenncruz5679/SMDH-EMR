// Define a function to add the event listener for the "Remove" button
function addRemoveEventListener() {
    $(".remove-input").on("click", function () {
        $(this).closest(".input-container").remove();
    });
}

// Call the function to add the event listener when the page loads
$(document).ready(function () {
    addRemoveEventListener();
});

// Add event listener for the "Add" button
$(".add-input").on("click", function () {
    if ($("#dynamic-inputs").children().length >= 20) {
        alert("Maximum limit of 20 input fields reached");
        return;
    }
    // Increment the counter
    var counter = $("#dynamic-inputs").children().length + 1;

    // Add the new input field
    $("#dynamic-inputs").append(
        '<div class="input-container grid">' +
            '<div class=" grid px-3 pt-3 text-xl text-[#003D33] font-semibold tracking-wider">' +
            "<label>Day " +
            counter +
            " Observation</label>" +
            "</div>" +
            '  <div class=" grid grid-cols-9 h-full w-full px-3 pt-3 gap-3">' +
            '<input type="date"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'name="dateRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="weight" name="weightRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="temperature" name="tempRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="blood pressure" name="bpRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="pulse rate" name="pulseRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="respiration" name="respirationRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="pain" name="painRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<input type="text"' +
            'class="w-full h-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"' +
            'placeholder="initials" name="initialsRecord[' +
            counter +
            ']" autocomplete="off">' +
            '<button class="remove-input bg-red-500 hover:bg-red-700 text-white rounded-lg focus:outline-none focus:shadow-outline-blue" type="button">Remove</button>' +
            "</div>" +
            "</div>"
    );

    // Call the function to add the event listener for the "Remove" button
    addRemoveEventListener();
});
