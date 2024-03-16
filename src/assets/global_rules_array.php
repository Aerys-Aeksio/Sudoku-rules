<?php

if (!RULES) { die; };

$global_rules = array(
	'Normal 9x9 sudoku rules apply:' => 'In every row, column and in every 3x3 box the digits from 1 to 9 have to appear atleast once with no repeats.',
	'Normal 8x8 sudoku rules apply:' => 'In every row, column and in every 4x2 box the digits from 1 to 8 have to appear atleast once with no repeats.',
	'Normal 7x7 sudoku rules apply:' => 'In every row and column the digits from 1 to 7 have to appear atleast once with no repeats.',
	'Normal 6x6 sudoku rules apply:' => 'In every row, column and in every 3x2 box the digits from 1 to 6 have to appear atleast once with no repeats.',
	'Normal 5x5 sudoku rules apply:' => 'In every row and column the digits from 1 to 5 have to appear atleast once with no repeats.',
	'Normal 4x4 sudoku rules apply:' => 'In every row, column and in every 2x2 box the digits from 1 to 4 have to appear atleast once with no repeats.',
	'Negative diagonal &#92;:' => 'Digits cannot repeat along the negative diagonal.',
	'Positive diagonal /:' => 'Digits cannot repeat along the positive diagonal.',
	'Global entropy:' => 'Every 2x2 square of cells must contain a low digit (1-2-3), middle digit (4-5-6) and high digit (7-8-9).',
	'Global modulo 3:' => 'Every 2x2 square of cells must contain a digit from (1-4-7), a digit from (2-5-8) and a digit from (3-6-9).',
	'Non-consecutive:' => 'Cells that are orthogonally adjacent cannot contain consecutive digits.',
	'Anti-king:' => 'Cells seperated by a king’s move in chess cannot have the same digit.',
	'Anti-knight:' => 'Cells seperated by a knights move in chess cannot have the same digit.'
);

?>