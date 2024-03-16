<?php

define('RULES', 'test');

include_once('assets/global_rules_array.php');
include_once('assets/sandwich_rules_array.php');
include_once('assets/other_rules_array.php');
include_once('assets/my_puzzles_array.php');

error_reporting(E_ALL);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Sudoku Rules by Daniël</title>
	<link rel="icon" type="image/x-icon" href="../Sudokurules/favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/jquery-ui.min.css" rel="stylesheet">
</head>
<body>
<div class="container-sm" style="padding-top:10px;">
<form class="row" action="index.php" method="post">
<header style="margin:auto;">
	<h1>
		SUDOKU RULES GENERATOR<br /><small class="text-body-secondary">FOR LMG</small>
	</h1>
</header>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">General Settings</a></li>
		<li><a href="#tabs-2">Global Clues</a></li>
		<li><a href="#tabs-3">Sandwich Clues</a></li>
		<li><a href="#tabs-4">Other Clues</a></li>
		<li><a href="#tabs-5">Killer Cages</a></li>
		<li><a href="#tabs-7">Color Palette</a></li>
		<li><a href="#tabs-6">Links</a></li>
	</ul>
	<div id="tabs-1">
<?php include("assets/general_settings.php"); ?>
	</div>
	<div id="tabs-2">
<?php include('assets/global_rules.php'); ?>
	</div>
	<div id="tabs-3">
<?php include('assets/sandwich_clues_rules.php'); ?>
	</div>
	<div id="tabs-4">
<?php include('assets/other_rules.php'); ?>
	</div>
	<div id="tabs-5">
<?php include("assets/killercages/include_killercages.php"); ?>
	</div>
	<div id="tabs-6">
<?php include("assets/include_links.php"); ?>
	</div>
	<div id="tabs-7">
<?php include("assets/include_color-blind-palette.php"); ?>
	</div>
</div> <!-- end tabs -->
<div class="row" style="padding-top:10px;padding-bottom:10px;">
	<div class="col">
		<button id="submit1" type="submit" class="btn btn-dark" data-icon="ui-icon-gear">
			Submit
		</button>
	</div>
</div>
</form>
<?php
//**
//** here is where the magic happens
//**
if (isset($_POST)) {
	include_once('layout.php');
?>
<div id="textarea">
	<ul>
		<li><a href="#textarea-1">Rules With Html</a></li>
		<li><a href="#textarea-2">Rules Without Html</a></li>
		<li><a href="#textarea-3">Rules With bbcode</a></li>

	</ul>
	<div id="textarea-1">
		<p>
			Copy To Clipboard --><button id="copy_with_html"class="btn btn-secondary btn-sm" type="submit" onclick="copy_with_html()">
				<i class="bi bi-clipboard"></i>
			</button>
		</p>
		<textarea style="border:1px solid black;" class="form-control" rows="15" id="with_html"><?php echo $layout; ?></textarea>
	</div>
	<div id="textarea-2">
		<p>
			Copy To Clipboard --><button class="btn btn-secondary btn-sm" type="submit" onclick="copy_without_html()">
			<i class="bi bi-clipboard"></i>
			</button>
		</p>
<?php
(!empty($_POST['prefix_rules'])) ? $prefix = $prefix_rules[$_POST['prefix_rules']] : $prefix = '';
$without =''; 
		foreach ($global_rulez as $rule => $explenation) {
			$without .= $prefix . $rule.' '.$explenation."\n";
		}
		foreach ($sandwich_rulez as $rule => $explenation) {
			$without .= $prefix . $rule.' '.$explenation."\n";
		}
		foreach ($other_rulez as $rule => $explenation) {
			$without .= $prefix . $rule.' '.$explenation."\n";
		}
		echo '<textarea style="border:1px solid black;" id="without_html" class="form-control" rows="15">'.$without.'</textarea>';
?>
	</div>
		<div id="textarea-3">
		<p>
			Copy To Clipboard --><button class="btn btn-secondary btn-sm" type="submit" onclick="copy_with_bbcode()">
			<i class="bi bi-clipboard"></i>
			</button>
		</p>
<?php
$with_bbcode ='[list]'."\n"; 
	foreach ($global_rulez as $rule => $explenation) {
		$with_bbcode .= '[*][b][u]'.$rule.'[/u][/b] '."\n".$explenation."\n";
	}
	foreach ($sandwich_rulez as $rule => $explenation) {
		$with_bbcode .= '[*][b][u]'.$rule.'[/u][/b] '."\n".$explenation."\n";
	}
	foreach ($other_rulez as $rule => $explenation) {
		$with_bbcode .= '[*][b][u]'.$rule.'[/u][/b] '."\n".$explenation."\n";
	}
	$with_bbcode .= "[/list]"."\n\n";
	$with_bbcode .= "[url=".$_POST['sudokumaker_url']." target=_blank]Sirxemic’s Sudokumaker.app[/url]"."\n";
	$with_bbcode .= "[url=".$_POST['sudokupad_url']." target=_blank]Sven's Sudokupad[/url]";

	echo '<textarea style="border:1px solid black;" id="with_bbcode" class="form-control" rows="15">'.$with_bbcode.'</textarea>';
?>
	</div>
</div>
<?php
}
//**
//**	Here is where the magic ends
//**
//**  Modals
//include("assets/killercages/modal-killercages.php");
include("assets/killercages/modal-killercage-2.php");
include("assets/killercages/modal-killercage-3.php");
include("assets/killercages/modal-killercage-4.php");
include("assets/killercages/modal-killercage-5.php");
include("assets/killercages/modal-killercage-6.php");
include("assets/killercages/modal-killercage-7.php");
include("assets/killercages/modal-killercage-8.php");
include("assets/killercages/modal-killercage-9.php");
?>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
	<div class="col-md-4 d-flex align-items-center">
		<span class="text-muted">
			&copy; <a data-bs-toggle="modal" data-bs-target="#my-puzzle-modal">Daniël Rokven</a>
		</span>
	</div>
	<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
		<li class="ms-3">
			<a class="text-muted bi bi-twitter-x" href="#">
				<svg class="bi bi-twitter-x" width="24" height="24">
					<use xlink:href="#twitter"/>
				</svg>
			</a>
		</li>
		<li class="ms-3">
			<a class="text-muted bi bi-instagram" href="#">
				<svg class="bi bi-instagram" width="24" height="24">
					<use xlink:href="#instagram"/>
				</svg>
			</a>
		</li>
		<li class="ms-3">
			<a class="text-muted bi bi-facebook" href="#">
				<svg class="bi bi-facebook" width="24" height="24">
					<use xlink:href="#facebook"/>
				</svg>
			</a>
		</li>
		<li class="ms-3">
			<a class="text-muted bi bi-tiktok" href="#">
				<svg class="bi bi-tiktok" width="24" height="24">
					<use xlink:href="#tiktok"/>
				</svg>
			</a>
		</li>
	</ul>
</footer>
</div>
<?php
include_once('assets/my_puzzles_array.php');
include_once('assets/layout_puzzle_modal.php');

echo $modal;
?>
<script src="js/javascript.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js/jquery-ui.min.js" crossorigin="anonymous"></script>
<script src="
https://cdn.jsdelivr.net/npm/vanillajs@1.0.1/dest/cjs/index.min.js
"></script>
<script>
$(function() {
	$("#tabs").tabs({
		active: 		false,
		collapsible: 	true,
		show: { effect: "blind", duration: 500 },
		hide: { effect: "blind", duration: 500 }
	});
	$("#textarea").tabs({
		active: 		false,
		collapsible: 	true,
		show: { effect: "blind", duration: 500 },
		hide: { effect: "blind", duration: 500 }
	});
});
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
const popover = new bootstrap.Popover('.popover-dismiss', {
	trigger: 'focus'
})
</script>
</body>
</html>