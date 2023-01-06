$(document).ready(function () {
    $("#birthday").datepicker({
        onSelect: function () {
            var birthday = $("#birthday").val();
            var birthDate = new Date(birthday);
            var date_Today = new Date();

            var difference = date_Today.getTime() - birthDate.getTime();
            var ageDate = new Date(difference);
            var age = ageDate.getFullYear() - 1970;

            $("#age").val(age);
        },
        yearRange: "1900:2100",
        changeMonth: true,
        changeYear: true,
        maxDate: new Date(),
    });
});

//https://stackoverflow.com/questions/22006328/disable-future-dates-after-today-in-jquery-ui-datepicker
