<div class="panel">
		
		<?php if($fb_id){?>
			
				<fieldset>
  					<legend>Facebook General Information</legend>
  						<ul>
						<li>Facebook tools and information to assist in development.</li>
					</ul>
				</fieldset>
				<fieldset>
					<legend>Active User Information</legend>
					<ul>
						<li>Current Facebook User ID: <?php echo $fb_id;?></li>
					</ul>
				</fieldset>	
				<fieldset>
  					<legend>Additionl Information</legend>
					<ul>
						<li><a href="http://facebook.com/" target="_blank">Go to facebook.com</a></li>
						<li><a href="http://developers.facebook.com/docs/" target="_blank">Facebook Developer</a></li>
						<li><a href="https://www.facebook.com/me?sk=allactivity&log_filter=app_582620875121710" target="_blank">Trivver-Social Timeline</a></li>
						<li><a href="https://developers.facebook.com/tools/object-browser?app_id=582620875121710&object_type_name=article" target="_blank">Trivver-Social Object Browser</a></li>
					</ul>
				</fieldset>
			
		<?php } else{?>
			<fieldset>
  					<legend>Login Required</legend>
					<ul>
						<li>You must be logged in to Facebook to use this sandbox.</li>
						<li><p><a href="<?php echo $url;?>"><button>Login to Facebook</button></a></p></li>
					</ul>
				</fieldset>
				
			
		<?php }?>
</div>