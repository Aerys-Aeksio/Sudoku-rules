<?php

$modal = '
<div class="modal fade" id="my-puzzle-modal" tabindex="-1" role="dialog" aria-labelledby="modal-puzzle-name" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Kierownik\'s Puzzles
				</h5>
			</div>
			<div class="modal-body">
				<table class="table table-sm table-striped" style="margin:auto;text-align:center;vertical-align:middle;">
					<thead>
						<tr>
							<td>Name</td>
							<td>Links</td>
							<td>Image</td>
							<td>Date</td>
						</tr>
					</thead>
					<tbody>
					'.$puzzle_modal.'
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>';
?>