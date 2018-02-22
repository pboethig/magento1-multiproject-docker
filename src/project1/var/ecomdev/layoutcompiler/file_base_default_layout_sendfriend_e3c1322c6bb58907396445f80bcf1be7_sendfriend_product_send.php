<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/product.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sendfriend/send', 'name' => 'sendfriend.send', 'template' => 'sendfriend/send.phtml'), 'sendfriend.send', 'content', array()), false);
$this->addItemRelation($item, 'sendfriend.send');
$this->addItemRelation($item, 'content');