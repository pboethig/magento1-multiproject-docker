<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/wishlist', 'name' => 'rss.wishlist', 'output' => 'toHtml'), 'rss.wishlist', null, array()), false);
$this->addItemRelation($item, 'rss.wishlist');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'rss.wishlist', function ($block) { return $block->addPriceBlockType('msrp_rss', 'catalog/product_price', 'wishlist/render/item/price_msrp_rss.phtml'); }, array()), false);
$this->addItemRelation($item, 'rss.wishlist');