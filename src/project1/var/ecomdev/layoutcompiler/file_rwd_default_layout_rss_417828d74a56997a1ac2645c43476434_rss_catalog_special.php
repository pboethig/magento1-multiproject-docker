<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_special', 'output' => 'toHtml', 'name' => 'rss.catalog.special'), 'rss.catalog.special', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.special');
$this->addItemRelation($item, NULL);