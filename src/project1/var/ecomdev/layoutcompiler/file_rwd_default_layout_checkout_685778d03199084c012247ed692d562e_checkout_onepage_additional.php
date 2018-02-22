<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/onepage_shipping_method_additional', 'name' => 'root', 'output' => 'toHtml', 'template' => 'checkout/onepage/shipping_method/additional.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setDontDisplayContainer'), 'root', function ($block) { return $block->setDontDisplayContainer('1'); }, array()), false);
$this->addItemRelation($item, 'root');