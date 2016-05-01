/**
 * Created by Benjamin on 4/17/2016.
 */
(function(){
    $ajaxButton     = $(".ajaxButton");
    $noAd    = $(".noAdButton");
    $newAd    = $(".newAdButton");
    $ad    = $(".ad");
    $flipout    = $(".flipout");
    $search    = $(".search-box");
    $body    = $('body');
    var xhttpURL = new XMLHttpRequest();
    var toggle=false;
    var string="i";
    var names=[];
    $noAd.on('click', function() {
        $.get("../php/resetAds.php");
        alert("Ads Reset!");
    });
    $newAd.on('click', function() {
        var url = prompt("Please enter the url", "www.youtube.com/watch?v=dQw4w9WgXcQ");
        xhttpURL.onreadystatechange = function() {
            if (xhttpURL.readyState == 4 && xhttpURL.status == 200) {
            }
        };
        xhttpURL.open("POST", "../php/submit.php?url="+url, true);
        xhttpURL.send();
    });
    $ad.on('mouseover', function() {
        xhttpURL.onreadystatechange = function() {
            if (xhttpURL.readyState == 4 && xhttpURL.status == 200) {
                var found = false;
                var useIndex = -1;
                document.getElementById("ad").href="//"+xhttpURL.responseText;
            }
        };
        xhttpURL.open("GET", "../php/getUrl.php", true);
        xhttpURL.send();
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
    $(window).load(function() {

        $('header').raptorize({
            'enterOn' : 'chance'
        });
    });
    var xhttp = new XMLHttpRequest();
    var xmlDoc = $.parseXML( "../xml/search.xml" ),
        $xml = $( xmlDoc );
    console.log($xml);
    $("#mainForm").keyup(function (input) {
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                //console.log(input.target.value);
                var $autocomp = document.getElementById("autoComp");
                $autocomp.style.display="block";
                $autocomp.innerHTML="pop";
                var string = "";
                var xmlDoc = $.parseXML( xhttp.responseText ),
                    $xml = $( xmlDoc );
                var xml_node=$.parseXML(xhttp.responseText);
                console.log(xhttp.responseText);
                $(xml_node).find('file').each(function(){
                    console.log($(this));
                    var question=$(this).find('question').text().trim();
                    string=string+"<div class='problem"+int1+"'<h4>"+question+"</h4><br>";
                    string+="<select name='select"+int1+"' class='select' onChange='check(this,"+int1+")'>";
                    var answers=$(this).find('answer');
                    var correct=$(this).find('correct').text().trim();
                    string+="<option class='hidden'>"+""+"</option>";
                    string+="<option class='correct'>"+correct+"</option>";
                    var int2=0;
                    answers.each(function(){
                        var answer=$(this).text().trim();
                        string+="<option value='"+answer+"'>"+answer+"</option>";
                        int2++;
                    });
                    string+="</select><h3 class='correctResponse'>Correct!</h3>" +
                        "<h3 class='incorrectResponse'>incorrect...</h3></div>";
                    int1++;
                });
                document.getElementById("empty").innerHTML =string;
            }
        };
        xhttp.open("GET", "../xml/search.xml", true);
        xhttp.send();
    });
})(jQuery);
