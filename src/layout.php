<?php
$test = '';
	foreach ($global_rulez as $rule => $explenation )
	{
		$test .= '<li style="color:#000000;"><strong><u>'.$rule.'</u></strong> '.$explenation.'</li>'."\n";
	}
	foreach ($sandwich_rulez as $rule => $explenation )

	{

		$test .= '<li style="color:#000000;"><strong><u>'.$rule.'</u></strong> '.$explenation.'</li>'."\n";
	}
	foreach ($other_rulez as $rule => $explenation )
	{
		$test .= '<li style="color:#000000;"><strong><u>'.$rule.'</u></strong> '.$explenation.'</li>'."\n";
	}
	if (empty($_POST['image_id'])) {
		$_POST['image_id'] = '';
	}
	if (empty($_POST['sudokumaker_url'])) { $_POST['sudokumaker_url'] = '';
	}
	if (empty($_POST['sudokupad_url'])) { $_POST['sudokupad_url'] = '';
	}

$layout = '
<div style="width:350px; margin:auto; padding:0px;">
	<img:'.$_POST['image_id'].'>
</div>
<div>
  <ol style="list-style-type:square; text-align: justify;">
    '.$test.'</ol>
</div>
<p style="margin:auto;">
<a style="border:1px solid black;border-radius:4px;padding:4px 5px;margin:2px;background-color: rgba(200,200,200,0.5);color:black;text-decoration:none" href="'.$_POST['sudokumaker_url'].'"><small>Sirxemic’s</small> Sudokumaker</a>
&nbsp;
  <a style="border:1px solid black; border-radius:4px; padding:4px 5px; margin:2px; background-color: rgba(200,200,200,0.5); color:black; text-decoration:none" href="'.$_POST['sudokupad_url'].'">Sven\'s Sudokupad</a>
<br />
<br />
Have fun in playing the puzzle and leave a kind message :-]<br>
<small>Streamers may use all my puzzles.</small>
</p>';

?>