<style>
.circle{
    width: 700px;
    height: 700px;
    position: relative;
    float: left;
}
.colorP1, .colorP2, .colorP3{
    width: 50px;
    height: 50px;
    background-color: #fff;
    border: 1px solid #000000;
    margin: 20px;
    position: relative;
    float: left;
}
    .container {
        top:10px;
        left: 10px;
        width: 600px;
        height: 600px;
        overflow: hidden;
        border-radius: 50%;
        position: absolute;
        border: 1px solid #000000;
        z-index: 1;
    }
    .dragP1{
        position: absolute;
        width: 15px;
        height: 15px;
        border: 4px solid #FFFFFF;
        border-radius: 11px;
        z-index: 999999;
        top: 110px;
        left: 350px;
    }
    .c2 {
        top: 50px;
        left: 50px;
        width: 520px;
        height: 520px;
        z-index: 9;
    }
    .c3 {
        top: 90px;
        left: 90px;
        width: 440px;
        height: 440px;
        z-index: 99;
    }
    .c4 {
        top: 130px;
        left: 130px;
        width: 360px;
        height: 360px;
        z-index: 999;
    }
    .c5 {
        top: 170px;
        left: 170px;
        width: 280px;
        height: 280px;
        z-index: 9999;
    }
    .c6 {
        top: 210px;
        left: 210px;
        width: 200px;
        height: 200px;
        z-index: 99999;
        background: #FFFFFF;
    }
    .sector {
        width: 50%;
        height: 50%;
        position: absolute;
        left: 50%;
        top: 0;
        transform-origin: left bottom;
        background: #730B0E;/*'красный 1#730B0E.2#910F13.5#EC1B24.6#EF3544.7#F26065'*/
        transform: skewY(120deg);

    }
    .c2 .r1 {
        background: #910F13;
    }
    .c3 .r1 {
        background: #EC1B24;
    }
    .c4 .r1 {
        background: #EF3544;
    }
    .c5 .r1 {
        background: #F26065;
    }
    .r2 {
        transform: rotate(30deg) skewY(120deg);
        background: #731316;
    /*'красно-орнж, #731316, #92191F, #EE2C38, #F2564D, #F47769*/

    }
    .c2 .r2 {
        background: #92191F;
    }
    .c3 .r2 {
        background: #EE2C38;
    }
    .c4 .r2 {
        background: #F2564D;
    }
    .c5 .r2 {
        background: #F47769;
    }
    .r3 {
        transform: rotate(60deg) skewY(120deg);
        background: #6A2E07;
    /*"оранж, #6A2E07. #94430B. #F47115. #F58535. #F79B5C"*/
    }
    .c2 .r3 {
        background: #94430B;
    }
    .c3 .r3 {
        background: #F47115;
    }
    .c4 .r3 {
        background: #F58535;
    }
    .c5 .r3 {
        background: #F79B5C;
    }
    .r4 {
        transform: rotate(90deg) skewY(120deg);
        background: #804E06;
        /*оранж-жел #804E06. #955D07 #F79C0E #F9B134 #FABD5F*/
    }
    .c2 .r4 {
        background: #955D07;
    }
    .c3 .r4 {
        background: #F79C0E;
    }
    .c4 .r4 {
        background: #F9B134;
    }
    .c5 .r4 {
        background: #FABD5F;
    }
    .r5 {
        transform: rotate(120deg) skewY(120deg);
        background: #827B00;
        /*жел #827B00 #989000 #FFF100 #FFF432 #FFF765*/
    }
    .c2 .r5 {
        background: #989000;
    }
    .c3 .r5 {
        background: #FFF100;
    }
    .c4 .r5 {
        background: #FFF432;
    }
    .c5 .r5 {
        background: #FFF765;
    }
    .r6 {
        transform: rotate(150deg) skewY(120deg);
        background: #346415;
        /*жел-зел #346415 #3D751A #65C42F #7FCD51 #A5DB74*/
    }
    .c2 .r6 {
        background: #3D751A;
    }
    .c3 .r6 {
        background: #65C42F;
    }
    .c4 .r6 {
        background: #7FCD51;
    }
    .c5 .r6 {
        background: #A5DB74;
    }
    .r7 {
        transform: rotate(180deg) skewY(120deg);
        background: #00552D;
        /*зел #00552D #006436 #00A65F #32B76C #65C888*/
    }
    .c2 .r7 {
        background: #006436;
    }
    .c3 .r7 {
        background: #00A65F;
    }
    .c4 .r7 {
        background: #32B76C;
    }
    .c5 .r7 {
        background: #65C888;
    }
    .r8 {
        transform: rotate(210deg) skewY(120deg);
        background: #00555A;
        /*зел-син #00555A #00656A #00AAAF #32BABC #65CBC4*/
    }
    .c2 .r8 {
        background: #00656A;
    }
    .c3 .r8 {
        background: #00AAAF;
    }
    .c4 .r8 {
        background: #32BABC;
    }
    .c5 .r8 {
        background: #65CBC4;
    }
    .r9 {
        transform: rotate(240deg) skewY(120deg);
        background: #0C2F5B;
        /*син #0C2F5B #0F386B #1B62B7 #3871C1 #6285CC*/
    }
    .c2 .r9 {
        background: #0F386B;
    }
    .c3 .r9 {
        background: #1B62B7;
    }
    .c4 .r9 {
        background: #3871C1;
    }
    .c5 .r9 {
        background: #6285CC;
    }
    .r10 {
        transform: rotate(270deg) skewY(120deg);
        background: #121C48;
        /*син-феол #121C48 #162257 #293D9B #4346A4 #535BB2*/
    }
    .c2 .r10 {
        background: #162257;
    }
    .c3 .r10 {
        background: #293D9B;
    }
    .c4 .r10 {
        background: #4346A4;
    }
    .c5 .r10 {
        background: #535BB2;
    }
    .r11 {
        transform: rotate(300deg) skewY(120deg);
        background: #291142;
        /*феол #291142 #311550 #542790 #6D399E #7D5AB3*/
    }
    .c2 .r11 {
        background: #311550;
    }
    .c3 .r11 {
        background: #542790;
    }
    .c4 .r11 {
        background: #6D399E;
    }
    .c5 .r11 {
        background: #7D5AB3;
    }
    .r12 {
        transform: rotate(330deg) skewY(120deg);
        background: #530840;
        /*феол-кр #530840 #610A4E #A0138E #A83AA3 #BD65B9*/
    }
    .c2 .r12 {
        background: #610A4E;
    }
    .c3 .r12 {
        background: #A0138E;
    }
    .c4 .r12 {
        background: #A83AA3;
    }
    .c5 .r12 {
        background: #BD65B9;
    }
</style>
<div class="circle">
    <div class="container">
        <div class="sector"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c2">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c3">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c4">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c5">
        <div class="sector r1"></div>
        <div class="sector r2"></div>
        <div class="sector r3"></div>
        <div class="sector r4"></div>
        <div class="sector r5"></div>
        <div class="sector r6"></div>
        <div class="sector r7"></div>
        <div class="sector r8"></div>
        <div class="sector r9"></div>
        <div class="sector r10"></div>
        <div class="sector r11"></div>
        <div class="sector r12"></div>
    </div>
    <div class="container c6"></div>
    <div class="dragP1" id="dragP1"></div>
</div>
<div class="colorP1" id="colorP1"></div>
<div class="colorP2" id="colorP2"></div>
<div class="colorP3" id="colorP3"></div>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
        $("#dragP1").draggable();
        $(".sector").droppable({
//            hoverClass: "hover",
            drop: function(event, ui) {
                $(this).each(function(){
                    console.log(this.visible);
                });
               }
        });
    });
</script>