@extends('layouts.layouts')
@section('content')
<div ondragover="allowDrop(event)" class="container row">
    <div ondragover="allowDrop(event)" class="container container2 col-8">


        <div id="dropzone"></div>
    </div>
    <div id="outzone" ondragover="allowDrop(event)" class="container container1 col-4">
        <div>choose from Element</div>
        <div class="content1" style="margin-bottom: 63px">
            <img id="profilepic" src="">
        </div>


        <div class="text content2" style="display: block">
            <input type="text" id="name" draggable="true" value="jsaj" onmouseout="console.log('d')" name="name">
            <input onchange="changeColor()" type="color" id="inputcolor" name="inputcolor">

        </div>

        <div class="text content3" style="display: block">
            <textarea class="text-center jobNumber" id="jobNumber" draggable="true" onmouseout="console.log('d')"
                name="jobNumber">الرقم الوظيفي</textarea>


        </div>
        <div class="text content4" style="display: block">

            <ul dir="rtl" style="list-style-type: arabic-indic;" id="sortable">
                <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>المسرح</li>
                <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>المطاعم</li>
                <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span> المركز الاعلامي</li>

            </ul>
        </div>
    </div>

</div>