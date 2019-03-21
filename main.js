$(document).ready(function(){
    $("#person1").mousedown(function(){
      $("#demo01 ").toggle();
    });
});

$(document).ready(function(){
    $("#person2").mousedown(function(){
      $("#demo02").toggle();
    });
});

$(document).ready(function(){
    $("#person3").mousedown(function(){
      $("#demo03").toggle();
    });
});

$(document).ready(function(){
    $("#person4").mousedown(function(){
      $("#demo04").toggle();
    });
});

$(document).ready(function() {
    $('#JPO').popup();
    $.fn.popup.defaults.pagecontainer = '#page'
});

$(document).ready(function(){
    $(".ion-ios-close-outline").click(function(){
        $("#JPO").hide();
    });
});
