<?php
session_start();


require_once "conn.php";
$sql = "SELECT  upi FROM notice WHERE id='1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$upi1 = $row['upi'];
$a = array("$upi1");
$random_keys = array_rand($a, 1);
$upiid = $a[$random_keys];
$am = $_GET['am'];
$user= $_GET['user'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $utr = $_POST['utr'];
    $upi = $_POST['upi'];
    $query1 = "SELECT * FROM `recharge` WHERE utr='$utr' ";
    $result1 = mysqli_query($conn, $query1);
    $utrcount = mysqli_num_rows($result1);
    function random_strings($length_of_string)
    {

        // String of all alphanumeric character
        $str_result = '0123456789AXYZ012345678901234567890123456789';

        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(
            str_shuffle($str_result),
            0,
            $length_of_string
        );
    }

    $pre = "GreenWSEK";
    $r = random_strings(19);


    $rand = $pre . $r;

    if ($utrcount == 0) {


        $sql1 = "INSERT INTO recharge (username, recharge,status,upi,utr,rand) VALUES ('$user', '$amount','unpaid','$upi','$utr','$rand')";

        if ($conn->query($sql1) == TRUE) {
            header("location: /#/rechargerecord");
        } else {
           echo("Error description: " . $conn -> error);
           echo strlen($user).gettype($user).$user;
        }
    } else {
        echo "<script>
     document.addEventListener('DOMContentLoaded', function(event) { 
     
                 document.getElementById('copied').innerHTML='UTR Already Submited';
                 x=document.getElementById('copied');
           x.className = 'show';
        setTimeout(function () { x.className = x.className.replace('show', ''); }, 3000);
 
});
                
     
                </script>";
    }

    $conn->close();
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Ek pay</title>
    <link href="/css/app.46643acf.css" rel="preload" as="style">
    <link href="/css/chunk-vendors.cf06751b.css" rel="preload" as="style">

  
    <link href="/css/chunk-vendors.cf06751b.css" rel="stylesheet">
    <link href="/css/app.46643acf.css" rel="stylesheet">
    <script>
        function pageRedirect() {
            window.location.replace("/#/recharge");
        }
        setTimeout("pageRedirect()", 300000);
    </script>

    <style>
        A {
            text-decoration: none;
        }

        html,
        body {
            width: 100%;
            height: 100%
        }

        body {
            font-family: "Microsoft YaHei", Helvetica, Arial, sans-serif !important;
        }

        body * {
            box-sizing: border-box
        }

        .setp {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            display: none
        }

        .setp .box {
            margin: 0 auto;
            min-width: 300px;
            max-width: 520px
        }

        .setp .box input {
            border: 2px solid #333;
            border-radius: 4px;
            height: 36px;
            width: 100%;
            box-sizing: border-box;
            padding: 0 10px;
            text-align: left;
            margin-bottom: 10px
        }

        .setp .box input::placeholder {
            color: #ccc
        }

        .setp .box input::-webkit-input-placeholder {
            color: #ccc
        }

        .setp .box input::-ms-input-placeholder {
            color: #ccc
        }

      

        .btn {
            width: 80%;
            max-width: 320px;
            height: 42px;
            line-height: 42px;
            display: block;
            text-align: center;
            color: #fff;
            padding: 0;
            margin: 10px auto 0;
        }

        .btn.sub {
            background: #528FF0
        }

        .btn.can {
            background: #7d7d7d
        }

        .btn:hover {
            color: #fff;
            text-decoration: none
        }

        .btn-copy {
            margin-left: 8px;
            display: inline-block;
            background: #528FF0;
            color: #fff;
            padding: 8px;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
        
        }

        .btn-copy:hover {
            color: #fff;
            text-decoration: none
        }

        h5 {
            overflow: hidden
        }

        p:not(.level-2) {
            font-size: 16px;
            color: #528FF0;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .level-2 {
            color: #999;
            font-size: 12px;
            margin-top: 8px
        }

        .navbar {
            min-height: 0
        }

        .navbar .tit {
            margin: 0;
            color: #fff;
            background: #528FF0;
            padding: 15px 0
        }

        .container-fluid label.text-info,
        .container-fluid label.text-danger {
            padding-left: 8px
        }

        .container-fluid .info-box,
        .container-fluid .info-tit {
            border: 1px solid #528FF0;
            border-radius: 8px;
            padding: 4px 12px;
        }

        .container-fluid .info-tit {
            border-color: transparent
        }

        .container-fluid .info-box h5,
        .container-fluid .info-tit h5 {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .icon-warn {
            font-size: 12px;
            border-radius: 50%;
            background: #ff4605;
            color: #fff;
            display: inline-block;
            width: 14px;
            height: 14px;
            text-align: center;
            line-height: 14px;
            margin-right: 6px;
            font-style: unset;
        }

        .img-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 20px
        }

        .img-row img {
            width: 48%;
            max-width: 320px;
            height: auto;
            border: 2px solid #528FF0;
        }

        #show-big-img {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 99;
            left: 0;
            top: 0;
            padding-top: 20px;
            display: none;
            overflow-y: auto;
            background: rgba(0, 0, 0, 0.5)
        }

        #show-big-img img {
            display: block;
            width: 90%;
            margin: 0 auto;
            max-width: 750px;
            height: auto
        }

        .btn-close {
            position: absolute;
            right: 30px;
            top: 30px;
            font-size: 16px;
            color: #fff;
            border: 2px solid #fff;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border-radius: 50%;
        }

        h2 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        h2 span {
            font-weight: bold;
            font-size: 18px;
        }

        #hide-img img {
            width: 100%;
            height: 100%
        }

        .fsize-16 {
            font-size: 16px;
            font-weight: 500
        }

        #order_time {
            position: absolute;
            right: 6px;
            top: 14px;
            color: #fff
        }
    </style>
    <style>
        #copied {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 50px;
            font-size: 17px;
        }



        #copied.show {
            visibility: visible;
            margin-bottom: 205px;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        ul,
        li,
        ol {
            list-style: none
        }

        #model-menu {
            margin-top: 12px;
            padding-left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #74a5f3;
            border-radius: 6px;
            overflow: hidden
        }

        #model-menu li {
            cursor: pointer;
            -webkit-user-select: none;
            width: 80px;
            height: 36px;
            line-height: 34px;
            background: #fff;
            color: #333;
            text-align: center
        }

        #model-menu li:first-child {
            border-right: 0
        }

        #model-menu li.active {
            background: #528FF0;
            color: #fff
        }
    </style>
    <style>
        .amount-title {
            text-align: center;
            margin-top: 10px;
            font-weight: 800;
            line-height: 36px;
            font-size: 20px
        }

        .amount-title span {
            color: #ff0000;
            font-size: 36px;
        }

        .upi-info {
            padding: 12px 0;
            border-top: 1px solid;
            border-bottom: 1px solid;
            border-color: #528FF0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            line-height: 20px;
            font-size: 16px;
        }

        .upi-info span {
            color: #ff0000
        }

        .upi-payment-step {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 16px;
        }

        .upi-payment-step span {
            font-weight: 800;
            color: #333
        }

        .upi-payment-step a {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            margin-left: 10px;
            border: 1px solid #74a5f3;
            background: #528FF0;
            color: #fff;
            border-radius: 6px;
            height: 32px;
        }

        .upi-payment-step input {
            flex: 1;
            height: 32px;
            border: 2px solid #74a5f3;
            margin-left: 10px;
            border-radius: 6px;
            padding-left: 8px;
        }

        .enter-ref-warn-box {
            text-align: center;
            color: #ff0000
        }

        .enter-ref-warn-box .enter-ref-warn {
            width: 80%;
            margin: 22px auto 22px;
            min-width: 300px;
        }
        /*! CSS Used from: https://gateway.ekpays.com/static/assets/css/bootstrap.min.css */
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
@media print{
*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
.btn,.btn-primary:active,.btn:active{background-image:none;}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;touch-action:manipulation;cursor:pointer;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:active:focus,.btn:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
.btn:focus,.btn:hover{color:#333;text-decoration:none;}
.btn:active{outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4;}
.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40;}
.btn-primary:active,.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74;}
.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40;}
.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px;}
.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear;}
.fade.in{opacity:1;}
.modal{overflow:hidden;}
.close{line-height:1;}
.close{font-weight:700;}
.modal{right:0;bottom:0;left:0;}
.close{float:right;font-size:21px;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20);}
.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.5;filter:alpha(opacity=50);}
button.close{padding:0;cursor:pointer;background:0 0;border:0;-webkit-appearance:none;}
.modal-content{background-clip:padding-box;}
.modal{display:none;position:fixed;top:0;z-index:1050;-webkit-overflow-scrolling:touch;outline:0;}
.modal.fade .modal-dialog{-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%);-webkit-transition:-webkit-transform .3s ease-out;-moz-transition:-moz-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;}
.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0);}
.modal-open .modal{overflow-x:hidden;overflow-y:auto;}
.modal-dialog{position:relative;width:auto;margin:10px;}
.modal-content{position:relative;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5);outline:0;}
.modal-header{padding:15px;border-bottom:1px solid #e5e5e5;}
.modal-header .close{margin-top:-2px;}
.modal-title{margin:0;line-height:1.42857143;}
.modal-body{position:relative;padding:15px;}
.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5;}
@media (min-width:768px){
.modal-dialog{width:600px;margin:30px auto;}
.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5);}
}
.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before{content:" ";display:table;}
.modal-footer:after,.modal-header:after{clear:both;}
/*! CSS Used from: Embedded */
body *{box-sizing:border-box;}
.btn{width:80%;max-width:320px;height:42px;line-height:42px;display:block;text-align:center;color:#fff;padding:0;margin:10px auto 0;}
.btn:hover{color:#fff;text-decoration:none;}
.fsize-16{font-size:16px;font-weight:500;}
    </style>
</head>

<body class="">
    <div class="setp" id="setp-1" style="display: block;">
        <div class="navbar navbar-default" style="margin-bottom: 0;position: relative">
            <h4 style="display: flex; justify-content: center;" class="text-center tit">Payment Information<span id="btn" style="display: flex;
    position: fixed;
    right: 13px;"></span></h4>

        </div>

        <p id="teach" style="text-align: center;font-size: 12px;color: #333;margin-bottom: -5px;text-decoration: underline;">
            <span style="font-size: 14px;display: inline-block;margin-right: 6px;color: #fff;background: #ff0000;height: 16px;width: 16px;border-radius: 50%;line-height: 16px;text-align: center;">?</span>
            How to pay?
        </p>
        <h3 class="amount-title">
            Payment Amount
            <br>
            <span>₹&nbsp;<?php echo $am; ?></span>
        </h3>

        <div class="container-fluid highlight" style="
    margin: 10px;
">
            <div style="margin: 0 auto;max-width: 520px">


<div class="bootbox modal fade in" id="dialog" tabindex="-1" role="dialog" style="display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="bootbox-close-button close" data-dismiss="modal" onclick="dialogclose()" aria-hidden="true">×</button><h4 class="modal-title">NOTICE</h4></div><div class="modal-body"><div class="bootbox-body"><span style="font-size: 18px;font-weight: 500">
    1.Please do not save the current UPI account for next use! Be sure to confirm that the UPI account you have obtained is the latest account.<br>
    <br>
    2.If you fail to comply with this agreement and cause financial losses that cannot be recovered, the platform will not be responsible.<br>
    <br>
    3.If you have any questions, please contact customer service.
</span></div></div><div class="modal-footer"><button data-bb-handler="success" type="button" onclick="dialogclose()" class="btn btn-sm btn-primary fsize-16">Submit(<span id="span_time">10</span>s)</button></div></div></div></div>
                <div class="payment-model" data-model="upi">


                    <div style="display: flex; justify-content: center;">
                        <div id="qrcode" style="width:100px; display:none; height:100px; margin-top:15px;"></div>
                    </div><br>
                    <div class="upi-info" style="display: none; justify-content: center;">
                        <a href="upi://pay?pa=<?php echo $upiid; ?>&pn=TcsClubs&am=<?php echo $am; ?>&cu=INR&tn=Recharge" class="btn-copy" style="text-align: center;font-size:16px" target="_blank">
                            Pay Now
                        </a>
                    </div>
                    <div class="upi-info">
                        <div>
                            Pay to UPI:
6263369462577@paytm <br>
                            <span id="id" style="color: #ff0000">
                                <?php echo $upiid; ?>
                            </span>
                        </div>
                        <a class="btn-copy" data-clipboard-text="<?php echo $upiid; ?>" onclick="copyToClipboard()" style="text-align: center;width: 60px;font-size:16px">copy</a>
                    </div>
                    <div class="upi-payment-step">
                        <span style="min-width: 52px;font-weight: 800;color:#333">STEP 1:</span>
                        <div id="copied">UPI ID Copied</div>
                        <div style="margin-left:10px">
                            click on the above button to complete payment or copy upi id
                        </div>
                    </div>
                    <form id="payment" method="post" action="">
                        <div class="upi-payment-step">
                            <span style="min-width: 52px">STEP 2:</span>

                            <input type="text" id="upi-input" value="" name="utr" placeholder="ENTER REF NO.:2188xxxxxxxx" maxlength="12" oninput="this.value=this.value.replace(/[^\d]/g,'')" onchange="this.value=this.value.replace(/[^\d]/g,'')">
                            <input id="text" type="hidden" name="upi" value="<?php echo $upiid; ?>" />
                            <input id="text" type="hidden" name="amount" value="<?php echo $am; ?>" />
                        </div>

                    </form>
                    <input id="text" type="hidden" value="" style="width:80%" />
                    <div id="error" style="display:none;color:red;line-height: 26px; font-size: 16px; text-align: center;max-width: 90%;margin:10px auto 0">Invalid UTR Number!</div>
                    <div class="enter-ref-warn-box">
                        <div class="enter-ref-warn">
                            You must fill in the correct Ref No.,then click the button below to submit,and wait for it to arrive!
                        </div>
                        <div class="btns" style="margin-top: 0;margin-bottom:20px">
                            <a class="btn sub" style="width: 200px" onclick="submit()">Confirm REF NO.</a>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="text-left">
                        <p class="level-2" style="margin-bottom:0;color:#333;">Ref No. Example</p>
                        <p class="level-2 red">Click on the picture to view details</p>
                        <div class="img-row">
                            <img onclick="dis('/trova/example1.png')" src="/trova/small1.png">
                            <img onclick="dis('/trova/example2.png')" src="/trova/small2.png">
                        </div>
                        <div class="img-row">
                            <img onclick="dis('/trova/example3.png')" src="/trova/small3.png">
                            <img onclick="dis('/trova/example4.png')" src="/trova/small4.png">
                        </div>
                        <div class="img-row">
                            <img onclick="dis('/trova/example5.png')" src="/trova/small5.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
    </div>
    <div id="show-big-img" style="display: none;">
        <img id="big-img" src="/trova/example1.png">
        <button onclick="closeo()"class="btn-close" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"> <span aria-hidden="true">&times;</span></button>
    </div>
    <div style="width:0;height:0" id="hide-img">
        <img src="/trova/example1.png">
        <img src="/trova/example2.png">
        <img src="/trova/example3.png">
        <img src="/trova/example4.png">
        <img src="/trova/example5.png">
    </div>
    <script type="text/javascript">
        let timerOn = true;

        function timer(remaining) {
            var m = Math.floor(remaining / 60);
            var s = remaining % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
            document.getElementById('btn').innerHTML = m + ':' + s;
            remaining -= 1;

            if (remaining >= 0 && timerOn) {
                setTimeout(function() {
                    timer(remaining);
                }, 1000);
                return;
            }

            if (!timerOn) {
                // Do validate stuff here
                return;
            }

            // Do timeout stuff here

        }
        timer(1800);
        
        let timer1On = true;

        function timer1(remaining1) {
            var m = Math.floor(remaining1 / 60);
            var s = remaining1 % 60;

            m = m < 10 ? '0' + m : m;
            s = s < 10 ?  s : s;
            document.getElementById('span_time').innerHTML = s;
            remaining1 -= 1;

            if (remaining1 >= 0 && timer1On) {
                setTimeout(function() {
                    timer1(remaining1);
                }, 1000);
                return;
            }else{
                document.getElementById("dialog").style.className="bootbox modal";
            document.getElementById("dialog").style.display="none";
            }

            if (!timer1On) {
                // Do validate stuff here
                return;
            }

            // Do timeout stuff here

        }
        timer1(10);
       

       

        function dis(sr) {
            document.getElementById("show-big-img").style.display = "block";
            document.getElementById("big-img").src = sr;
        }
      function closeo() {
            document.getElementById("show-big-img").style.display = "none";
            console.log("close");
        };


        function submit() {
            if (document.getElementById("upi-input").value.length < 12) {
                document.getElementById("error").style.display = "";
                setTimeout(function error() {
                    document.getElementById("error").style.display = "none";
                }, 2000);

            } else {
                document.getElementById("payment").submit();
            }
        }
        function dialogclose(text){
             document.getElementById("dialog").style.className="bootbox modal";
            document.getElementById("dialog").style.display="none";
        }

        function copyToClipboard(text) {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = document.getElementById("id").innerHTML.trim();
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            var x = document.getElementById("copied");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>
</body>



</html>
