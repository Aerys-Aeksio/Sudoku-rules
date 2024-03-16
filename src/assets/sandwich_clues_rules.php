<?php
	echo '<div class="row">'."\n";
	$i = 0;
	$u = 0;
	$sandwich_rulez = array();
	foreach($sandwich_rules as $rule => $explenation) {
		if ( $u == 0 ) {
			echo '<div class="col">'."\n";
			echo "\t".'<ul class="list-group">'."\n";
		}
		if (isset($_POST)  and !empty($_POST['sandwich_rule_'.$i])) {
			$checked = 'checked';
			$sandwich_rulez[$rule] = $explenation;
		} else {
			$checked = '';
		}
		echo '<li class="form-check form-switch">'."\n";
		echo "\t".'<input class="form-check-input" type="checkbox" id="sandwich_rule_'.$i.'" '.$checked.' name="sandwich_rule_'.$i.'">'."\n";
		echo "\t".'<label class="form-check-label" for="sandwich_rule_'.$i.'" data-bs-toggle="popover" data-bs-trigger="focus hover"  data-bs-title="'.$rule.'" data-bs-placement="bottom" data-bs-html="true" data-bs-content="'.$explenation.'">'."\n\t".$rule.'</label>'."\n";
		echo '</li>'."\n";
		if ($u == 0) {
			$u++;
		}
		if ($u > 15) {
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