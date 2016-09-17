<?php
global $post;
$current_attachments = get_field('document_attachments');
if ($current_attachments){
	echo "<div class='document-download'>";
	echo "<h3>" . _x('Documents' , 'Documents to download' , 'govintranet') . " <span class='pull-right'><span class='glyphicon glyphicon-save'></span></span></h3>";
	echo "<ul class='document-download-list'>";
	foreach ($current_attachments as $ca){
		$c = $ca['document_attachment'];
		if ( isset($c['title']) ) echo "<li><a class='alert-link' href='".$c['url']."'>".$c['title']."</a></li>";
	}
	echo "</ul></div>";
}	
?>	