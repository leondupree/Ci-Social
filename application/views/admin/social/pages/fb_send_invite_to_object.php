<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>


FB.ui({method: 'apprequests',
    title: 'Friend Smash Challenge!',
    to: gFriendID,
    message: 'I just smashed ' + gScore + ' friends! Can you beat it?'
}, fbCallback);
</script>
<div class="panel">
<h2>Share with friend</h2>
<div class="panel">
  <fieldset>
    <legend>create new object</legend>
    <select id="to" multiple>
    	<option value="">Select a friend</option>
  	<?php 
  	
  		 foreach ($fb_friends as $friends) {
      		foreach ($friends as $friend) {
         	$id = $friend['id'];
         	$name = $friend['name'];
         	echo '<option value="' . $id . '">' . $name .'</option>';
     	}
   }
  	
  	?>
  	</select><br/>
    <label for="fb_wall_url">URL</label>
    <input type="text" id="fb_wall_url" name="fb_wall_url" class="scale"><br/>
    <label for="fb_wall_message">Message</label><br/>
    <textarea id="fb_wall_message" name="fb_wall_message"></textarea><br/><br/>
   	<button class="btn">Post to Wall</button><br/><br/>
   	<code id="results">Status: Pending Request</code>
  </fieldset>
</div>
</div>