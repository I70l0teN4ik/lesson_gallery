
<a href="<?php url_base('gallery', 'form')?>"><?php t('Upload photo')?></a>
<?php t('Sort by:')?>
<a class="sorter" href="<?php url_base('gallery', 'list', 'Loaded', 'ASC', 'current_page')?>"> <?php t('Date')?> ↗</a>
<a class="sorter" href="<?php url_base('gallery', 'list', 'Loaded', 'DESC', 'current_page')?>"> <?php t('Date')?> ↘</a>
<a class="sorter" href="<?php url_base('gallery', 'list', 'size', 'ASC', 'current_page')?>"> <?php t('Size')?> ↗</a>
<a class="sorter" href="<?php url_base('gallery', 'list', 'size', 'DESC', 'current_page')?>"> <?php t('Size')?> ↘</a>