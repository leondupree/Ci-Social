<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("/social/fb/post_to_user_wall/",
    {
      link: document.getElementById("link").value,
      message: document.getElementById("message").value
    },
    function(data,status){
        if(status==true){r='your post has been sent';}else{r='something went wrong';}
        document.getElementById("results").innerHTML="status: " + status + " data: " + data;
    });
  });
});
</script>
<div class="panel">
<h2>Facebook Wall</h2>
<div class="panel">
  <fieldset>
    <legend>Post to a friends wall</legend>
    <select id="to">
    	<option value="">Select a friend</option>
	  	<?php 
	  	
	  		 foreach ($fb_friends as $friends =>$friend) {
	      		foreach ($friends as $friend) {
	         		$id = $friend['id'];
	         		$name = $friend['name'];
	         		echo '<option value="' . $friend['id'] . '">' . $friend['name'] .'</option>';
	     		}
	   		}
	  	
	  	?>
  	</select>
    <label for="link">link</label>
    <input type="text" id="link" name="link" class="scale"><br/>
    <label for="message">message</label><br/>
    <textarea id="message" name="message"></textarea><br/><br/>
   	<button class="btn">send</button><br/><br/>
   	<code id="results">status: pending request</code>
  </fieldset>
</div>
</div>