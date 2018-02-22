<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/onepage_progress', 'name' => 'root', 'output' => 'toHtml', 'template' => 'checkout/onepage/progress/billing.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setInfoTemplate'), 'root', function ($block) { return $block->setInfoTemplate('', ''); }, array()), false);
$this->addItemRelation($item, 'root');