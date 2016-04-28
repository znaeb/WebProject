<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 4/26/2016
 * Time: 4:24 PM
 */
?>
<!--<form id="search-box"  class="search-box" autocomplete="off">
    <input type="text" id="search-contents" name="search" placeholder="search">
    <input type="submit">

</form>-->

<div class="flexsearch">
    <div class="flexsearch-wrapper" id="searchWrap">
        <!-- You'll handle the form with js, so no need for method and action -->
        <form class="flexsearch-form" id="mainForm">
            <div class="flexsearch-input-wrapper" >
                <input class="flexsearch-input" type="search" autocomplete="off" id="search" placeholder="search">
                <input class="flexsearch-submit" type="submit" value="&#10140;"/>

            </div>


        </form>

        <li class="flexsearch-dropdown" id="autoComp" >

        </li>
    </div>

</div>
