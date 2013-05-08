// JavaScript Document
jQuery(function()
{
    $('#real_estate').change(function()
    {
        var selectValues = $("#real_estate").val();
        $('#room').fadeOut(0);
        $('#house').fadeOut(0);
        $('#parthouse').fadeOut(0);
        $('#cottage').fadeOut(0);
        $('#plot').fadeOut(0);
        $('#industry').fadeOut(0);
        $('#flat').fadeOut(0);
        $('#'+selectValues).fadeIn("slow");
    });
});

// JavaScript Document
jQuery(function()
{
    var selectValues = $("#real_estate").val();
    if (selectValues!='')
    {
        $('#room').fadeOut();
        $('#house').fadeOut();
        $('#parthouse').fadeOut();
        $('#cottage').fadeOut();
        $('#plot').fadeOut();
        $('#industry').fadeOut();
        $('#flat').fadeOut();
        $('#'+selectValues).fadeIn();
    }else
    {
        $('#room').fadeOut();
        $('#house').fadeOut();
        $('#parthouse').fadeOut();
        $('#cottage').fadeOut();
        $('#plot').fadeOut();
        $('#industry').fadeOut();
        $('#flat').fadeOut();
        $('#flat').fadeIn();
    }

});

