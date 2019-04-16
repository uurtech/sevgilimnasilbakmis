<?php
session_start();
$url = "";
if(isset($_SESSION['resim'])){
    $resimVarmi = true;
    $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sevgilim Nasıl Bakmış ?</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   
    <style type="text/css">
    html{
        font-family: 'Raleway', sans-serif;
        font-weight: lighter;
    }
    html a{
        color:white;
        text-decoration: none;
    }
    html a:hover{
        color: white;
        cursor: pointer;
    }
    body{
        margin: 0px;
        width: 100%;
        padding: 0px;
        background: #FF8500;
        margin: 0 auto;
        text-align: center;
        position: relative;
    }
    .imageDisDiv{
        width: 1%;
        display: table;
        margin: 0 auto;
    }
    .image{
        height: auto;
        position: relative;
  
    }
    .image img{
        display:block;
        outline: 3px solid white;
    }
    .inner-image{
        border: 3px solid #00A9F0;
        width: 105px;
        height: 105px;
        position: absolute;
        left: 338px;
        top: 153px;
    }
    .custom-file{
        margin-top:10px;
    }
    header{
        width: 500px;
        margin:0 auto;
    }
    header span{

        float: right;
        margin-top:70px;
        margin-right: 50px;
        font-size: 26px;
    }
    footer{
        width:200px;
        margin:0 auto;
        text-align: center;
        position: relative;
        bottom: 0px;
        font-size: 12px;
        margin-top: 50px;
        padding-bottom: 15px;
        text-align: left
    
    }
    footer a{
        cursor: pointer;
        float: right;
    }
    .inner-image span {
    text-decoration:none;
    position:relative;
    }
    .inner-image span  {
        display:none;
    }
    .inner-image:hover span {
        display:block;
        position:fixed;
        z-index: 999999;
        overflow:hidden;
    }
    .inner-image span{
        border-radius: 3px;
        color: white;
    }
    .inner-image span div{
        background: #607D8B;
        width: 170px;
        padding-left: 5px;
        text-align: left
    }
    .inner-image span div l{
        width: 45px;
        float: right;
    }
    .spanback{
        width: 100px;
        height: 100px;
        background: url(spanback.png);
        position: absolute;
        top: 52px;
        left: 338px;
    }
    .spanback p{
        font-size: 65px;
    }
    /* Spinner */
    
.cssload-container{
    display: none;
}
	
.cssload-whirlpool,
.cssload-whirlpool::before,
.cssload-whirlpool::after {
	position: absolute;
	top: 50%;
	left: 50%;
	border: 1px solid rgb(204,204,204);
	border-left-color: rgb(0,0,0);
	border-radius: 974px;
		-o-border-radius: 974px;
		-ms-border-radius: 974px;
		-webkit-border-radius: 974px;
		-moz-border-radius: 974px;
}

.cssload-whirlpool {
	margin: -24px 0 0 -24px;
	height: 49px;
	width: 49px;
	animation: cssload-rotate 1150ms linear infinite;
		-o-animation: cssload-rotate 1150ms linear infinite;
		-ms-animation: cssload-rotate 1150ms linear infinite;
		-webkit-animation: cssload-rotate 1150ms linear infinite;
		-moz-animation: cssload-rotate 1150ms linear infinite;
}

.cssload-whirlpool::before {
	content: "";
	margin: -22px 0 0 -22px;
	height: 43px;
	width: 43px;
	animation: cssload-rotate 1150ms linear infinite;
		-o-animation: cssload-rotate 1150ms linear infinite;
		-ms-animation: cssload-rotate 1150ms linear infinite;
		-webkit-animation: cssload-rotate 1150ms linear infinite;
		-moz-animation: cssload-rotate 1150ms linear infinite;
}

.cssload-whirlpool::after {
	content: "";
	margin: -28px 0 0 -28px;
	height: 55px;
	width: 55px;
	animation: cssload-rotate 2300ms linear infinite;
		-o-animation: cssload-rotate 2300ms linear infinite;
		-ms-animation: cssload-rotate 2300ms linear infinite;
		-webkit-animation: cssload-rotate 2300ms linear infinite;
		-moz-animation: cssload-rotate 2300ms linear infinite;
}



@keyframes cssload-rotate {
	100% {
		transform: rotate(360deg);
	}
}

@-o-keyframes cssload-rotate {
	100% {
		-o-transform: rotate(360deg);
	}
}

@-ms-keyframes cssload-rotate {
	100% {
		-ms-transform: rotate(360deg);
	}
}

@-webkit-keyframes cssload-rotate {
	100% {
		-webkit-transform: rotate(360deg);
	}
}

@-moz-keyframes cssload-rotate {
	100% {
		-moz-transform: rotate(360deg);
	}
}
    /* Spinner */
    </style>
     <script type="text/javascript">
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


    </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.11&appId=144562976169452';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>

<header>

   <a href="/" title="Sevgilim Nasıl Bakmış">
    <img src="sevgilim-nasil-bakmis.png" alt="sevgilim nasıl bakmış"/>
    <span>Sevgilim Nasıl Bakmış?</span></a>

</header>

<center>
<!-- SevgilimNasılBakmıs -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3789690953881934"
     data-ad-slot="9493396273"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</center>
<body>

<div class="imageDisDiv">
    <div class="image">
    <?php
    if($resimVarmi){
    echo '<img src="'.$_SESSION['resim'].'"/>';
    }else{
    echo '<img src="couple.jpg" id="resim">';
    }
    ?>
        
    <div class="spanback"><p>&#x1F601</p></div>
    <div class="inner-image">
     
            <span id="tooltip-span" class="emotions">
                <div id="mutluluk">Mutluluk<l>: 100</l> </div>
                <div id="kizginlik">Kızgınlık<l>: 0</l>  </div>
                <div id="tiskinme">Tistkinme<l>: 0</l></div>
                <div id="saskinlik">Şaşkınlık<l>: 0</l> </div>
                <div id="korku">Korku<l>: 0</l></div>
                <div id="dogal">Doğal<l>: 20</l></div>
                <div id="uzgun">Üzgün<l>: 0</l></div>
            </span>
    </div>

    </div>
</div>
<div class="cssload-container">
                <div class="cssload-whirlpool"></div>
            </div>            
<form id="form1" action="post.php" method="post"  enctype="multipart/form-data">
<label class="custom-file">
        <input type="file" id="file" name="file" class="custom-file-input" accept="image/x-png,image/gif,image/jpeg">
        <span class="custom-file-control">Resmini Seç</span>
        <br/>
      </label><br/>
      <span style="font-size:12px">Detaylar için Mavi Karenin Üzerine Gelin</span>
</form>
<div class="sosyal">
<?php
if($true){

    
    echo '<div class="fb-share-button" data-href="'.$url.'" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sevgilimnasilbakmis">Paylaş</a></div>
        ';
}else{
    echo '<div class="fb-share-button" data-href="https://sevgilimnasilbakmis.com" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sevgilimnasilbakmis">Paylaş</a></div>
        ';
}
?>
</div>
</body>
<footer>
    Yapay Zeka Emotion API<br/>
    <img src="microsoft.png" alt="microsoft"/><br/>
    Coding <a href="https://ugurkazdal.com/" title="Uğur KAZDAL" target="_blank">Uğur KAZDAL</a><br/>
    Logo Credits <a href="https://www.instagram.com/eiko_jonevans/" target="_blank" title="Logo Credits">Karla Sepulveda</a><br/>
    Loading Spinner <a href="https://codepen.io/mikeambrosi/" target="_blank">Miguel Ambrosi</a><br/>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101420301-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101420301-5');
</script>

</footer>
<center>
<!-- SevgilimNasılBakmıs -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3789690953881934"
     data-ad-slot="9493396273"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
<br /><br /><br/>
<script type="text/javascript">
var tooltipSpan = document.getElementsByClassName('emotions');

//buradayız
window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
    var tools = tooltipSpan.length;
    for(var j = 0 ; j < tools; j++){
        tooltipSpan[j].style.top = (y + 20) + 'px';
        tooltipSpan[j].style.left = (x + 20) + 'px';
    }
};

$(function() {
     $("input:file").change(function (){
            if(this.files[0].size > 700000){
                alert("Lütfen 5MB'den küçük resim seçin");
                window.location = window.location;
                return false;
            }
            readURL(this);
            $(".image").css("width","100%");
            $(".image").css("height","500px");
            $(".inner-image").css("display","none");
            $(".spanback").css("display","none");
            $(".wrapper").css("display","block");
     });
  });
  function readURL(input) {
  if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#resim').attr('src', e.target.result);
                    $(".cssload-container").css("display","block");
                    $(".custom-file-control").html("Lütfen Bekleyin");
                    $("#form1").submit();
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
       
if(resim != null){
    $(".spanback").css("display","none");
    $(".inner-image").css("display","none");
    $(".cssload-container").css("display","block");
    $(".custom-file-control").html("Lütfen Bekleyin");
    $.get("analysis.php",function(data){
        var data = jQuery.parseJSON(data);
        var suratSayisi = data['emotions'].length;
        var emos = new Array(suratSayisi);
        var emojiTipler = new Array(suratSayisi);
        emojiHTML = ["&#x1F621","&#x1F922","&#x1F614","&#x1F62E","&#x1F60A","&#x1F628","&#x1F60D"]
        
        for(var i = 0; i < suratSayisi; i++){
            emojiTipler[i] = data['emotions'][i].reduce((iMax, x, i, arr) => x > arr[iMax] ? i : iMax, 0);
             emos[i] = [
                (100 * data['emotions'][i][0]).toString().substr(0,4),
                (100 * data['emotions'][i][1]).toString().substr(0,4),
                (100 * data['emotions'][i][2]).toString().substr(0,4),
                (100 * data['emotions'][i][3]).toString().substr(0,4),
                (100 * data['emotions'][i][4]).toString().substr(0,4),
                (100 * data['emotions'][i][5]).toString().substr(0,4),
                (100 * data['emotions'][i][6]).toString().substr(0,4)
                ];
            
            $(".image").append('<div style="width: 100px; height: 100px; background: url(spanback.png); position: absolute; top: '+ (data['positions'][i]['top'] - 100)+'px; left: '+data['positions'][i]['left']+'px;font-size:65px"><p>'+emojiHTML[emojiTipler[i]]+'</p></div>');
            $(".image").append('<div class="inner-image" style="border:3px solid #00A9F0;width:'+data['positions'][i]['width']+'px;height:'+data['positions'][i]['height']+'px;position:absolute;left:'+data['positions'][i]['left']+'px;top:'+data['positions'][i]['top']+'px;"> <span id="tooltip-span" class="emotions" style="top: 301px; left: 376px;"><div id="mutluluk">Mutluluk<l>: '+emos[i][6]+'</l> </div><div id="kizginlik">Kızgınlık<l>: '+emos[i][0]+'</l></div><div id="tiskinme">Tistkinme<l>: '+emos[i][1]+'</l></div><div id="saskinlik">Şaşkınlık<l>: '+emos[i][3]+'</l></div><div id="korku">Korku<l>: '+emos[i][5]+'</l></div><div id="dogal">Doğal<l>: '+emos[i][4]+'</l></div><div id="uzgun">Üzgün<l>: '+emos[i][2]+'</l></div></span></div>');
            
        }
        $(".cssload-container").css("display","none");
        $(".custom-file-control").html("Hemen Paylaş !");
    });
    //$.get( "analysis.php?resim=http://localhost:8888/sevgilimnasilbakmis/resim="+resim, function( data ) {
    //    console.log(data);
   //});
  
}

</script>

</body>
</html>