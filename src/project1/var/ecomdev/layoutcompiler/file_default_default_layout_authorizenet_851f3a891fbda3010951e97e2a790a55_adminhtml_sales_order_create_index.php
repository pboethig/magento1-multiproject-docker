<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/directpost.js'); }, array()), false);
$this->addItemRelation($item, 'head');