<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('firegento/debug/styles.css'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'firegento/diagnostic_checkSystem', 'name' => 'firegento.diagnostic.checksystem', 'template' => 'firegento/debug/diagnostic/checksystem.phtml'), 'firegento.diagnostic.checksystem', 'content', array()), false);
$this->addItemRelation($item, 'firegento.diagnostic.checksystem');
$this->addItemRelation($item, 'content');