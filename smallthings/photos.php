<?php 
require_once("includes/config.php");
include("includes/header.php");
?>

  <script>

$(document).ready(function(){ 
       $("html, body").animate({scrollTop: 800}, 0);

});

</script>
<script type="text/template" id="itemTemplate">
{{#images}}
	{{#medium}}
	<div class="item medium">
	{{/medium}}
	{{#small}}
	<div class="item small">
	{{/small}}
    {{#large}}
    <div class="item large">
    {{/large}}
    <div class="singleimg-masonry">
				<div class="shadow-imgs">
				<img src="{{id}}"></img>	
				</div> 
		 		</div> 
				
	</div>

{{/images}}
</script>

<style>
nav .rowOrig ul li a{
	color:red;
	}
.ui-menu-bottom-line{
	background-color:red;
	display:none;
}
.item { 
-webkit-transition: left .4s ease-in-out, top .4s ease-in-out .4s;
-moz-transition: left .4s ease-in-out, top .4s ease-in-out .4s;
-ms-transition: left .4s ease-in-out, top .4s ease-in-out .4s;
-o-transition: left .4s ease-in-out, top .4s ease-in-out .4s;
transition: left .4s ease-in-out, top .4s ease-in-out .4s;
-webkit-transition: top .4s ease-in-out, top .4s ease-in-out .4s;
-moz-transition: top .4s ease-in-out, top .4s ease-in-out .4s;
-ms-transition: top.4s ease-in-out, top .4s ease-in-out .4s;
-o-transition: top .4s ease-in-out, top .4s ease-in-out .4s;
transition: top .4s ease-in-out, top .4s ease-in-out .4s;
background:white;
padding: 0px;
background-color: #fff;
float: left;
border-radius: 5px;
border: 1px solid #fff;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.2);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.2);
box-shadow: 0 1px 3px rgba(0,0,0,0.2);
position: absolute;
float: left;
}
.item.medium { 
width: 444px;
height: 292px;
margin-right: 12px;
margin-bottom:12px;
max-width:100%;
}	
.item.large { 
width: 292px;
height: 292px;
margin-right: 12px;
margin-bottom:12px;
}  
.item.small { 
width: 140px;
height:140px;
margin-right: 12px;
margin-bottom:12px;
max-width: 100%;
max-height:140px;
}
.shadow-imgs img {
background: none;
border: 0px;
margin-top: 0;
max-width: 100%;
max-height:292px;
}

#masonryContainer {
  margin: 0 auto;
  width: auto;
    
}

#but-home a{ 
	color: #414042;
	}
#but-home a:hover{
	color:red;
}
#but-stories a:hover {
	color:#d5d5d5;
	}
 
.singleimg-masonry {
float: left;
position: relative;
}
.shadow-imgs {
float: left;
border-radius: 0px;
background-color: #fff;
}
.shadow-imgs img{
	float: left;
	border-radius: 5px;
}
h2{
color:#f64c3f;
font-size:13px;
text-align:left;
padding:0px;
padding-top: 3%;
margin:0px;
	}
#firstNav{
	margin-top: -400px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
	}
#but-stories a{ 
	color: #414042;
	}
#but-home a:hover, #but-stories a:hover{
	color:#008cba;
}
#but-home a, #but-stories a{
	color:#d5d5d5;
}

#but-photos a, #but-photos a:hover {
	color:#414042;
	}
#container{
	padding-top:100px;
	}

.wrap {
 max-width: 100%;
 min-width:100%;
} 

/*
/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-width : 320px) 
and (max-width : 480px) {
/* Styles */
#container{
	width: 100%;
    clear: both;
  padding-top:20px;
	} 
#wrap{
  width: 100%;
}
.item.medium { 
width: 444px;
height: 292px;
margin-right: 12px;
margin-bottom:12px;
max-width:95%;
}	
/*
.item.small, .item.medium{
  width:;
  max-width:;
  margin-left:0%;
  margin-bottom:;
  }
.item.medium { 
width: 370px;
height: 243px;
margin-right: 12px;
margin-bottom:12px;

}	
.item.small { 
width: 115px;
height:115px;
margin-right: 12px;
margin-bottom:12px;
max-width: 100%;
max-height:140px;
}
*/

.fi-list{
color:#d5d5d5;
display:none;
}
} 

</style>
<link rel="stylesheet" href="css/ipadstyles.css">

<body>

<header>
<a href="#"><i class="fi-list size-36"></i></a>
		
	</header>
    
    
    
<?php include("includes/intro.php");?>
  

<nav id="navbar" class="my-sticky-element">
		<div class="header clearfix">
		<div class="tb_wrap">
			<div class="v_align clearfix">
				<div class="buttons clearfix">
					<div class="btn_wrapper regular button_hover">
						<span class="ss-cell" id="but-home"><a href="index.php#section-1">HOME</a></span>
					</div>
					<div class="btn_wrapper regular button_hover">
						<span class="ss-tablet" id="but-stories"><a href="stories.php#section-1">STORIES</a></span>
					</div>
                  <div class="btn_wrapper regular active button_hover">
						<span class="ss-tablet" id="but-photos"><a href="photos.php#section-1">PHOTOS</a></span>
					</div>
					</div> 	<!-- END #table-menu-outer -->
				</div>	<!-- END .buttons -->
				<!-- END .tb_wrap.v_align -->
            <div class="rowOrig">
			<div class="navCont">
           
            
            </div>
            </div>
            </div>
		</div>	<!-- END .tb_wrap -->
		
</nav>









<div class="wrap">		
		<div id="container">
          
            <div id="masonryContainer"></div>
      
			  		   
 <?php include("includes/form.php");?>			   


      
<?php include("includes/footer.php");?>
				     

  
  
</div>

</div>
<script>
  
$(document).ready(function(){
var $container = $('#masonryContainer');
// initialize
$container.masonry({
  columnWidth: 152,
  itemSelector: '.item',
  isFitWidth: true,
  isAnimated: true,
  isAnimated: !Modernizr.csstransitions
});

});

$(window).load( function(){   $('#masonryContainer').masonry(); });

</script>


<script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>



</body></html>