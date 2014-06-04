<div class="<?php $item_class;?>">
<h5><?php echo $item_title?></h5>
<ul>
<?php foreach ($item_list as $arr) {?>
	<li><a href="<?php echo $arr['href'];?>"><?php echo $arr['label'];?></a></li>
<?php }?>
</ul><?php if(isset($par)){?>
	<p></p>
<?php } ?>
</div>