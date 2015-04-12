<div class="entry">
<div class="entry-timestamp"><?php echo date('d/m/Y H:i:s', strtotime($entry->date)); ?></div>
<a class="entry-shaarli" target="_blank" href="<?php echo $entry->feed->link; ?>"><img class="favicon" src="<?php echo get_favicon_url($entry->feed->id); ?>" /><?php echo $entry->feed->title; ?></a> <a class="entry-title" target="_blank" href="<?php echo $entry->permalink; ?>"><?php echo $entry->title; ?></a>
<div class="entry-content"><?php echo $entry->content; ?></div>
<div class="pull-right">
<?php
foreach(explode(',', $entry->categories) as $categorie) {
    echo '<a href="search.php?q=tag:'. urlencode($categorie) .'" class="btn btn-default btn-xs">'. $categorie .'</a>';
} ?>
</div><div class="clear"></div>
</div>