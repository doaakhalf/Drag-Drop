@extends('layouts.layouts')
@section('customizedStyle')
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet" />
<style>
    .id-front *,
    .id-front {
        box-sizing: border-box;
        font-family: "Cairo", sans-serif;
        direction: rtl;
        color: #000;
    }

    .id-front {
        background-color: #fff;
        border: 2px solid #dedede;
        border-radius: 10px;
        width: 442px;
        height: 716px;
        padding: 14px;
        display: grid;
    }

    .id-front .id-wrap {
        background-color: #f3f3f3;
        border-radius: 6px;
        border-radius: 10px;
        padding: 14px;
    }

    .id-front .id-wrap .name-img {
        position: relative;
        padding-top: 82px;
    }

    .id-front .id-wrap .name-img .name {
        background-color: #fbe462;
        padding: 18px 20px;
        border-radius: 2px;
        /* margin-left: -14px; */
        font-weight: bold;
        text-align: right;
    }

    .id-front .id-wrap .name-img .profile-img {
        position: absolute;
        left: 14px;
        top: 0;
    }

    .id-front .id-wrap .name-img .profile-img img {
        height: 132px;
        width: 118px;
        object-fit: cover;
        object-position: top center;
    }

    .id-front .id-wrap .job-comp {
        padding-right: 38px;
        margin-top: 12px;
        font-weight: bold;
        text-align: right;
    }

    .id-front .id-wrap .job-comp .job {
        margin-bottom: 4px;
        text-align: right;
    }

    .id-front .id-wrap .categories-wrap {
        margin: 15px 6px;
        border: 1px solid #919191;
        padding: 6px;
        border-radius: 2px;
        text-align: right;
    }

    .id-front .id-wrap .categories-wrap .categories {
        padding: 12px 38px 12px;
        background-color: #fbe462;
        font-weight: bold;
    }

    .id-front .id-wrap .allowed-areas .title {
        margin-right: 38px;
        margin-bottom: 8px;
        font-size: 18px;
        font-weight: bold;
        text-align: right;
    }

    .id-front .id-wrap .allowed-areas .area-numbers {
        display: grid;
        grid-template-columns: repeat(5, 42px);
        grid-gap: 22px 8px;
        justify-content: space-around;
        border: 2px solid #919191;
        border-radius: 2px;
        padding: 22px 14px;
    }

    .id-front .id-wrap .allowed-areas .area-numbers>span {
        width: fit-content;
        border: 2px solid #919191;
        min-width: 42px;
        height: 42px;
        display: grid;
        place-items: center;
        line-height: 1;
        text-align: center;
        border-radius: 2px;
    }

    .id-front .id-wrap .allowed-areas .area-numbers>span.allowed {
        background-color: #fbe462;
    }

    .id-front .id-wrap .job-number-qr-code {
        margin-top: 12px;
        font-weight: bold;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 8px;
    }

    .id-front .id-wrap .job-number-qr-code .job-number {
        border: 2px solid #919191;
        border-radius: 2px;
        padding: 8px;
        text-align: center;
        display: grid;
    }

    .id-front .id-wrap .job-number-qr-code .job-number .title {
        font-size: 18px;
    }

    .id-front .id-wrap .job-number-qr-code .job-number .value {
        font-size: 32px;
    }

    .id-front .id-wrap .job-number-qr-code .qr-code {
        justify-self: end;
    }

    .id-front .id-wrap .job-number-qr-code .qr-code img {
        width: 118px;
    }

    .name,
    .job-comp,
    .job-number,
    .categories,
    .allowed-areas {
        padding: 18px 20px;
        text-align: right;
        width: fit-content;

    }

    .allowed-areas .title {
        margin-right: 38px;
        margin-bottom: 8px;
        font-size: 18px;
        font-weight: bold;
        text-align: right;
    }

    .allowed-areas .area-numbers {
        display: grid;
        grid-template-columns: repeat(5, 42px);
        grid-gap: 22px 8px;
        justify-content: space-around;
        border: 2px solid #919191;
        border-radius: 2px;
        padding: 22px 14px;
    }
</style>
<style>
    .id-back,
    .id-back * {
        box-sizing: border-box;
        font-family: "Cairo", sans-serif;
        direction: rtl;
        color: #000;
    }

    .id-back {
        background-color: #fff;
        border: 2px solid #dedede;
        border-radius: 10px;
        width: 442px;
        height: 716px;
        padding: 14px;
        display: grid;
    }

    .id-back .id-wrap {
        background-color: #f3f3f3;
        border-radius: 6px;
        border-radius: 10px;
        padding: 14px;
    }

    .id-back .id-wrap .areas-names {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 22px 8px;
        justify-content: space-around;
    }

    .id-back .id-wrap .areas-names .number-name {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .id-back .id-wrap .areas-names .number-name>.number {
        width: fit-content;
        border: 2px solid #919191;
        min-width: 36px;
        height: 40px;
        display: grid;
        place-items: center;
        line-height: 1;
        text-align: center;
        border-radius: 2px;
    }

    .id-back .id-wrap .areas-names .number-name>.name {
        font-size: 14px;
        text-align: right;
    }

    .id-back .id-wrap .areas-names .number-name.allowed>.number {
        background-color: #fbe462;
    }

    .id-back .id-wrap .terms-conditions {
        margin-top: 32px;
    }

    .id-back .id-wrap .terms-conditions .terms-title {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .id-back .id-wrap .terms-conditions .terms-title img {
        width: 32px;
    }

    .id-back .id-wrap .terms-conditions .terms-data {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 8px;
        border: 1px solid #919191;
        border-radius: 3px;
        padding: 12px;
        font-size: 14px;
        text-align: right;
    }

    .id-back .id-wrap .terms-conditions .terms-data p {
        margin: 0;
    }

    .id-back .id-wrap .terms-conditions .logos-section {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 18px;
        border: 1px solid #919191;
        border-radius: 3px;
        padding: 12px;
        display: grid;
        grid-auto-flow: column;
        grid-gap: 18px;
    }

    .id-back .id-wrap .terms-conditions .logos-section img {
        width: 100%;
        max-width: 92px;
    }
</style>

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="container">
    <!---------------start id front---------------------->
    <div class="row clearfix create">
        <div class="col-6">
           <input type="number" step="any" name="width" id="cardWidth"> <span dir="rtl">الطول:</span>
        </div>
        <div class="col-6">
            <input type="number" step="any" name="height" id="cardHeight"><span dir="rtl">العرض:</span>

        </div>
        <div class="col-6">
            <button onclick="createCard()" style="    margin-left: 48%;" class="btn btn-primary btncreate" name="create">انشاء
                كارت</button>
        </div>
    </div>

    {{-- ///////////////// --}}
    <div class="row clearfix" id="card" style="display: none">
        <!---------------start id front---------------------->
        <div class="col-md-12" style="display: flex">
            <div class="col-md-6" id="parent" ondragover="allowDrop(event)">

                <div class="id-front" id="idFront" ondragover="allowDrop(event)">
                    <div class="id-wrap" id="dropzone">

                    </div>
                </div>
            </div>


            <div id="outzone" style="border-radius:10px;background: #1d1461; color: wheat;" class="col-md-6"
                ondragover="allowDrop(event)">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#elements"
                            type="button" role="tab" aria-controls="elements" aria-selected="true">العناصر</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#prop"
                            type="button" role="tab" aria-controls="prop" aria-selected="false">الخصائص</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="elements" role="tabpanel" aria-labelledby="home-tab">
                        {{--  --}}
                        <div class="row container">
                            <div class="col-3 square">
                                <div class="name-img">
                                    <div id="name" class="name">{{@$user->name}}اسم الموظف</div>

                                </div>
                            </div>
                            <div class="col-3 square">

                                <div class="job-comp">
                                    <div class="job" id="job">

                                        المهنة
                                    </div>
                                    <div class="comp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 square">

                                <div class="categories-wrap">
                                    <div id="categories" class="categories">

                                        الفعالية
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row container">
                            <div class="col-6">
                                <div id="allowed-areas" class="allowed-areas">
                                    <div id="title-area" class="title">المناطق المسموح بها :</div>
                                    <div id="area-numbers" class="area-numbers">
                                        {{-- <span class="allowed">   </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 square">

                                <div class="job-number-qr-code">
                                    <div id="job-number" class="job-number">
                                        <div class="title">الرقم الوظيفى</div>
                                        <br />
                                        <div class="value" style="text-align: center">###</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row container">
                            <div class="col-4" style="padding-left: 53px;">

                                <div id="profilepic" class="profile-img" style="display: inline-block;">
                                    <img  alt="الصوره الشخصية" />
                                </div>
                            </div>
                            <div class="col-4">

                                <div id="qr-code" class="qr-code" style="float: left; display: inline-block;">
                                    <img src='{{@$user->spqr}}' alt="qr code" />
                                </div>
                            </div>
                        </div>
                        <br />
                        {{--  --}}
                    </div>
                    <div class="tab-pane fade" id="prop" role="tabpanel" aria-labelledby="profile-tab">...</div>

                </div>


            </div>
          


            <!---------------end id front---------------------->

        </div>
        <br/>
        <div class="row" style="    margin-top: 50px;">
            <div class="col-6 offset-6">
        <button type="button" name="save" id="save">save</button>

            </div>
        </div>

    </div>
</div>

@endsection