$(function () {
    // Dropdown toggle
    $(".dropdown-header").click(function () {
        $(this).next(".dropdown").slideToggle();
    });

    $(document).click(function (e) {
        var target = e.target;
        if (
            !$(target).is(".dropdown-header") &&
            !$(target).parents().is(".dropdown-header")
        ) {
            //{ $('.dropdown').hide(); }
            $(".dropdown").slideUp();
        }
    });
});
