<div id="privateMeals" class="mealsList">
<h3>Private Meals</h3>
<ul>
	<?php foreach($private->result() as $row): ?>
		<li>
			<h4><?php echo anchor('meal/'.$row->id, $row->title); ?> <?php echo $row->friendly_date; ?>
			<?php if($row->location){ ?>
			at <?php echo $row->location; ?>
			<?php } ?>
			</h4>
			<?php if($row->intended){ ?>
			<p>Exclusively for <?php echo $row->intended; ?></p>
			<?php } ?>
		</li>	
	<?php endforeach; ?>
</ul>
<!-- <a class="viewMore" href="#">View More</a> -->
</div>