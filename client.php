// PLACER CE CODE DANS LE <head></head> DE VOTRE CLIENT.PHP
// PENSEZ A AUTORISER ALLOWPROCESS SUR VOTRE CLIENT.PHP

<link rel="stylesheet" href="https://votrelien/client/loader.css" type="text/css">
<style type="text/css">
        
    .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: #105578;
    display:block;
    margin:auto;bottom:0;animation-name:zoomeffect;animation-iteration-count:infinite;animation-direction:alternate;animation-timing-function:linear;animation-duration:.5s}@keyframes zoomeffect{from{transform:scale(1)}to{transform:scale(1.2)}
}
.loader::before{
    display:block;
    position:fixed;
    width:100%;
    height:100%;
    z-index:90000
}
#isload{
    display:block;
    border:6px solid #fff;
    border-radius:90px;
    width:50px;
    height:50px;
    animation:rotar 1s;
    animation-timing-function:linear;
    animation-iteration-count:infinite;
    border-bottom:6px solid #8bc1ee;
    position:absolute;margin:0;left:0
    ;right:0;top:0;bottom:0;margin:auto}@keyframes rotar{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}
    </style>
    
        <script>
if(typeof(window.FlashExternalnterface) === "undefined") {        window.FlashExternalInterface = {};    }
window.FlashExternalInterface.logLoginStep = function(b) {
    if (b == "client.init.start") {
        document.getElementById('loader_bar').style = "width:25%;";
    }
    if (b == "client.init.core.init") {
    document.getElementById('loader_bar').style = "width:40%;";
    }
    if (b == "client.init.auth.ok") {
    document.getElementById('loader_bar').style = "width:50%;";
    }
    if (b == "client.init.localization.loaded") {
    document.getElementById('loader_bar').style = "width:100%;";
    }
    if (b === "client.init.config.loaded") {
                setTimeout(function() {
                      document.getElementById('loader_bar').style = "width:100%;";
                }, 3000);
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 5000);
    }
}
</script>

<div id="loader-wrapper" >

    <div class="loaderdeps">
         <div id="loaderdeps">
            <img id="backh-logo" style="position:absolute;top:-50%;" src="lien de votre logo">
            <div id="loaderpre">
                <div class="percent" id="loader_bar"></div>
            </div>
        </div>
        <div id="efect-client"></div>
    <div class="loader-section section-top"></div>
    <div class="loader-section section-bottom"></div>
    </div>
</div>

<div class="loader">
<div id="isload">
</div> 
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
