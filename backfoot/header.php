<!DOCTYPE HTML>

<?php session_start();
	
?>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- /js -->

<script src="js/validations.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script>
function checkBannerValidations()
{
	b=true;
	banVar=document.getElementById("Banner");
	imgVar=document.getElementById("BImage");
	
	banE=document.getElementById("BannerErr");
	imgE=document.getElementById("ImageErr");
	
	if(banVar.value=="")
	{
		banE.innerHTML="Banner text is required!";
		banE.style.color="red";
		b=false;
	}
	else
	{
		banE.innerHTML="";
	}
	
	if(imgVar.value=="")
	{
		imgE.innerHTML="Image is required!";
		imgE.style.color="red";
		b=false;
	}
	else
	{
		imgE.innerHTML="";
	}
	return b;
		
}
function dayWiseMealValidation()
{
	b=true;
	dayVar=document.getElementById("dayName");
	timeVar=document.getElementById("timeName");
	
	dayE=document.getElementById("dayErr");
	timeE=document.getElementById("timeErr");
	
	if(dayVar.value=="Day")
	{
		dayE.innerHTML="please select a day!";
		dayE.style.color="red";
		b=false;
	}
	else
	{
		dayE.innerHTML="";
	}
	
	if(timeVar.value=="Meal Timing")
	{
		timeE.innerHTML="please select a day!";
		timeE.style.color="red";
		b=false;
	}
	else
	{
		timeE.innerHTML="";
	}
	return b;
}

</script>
<!-- //js-->
</head> 

<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
								<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
													
										
									
									
										
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></a>

									<ul class="dropdown-menu two">
										<li>
												
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
													   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->