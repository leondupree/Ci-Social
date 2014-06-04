<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title;?></title>
		<?php echo meta($meta); ?>	
		<?php echo link_tag($host['img'].'icon/16x16/favicon.gif', 'shortcut icon', 'image/gif');?>
		<?php echo link_tag($host['css'].'default.css');?>
	</head>
	<body>
		<div class="wrapper">
				<ul id="header">
					<li class="logo"><a href="/" ><img src="<?php echo $host['img'];?>logos/trivver_205x82.png" width="205" height="82" alt="Trivver"/></a></li>
					<li class="menu">
						<nav>
							<a href="/account/">Home</a>
							<a href="/jobs/">Jobs</a>
							<a href="/contact/">Contact</a>
							<a href="/blog/">Blog</a>
							<a href="/mediakit/">Media Kit</a>       
						</nav> 
					</li>
					<li class="social">
							<a href="/account/"><img src="<?php echo $host['img'];?>icons/16x16/fb.png" width="16" height="16"></a>
							<a href="/account/"><img src="<?php echo $host['img'];?>icons/16x16/twitter.png" width="16" height="16"></a>	
					</li>
				</ul>
			<div id="content">