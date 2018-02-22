<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('catalog_product_view'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'wishlist/item_configure', 'name' => 'product.info.addto', 'as' => 'addto', 'template' => 'wishlist/item/configure/addto.phtml'), 'product.info.addto', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.addto');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'unsetChild'), 'product.info.options.wrapper.bottom', function ($block) { return $block->unsetChild('product.info.addto'); }, array()), false);
$this->addItemRelation($item, 'product.info.options.wrapper.bottom');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'append'), 'product.info.options.wrapper.bottom', function ($block) { return $block->append('product.info.addto'); }, array()), false);
$this->addItemRelation($item, 'product.info.options.wrapper.bottom');