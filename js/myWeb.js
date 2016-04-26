/**
 * Created by Benjamin on 4/17/2016.
 */
(function(){
    $ajaxButton     = $(".ajaxButton");
    $noAd    = $(".noAdButton");
    $newAd    = $(".newAdButton");
    $ad    = $(".ad");
    $potato    = $(".content");
    var xhttp = new XMLHttpRequest();
    var toggle=false;
    var string="i";
    var names=[];
    $noAd.on('click', function() {
        $.get("../php/resetAds.php");
        alert("Ads Reset!");
    });
    $newAd.on('click', function() {
        var url = prompt("Please enter the url", "www.youtube.com/watch?v=dQw4w9WgXcQ");
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
            }
        };
        xhttp.open("POST", "../php/submit.php?url="+url, true);
        xhttp.send();
    });
    $ad.on('mouseover', function() {
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var found = false;
                var useIndex = -1;
                document.getElementById("ad").href="//"+xhttp.responseText;
            }
        };
        xhttp.open("GET", "../php/getUrl.php", true);
        xhttp.send();
    });
    $potato.on('click',function(){
        if(!$potato.hasClass("reverse"))
            $potato.addClass(("reverse"));
        else
            $potato.removeClass("reverse");
    });
})(jQuery);
