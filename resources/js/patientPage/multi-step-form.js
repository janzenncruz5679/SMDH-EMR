$(function () {
    var $sections = $(".form-section");
    function navigateTo(index) {
        $sections.removeClass("current").eq(index).addClass("current");
        $(".form-navigation .previous").toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $(".form-navigation .next").toggle(!atTheEnd);
        $(".form-navigation [Type=submit]").toggle(atTheEnd);

        const step = document.querySelector(".step" + index);
        step.style.backgroundColor = "#028090";
        step.style.borderColor = "#028090";
        step.style.color = "white";

        const line = document.querySelector(".line" + index);
        line.style.borderColor = "#028090";

        const check = document.querySelector(".check" + index);
        check.innerHTML = '<i class="fa-solid fa-check"></i>';
    }
    function curIndex() {
        return $sections.index($sections.filter(".current"));
    }
    $(".form-navigation .previous").click(function () {
        var currentIndex = $sections.index($sections.filter(".current"));
        const step = document.querySelector(".step" + currentIndex);
        const line = document.querySelector(".line" + currentIndex);
        const check = document.querySelector(".check" + currentIndex);
        step.style.backgroundColor = "";
        step.style.color = "";
        step.style.borderColor = "";
        line.style.borderColor = "";
        check.innerHTML = currentIndex;
        navigateTo(curIndex() - 1);
    });
    // $(".form-navigation .previous").click(function () {
    //     navigateTo(curIndex() - 1);
    // });
    $(".form-navigation .next").click(function () {
        $(".admission-form")
            .parsley()
            .whenValidate({
                group: "block-" + curIndex(),
            })
            .done(function () {
                navigateTo(curIndex() + 1);
            });
    });
    $sections.each(function (index, section) {
        $(section)
            .find(":input")
            .attr("data-parsley-group", "block-" + index);
    });
    navigateTo(0);
});