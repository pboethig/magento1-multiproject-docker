<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/product.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_send', 'name' => 'product.send', 'template' => 'catalog/product/send.phtml'), 'product.send', 'content', array()), false);
$this->addItemRelation($item, 'product.send');
$this->addItemRelation($item, 'content');