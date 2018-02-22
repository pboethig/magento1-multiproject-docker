<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/catalog_tag', 'output' => 'toHtml', 'name' => 'rss.catalog.tag'), 'rss.catalog.tag', null, array()), false);
$this->addItemRelation($item, 'rss.catalog.tag');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'rss.catalog.tag', function ($block) { return $block->addPriceBlockType('msrp_rss', 'catalog/product_price', 'catalog/product/price_msrp_rss.phtml'); }, array()), false);
$this->addItemRelation($item, 'rss.catalog.tag');