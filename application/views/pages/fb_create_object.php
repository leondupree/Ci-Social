<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("/social/fb/create_object/",
    {	
		title: document.getElementById("title").value,
		url: document.getElementById("url").value,
		image: document.getElementById("image").value,
		description: document.getElementById("description").value,
		site_name: document.getElementById("site_name").value
    },
    function(data){
        document.getElementById("results").innerHTML="<pre>" + data + "</pre>";
    });
  });
});
</script>

<div class="panel">
  <fieldset>
  	<legend>Object Properties</legend>
  	<!--  
  	To be added in future publications when we have custom object types required
    
    <label for="type">Type</label><br/>
    <select id="type" name="type">
    	<option></option>
    	<option>article</option>
    	<option>link</option>
    	<option>profile</option>
    </select><br/>
     -->
     
    <label for="site_name">Name</label><br/><input type="text" id="site_name" name="site_name" class="scale"><br/>
    <label for="title">Title</label><br/><input type="text" id="title" name="title" class="scale"><br/>
    <label for="image">Image</label><br/><input type="text" id="image" name="image" class="scale"><br/>
     <label for="url">URL</label><br/><input type="text" id="url" name="url" class="scale"><br/>
    <label for="description">Description</label><br/><textarea id="description" name="description"></textarea><br/><br/>
   	<button class="btn">send</button><br/><br/>
  </fieldset>
  <fieldset>
    <legend>Response Results</legend>
  	<code id="results">Pending request</code>
  </fieldset>
</div>
