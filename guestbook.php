<!DOCTYPE html>

<html>

	<head>
		<title> Devashish Kumar Yadav
		</title>
	<style>
	body{ background-image: url("b3.jpg"); background-attachment:fixed }
    a.mainlink:link, a.mainlink:visited{ 
										background-color:#04B45F; 
										border-radius:5px; 
										border:2px solid #04B45F; 
										padding:4px 8px 8px 8px; 
										text:center; 
										margin-right:5px;
										text-decoration:none;
										font-size: 30px; 
										font-family:'Arial'; 
										color:white;}
	a.mainlink:hover, a.mainlink:active { background-color:white; color:#04B45F;}
	
	
	div.info {
					height: 1px;
					background: #FA5858;
					position: relative;
					-webkit-animation: myfirst 2s; /* Chrome, Safari, Opera */
					animation: myfirst 2s;
				}

				/* Chrome, Safari, Opera */
				@-webkit-keyframes myfirst {
					0%   {background:#F6CECE; right:-100%; top:0px;}
					100% {background:#FA5858; right:0%; top:0px;}
				}

				/* Standard syntax */
				@keyframes myfirst {
					0%   {background:#F6CECE; right:-100%; top:0px;}
					100% {background:#FA5858; right:0%; top:0px;}
				}
		
	a#fb[target="_blank"] {             display:inline-block;
										width:64px; height:64px;
										background:url("fb.png") center right no-repeat;
										padding-right:2px;

                                      } 
	
	a#twitter[target="_blank"] {        display:inline-block;
										width:64px; height:64px;
										background:url("twitter.png")  center right no-repeat;
										padding-right:2ppx;

                                      }
									  
	div.myfoot { background-image: url('footer1.png');
	                height:150px;}
	.bottom1 {         			text-align: justify;
										width: [width of img];
					}
	.bottom1 img {
										display: block;
										margin: 0 auto;
					}
					
	
	
    </style>
	
	</head>
	
	<body>
	
	<div id="logo" style="background-image:url(header2.png); background-repeat: no-repeat; height:150px; margin-bottom:30px">
			
			<img src="logo.png" style="float:left" > </img>
			<img src="mypic.png" style="float:right; height:148px; border:1px #a1a1a1" > </img>
			
			
			<div style="float:right; margin-top:50px;  ">
				
				<b style=" font-size:20px; font-family:'Arial'; color:white; text-shadow: 2px 2px 2px #848484;"> Devashish Kumar Yadav</b> </br>
				<b style=" font-size:18px; color:#1C1C1C ;border-top: black 1px solid  ">Computer Science & Engineering</b> </br>
				<b style=" font-size:18px; color:#1C1C1C"> Second Year Undergraduate </b> </br>
				<b style=" font-size:18px; color:#1C1C1C">IIT Kanpur </b> </br>
			</div>
    </div>
	

	<div style="  height: 20px; border-bottom: 2px solid #6A0888; margin-bottom:20px">
	        <div style="float:left; width:700px;"> </div>
			<div style=" float:left; border-left-color: black;">
	           <marquee behavior="scroll" direction="left" style="color:#610B5E; font-family:'Arial' font-size:35px;"><b>Welcome Guest!</b></marquee>
	        </div>
			
	</div>
	<div style="margin-bottom:70px;">
			<div style="float:right;">
				<a href="index.html" class="mainlink" >Home</a>
				<a href="aboutme.html" class="mainlink" >  About Me </a>
				<a href="projects.html"  class="mainlink" >Projects </a>
				<a href="academics.html" class="mainlink" >Academics </a>
				<a href="guestbook.php" class="mainlink" >Guest Book</a>
				<a href="javascript:myfunction();" class="mainlink" >More</a>
	        </div>
	</div>
	<div class="info" style="height:700px;"><p style="text:center;font-size: 30px; font-family:'Arial'; text-align: center; color:white;}">Sign My Guest book..</br>
		<form method="post" action="guestbook.php"   style=" center">
		    <b>Name: <b/><input type="text" name="name"><br>
			<b>Comment: </b></br><textarea name="comment" rows="5" cols="40" style="margin-left:47px;"></textarea>
            <br><br>
		   <input type="submit" name="Sign" value="Sign"></br><p> Submit by PHP..Try it..write something!</br> Upgrade soon... </p>
		   </form>
	   <div style="height=400px;  border-left:1px solid gray; float:right; width:400px; color: white; font-family:'Arial'; font-size:25px;">
			<b style="color:black">Testimonial:</b><b></br>
			 <?php echo date("Y/m/d") . ": "; ?>
			 <?php echo $_POST['name'] . " " ?></br>
             <?php echo $_POST['comment']; ?></b>
	   </div>
		   
		   
		   </div>
	    
	
	<script>
	 function myfunction(){
	 alert("That's all Folks!");
	}
	</script>
	
	
	<div class="myfoot">

	<div style="float:right">
			
			<ul class="social">
				<a href="https://www.facebook.com/devashish.kumar.yadav" id="fb" target="_blank"></a>
				<a href="https://twitter.com/devashish_yadav" id="twitter" target="_blank"></a>
			</ul>
		</div>

	<div class="bottom1" style="float: left bottom; display:inline-block; margin-top:90px; padding-left:10px; padding-right:10px; ">
	   <img src="phone.png" style="height:32px; width:32px;"></img>
	   <b style="color: #939393;">+91 9454804118</b>
	 </div>
	 
	 <div class="bottom1" style="float: left bottom; display:inline-block;">
	   <img src="email.png" style="height:32px; width:32px;"></img>
	   <b style="color: #939393;">devyadav@iitk.ac.in</b>
	 </div>
	 <div style="display:inline-block; text-align:right; color:#939393; padding-left:80px;">
	 <b>&copy Devashish Kumar Yadav</b>
	 </div>
	 
	
		
		
		
</div>
	
	
	
	
	
	</body>
</html>	
