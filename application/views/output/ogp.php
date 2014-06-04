<html prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object#">
	<head>
        <title><?php echo $meta['og:title']; ?></title>
		<?php 
		
			foreach ($meta as $property=>$content) {
				echo '<meta property="' . $property .'" content="'. $content .'">';
			} 
			echo link_tag($host['css'].'ogp.css');
			
		?>
    </head>
    <body>
		<h1>Trivver-net | Application | Open Graph Protocol | Object | <?php echo $obj_id; ?></h1>
		<table border="0" cellspacing="0">
			<tbody>
				<tr>
					<th class="key">fb:app_id</th>
					<td class="value"><?php echo $meta['fb:app_id']; ?></td>
				</tr>
				<tr>
					<th class="key">og:title</th>
					<td class="value"><?php echo $meta['og:title']; ?></td>
				</tr>
				<tr>
					<th class="key">og:description</th>
					<td class="value"><?php echo $meta['og:description']; ?></td>
				</tr>
				<tr>
					<th class="key">og:url</th>
					<td class="value"><?php echo $meta['og:url']; ?></td>
				</tr>
				<tr>
					<th class="key">og:type</th>
					<td class="value"><?php echo $meta['og:type']; ?></td>
				</tr>
				<tr>
					<th class="key">og:image</th>
					<td class="value"><?php echo $meta['og:image']; ?></td>
				</tr>
				<tr>
					<th class="key">og:image:type</th>
					<td class="value"><?php echo $meta['og:image:type']; ?></td>
				</tr>
				<tr>
					<th class="key">og:image:width</th>
					<td class="value"><?php echo $meta['og:image:width']; ?></td>
				</tr>
				<tr>
					<th class="key">og:image:height</th>
					<td class="value"><?php echo $meta['og:image:height']; ?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>