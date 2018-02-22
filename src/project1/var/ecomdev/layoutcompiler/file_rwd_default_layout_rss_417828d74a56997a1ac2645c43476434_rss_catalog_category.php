<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_category', 'output' => 'toHtml', 'name' => 'rss.catalog.category'), 'rss.catalog.category', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.category');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'rss.catalog.category', function ($block) { return $block->addPriceBlockType('msrp_rss', 'catalog/product_price', 'catalog/product/price_msrp_rss.phtml'); }, array()), false);
$this->addItemRelation($item, 'rss.catalog.category');