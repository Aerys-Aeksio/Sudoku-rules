<?php
	echo '<div class="row">'."\n";
	$total_other_rules = count($other_rules);
	$total_other_rules = ceil($total_other_rules/2)-1;
	$i = 0;
	$u = 0;
	$other_rulez = array();
	foreach($other_rules as $rule => $explenation) {
		if ( $u == 0 ) {
			echo '<div class="col">'."\n";
			echo "\t".'<ul class="list-group">'."\n";
		}
		if (isset($_POST)  and !empty($_POST['other_rule_'.$i])) {
			$checked = 'checked';
			$other_rulez[$rule] = $explenation;
		} else {
			$checked = '';
		}
		echo '<li class="form-check form-switch">'."\n";
		echo "\t".'<input class="form-check-input" type="checkbox" id="other_rule_'.$i.'" '.$checked.' name="other_rule_'.$i.'">'."\n";
		echo "\t".'<label class="form-check-label" for="other_rule_'.$i.'" data-bs-toggle="popover" data-bs-trigger="focus hover" data-bs-title="'.$rule.'" data-bs-html="true" data-bs-content="'.$explenation.'">'."\n\t".$rule.'</label>'."\n";
		echo '</li>'."\n";
		if ($u == 0) {
			$u++;
		}
		if ($u > $total_other_rules) {
			echo '</ul>';
			echo '</div>';
			echo '<div class="col">'."\n";
			echo '<ul class="list-group">'."\n";
			$u = 0;
		}
		$u++;
		$i++;
	};
	echo '</ul>';
	echo '</div>';
	echo "</div>";
?>