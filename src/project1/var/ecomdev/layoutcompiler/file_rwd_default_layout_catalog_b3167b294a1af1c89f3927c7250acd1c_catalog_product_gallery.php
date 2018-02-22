<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/popup.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_gallery', 'name' => 'catalog_product_gallery', 'template' => 'catalog/product/gallery.phtml'), 'catalog_product_gallery', 'content', array()), false);
$this->addItemRelation($item, 'catalog_product_gallery');
$this->addItemRelation($item, 'content');