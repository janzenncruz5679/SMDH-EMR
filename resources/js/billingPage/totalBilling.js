$(document).ready(function () {
    $("#medicine, #lab, #xray, #ecg, #oxygen, #nbs, #income").on(
        "input",
        function () {
            var medicine = parseFloat($("#medicine").val()) || 0;
            var lab = parseFloat($("#lab").val()) || 0;
            var xray = parseFloat($("#xray").val()) || 0;
            var ecg = parseFloat($("#ecg").val()) || 0;
            var oxygen = parseFloat($("#oxygen").val()) || 0;
            var nbs = parseFloat($("#nbs").val()) || 0;
            var income = parseFloat($("#income").val()) || 0;
            var sum = medicine + lab + xray + ecg + oxygen + nbs + income;
            $("#total").val(sum);
        }
    );
});
