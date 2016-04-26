/**
 * Created by Benjamin on 4/17/2016.
 */
(function(){
    $ajaxButton     = $(".ajaxButton");
    $noAd    = $(".noAdButton");
    $newAd    = $(".newAdButton");
    $ad    = $(".ad");
    $flipout    = $(".flipout");
    $body    = $('body');
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
    function flip(){
        var $content=document.getElementById("content");
        var $sidebar=document.getElementById("sidebar");

        var $cont=$(".content");
        var $side=$(".sidebar");
        //alert($side.height());
        if(!$cont.hasClass("reverse")) {
            $content.style.float='right';
            $cont.addClass(("reverse"));
            $side.addClass(("reverse"));
        }else {
            $side.removeClass(("reverse"));
            $cont.removeClass(("reverse"));
            $content.style.float='left';
        }
    }
    $flipout.on('click',function(){
        flip();
    });
    $body.on('mouseover',function(){

        var num=9;
        num=window.scrollMaxX;
        num=document.body.clientHeight; //max Y
        //alert(num);
        //alert("X: "+window.event.clientX+"\nY: "+window.event.clientY);
        var $content=document.getElementById("content");

        if (window.event.clientX/document.body.clientWidth<0.7&&
            window.event.clientY/document.body.clientHeight>0.1&&
            window.event.clientY/document.body.clientHeight<0.25){
            if(Math.random()<0.1){
                flip();
            }


        }
    });

})(jQuery);
