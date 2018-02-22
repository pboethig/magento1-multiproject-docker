<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_review', 'output' => 'toHtml', 'name' => 'rss.catalog.review'), 'rss.catalog.review', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.review');
$this->addItemRelation($item, NULL);