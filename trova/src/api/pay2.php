<?php

require_once "conn.php";
$sql = "SELECT  upi1 FROM notice WHERE id='1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$upi1=$row[upi1];
$a=array("$upi1");
$random_keys=array_rand($a,1);
$upiid= $a[$random_keys];
$am=$_GET['am'];
$user= $_GET['user'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
    return substr(str_shuffle($str_result), 
                       0, $length_of_string);
}

$pre="MGEK";
$r=random_strings(22);

  
$rand=$pre.$r;

if($utrcount==0){
    

$sql1 = "INSERT INTO recharge (username, recharge,status,upi,utr,rand) VALUES ('$user', '$amount','unpaid','$upi','$utr','$rand')";
                
$conn->query($sql1);

if ($conn->query($sql) == TRUE) {
    header("location:  /#/rechargerecord");
} else {
  header("location:  /#/rechargerecord");
}
              
                





}else{
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
<!DOCTYPE html>
<html style="font-size: 650%;" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }

        .vjs-fluid {
            padding-top: 56.25%
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="https://api.tpays.in/app.png">
    <title>Pays</title>
    <script>// setInterval(function () { debugger }, 100);</script>
    <link href="./Pays_files/chunk-libs.aac02ba1.css" rel="stylesheet">
    <link href="./Pays_files/app.30ec9887.css" rel="stylesheet">
    <script charset="utf-8" src="./Pays_files/chunk-22e8f128.8e8a2796.js.download"></script>
    </script>
    <link rel="stylesheet" type="text/css" href="./Pays_files/chunk-6e8d5c6e.0fc0ae11.css">
    <style type="text/css">
        @font-face {
            font-family: Roboto;
            src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
        }
         #copied{
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 12px;
            padding: 10px;
            position: fixed;
            z-index: 1;
            left: 55%;
            bottom: 50px;
            font-size: 14px;
        }

       

        #copied.show {
            visibility: visible;
            margin-bottom: 310px;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

    </style>
</head>

<body style="background-color: white;">
    <div>
        <div data-v-5f23d35a="" class="app-container">
            <div data-v-cbb7dde6="" data-v-5f23d35a="" class="app-container">
                <!---->
                <div data-v-400f7872="" data-v-cbb7dde6=""><span data-v-400f7872=""
                        class="container-row bg-color"></span>
                    <div data-v-400f7872="" class="container-row top-box">
                        <div data-v-400f7872="" onclick="window.location.href='recharge'" class="container-row top-box-btn"><img data-v-400f7872=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAeCAMAAAASJ24jAAAANlBMVEVHcEwbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxsbGxutgMUJAAAAEXRSTlMA6t7NHIhz9i1dSwQNm648ocu+ZZ8AAABsSURBVBjTjdDLEsAQDAXQUOpVNP//s01WImqG3blmyA2APM2m2YgoXclN2JOvsnW5yfYZ92zjhhM5aMfhTEbhzu7DkZ2FA1lUcMpg6f0sG4V5gPXLdaizRFc9S7xa2C6RS/9LXk5AJ1MA1dQPI/kIDZxwT7wAAAAASUVORK5CYII="
                                class="top-box-btn-icon">
                            <div data-v-400f7872="" class="top-box-btn-title">Back</div>
                        </div>
                        <div data-v-400f7872="" class="container-row top-box-logo-box"><img data-v-400f7872=""
                                src="./Pays_files/tlogo.e9040472.png" class="top-box-logo-img"></div>
                    </div><span data-v-400f7872="" class="container-row split-top-box"></span>
                    <div data-v-400f7872="" class="container-column info-box">
                        <div data-v-400f7872="" class="container-row info-title-box">
                            <div data-v-400f7872="" class="info-title-box-title">UPI Information</div>
                            <div data-v-400f7872="" class="container-row info-title-right-box">
                                <div data-v-400f7872="" onclick="popup()" class="info-title-right-box-title">How it works ?</div>
                            </div>
                        </div>
                        <div data-v-400f7872="" class="container-column info-amount-box">
                            <div data-v-400f7872="" class="container-row info-amount-title-box">
                                <div data-v-400f7872="" class="info-amount-title-box-text">Payment Amount</div>
                            </div>
                            <div data-v-400f7872="" class="container-row info-amount-value-box">
                                <div data-v-400f7872="" class="info-amount-value-box-text">₹ <?php echo $am;?></div>
                            </div>
                        </div>
                    </div>
                    <div id="copied">UPI ID Copied</div>
                    <div data-v-400f7872="" class="container-column method-box">
                        <div data-v-400f7872="" class="container-column method-row-box-select">
                            <div data-v-400f7872="" class="container-row method-row-title-box">
                                <div data-v-400f7872="" class="method-row-title-box-title">Payment Via UPI</div><img
                                    data-v-400f7872=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnBAMAAAB+jUwGAAAALVBMVEVHcEwGWv0FWv0FWv0FWv0GWv0GWv0FWv0FWv0FWv0GWv0GWv0GWv0EWvwEWv3t0LoKAAAADnRSTlMADBtC4H65zsVS7ZQuXsPJ7aYAAAEgSURBVCjPY2AAA8bZKeuWZE9kQAbMee/AIBlZrO5dqpGAkGneu2K4GOO+V0FgBlPUu40wQfV3gTDpuOcKEBaPnw9cE5yt8kIAYbzEE7BSxrpGJDsZ+wpBFPcTAWTXibwGkefeoDiZ550BkKwLgDhn5iSIaFwD0OGvwLp56969qwULSj1mYGB7ClbXB/JlE4jJ+oyBQe4R2Flgr4Odw/ROgGFeAkiwDxIgDSB23gSGfSB7eCFi796CbdrAkAdyATtU8DlI0C6BwQ9kjh5U8B2Y48CwDuQiO5ggSJvcAoZ3IB3zYIITgBy+B9hVYjUTq+1Y3YnVR1j9jjWUsIYn1pBnsMMWR1hjE2u8Y00h2NMS1lSHPX0yMPfBUnIzgTSPnjsAD1HOFUnUszgAAAAASUVORK5CYII="
                                    class="method-row-title-box-icon">
                            </div>
                            <div data-v-400f7872="" class="container-column method-row-upi-box">
                                <div data-v-400f7872="" class="container-row method-row-upi-title-box">
                                    <div data-v-400f7872="" class="method-row-upi-title-box-title">1.Copy UPI
                                        Information.</div>
                                </div>
                                <div data-v-400f7872="" class="container-row method-row-upi-value-box">
                                    <div data-v-400f7872="" id="idup" class="method-row-upi-value-box-title">
                                        <?php echo $upiid;?></div><button data-v-400f7872="" onclick="copyToClipboard(idup)" 
                                        class="container-row method-row-upi-box-btn">
                                        <div data-v-400f7872="" class="method-row-upi-box-btn-title">Copy</div>
                                    </button>
                                </div>
                            </div>
                            <div data-v-400f7872="" class="container-column method-row-prompt-box">
                                <div data-v-400f7872="" class="method-row-prompt-box-title">2.Transfer the amount you
                                    want to recharge to us by UPI transfer.</div>
                                <div data-v-400f7872="" class="method-row-prompt-box-title">3.Please enter Ref No. to
                                    complete the recharge.</div>
                            </div>
                            
                            <form id="payment" method="post" action="">
                            <div data-v-400f7872="" class="container-row input-box-input-box">
                                <input data-v-400f7872="" id="upi-input" value="" name="utr" autocomplete="off"
                                    placeholder="REF NO." class="input-box-input-box-input">
                                    <input id="text" type="hidden" name="upi" value="<?php echo $upiid;?>"  />
<input id="text" type="hidden" name="amount" value="<?php echo $am;?>"  />
                                    
                                    <button data-v-400f7872="" id="myBtn"
                                    disabled="disabled" onclick="submit()" class="container-row input-box-btn">
                                    <div data-v-400f7872="" class="input-box-btn-title">Submit</div>
                                </button></div>
                                </form>
                                
                                
                            <div data-v-400f7872="" class="container-row input-prompt-box">
                                <div data-v-400f7872="" class="input-prompt-box-title">Please enter the REF NO/Reference
                                    NO/UTR (12-digit number) of your transfer and we will finish your recharge as soon
                                    as possible.</div>
                            </div>
                        </div>
                    </div>
                    <div data-v-400f7872="" class="container-row btn-box"><button data-v-400f7872="" onclick="window.location.href='upi://pay?pa=<?php echo $upiid;?>&pn=ShaktiMall&am=<?php echo $am;?>&cu=INR&tn=Recharge'"
                            class="container-row btn-box-btn">
                            <div data-v-400f7872="" class="btn-box-btn-title">Click &amp; Choose your app to pay ₹
                                <?php echo $am;?>.00</div>
                        </button></div>
                    <div data-v-400f7872="" class="container-row explain-box">
                        <div data-v-400f7872="" class="explain-box-title">100% Secure Payments Powered by Pays</div>
                    </div><span data-v-400f7872="" class="container-row split-bottom-box"></span>
                    <div data-v-242dfcd5="" data-v-400f7872="" id="pop" style="display:;
">
                        <div data-v-242dfcd5="" class="mint-popup"
                            style="background: transparent;z-index: 2001;/* display: none; */">
                            <div data-v-242dfcd5="" class="container-column content-box">
                                <div data-v-242dfcd5="" class="container-column white-box">
                                    <div data-v-242dfcd5="" class="container-row title-box">
                                        <div data-v-242dfcd5="" class="title-box-title">*After the payment is
                                            successful, you <b data-v-242dfcd5="" class="title-box-title-color">must</b>
                                            coming back here to <b data-v-242dfcd5=""
                                                class="title-box-title-color">submit</b> the Ref/UTR No.(<b
                                                data-v-242dfcd5="" class="title-box-title-color">12 digits</b>) Only
                                            then your money be reached to the account.</div>
                                    </div>
                                    <div data-v-242dfcd5="" class="container-row img-box"><img data-v-242dfcd5=""
                                            src="./Pays_files/img_explain_icon.299a53ae.png" class="img-box-icon"></div>
                                    <div data-v-242dfcd5="" class="container-row explainBtn-box" style="display: none;">
                                        <div data-v-242dfcd5="" class="explainBtn-box-title">EXPLAIN:Vidio Description
                                            »»</div>
                                    </div>
                                    <div data-v-242dfcd5="" class="container-row btn-box"><button data-v-242dfcd5="" onclick="popclose()"
                                            class="container-row btn-box-btn">
                                            <div data-v-242dfcd5="" class="btn-box-btn-title">Confirm</div>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                        <div class="v-modal" style="z-index: 2000;"></div>
                    </div>
                    <div data-v-65ae7136="" data-v-400f7872="" class="mint-popup"
                        style="display: none; background: transparent;">
                        <div data-v-65ae7136="" class="container-column content-box">
                            <div data-v-65ae7136="" class="container-column white-box">
                                <!---->
                            </div>
                            <div data-v-65ae7136="" class="container-row close-btn"><img data-v-65ae7136=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAqCAQAAABvygHQAAAB3klEQVRIx7XXu2pqQRTG8UmRJiJYpIyPIDZHxCYhpW/h+/gGamHhE6QJlmLeQhARSRNSCNrY/E6RbU68zGw9YU85l/+eWetblx1CYihp6xpb2ICNhbGutlL4n+HRyFZsbI08XgdsmWSH53o6WqoqKqpaOnrm2epE6zJg2QDs9DWju5r6dmCgnIesm4Ghh9zPPxiCmXpq27M1Vp4uNtSTFdae48gdpu6vsv+9KXZnserWeHF3tU7uvGB9YgRlM0yvR2bYKWZHLjPA6rqHHxlhhcGhLnG5e7JTt24OXIYfujXB8ODAq6VaEtn06e1gZojJv4Bkd6hL7/iIYzWtsTzS7Y4seI3QP3sogo2t6mP0lYm2nAZkHJtcYasUtDG//D7+JN8wRzvoope03A+Amo+UtfXQDcboRB3S+AnJQ4agg3GwOFDX6bZvUD4yU/wi2KCaVOQelosMQRWbACo5sfOFzUWGoAIFQQt5fiGOSkuqdlZSjTxJpcR/crdsZh2rs3vxx8N0D2icnW2mwjSWUKKHEyv7hBJJfen7RFa/U18kSS9TlvvGvkeT9Nly8uYzjsywS6/RcnKu8Llxe2UZPC58hZTogpqJQtqeghq0glrJgpregtrzgn4kCvvl+e3P2V8QRrylwK2IIgAAAABJRU5ErkJggg==">
                            </div>
                        </div>
                    </div>
                    <div data-v-0162a2fb="" data-v-400f7872="">
                        <div data-v-0162a2fb="" class="mint-popup" style="display: none; background: transparent;">
                            <div data-v-0162a2fb="" class="container-column content-box">
                                <div data-v-0162a2fb="" class="container-column white-box">
                                    <div data-v-0162a2fb="" class="container-row title-box">
                                        <div data-v-0162a2fb="" class="title-box-title">Payment Result</div>
                                    </div>
                                    <div data-v-0162a2fb="" class="container-column result-box">
                                        <div data-v-0162a2fb="" class="container-row result-icon-box"><img
                                                data-v-0162a2fb="" src="./Pays_files/result_icon.5cda4fc1.png"
                                                class="result-icon-box-icon"></div>
                                        <div data-v-0162a2fb="" class="container-row result-box-title-box">
                                            <div data-v-0162a2fb="" class="result-box-title">Trading in
                                                progress...Congratulation</div>
                                        </div>
                                    </div>
                                    <div data-v-0162a2fb="" class="container-row info-amount-box"
                                        style="display: none;">
                                        <div data-v-0162a2fb="" class="info-amount-box-text">₹ 0.00</div>
                                    </div>
                                    <div data-v-0162a2fb="" class="container-row info-order-box" style="display: none;">
                                        <div data-v-0162a2fb="" class="info-order-box-text">Order
                                            No:pay_YItnhTK3VUzdPQNNiju</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-c716f4ac="" data-v-400f7872="">
                        <div data-v-c716f4ac="" class="mint-popup" style="display: none; background: transparent;">
                            <div data-v-c716f4ac="" class="container-column content-box">
                                <div data-v-c716f4ac="" class="container-column white-box">
                                    <div data-v-c716f4ac="" class="container-row title-box">
                                        <div data-v-c716f4ac="" class="title-box-text">Prompt</div>
                                    </div>
                                    <div data-v-c716f4ac="" class="container-row explain-box">
                                        <div data-v-c716f4ac="" class="explain-box-text">Whether the payment is
                                            successful!</div>
                                    </div>
                                    <div data-v-c716f4ac="" class="container-column btn-box"><button data-v-c716f4ac=""
                                            class="container-row btn-box-btn">
                                            <div data-v-c716f4ac="" class="btn-box-btn-title">Yes</div>
                                        </button><button data-v-c716f4ac="" class="container-row btn-box-cancel">
                                            <div data-v-c716f4ac="" class="btn-box-cancel-title">No</div>
                                        </button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-52591bf1="" data-v-400f7872="">
                        <div data-v-52591bf1="" class="mint-popup" style="display: none; background: transparent;">
                            <div data-v-52591bf1="" class="container-column content-box">
                                <div data-v-52591bf1="" class="container-column white-box">
                                    <div data-v-52591bf1="" class="container-column method-box">
                                        <div data-v-52591bf1="" class="container-row method-item-box">
                                            <div data-v-52591bf1="" class="container-row method-item-left-box"><img
                                                    data-v-52591bf1=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAE5QTFRFR3BM9/f39vb26enp0tLS+/v78PDwq6ur/v7+/f39+fn5////2fL4FLbwEyNkS8nyp7PJjuD2AgpULkB5Z3Gby9Lec4apjJu3Rl+RTlV/oyWXaAAAAAt0Uk5TAIFwKRG9Qwbu25zriartAAAB50lEQVRIx62XC7uCIAyG84IMmYAgXv7/Hz3zmJdSE6mVaD29fMAGW4/Hr40vr1vM1kLZNyyUHX+W50VaMiEECMHKtMjzS3ZUy7OEAcjFAFiSEXrFFaXYUE9WlMUH0RHLEiEPTSTZqSj1WTCQJwbsX/SQy1MhP5hID2dKXALyo0GyJ2l+l9xE7gXTS47I9F2S1kXIABPFC0kDzZgMMpa9uJPzBMJASDi/P9DdYDkvZbCVK0iRJsJBsc4yxIVHzqSYYfKGsSUKeAF3QCj4naA5CJ+Pa4o1nq4r5/MUvTHGS0ktPXv6iKirGhFratYe2ALOzuiUUoNHp1TrhwFbZeqqqmpNDV16JsUE8hVsrBtsC92gVOccNrYjUBOo/8n6FXxsQeNVj6YnSdcTaGioiFU13vQCwnSGvCg2jWrGAauuV6R7DO4VW2Wt63rb9sqYQdlzcKfoGuOd8q010lA33YUiW8CWPNdbp2h2jRsVqwmstiDbBUDnyIHS9I5Wxg/KdRK1xvGid63rXQAsIff0FIx3RNh8hcvT5sS6sf/fgjx6W8Vu5MftoyP2sOJfH4/xB3J0CohNOt+kOXJmGpZY+W9S+RfFQ3y5MqWtmAIpuiT7ogic0WfZCeFl52mhG11b87vlfNS/gLU9sj93xVrgWKlrSQAAAABJRU5ErkJggg=="
                                                    class="method-item-box-icon">
                                                <div data-v-52591bf1="" class="method-item-box-title">Paytm</div>
                                            </div><img data-v-52591bf1=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsBAMAAADsqkcyAAAALVBMVEVHcEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMwJ9l4JAAAADnRSTlMAU4j26Qck0EhsEqq3eXMXAUoAAAELSURBVCjPY2CAANam7c4m1RoBDCiAY/M7MLBuQBZlrHtXJLY0KlH93XMBhCjbuSfXIKxcvzcJcGHhJ1NhzEg/QxiT6d0uhM7V7xSgLL2XyPbMewRV/FgAxVF2EOVyD1EdC+Gz2U1AFeZ8DHIMz2sGNLDvAEiPF7rwEpApdRPQhTmfAy1+EoAuzODXwMD9FkOU4d4GhuBnmMJ5pgx9BZjC7C8Y9BQwhZkeMZwTwBRmfMNQl4ApzPacwW8BpjDXEwY7TGczsD7GJYzDEBxW4nAgDu/g8DyOoMIRsFiigRUYDTgiDVcU40gQOJIPjsSGK2myYk/IuJI9jkyCK0vhyIC4sisocx93NqmBZ24AiKxwwBrLdpUAAAAASUVORK5CYII="
                                                class="method-item-box-right">
                                        </div>
                                        <div data-v-52591bf1="" class="container-row method-item-box">
                                            <div data-v-52591bf1="" class="container-row method-item-left-box"><img
                                                    data-v-52591bf1=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAIdQTFRFR3BM+vr23t/d9/n69PTz5+zxg7T5qqqqqqqq5Obm/Pz8ts72j7r49fb3wNXyxtnzhLL4baXyU5X6SY7+////S5L+RI79Kn79OIb9mMH53ez6IHr6UZX7DnH3Xp74c6n5v9j3/Scf/sgm+XNtAKUzf9et/NGmRMWB+aOkCbBi+3seUbc6srYcf6IfRQAAABN0Uk5TAPsdynth+wMHLODI4Jp6mc+k925QLEMAAANCSURBVEjHrZbZeuMgDIXrJHbj7C0YCYONm7XL+7/fCAxeYjuTfjO6SHrRP+dICKGXl/8br534LbV08TzbMm08wXosjbfz1SqKVvO3tzh9AnXYbDHnIWSBQh92M4c+xtJtxNsoIcsEwvtb+gB13KKL8VyJLGPEwvtuknRyc94LWWQ6c4FwcKLjXMzvogTPWVERj5HO5j2Xg2jALAPcDclRrnEq7Acju0OSwIHPntOaxPgOJC4dclRTnTUoowCd9khrdMUnnQavjGXq0DNL4DBB51S3Xq0iE5RmCxI34xNOm9PQwpFQzlqSwC2fcKq7Tm2ofQccFfQ1ZUHSk07yYYbu9Fuv2isybLKkks4nnbJQVcGE92oL68F03ClDCtEtqj0RKNMabJvmeqL4jIJTLI0xJaLugQyFb5+mpp8fLk7BKUj3Axp7nBCwb8C5506f19PHNThFyaWRPKcJAIAMkGgA6oG1B+t2i76DVqgpgbooJC9R5pUWlUGGUpLipq6OB6/Hb/v/LuqaktWyUBU3Ea94pDlHYPYHO6Ctx/F4tAYVCjD1lCIwr3JeodFKkGueWHkCkxHQQKYtaPvUFSeSCIZoXimeF1awC9ZWf8hilHOjEufUWQUqTMIrqlFFcpInit3nGP2cbza5ilFaXIMDDdCBVxwKJMWMjCB2QH8cl/P563K5fRXGz1MH0lfCcxmRSUWSyp7j+q4BLl9nG7e6pjRKTVXaw8ckjxIpkZxkKITAfXOOvuXyy+12qexfWtn7QKPU9QwgZUomyS4Jog4Tq9/kUZj8neYW9mJQrnQWQiiTLqeulXPavxTU3DKxRm2KARxcZOe0j9n7BMI6ZYtmdtyPjlyh50QHFC6YSprRMRhWtVPR0/OcQNz2ptxs6JSN6JGgnPUH66L/mrK7CBx0Mhw8AbJg2QSHrqSvE4+OVhN6dIYyHT5XcVvTSc7EI+9jSJOcjvskbvHoSe47bdQYjnJ+eYjq0x/jAGQ8vXbQupIUI3okx9YT60pYkMoCRF+M2kVhslhOcbXmMt2XdPuaggg7jkWyT5/Y5ma7QykgBGqzXvxlCQykXTv3680mSTab9f6ptXNi0V3+Ykn+/Wr9L8v8U/EHkiGmX82TX4MAAAAASUVORK5CYII="
                                                    class="method-item-box-icon">
                                                <div data-v-52591bf1="" class="method-item-box-title">Google Pay</div>
                                            </div><img data-v-52591bf1=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsBAMAAADsqkcyAAAALVBMVEVHcEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMwJ9l4JAAAADnRSTlMAU4j26Qck0EhsEqq3eXMXAUoAAAELSURBVCjPY2CAANam7c4m1RoBDCiAY/M7MLBuQBZlrHtXJLY0KlH93XMBhCjbuSfXIKxcvzcJcGHhJ1NhzEg/QxiT6d0uhM7V7xSgLL2XyPbMewRV/FgAxVF2EOVyD1EdC+Gz2U1AFeZ8DHIMz2sGNLDvAEiPF7rwEpApdRPQhTmfAy1+EoAuzODXwMD9FkOU4d4GhuBnmMJ5pgx9BZjC7C8Y9BQwhZkeMZwTwBRmfMNQl4ApzPacwW8BpjDXEwY7TGczsD7GJYzDEBxW4nAgDu/g8DyOoMIRsFiigRUYDTgiDVcU40gQOJIPjsSGK2myYk/IuJI9jkyCK0vhyIC4sisocx93NqmBZ24AiKxwwBrLdpUAAAAASUVORK5CYII="
                                                class="method-item-box-right">
                                        </div>
                                        <div data-v-52591bf1="" class="container-row method-item-box"
                                            style="display: none;">
                                            <div data-v-52591bf1="" class="container-row method-item-left-box"><img
                                                    data-v-52591bf1=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4BAMAAABaqCYtAAAFFmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDggNzkuMTY0MDM2LCAyMDE5LzA4LzEzLTAxOjA2OjU3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIyLTA0LTI1VDE5OjI2OjEwKzA4OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wNC0yNVQxOToyNjoyNSswODowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMi0wNC0yNVQxOToyNjoyNSswODowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDphNjJjMjFhMi0xZGNiLTUxNDEtOTgzMy01MDM5YzIyNmRlZTkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6YTYyYzIxYTItMWRjYi01MTQxLTk4MzMtNTAzOWMyMjZkZWU5IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6YTYyYzIxYTItMWRjYi01MTQxLTk4MzMtNTAzOWMyMjZkZWU5Ij4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDphNjJjMjFhMi0xZGNiLTUxNDEtOTgzMy01MDM5YzIyNmRlZTkiIHN0RXZ0OndoZW49IjIwMjItMDQtMjVUMTk6MjY6MTArMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChXaW5kb3dzKSIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7Unr3nAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGFBMVEVHcExnOrdnOrdnOrdoObdnObdnOrdnOrcYY2W+AAAAB3RSTlMA3XmdIEbCqyhTkQAAAXJJREFUOMu1VT1vgzAQvTbQnRTVK1EqeUWJqqwgUXVN1SqsRVWTmSTgv98A9fnZEKtL3hAFnu/87hMixuuyiuqn1SeNEXwI1aN+yUbcQjHm2XVuxO6UhR/kZspBCk4PgxTBZGsc58Ob50IyG7Oh0L6M+zqzDVXDx8D0YE4bv60r9YseXMElP58oMGSDcjpswW8v6R5ij+nOPCSgdVARKkuvxLQltOH/R/vK7kWOKdR+HtcdVhRcfoWWN4PrNUodac5RGLxpRSVYBkVRgOWZxbb7jKooihLa7YVWt4H0iP4iabJ58JHiOtn6yJqUjxS3IFsTSj0RijcJEshNn2NpilsC+d63K5NnqHxK4XqdABlDSzd/1ZRwWoHcS0mhdbfYYKcLuzCCuhmF1qy/K1B7dJraCiV2xsEiE3K72pDDbJfTZDOxZ5hMcdFw5BLH3tY7XwprYYRCjcCrpquGi9hdbzji2f8Wo3+l+pexd437PwCTn45fVzHmvWGSyhMAAAAASUVORK5CYII="
                                                    class="method-item-box-icon">
                                                <div data-v-52591bf1="" class="method-item-box-title">PhonePe</div>
                                            </div><img data-v-52591bf1=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsBAMAAADsqkcyAAAALVBMVEVHcEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMwJ9l4JAAAADnRSTlMAU4j26Qck0EhsEqq3eXMXAUoAAAELSURBVCjPY2CAANam7c4m1RoBDCiAY/M7MLBuQBZlrHtXJLY0KlH93XMBhCjbuSfXIKxcvzcJcGHhJ1NhzEg/QxiT6d0uhM7V7xSgLL2XyPbMewRV/FgAxVF2EOVyD1EdC+Gz2U1AFeZ8DHIMz2sGNLDvAEiPF7rwEpApdRPQhTmfAy1+EoAuzODXwMD9FkOU4d4GhuBnmMJ5pgx9BZjC7C8Y9BQwhZkeMZwTwBRmfMNQl4ApzPacwW8BpjDXEwY7TGczsD7GJYzDEBxW4nAgDu/g8DyOoMIRsFiigRUYDTgiDVcU40gQOJIPjsSGK2myYk/IuJI9jkyCK0vhyIC4sisocx93NqmBZ24AiKxwwBrLdpUAAAAASUVORK5CYII="
                                                class="method-item-box-right">
                                        </div>
                                        <div data-v-52591bf1="" class="container-row method-item-box">
                                            <div data-v-52591bf1="" class="container-row method-item-left-box"><img
                                                    data-v-52591bf1=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAGvmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDggNzkuMTY0MDM2LCAyMDE5LzA4LzEzLTAxOjA2OjU3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIxLTExLTExVDIwOjIzOjEzKzA4OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wNC0yNVQxOToyNTowMyswODowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMi0wNC0yNVQxOToyNTowMyswODowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpmYTNmNmZmNi1lMzY3LWEwNDQtODk2My04ZTc4M2E3YzlhYjUiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDozNjllYzIyZi1hOTZhLTVkNDYtOTE2Ni01OWYzM2VmYTIzYTgiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDphNDk3MGM2Yi03NTE4LTdlNGMtODk1Ni01MzE1YWI2ODkxYzMiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmE0OTcwYzZiLTc1MTgtN2U0Yy04OTU2LTUzMTVhYjY4OTFjMyIgc3RFdnQ6d2hlbj0iMjAyMS0xMS0xMVQyMDoyMzoxMyswODowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKFdpbmRvd3MpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoxZmNjOTRlNS0wY2I1LTQyNDYtYjg4YS1lZDYwZDQxN2M4YTYiIHN0RXZ0OndoZW49IjIwMjEtMTEtMTFUMjA6NTQ6MDgrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZmEzZjZmZjYtZTM2Ny1hMDQ0LTg5NjMtOGU3ODNhN2M5YWI1IiBzdEV2dDp3aGVuPSIyMDIyLTA0LTI1VDE5OjI1OjAzKzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+izlXQgAAAAlwSFlzAAALEwAACxMBAJqcGAAAANVQTFRF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"
                                                    class="method-item-box-icon">
                                                <div data-v-52591bf1="" class="method-item-box-title">MobiKwik</div>
                                            </div><img data-v-52591bf1=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsBAMAAADsqkcyAAAALVBMVEVHcEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMwJ9l4JAAAADnRSTlMAU4j26Qck0EhsEqq3eXMXAUoAAAELSURBVCjPY2CAANam7c4m1RoBDCiAY/M7MLBuQBZlrHtXJLY0KlH93XMBhCjbuSfXIKxcvzcJcGHhJ1NhzEg/QxiT6d0uhM7V7xSgLL2XyPbMewRV/FgAxVF2EOVyD1EdC+Gz2U1AFeZ8DHIMz2sGNLDvAEiPF7rwEpApdRPQhTmfAy1+EoAuzODXwMD9FkOU4d4GhuBnmMJ5pgx9BZjC7C8Y9BQwhZkeMZwTwBRmfMNQl4ApzPacwW8BpjDXEwY7TGczsD7GJYzDEBxW4nAgDu/g8DyOoMIRsFiigRUYDTgiDVcU40gQOJIPjsSGK2myYk/IuJI9jkyCK0vhyIC4sisocx93NqmBZ24AiKxwwBrLdpUAAAAASUVORK5CYII="
                                                class="method-item-box-right">
                                        </div>
                                    </div>
                                    <div data-v-52591bf1="" class="container-row cancel-box">
                                        <div data-v-52591bf1="" class="container-row cancel-box-btn">
                                            <div data-v-52591bf1="" class="cancel-box-title">Cancel</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <div data-v-cbb7dde6="" style="display: none;">Please do not modify the information</div>
            </div>
        </div>
    </div>
    <div class="mint-indicator" style="display: none;">
        <div class="mint-indicator-wrapper" style="padding: 15px;"><span class="mint-indicator-spin">
                <div class="mint-spinner-snake"
                    style="border-top-color: rgb(204, 204, 204); border-left-color: rgb(204, 204, 204); border-bottom-color: rgb(204, 204, 204); height: 32px; width: 32px;">
                </div>
            </span> <span class="mint-indicator-text" style="display: none;"></span></div>
        <div class="mint-indicator-mask"></div>
    </div>
    <script>
    function popup() {
   document.getElementById("pop").style.display="";
}
   function popclose() {
   document.getElementById("pop").style.display="none";
}
 function submit(){
    
        document.getElementById("payment").submit();
    
   }
  function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value =text.innerHTML;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
var x = document.getElementById("copied");
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}
function check(){
   if(document.getElementById("upi-input").value.length=='12'){
         document.getElementById("myBtn").disabled = false;
        console.log("correct utr");
    }else{
         document.getElementById("myBtn").disabled = true;
          console.log("incorrect utr");
    } 
}
setInterval(check, 1000); 



</script>
</body>

</html>