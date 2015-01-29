<?php 

	require_once("includes/initialize.php");
    include(LIB_PATH."/header.php");

// retrieve current page number from query string; set to 1 if blank
	if (empty($_GET["pg"])){
      $current_page = 1;
    }else{
    $current_page = $_GET["pg"];
    }
	
    $current_page = intval($current_page);

    $total_products = get_products_count();
    $products_per_page = 5;
    $total_pages = ceil($total_products / $products_per_page);
    
    if ($current_page > $total_pages) {
        header("Location: ./?pg=" . $total_pages);
    }

    if ($current_page < 1) {
        header("Location: ./");
    }

    $start = (($current_page - 1) * $products_per_page) + 1;
    $end = $current_page * $products_per_page;
    if ($end > $total_products) {
        $end = $total_products;
    }
    

	$products = get_products_subset($start,$end);

?>

    
<script>

$(document).ready(function(){ 
  if ($(window).width() > 450) {     
  $("html, body").animate({scrollTop: 800}, 0);
  }
});

</script>



<style>

.sideForm textarea{
min-height:300px;
}
  

.heading {
float: left;
padding-left: 10%;
padding-right: 10%;
border-radius: 2px;
}
.heading p{
text-align:left;
font-size:.8em;
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
#storyContainer{
	margin-left:5%;%;
	}
	
.hide-class{
	text-align: justify;
	color: #333333;
	display: block;
	-webkit-margin-before: 1em;
	-webkit-margin-after: 1em;
	-webkit-margin-start: 0px;
	-webkit-margin-end: 0px;
	font-size: .9em;
	line-height: 1.6;
	margin-bottom: 1.25rem;
	text-rendering: optimizeLegibility;
	font-family: "merriweather", georgia, serif;
	font-weight: normal;
	}
.truncate{
	padding-bottom:15px;
	border-bottom:1px solid #d5d5d5;
	padding-right:35px;
	padding-left:35px;
    line-height:1.8;
    text-align:left;
	}
.truncate p{
line-height:1.8;
}
li h4{
  padding-left:35px;
}
#container{
	padding-top:100px;   
	}
.btn-stroke-blue {
display: inline-block;
font-size: 14px;
line-height: 1.428571429;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
font-family: "oswald", Helvetica, Arial, sans-serif;
text-transform: uppercase;
text-align: center;
padding: 15px 20px;
letter-spacing: 2px;
background: white;
transition: 0.2s;
color: #414042;
border: 2px solid #414042;
}
.btn-stroke-blue:hover{
background: #414042;
color:white;
}
h5{
font-family: "oswald", Helvetica, Arial, sans-serif;
text-transform: uppercase;
font-size:22px;
  padding-top:20px;
}
.row {
padding-left: 0px;
padding-right: 0px;
}
#container{
margin-bottom:50px;
}
  
.sideForm {
font-size:13px;
}

h4:first-of-type{
margin-top:0;
}

h4{
margin-top:26px;
}

::-webkit-input-placeholder {
   font-family:"oswald",sans-serif;
  font-weight:200;
  text-transform:uppercase;
}

:-moz-placeholder { /* Firefox 18- */
   color: red;  
}

.pagination{
padding-right:50px;
}
.secondNav .pagination{
padding-right:0px;
}

#floatForm{
background-color:#F3F2ED;;
  padding-bottom:30px;
-moz-box-shadow:    0px 0px 6px 1px #ccc;
-webkit-box-shadow: 0px 0px 6px 1px #ccc;
box-shadow:         0px 0px 6px 1px #ccc;
}
#storyContainer{
margin-right:0px;
}
  .hide-class{
  color:#605d5d;
  }
    #but-home a{ 
    color: #d5d5d5;
    }
      #but-stories a{
color: #414042;
}

   /* Smartphones (portrait and landscape) ----------- */
   /* Smartphones (portrait and landscape) ----------- */
  /* Smartphones (portrait and landscape) ----------- */
    @media only screen 
    and (min-width : 320px) 
    and (max-width : 480px) {
    /* Styles */
    
      
      
    h4{
    font-size:30px;
    margin-bottom:0px;
    }
#storyContainer {
margin-left: 0%;
}
    .my-sticky-element{
      max-height: 50px;
      }
    
    .truncate{
      padding-top:5px;
	padding-bottom:30px;
	border-bottom:1px solid #d5d5d5;
	padding-right:15px;
	padding-left:15px;
    line-height:1.8;
    text-align:left;
	}
      li:last-of-type .truncate{
      border-bottom:0px;
      }
.truncate p{
line-height:1.8;
}
 li{
      padding-top:30px;
      }
li h4{
  padding-left:15px;
  line-height:10px;
}
    
    .sideForm{
    width:100%;
	padding-left:0px;
	padding-right:0px;
    }
	
	#floatForm{
    padding-left:8%;
	padding-right:8%;
	margin-top:0px;
    }
    #container{
      width: 100%;
      clear: both;
    padding-top:20px;
      } 
    .fi-list{
    color:#d5d5d5;
    display:none;
    }
    .pagination a,.pagination span {
    font-size:13px;
    }
    
    .header{
    float:left;
    }
    
    .row{
    margin:0%;
    }
    .sideForm{
    margin-top:0px;
    }
    .secondNav{
    display:none;
    }
    .pagination{
    padding-right:0px;
    }
    #floatForm {
margin-bottom: 110px;
margin-top: 0px;
}
  }
/* IPHONE 4/4s lanscape*/
@media only screen 
and (min-width : 321px) 
and (-webkit-device-pixel-ratio: 2){ 
 
  #floatForm{
margin-bottom: 89px;
}
}


</style>
<link rel="stylesheet" href="css/ipadstyles.css">

<body>

<header>


	</header>
    
    
    
<?php include LIB_PATH."/intro.php";?>
  

<nav id="navbar" class="my-sticky-element">
 
		<div class="header clearfix">
		<div class="tb_wrap">
			<div class="v_align clearfix">
                 <?php include(LIB_PATH."/list-navigation.html.php"); ?>
				<div class="buttons clearfix">
					<div class="btn_wrapper regular button_hover">
                      
						<span class="ss-cell" id="but-home"><a href="index.php#section-1">HOME</a></span>
					</div>
					<div class="btn_wrapper regular active button_hover">
						<span class="ss-tablet" id="but-stories"><a href="stories.php#section-1">STORIES</a></span>
					</div>
                  <div class="btn_wrapper regular button_hover">
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
    <div class="row">
        
          <div class="large-9 medium-12 columns">



<div id="storyContainer">
	
  
<ul class="products">
<?php
    foreach($products as $product) {
        include LIB_PATH."/template.php";
    }
?>
</ul>
<div class="secondNav">
<?php include LIB_PATH."/list-navigation.html.php"; ?>
</div>
</div><!--Story Container-->



</div>
      <div class="large-3 medium-12 columns sideForm">
  <div id="floatForm">
<h5>WHAT'S YOUR STORY?</h5> 
    <p>We would love to hear your story and how you ended up here.</p>

    <p>Your name and email are completely optional, if you include them we won't share, sell or spam your address. Oh, and if you have a question or want more information about us please include a way we can get in touch.</p>
    
    <form action="includes/formsubmission.php" method="post">
    <input type="text" name="name" placeholder="name" value="<?php if(isset($name)) {echo htmlspecialchars($name);}?>" />
             <input type="text" name="email" placeholder="email" value="<?php if(isset($email)) {echo htmlspecialchars($email);}?>" />
                <textarea placeholder="story" name="story" value="<?php if(isset($story)) {echo htmlspecialchars($story);}?>"></textarea>
      <div style="display: none;">
        <input type="text" name="address" id="address" />
      </div>
      <input class="btn-stroke-blue" type="submit" value="submit" />
      </form>
    </div>
</div>
</div>

  <?php include(LIB_PATH."/form.php");?>
  <?php include(LIB_PATH."/footer.php");?>
  </div>


</div>
 
  
<script>
$(document).ready(function(){
$('.truncate').collapser({
    mode: 'words',
    truncate: 45,
	speed: 'fast',
	showText: 'more',
	hideText: 'less'
});

});

</script>
<script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body></html>