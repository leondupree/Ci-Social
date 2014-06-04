<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Trivver Social Mashup API</title>
		<style type="text/css">
			::selection{ background-color: #E13300; color: white; }
			::moz-selection{ background-color: #E13300; color: white; }
			::webkit-selection{ background-color: #E13300; color: white; }
			*{
				font: 100% normal  Arial, sans-serif;
				color: #111;
			}
			body{
				background-image: -webkit-gradient(linear, left bottom, right top, color-stop(0, #EEE), color-stop(0.25, #EEE), color-stop(0.25, #FFF), 
				color-stop(0.5, #FFF), color-stop(0.5, #EEE), color-stop(0.75, #EEE), color-stop(0.75, #FFF));
				background-image: -webkit-linear-gradient(left bottom, #EEE 0%, #EEE 25%, #FFF 25%, #FFF 50%, #EEE 50%, #EEE 75%, #FFF 75%);
				background-image: -moz-linear-gradient(left bottom, #EEE 0%, #EEE 25%, #FFF 25%, #FFF 50%, #EEE 50%, #EEE 75%, #FFF 75%);
				background-image: -ms-linear-gradient(left bottom, #EEE 0%, #EEE 25%, #FFF 25%, #FFF 50%, #EEE 50%, #EEE 75%, #FFF 75%);
				background-image: -o-linear-gradient(left bottom, #EEE 0%, #EEE 25%, #FFF 25%, #FFF 50%, #EEE 50%, #EEE 75%, #FFF 75%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EEEEEE', endColorstr='#FFFFFF',GradientType=0 ); / IE6-8 */
				background-image: linear-gradient(left bottom, #EEE 0%, #EEE 25%, #FFF 25%, #FFF 50%, #EEE 50%, #EEE 75%, #FFF 75%);
				background-size: .5em .5em;
				width:96%;
				height:100%;
				margin: 2%;
			}
		
			a {
				color: #003399;
				background-color: transparent;	
			}
			h1 {
				color: rgba(255,255,255,.8);
				background: rgba(80,45,22,.5);
				font-size: 110%;
				margin: 0;
				padding: 1em 0 0 1.4em;
				border-radius:.6em .6em 0 0; 
				letter-spacing:.2em;
			}
			h2{
				
				font-size: 110%;
				font-weight: bold;
				color: #EEE;
				background: rgba(0,0,0,.5);
				line-height: 130%;
			}
			h3{
				color: #rgba(158,46,58,1);
				font-size: 105%;
				padding: 3px;
				padding-left:20px;
				background: rgb(174,188,191); /* Old browsers */
				background: -moz-linear-gradient(top,  rgba(174,188,191,.5) 0%, rgba(110,119,116,.5) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(174,188,191,.5)), color-stop(100%,rgba(110,119,116,.5))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  rgba(174,188,191,.5) 0%,rgba(110,119,116,.5) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  rgba(174,188,191,.5) 0%,rgba(110,119,116,.5) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  rgba(174,188,191,.5) 0%,rgba(110,119,116,.5) 100%); /* IE10+ */
				background: linear-gradient(to bottom,  rgba(174,188,191,.5) 0%,rgba(110,119,116,.5) 100%); /* W3C */
				
				margin: 0;
				
			}		
			input.scale{
				width:100%;	
			}
			textarea{
				width:100%;
				height: 6em;
			}
			button, input.btn{
				height: 30px; 
				background: 
			}
			label{
				line-height: 200%;
				font-size: 85%;
			}
			fieldset{
				padding: 1em;
				margin: 1em;
				background: rgba(247,234,89,.2);
			}
			legend{
				font-weight: bold;
			}
			
			code{
				font-family: Consolas, Monaco, Courier New, Courier, monospace;
				font-size: 80%;
				color: #002166;
				display: block;
				margin: 0;
				padding: 1em;
			}
			
			div{

				margin: 0;
				padding: 0;
			}
			
			div.panel{
				border: 20px solid rgba(80,45,22,.5);
				border-radius: 0 0 .6em .6em; 
			}

			.panel ul{
				list-style:inside none;
			}
			.panel li{
				margin: 5px;
				font-size: 80%;
			}
			
			p.footer{
				text-align: right;
				border-top: 1px solid #D0D0D0;
				line-height: 32px;
				padding: 0 10px 0 10px;
				margin: 20px 0 0 0;
			}
			
			nav{
				height:43px; 
				display:block; 
				padding:0; 
				margin:1em 0;  
				border:1px solid; 
				border-radius:5px; 
			}	
			nav > ul {
				list-style:inside none; 
				padding:0; 
				margin:0;
			} 
			nav > ul > li {
				list-style:inside none; 
				padding:0; 
				margin:0; 
				float:left;
				display:block; 
				position:relative;
			} 
			nav > ul > li > a{
				outline:none; 
				display:block; 
				position:relative; 
				padding:12px 20px; 
				font: Arial, Helvetica, sans-serif;
				font-weight:bold;
				font-size:14px;
				text-align:center; 
				text-decoration:none; 
				text-shadow:1px 1px 0 rgba(0,0,0, 0.4); 
			} 
			
			nav > ul > li:first-child > a{
				border-radius:5px 0 0 5px;
			} 
			nav > ul > li > a:after{
				content:''; 
				position:absolute; 
				border-right:1px solid; 
				top:3px; bottom:3px; 
				right:-1px; 
				z-index:99; 
			}
			nav ul li.has-sub:hover > a:after{
				top:0; bottom:0;
			} 
			nav > ul > li.has-sub > a:before{
				content:''; 
				position:absolute; 
				top:18px; 
				right:6px; 
				border:5px solid transparent; 
				border-top:5px solid #fff;
			} 
			nav > ul > li.has-sub:hover > a:before{
				top:19px;
			} 
			nav ul li.has-sub:hover > a{ 
				background:#3f3f3f; 
				border-color:#3f3f3f; 
				padding-bottom:13px; 
				padding-top:13px; 
				top:-1px; 
				z-index:999; 
			} 
			nav ul li.has-sub:hover > ul, nav ul li.has-sub:hover > div{
				display:block;
			} 
			nav ul li.has-sub > a:hover{
				background:#3f3f3f; 
				border-color:#3f3f3f;
			} 
			nav ul li > ul, nav ul li > div{ 
				display:none; 
				width:auto; 
				position:absolute; 
				top:38px; 
				padding:10px 0; 
				background:#3f3f3f; 
				border-radius:0 0 5px 5px; 
				z-index:999; 
			}
			nav ul li > ul{
				width:220px;
			} 
			nav ul li > ul li{
				display:block; 
				list-style:inside none; 
				padding:0; 
				margin:0; 
				position:relative;
			} 
			nav ul li > ul li a{
				outline:none; 
				display:block; 
				position:relative; 
				margin:0; 
				padding:8px 20px; 
				font:10pt Arial, Helvetica, sans-serif; 
				color:#fff; 
				text-decoration:none; 
				text-shadow:1px 1px 0 rgba(0,0,0, 0.5); 
			} 
			nav, nav > ul > li > ul > li a:hover{ 
				background:#bf4143; 
				background:-moz-linear-gradient(top,  #bf4143 0%, #a13742 100%); 
				background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#bf4143), color-stop(100%,#a13742));
				background:-webkit-linear-gradient(top,  #bf4143 0%,#a13742 100%); background:-o-linear-gradient(top,  #bf4143 0%,#a13742 100%); 
				background:-ms-linear-gradient(top,  #bf4143 0%,#a13742 100%); 
				background:linear-gradient(top,  #bf4143 0%,#a13742 100%); 
				filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#bf4143', endColorstr='#a13742',GradientType=0 ); 
			} 
			nav{
				border-color:#712730;
			} 
			nav > ul > li > a{
				border-right:1px solid #712730; 
				color:#fff;
			} 
			nav > ul > li > a:after{
				border-color:#f0696c;
			} 
			nav > ul > li > a:hover{
				background:#8f2f34;
			}			
		
		</style>
		<script>
			function loadXMLDoc(x,y)
			{
				var xmlhttp;
				if (window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
					xmlhttp.onreadystatechange=function(){if (xmlhttp.readyState==4 && xmlhttp.status==200){document.getElementById(y).innerHTML=xmlhttp.responseText;}}
					xmlhttp.open("GET",x,true);
					xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<nav>
			<ul>
			   <li class="active"><a href="/">home</a></li>
			   <?php if($fb_id){?>
			   <li class="has-sub"><a href="javascript:void();">facebook</a>
				<ul>
					<li><a href="/fb_create_object/">create a new object</a></li>
					<li><a href="/fb_post_object_to_friend_wall/">post object to friends wall</a></li>
					<li><a href="/fb_post_object_to_me_wall/">post object to your wall</a></li>
			   		<li class="last"><a href="/fb_send_invite_to_object/">send invite to object</a></li>	 
			      </ul>
			   </li>
			   <li class="has-sub"><a href="javascript:void();">documentation</a>
			      <ul>
			         <li><a href="/user_guide/toc.html" target="_blank">ci user manual</a></li>
			         <li><a href="http://developers.facebook.com/docs/reference/php/" target="_blank">facebook php sdk</a></li>
			         <li class="last"><a href="http://docs.unity3d.com/Documentation/ScriptReference/"  target="_blank">unity script refrence</a></li>
			      </ul>
			   </li>
			   
			   <?php }?>
			</ul>
		</nav>
		<h1>Trivver (Social API) - <?php echo $title;?></h1>