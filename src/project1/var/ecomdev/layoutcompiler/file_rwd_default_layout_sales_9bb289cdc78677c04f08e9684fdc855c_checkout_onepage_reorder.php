<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'unsetChild'), 'right', function ($block) { return $block->unsetChild('reorder'); }, array()), false);
$this->addItemRelation($item, 'right');