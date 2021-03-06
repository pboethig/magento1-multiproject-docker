<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem', 'ifconfig' => 'sales/msrp/enabled'), 'head', function ($block) { return $block->addItem('skin_js', 'js/msrp.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem', 'ifconfig' => 'sales/msrp/enabled'), 'head', function ($block) { return $block->addItem('skin_js', 'js/msrp_rwd.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'template' => 'catalog/msrp/popup.phtml', 'name' => 'product.tooltip'), 'product.tooltip', 'content', array()), false);
$this->addItemRelation($item, 'product.tooltip');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog_product_price_template', function ($block) { return $block->addPriceBlockType('msrp', 'catalog/product_price', 'catalog/product/price_msrp.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog_product_price_template', function ($block) { return $block->addPriceBlockType('msrp_item', 'catalog/product_price', 'catalog/product/price_msrp_item.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog_product_price_template', function ($block) { return $block->addPriceBlockType('msrp_noform', 'catalog/product_price', 'catalog/product/price_msrp_noform.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');