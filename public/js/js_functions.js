

$(document).ready(function () {
    $("input[name=payment_type]:radio").change(function () {
        if($("input[name=payment_type]:checked").val()=='Transfer Funds') {
            $("#transfer").css("display", "block");
            $("#grant").css("display", "none");
            $(".fund").attr("required","");
            $("#grant_field").removeAttr("required");
        } else if($("input[name=payment_type]:checked").val()=='Grant')  {
            $("#transfer").css("display", "none");
            $("#grant").css("display", "block");
            $("#grant_field").attr("required","");
            $(".fund").removeAttr("required");
        } else {
            $("#transfer").css("display", "none");
            $("#grant").css("display", "none");
            $(".fund").removeAttr("required");
            $("#grant_field").removeAttr("required");
        }


    });
    // alert("this");
});

$(document).ready(function () {
    $("input[name=request_type]:radio").change(function () {
        if($("input[name=request_type]:checked").val()=='Starting New Page') {
            $("#new_page").css("display", "block");
            $("#post").css("display", "none");
        } else {
            $("#new_page").css("display", "none");
            $("#post").css("display", "block");
        }


    });
    // alert("this");
});


$(document).ready(function () {
    $("input[class=display]:checkbox").change(function () {

        $("#pickup").css("display", "block");
        // alert('this');

    });

});


$(document).ready(function () {
    $("input[id=other]:checkbox").change(function () {

        $("#other_details").css("display", "block");
        // alert('this');

    });

});

$(document).ready(function () {
    $("input[name=GHC]:radio").change(function () {
        if($("input[name=GHC]:checked").val()==1) {
            $("#GHC").css("display", "block");
        } else {
            $("#GHC").css("display", "none");
        }


    });
    // alert("this");
});


$(document).ready(function(){
    $("#all_button").click(function(){
        $("#all").toggle();
    });
});

$(document).ready(function(){
    $("#received_button").click(function(){
        $("#received").toggle();
    });
});

$(document).ready(function(){
    $("#progress_button").click(function(){
        $("#progress").toggle();
    });
});

$(document).ready(function(){
    $("#information_button").click(function(){
        $("#information").toggle();
    });
});

$(document).ready(function(){
    $("#review_button").click(function(){
        $("#review").toggle();
    });
});

$(document).ready(function(){
    $("#complete_button").click(function(){
        $("#complete").toggle();
    });
});

$(document).ready(function () {
    $("input[id=presentation_other]:checkbox").change(function () {

        $("#presentation_other_details").css("display", "block");
        // alert('this');

    });

});

$(document).ready(function () {
    $("input[id=paid_advertising_other]:checkbox").change(function () {

        $("#paid_advertising_other_details").css("display", "block");
        // alert('this');

    });

});

$(document).ready(function(){
    $("#confirm").click(function(){
        // $("#complete").toggle();
        var retval = confirm('The request is going to be submitted.  Do you want to continue?');
        if(retval == true) {
            return true;
        } else {
            return false;
        }
    });
});


