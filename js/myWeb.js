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
    /*$.getJSON( "../json/search.json", function( data ) {
        //var $files = [];
        //var $interests = [];
        //$files = data;


        //alert( "JSON Data: " + $.parseJSON() );
        $("#mainForm").keyup(function (input) {
            alert(data);
            alert("Handler for .keydown() called." + data); //haha success
            //alert(document.getElementsByClassName("flexsearch-input")[0].value);
            var $contentsHolder = document.getElementById("search");
            var $contents = document.getElementById("search").value;
            if ($contents != "") {

                var searchList = [];
                //alert(document.getElementById("search").value); //search-box content
                //alert($interests[0]	);
                for (var $i = 0; $i < $interests.length; $i++) {
                    var $location = $interests[$i].toLowerCase().search($contents.toLowerCase());
                    if ($location === 0)searchList.push($interests[$i]);
                }
                for ($i = 0; $i < $files.length; $i++) {
                    $location = $files[$i].toLowerCase().search($contents.toLowerCase());
                    if ($location === 0)searchList.push($files[$i]);
                }
                //alert(searchList); just need to display it now
                //var $drop=document.getElementById("search");
                var $search = document.getElementById('autoComp');
                $search.innerHTML = "";

                if (searchList.length > 0) {
                    //$search.innerHTML = "<select name=\"sometext\" multiple=\"multiple\" class=\"flexsearch-dropdown\">";
                    //$contentsHolder.value.replace($contentsHolder.value,"pp");
                    for ($i = 0; $i < searchList.length; $i++) {
                        $search.innerHTML = $search.innerHTML + "\n<a href='https://www.google.com/#q=" + searchList[$i] + "'>" + searchList[$i] + "</a><br>";
                        //$contentsHolder.value.replace($contentsHolder.value,"pp");
                        //"<option>text2</option>" +
                        //"<option>text3</option>" +
                        //"<option>text4</option>" +
                        //"<option>text5</option>" +
                    }
                    //$search.innerHTML = $search.innerHTML + "\n</select>";
                    // 	$contentsHolder.value.replace($contentsHolder.value,"pp");
                    //$contentsHolder.value="pp";
                }
            } else {
                $search = document.getElementById('autoComp');
                $search.innerHTML = "";
                $search.hide();
            }

            xhttp.open("GET", "../xml/search.xml", true);
            xhttp.send();
        });
    });
    */
    var xmlDoc = $.parseXML( "../xml/search.xml" ),
        $xml = $( xmlDoc );
    console.log($xml);
    $("#mainForm").keyup(function (input) {
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                //console.log(input.target.value);
                document.getElementById("autoComp").style.display="block";
                //if (toggle === false) {
                var string = "";
                var xmlDoc = $.parseXML( xhttp.responseText ),
                    $xml = $( xmlDoc );
                /*var xmlDoc = $.parseXML( xhttp.responseText ),
                    $xml = $( xmlDoc ),
                    $problem = $xml.find( "php" );

                var xml_node = $('php',$xml);
                var int1=0;
                */
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
    /*$body.on('mouseover',function(){

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
    */

})(jQuery);
