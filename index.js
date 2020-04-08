
    $('#categories').click(function()
    {
        $('#categories').hide();
        $('#categories-1').show();
        $('.categories-container').css('margin-left','0%');
        $('.container').css('transform','scale(0.68)');
    });
    $('#categories-1').click(function()
    {
        $('#categories').show();
        $('#categories-1').hide();
        $('.container').css('transform','scale(1)');
        $('.categories-container').css('margin-left','-100%');
    });
    $('.container').click(function()
    {
        $('#categories').show();
        $('#categories-1').hide();
        $('.categories-container').css('margin-left','-100%');
    });
    $('#Electronics').click(function(){
        $('#Sports').hide(100);
    });
    $(document).ready(function() {
        var loadcount=4;
        $('.load-more').click(function(){
            loadcount= loadcount + 4;    
                $('.container').load("load-more.php",{
                    loadnewcount: loadcount
                });
        });
    });
    
$(function worker(){
    $.ajaxSetup ({
        cache: false,
        complete: function() {
         // setTimeout(worker,500000);
        }
    });
    var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";
    var loadUrl = "fetch.php";   
    $(".container").html(ajax_load).load(loadUrl);
});