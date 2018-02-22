<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_new', 'output' => 'toHtml', 'name' => 'rss.catalog.new'), 'rss.catalog.new', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.new');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'rss.catalog.new', function ($block) { return $block->addPriceBlockType('msrp_rss', 'catalog/product_price', 'catalog/product/price_msrp_rss.phtml'); }, array()), false);
$this->addItemRelation($item, 'rss.catalog.new');