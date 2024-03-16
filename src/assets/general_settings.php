<div>
	<div class="row">
		<div class="col">
			<div class="input-group">
				<span class="input-group-text" id="sudokupad_url1">Sudokupad Link:</span>
<?php (!empty($_POST['sudokupad_url'])) ? $sudokupad_url = 'value="'.$_POST['sudokupad_url'].'"' : $sudokupad_url = ''; ?>
				<input type="text" class="form-control" id="sudokupad_url" onfocus="this.value=''" name="sudokupad_url" placeholder="Sudokupad url" <?php echo $sudokupad_url ?>/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="input-group">
				<span class="input-group-text" id="sudokumaker_url1">Sudokumaker.app Link:</span>
<?php (!empty($_POST['sudokumaker_url'])) ? $sudokumaker_url = 'value="'.$_POST['sudokumaker_url'].'"' : $sudokumaker_url = ''; ?>
				<input type="text" class="form-control" id="sudokumaker_url" name="sudokumaker_url" onfocus="this.value=''" placeholder="Sudokumaker url" <?php echo $sudokumaker_url ?>/>
			</div>
		</div>
	</div>
	 <div class="row">
		<div class="col">
			<div class="input-group">
				<span class="input-group-text" id="image_id">Image Id:</span>
<?php (!empty($_POST['image_id'])) ? $image_id = 'value="'.$_POST['image_id'].'"' : $image_id = ''; ?>
				<input type="text" class="form-control" id="image_id" onfocus="this.value=''" name="image_id" placeholder="Image Id" <?php echo $image_id ?>/>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col">
			<div class="input-group">
				<span class="input-group-text" id="prefix_rules">Select your prefix here:</span><br />
				<select id="prefix_rules" name="prefix_rules" class="form-select" aria-label="default select">
				<?php
					$prefix_rules = array("Select prefix here!!", "~-", "--", "•-", "○-", "●-", "□-", "■-", "♤-", "♡-", "◇-", "♧-", "☆-", "▪︎-", "¤-", "《-","》-", "¡-", "¿-", "°-");
					foreach ($prefix_rules as $key => $prefix) {
						if ($_POST['prefix_rules'] == $key) {
							echo '<option value="'.$key.'" selected="selected">'.$prefix.'</option>';
						} else {
							echo '<option value="'.$key.'">'.$prefix.'</option>';
						}
					}
				?>
				</select>
			</div>
		</div>
	</div>
</div>