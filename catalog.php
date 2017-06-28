<?php 
include('inc/header.php');
include('inc/data.php');
include('inc/functions.php');

$pageTitle = 'Full Catalog';
$section = null;

if(isset($_GET['cat'])) {
	if($_GET['cat'] == 'books') {
		$pageTitle = 'Books';
		$section = 'books';
	} elseif($_GET['cat'] == 'movies') {
		$pageTitle = 'Movies';
		$section = 'movies';
	} elseif($_GET['cat'] == 'music') {
		$pageTitle = 'Music';
		$section = 'music';
	}
}

?>

<div class="section catalog page">
	<div class="wrapper">
		<h1><?php
		if($section != NULL) {
			echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
		}
		echo $pageTitle ?></h1>
		<ul class="items">
			<?php
			$categories = array_category($catalog, $section);
			foreach($categories AS $id) {
				echo get_item_html($id, $catalog[$id]);
			}
			?>	
		</ul>
	</div>
</div>
<?php include("inc/footer.php"); ?>