<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addProductConfigurationHelper'), 'customer.wishlist.edit.tab', function ($block) { return $block->addProductConfigurationHelper('downloadable', 'downloadable/catalog_product_configuration'); }, array()), false);
$this->addItemRelation($item, 'customer.wishlist.edit.tab');