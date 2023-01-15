function append(dl, dtTxt, ddTxt) {
    var dt = document.createElement("dt");
    var dd = document.createElement("dd");
    dt.textContent = dtTxt;
    dd.textContent = ddTxt;
    dl.appendChild(dt);
    dl.appendChild(dd);
}

$(document).ready(function () {
    var today = new Date();
    $("#start_date").val();
    $("#end_date").val();
    $("#start_time").val();
    $("#end_time").val();

    $("#start_date, #end_date, #start_time, #end_time").on(
        "change",
        function (ev) {
            var dl = document.getElementById("total_days");
            while (dl.hasChildNodes()) {
                dl.removeChild(dl.lastChild);
            }

            var date1 = new Date(
                $("#start_date").val() + " " + $("#start_time").val()
            ).getTime();
            var date2 = new Date(
                $("#end_date").val() + " " + $("#end_time").val()
            ).getTime();
            var msec = date2 - date1;
            var mins = Math.floor(msec / 60000);
            var hrs = Math.floor(mins / 60);
            var days = Math.floor(hrs / 24);
            var yrs = Math.floor(days / 365);
            mins = mins % 60;
            hrs = hrs % 24;
            days = days % 365;
            append(
                dl,
                "In days: ",
                days + " days, " + hrs + " hours, " + mins + " minutes"
            );
            var ans = days + " days, " + hrs + " hours, " + mins + " minutes";
            $("#total_days").val(ans);
        }
    );

    $("#start_date").change();
});
