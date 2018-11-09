<?php include 'connect.php';$email=""; ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<title>BATA SHOES</title>
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<link rel="stylesheet" href="css/maini.css" type="text/css">
	<script type="text/javascript" src="js5/jquery.js"></script>
	<script type="text/javascript" src="js5/jquery.slideshow.min.js"></script>
	<script type="text/javascript" src="js5/jquerytiming.js"></script>
    <script type="text/javascript" src="ajaxslide.js"></script>
	
	
<script src="Scripts/jquery-latest.js" type="text/javascript"></script>
<script src="Scripts/thickbox.js" type="text/javascript"></script>
<link href="css/thickbox.css" rel="stylesheet" type="text/css" />


<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<script src="Scripts/jquery-latest.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>


<body>
	<div id="header">
	<div id="headerinside">	
		
 <div  align="left"id="logo"><img src="images/logo.png" width="261" height="40"></div>	
		
	</div>
<?php include 'topnav.php'; ?>
<div id="search" align="center">  
           <div align="center" style="float:left;  width:450px; margin:auto;">  <form  method="get" action="result.php">   
          SEARCH BY KEYWORD:
          <input name="keyword" type="text"  size="50" class="inputbox" />		 
		  <input name="itemnumber" type="hidden"value="0"  />
		  <input name="rows" type="hidden"value="0"  />
		   <input name="category" type="hidden"value=""   />
		    <input name="region" type="hidden"value=""   />		    
			<input type="hidden"  name="e" value="<?php echo $email;?>" />		   
          <input name="submit" type="submit" id="submit" value="Find" />
          <input type="reset" name="Reset" value="Reset" />      
      	  </form></div>
		  
		 <div align="center" style=" width:450px; float:left">		
		<form method="get" action="details.php" >
		SEARCH BY ITEM NUMBER:
		<input type="text"   name="itemnumber" size="35"class="inputbox" />
			<input type="hidden"  name="e" value="<?php echo $email;?>" />	
		<input type="submit" value="Find" />
		 <input type="reset" name="Reset" value="Reset" />
		</form></div>
			
</div>

	</div>  

<div id="container">
<img src="images/top-header.jpg" />

   
    	<div class="slider-wrapper theme-default" >
            <div id="slider" class="nivoSlider" style="margin-top:50px;" >
                <img src="images/slider/1.jpg" alt="Mouse 1" title="#caption1" />
                <img src="images/slider/2.jpg" alt="Mouse 2" title="#caption2" />
                <img src="images/slider/3.jpg" alt="Mouse 3" title="#caption3" />
				<img src="images/slider/4.jpg" alt="Mouse 4" title="#caption4" />
                <img src="images/slider/5.jpg" alt="Mouse 5" title="#caption5" />
               
            </div>
           
        <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
			effect: 'fade',
			controlNav: true, // 1,2,3... navigation
            directionNav: false,
			captionOpacity: 9,
			animSpeed: 800, // Slide transition speed
	        pauseTime: 4000, // How long each slide will show
			});
        });
        </script>	
    </div> <!-- END of slider -->
    
    
    

	<div style="clear:both"></div>	
	<div id="home">
    
    
    </div>

		
	
	<div style="clear:both"></div>
	</div>

	
    
    
	
	
<div style="clear:both"></div>



<div id="footer">
<P align="center">© Copyright | 2018|  ~ All Rights Reserved Designed by TI|   <A HREF="administration.php">Admin Login</A></p>

<img src="images/botround.jpg" width="980" height="15" alt="" />
</div>
</div>
</body>
</html>
