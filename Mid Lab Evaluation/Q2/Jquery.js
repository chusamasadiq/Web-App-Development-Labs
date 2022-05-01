$(document).ready(function() {
    $("#fname_error_message").hide();

    $("#optradioYes").click(function() {
        alert("Hi, Thanks! for Registration");
    });

    var pattern = /^[a-zA-Z]*$/;
    $("#Registration_form").submit(function() {

        if ($("#fname").val() == '') {
            alert("Enter Your First  Name");
        } else if (pattern.test(fname) !== 0) {
            $("#fname_error_message").html("Only Alpabets are allowed");
            $("#fname_error_message").show();
        } else if ($("#lname").val() == '') {
            alert("Enter Your Last  Name");
        } else if (pattern.test(lname) !== 0) {
            $("#lname_error_message").html("Only Alpabets are allowed");
            $("#lname_error_message").show();
        }
        $("#Registration_btn").click(function() {
            $("#Registration_btn").css("color", "blue");
        });
    });




});