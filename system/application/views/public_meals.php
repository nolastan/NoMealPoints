<div id="publicMeals" class="mealsList">
<h3>Free Meals</h3>

<ul>
<?php foreach($public->result() as $row): ?>
	<li>
		<h4><?php echo anchor('meal/'.$row->id, $row->title); ?> <?php echo $row->friendly_date; ?>
		<?php if($row->location){ ?>
		at <?php echo $row->location; ?>
		<?php } ?>
		</h4>
		<?php if($row->intended){ ?>
		<p>Intended for <?php echo $row->intended; ?></p>
		<?php } ?>
	</li>	
<?php endforeach; ?>
</ul>
<!-- <a class="viewMore" href="#">View More</a> -->
</div>