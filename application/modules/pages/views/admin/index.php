<div class="box">
	<?php $this->load->view('admin/partials/shortcuts'); ?>

	<h3><?php echo lang('pages.list_title'); ?></h3>

	<div class="box-container">
	
		<div id="page-tree" class="float-left" style="width:49%;">
			<ul class="filetree">
				<?php echo $page_tree_html; ?>  
			</ul>
		</div>
		
		<div id="page-details" class="float-right" style="width:45%;">
		
			<p>
				<?php echo lang('pages.tree_explanation'); ?>
			</p>
		
		</div>
		
		<br class="clear-both" />
		
	</div>
</div>