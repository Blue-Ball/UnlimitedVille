for(var i=0; i<document.forms.length; i++)
{
    var frm = document.forms[i];
    frm.onsubmit = function() {return false};
}

$(document).ready( function() {
    $("button.backorder").click( function() {
        var mymodal = $(this);
        for(i=0;i<4;i++) mymodal = mymodal.parent(); mymodal=mymodal.next();
        mymodal.modal("show");
    });
    $("button.addcart").click( function() {
        window.location.href = "/cart";
    });
    $("#use_shipping").click(function(){
        if($(this).is(':checked')){
            
            $( ".billinginfo" ).prop( "disabled", true ); //Disable
        } else {
            $( ".billinginfo" ).prop( "disabled", false ); //Enable
        }
    });

    $(document).scroll((function () {
        var top_object = $("#plans").offset();
        $(document).scrollTop() >= top_object.top ? $("#help-me-choose").hide().removeClass("d-none").fadeIn() : $("#help-me-choose").fadeOut();
    }));
});