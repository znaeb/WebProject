/**
 * Created by Benjamin on 4/17/2016.
 */
(function(){
    $ajaxButton     = $(".ajaxButton");
    $noAd    = $(".noAdButton");
    $ad    = $(".ad");
    var xhttp = new XMLHttpRequest();
    var toggle=false;
    var string="i";
    var names=[];
    $noAd.on('click', function() {
        $.get("/WebProject/php/resetAds.php");
        alert("Ads Reset!");
    });

    $ajaxButton.on('click', function() {
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var string = "g";
                document.getElementById("empty").innerHTML = xhttp.responseText;
                var problem = document.getElementById("empty").getElementsByTagName("problem");
                for (var m = 0; m < problem.length; m++) {
                    problem[m].innerHTML += "<br>";
                }
                alert(problem[0].childNodes[0]);
                toggle = true;
            }
        };
        xhttp.open("GET", "ajax/data.xml", true);
        xhttp.send();
    });
    $ad.on('mouseover', function() {
        //window.open("/WebProject/php/display.php");
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var found = false;
                var useIndex = -1;
                //window.open("//"+xhttp.responseText);
                document.getElementById("ad").href="//"+xhttp.responseText;
            }
        };
        xhttp.open("GET", "../php/getUrl.php", true);
        xhttp.send();
        //}
    });



})(jQuery);
