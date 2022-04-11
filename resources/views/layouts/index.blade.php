<!DOCTYPE html>
    <meta charset="utf-8">
    <title>Directcore - Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <head>
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/css/elementor.post.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/css/style.min.css') }}">   
 <link rel="stylesheet" href="{{ asset('css/css/extendify-utilities.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/venobox.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/nivo-slider.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/animate.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/slick.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/owl.transitions.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/meanmenu.min.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/theme-default.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/widget.min.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/unittest.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}"> 
 <link rel="stylesheet" href="{{ asset('css/css/elementor.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/frontend.legacy.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/frontend.css') }}">
 <link rel="stylesheet" href="{{ asset('css/css/post-8.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/widget.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/all.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/shims.min.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/post-2088.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/post-1087.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/post-1019.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/post-1035.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/css/post-1053.css') }}"> 


 <link rel="stylesheet" href="{{ asset('css/css/em-breadcrumb.css') }}">


 <style id="itsoft-breadcrumb-inline-css" type="text/css">  
 
                        .logo a{
                            margin-top:0px
                        }
                        .mean-container .mean-bar::before{
                            content:"Directcore"						
                        }								
                   
    
        </style>
 <link rel="stylesheet" href="{{ asset('css/css/fontawesome.min.css') }}"> 
 <link rel="stylesheet" href="{{ asset('css/css/solid.min.css') }}">
 <script type="text/javascript" src="{{ asset('js/js/jquery.min.js') }}"></script>  
 <script type="text/javascript" src="{{ asset('js/js/js.js') }}"></script> 
 <script type="text/javascript">function setREVStartSize(e){
    //window.requestAnimationFrame(function() {				 
        window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
        window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
        try {								
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
            e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
            if(e.layout==="fullscreen" || e.l==="fullscreen") 						
                newh = Math.max(e.mh,window.RSIH);					
            else{					
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
                e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                    
                var nl = new Array(e.rl.length),
                    ix = 0,						
                    sl;					
                e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
                for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                sl = nl[0];									
                for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
                var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
                newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el!==null && el) el.style.height = newh+"px";					
            el = document.getElementById(e.c+"_wrapper");
            if (el!==null && el) {
                el.style.height = newh+"px";
                el.style.display = "block";
            }
        } catch(e){
            console.log("Failure at Presize of Slider:" + e)
        }					   
    //});
  };</script>
   <style id="itsoft_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
                            body,p						
                        {font-display:swap;}
                            h1, h2, h3, h4, h5, h6					
                        {font-display:swap;}
                            h1				
                        {font-display:swap;}
                            h2				
                        {font-display:swap;}
                            h3			
                        {font-display:swap;}
                            h4				
                        {font-display:swap;}
                            h5					
                        {font-display:swap;}
                            h6					
                        {font-display:swap;}
                            .itsoft_menu > ul > li > a,
                            .heading_style_2 .itsoft_menu > ul > li > a,
                            .heading_style_3 .itsoft_menu > ul > li > a,
                            .heading_style_4 .itsoft_menu > ul > li > a,
                            .heading_style_3.tr_btn  .itsoft_menu > ul > li > a,
                            .heading_style_3.tr_white_btn .itsoft_menu > ul > li > a,
                            .heading_style_5 .itsoft_menu > ul > li > a
                        {font-display:swap;}
                        .itsoft_nav_area.prefix,
                        .hbg2
                        {background-color:#ffffff;}
                            .itsoft_menu ul .sub-menu li a
                        {font-display:swap;}.breadcumb-area,.breadcumb-blog-area{background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-image:url('https://wp.dreamitsolution.net/itsoft-elementor/wp-content/uploads/2020/10/brd-img.jpg');background-size:cover;}.brpt h2,.breadcumb-inner h2{color:#ffffff;}
          .breadcumb-inner ul,     
          .breadcumb-inner li,
          .breadcumb-inner li a      
         {color:#ffffff;font-display:swap;}.breadcumb-inner li:nth-last-child(-n+1){color:#ffffff;}
                        .single-video::before
                        {background-color:rgba(0,0,0,0.3);}</style>
                       
                    </head>

<body class="page-template page-template-page-templates page-template-template-default page-template-page-templatestemplate-default-php page page-id-2088 elementor-default elementor-kit-8 elementor-page elementor-page-2088 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="mobile">

 
    <div class="wrapper">
        @include('layouts.header')

        @yield('content')

    

    <!--==========================
    Footer hh
  ============================-->
  @include('layouts.callus')
  @include('layouts.partners')
  @include('layouts.footer')
   
    </div>


</body>

<!-- JS Files -->

<script type="text/javascript" src="{{ asset('js/js/animations.min.css') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/index.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/modernizr.custom.79639.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.directional-hover.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/modernizr-2.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/imagesloaded.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.meanmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.scrollUp.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.nivo.slider.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/headroom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/headline.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/wow.js') }}"></script>                    
<script type="text/javascript" src="{{ asset('js/js/jquery-scrolltofixed-min.js') }}"></script>   
<script type="text/javascript" src="{{ asset('js/js/venobox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/waypoints.min.js') }}"></script>                                             
<script type="text/javascript" src="{{ asset('js/js/navigation.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/skip-link-focus-fix.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/theme.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/forms.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/runtime.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/frontend-modules.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/waypoints.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/core.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/share-link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/dialog.min.js') }}"></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.2","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/wp.dreamitsolution.net\/itsoft-elementor\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1019,"title":"About%20Us%20%E2%80%93%20IT-Soft","excerpt":"","featuredImage":false}};
    </script>
<script type="text/javascript" src="{{ asset('js/js/frontend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/js/preloaded-modules.min.js') }}"></script>



</html>









