<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'poll/activePoll', 'name' => 'right.poll'), 'right.poll', 'right', array()), false);
$this->addItemRelation($item, 'right.poll');
$this->addItemRelation($item, 'right');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setPollTemplate'), 'right.poll', function ($block) { return $block->setPollTemplate('poll/active.phtml', 'poll'); }, array(0 => 'right')), false);
$this->addItemRelation($item, 'right.poll');
$this->addItemRelation($item, 'right');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setPollTemplate'), 'right.poll', function ($block) { return $block->setPollTemplate('poll/result.phtml', 'results'); }, array(0 => 'right')), false);
$this->addItemRelation($item, 'right.poll');
$this->addItemRelation($item, 'right');