$(document).ready(function () {

    $(".my-row").click(function(){
        var product = jQuery.parseJSON($(this).attr("data-product"));
        $(".modal-card-title").text(product.name);
        $(".modal-card-body p:eq(0)").text('descr: ' + product.descr);
        $(".modal-card-body p:eq(1) b").text(product.category.name);
        $(".modal-card-body p:eq(2) b").text(product.arrayTags);
        $(".modal").addClass("is-active");

    });
    $(".delete").click(function () {
        $(".modal").removeClass("is-active");
    });
    $(".modal-background").click(function () {
        $(".modal").removeClass("is-active");
    });
});


