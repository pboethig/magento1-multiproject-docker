<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'minicart_head', function ($block) { return $block->addItemRender('bundle', 'bundle/checkout_cart_item_renderer', 'checkout/cart/minicart/default.phtml'); }, array()), false);
$this->addItemRelation($item, 'minicart_head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'cart_sidebar', function ($block) { return $block->addItemRender('bundle', 'bundle/checkout_cart_item_renderer', 'checkout/cart/sidebar/default.phtml'); }, array()), false);
$this->addItemRelation($item, 'cart_sidebar');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'wishlist_sidebar', function ($block) { return $block->addPriceBlockType('bundle', 'bundle/catalog_product_price', 'bundle/catalog/product/price.phtml'); }, array()), false);
$this->addItemRelation($item, 'wishlist_sidebar');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog_product_price_template', function ($block) { return $block->addPriceBlockType('bundle', 'bundle/catalog_product_price', 'bundle/catalog/product/price.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');