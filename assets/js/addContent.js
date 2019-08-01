$(function() {

    $("#submit").hide();

    $("#page-changer select").change(function() {
        window.location = $("#page-changer select option:selected").val();
    })

});
