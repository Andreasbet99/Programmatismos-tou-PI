<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="Shopping%20Cart_files/bootstrap.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="Shopping%20Cart_files/bootstrap.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
    body {
 
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: white;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: white;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #66afe9;
            color:white;
        }
    </style>
    
</head>
<body>
<h3><a href="https://anbetenagkarav.000webhostapp.com/">go back</a></h3>
    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
                            <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=1">

                            <div class="product">
                                <img src="1.jpg" class="img-responsive">
                                <h5 class="text-info">The Piper At The Gates Of Dawn(1967) </h5>
                                <h5 class="text-danger">30$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="The Piper At The Gates Of Dawn(1967)">
                                <input type="hidden" name="hidden_price" value="30">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=2">

                            <div class="product">
                                <img src="2.jpg" class="img-responsive">
                                <h5 class="text-info">A Saucerful Of Secrets(1968)</h5>
                                <h5 class="text-danger">60$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="A Saucerful Of Secrets(1968)">
                                <input type="hidden" name="hidden_price" value="60">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=3">

                            <div class="product">
                                <img src="3.jpg" class="img-responsive">
                                <h5 class="text-info">Music From The Film More(1969)</h5>
                                <h5 class="text-danger">20$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Music From The Film More(1969)">
                                <input type="hidden" name="hidden_price" value="20">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=4">

                            <div class="product">
                                <img src="4.jpg" class="img-responsive">
                                <h5 class="text-info">Ummagumma(1969)</h5>
                                <h5 class="text-danger">25$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Ummagumma(1969)">
                                <input type="hidden" name="hidden_price" value="25">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=5">

                            <div class="product">
                                <img src="5.jpeg" class="img-responsive">
                                <h5 class="text-info">Atom Heart Mother(1970) </h5>
                                <h5 class="text-danger">40$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Atom Heart Mother(1970)">
                                <input type="hidden" name="hidden_price" value="40">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=6">

                            <div class="product">
                                <img src="6.jpeg" class="img-responsive">
                                <h5 class="text-info">Meddle(1971)</h5>
                                <h5 class="text-danger">30$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Meddle(1971">
                                <input type="hidden" name="hidden_price" value="30">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=7">

                            <div class="product">
                                <img src="7.jpeg" class="img-responsive">
                                <h5 class="text-info">Obscured By Clouds(1972)</h5>
                                <h5 class="text-danger">50$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Obscured By Clouds(1972)">
                                <input type="hidden" name="hidden_price" value="50">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=8">

                            <div class="product">
                                <img src="8.jpg" class="img-responsive">
                                <h5 class="text-info">The Dark Side Of The Moon(1973) </h5>
                                <h5 class="text-danger">60$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="The Dark Side Of The Moon(1973)">
                                <input type="hidden" name="hidden_price" value="60">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=9">

                            <div class="product">
                                <img src="9.jpg" class="img-responsive">
                                <h5 class="text-info">Wish You Were Here(1975) </h5>
                                <h5 class="text-danger">60$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Wish You Were Here(1975)">
                                <input type="hidden" name="hidden_price" value="60">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                        <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&amp;id=10">

                            <div class="product">
                                <img src="10.jpg" class="img-responsive">
                                <h5 class="text-info">Animals(1977)</h5>
                                <h5 class="text-danger">50$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="Animals(1977)">
                                <input type="hidden" name="hidden_price" value="50">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                            </div>
                        </form>
                    </div>
                                       
                    
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tbody><tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

                                
                                    </body></table>
        </div>

    </div>


<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="./Shopping Cart_files/footer-powered-by-000webhost-white2.webp" alt="www.000webhost.com"></a></div><script>function getCookie(e){for(var t=e+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],newList=["Powerful and Easy-To-Use Control Panel.","1-Click Auto Installer and 24/7 Live Support.","Free Domain, Email and SSL Bundle.","5x faster WordPress performance","Weekly Backups and Fast Response Time."];if(0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 768px) {.web-hosting-90-off-image-wrapper {position: absolute;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} .web-hosting-90-off-image-wrapper {padding: 0 5%}} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{border: 0; border-radius: 3px; background-color: #ff123a !important; padding: 15px 55px !important; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">TRANSFER NOW</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 10px; padding-top: 5px; background-image: url(https://cdn.000webhost.com/000webhost/promotions/springsale/mountains-neon-background.jpg); background-color: #000000; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-color: #ff123a; border-width: 8px;"),notification.className="notice notice-error is-dismissible",(hostingerLogo=hostingerLogo[0]).setAttribute("src","https://cdn.000webhost.com/000webhost/promotions/springsale/logo-hostinger-white.svg"),hostingerLogo.setAttribute("style","float: none !important; height: auto; max-width: 100%; margin: 40px 20px 10px 30px;");var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.remove();var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Fast & Secure Web Hosting. <br>Limited time offer: get an SSL certificate for FREE",paragraph.setAttribute("style",'max-width: 600px; margin-left: 30px; font-family: "Open Sans", sans-serif; font-size: 22px; font-weight: 600;');var list=notification.getElementsByTagName("UL")[0];list.setAttribute("style","max-width: 675px;");for(var listElements=list.getElementsByTagName("LI"),i=0;i<newList.length;i++)listElements[i].setAttribute("style","color:#ffffff; list-style-type: disc; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 1.5;"),listElements[i].innerHTML=newList[i];listElements[listElements.length-1].remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/springsale/web-hosting-90-off.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];!function(){var t=document.querySelectorAll("body.wp-admin")[0];function e(){var e=document.createElement("iframe");e.id="hgr-promo-widget",e.setAttribute("src","https://www.hostinger.com/widgets/bottom-banner-sale/000_wp_admin"),e.setAttribute("allowfullscreen",!0),e.setAttribute("frameborder",0),e.style.cssText="z-index: 2147483000 !important;position: fixed !important;bottom: 0; width: 100%;!important; left: 0!important;",e.style.opacity=0,e.onload=function(){iFrameResize({},"#hgr-promo-widget"),e.style.opacity=1},t.insertAdjacentElement("afterend",e)}if(window.iFrameResize)e();else{var n=document.createElement("script");n.type="text/javascript",t.insertAdjacentElement("afterend",n),n.onload=e,n.src="https://unpkg.com/iframe-resizer@3.6.3/js/iframeResizer.min.js"}}()}</script>
</body></html>