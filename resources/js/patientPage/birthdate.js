// $(document).ready(function () {
//     $("#birthday").datepicker({
//         onSelect: function () {
//             var birthday = $("#birthday").val();
//             var birthDate = new Date(birthday);
//             var date_Today = new Date();

//             var difference = date_Today.getTime() - birthDate.getTime();
//             var ageDate = new Date(difference);
//             var age = ageDate.getFullYear() - 1970;

//             $("#age").val(age);
//         },
//         yearRange: "1900:2100",
//         changeMonth: true,
//         changeYear: true,
//         maxDate: new Date(),
//     });
// });
$(document).ready(function () {
    $("#birthday").on("change", function (ev) {
        var birthday = $("#birthday").val();
        var birthDate = new Date(birthday);
        var date_Today = new Date();

        var difference = date_Today.getTime() - birthDate.getTime();
        var ageDate = new Date(difference);
        var age = ageDate.getFullYear() - 1970;
        $("#age").val(age);
    });
});

$(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10) month = "0" + month.toString();
    if (day < 10) day = "0" + day.toString();

    var maxDate = year + "-" + month + "-" + day;
    $("#birthday").attr("max", maxDate);
});
