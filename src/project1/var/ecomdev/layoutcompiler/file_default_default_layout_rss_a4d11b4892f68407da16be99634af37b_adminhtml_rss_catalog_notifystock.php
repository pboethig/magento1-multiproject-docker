<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_notifyStock', 'output' => 'toHtml', 'name' => 'rss.catalog.notifystock'), 'rss.catalog.notifystock', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.notifystock');
$this->addItemRelation($item, NULL);