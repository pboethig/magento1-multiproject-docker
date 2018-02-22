<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('steverobbins/redismanager/redismanager.css'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'redismanager/adminhtml_manager', 'name' => 'redismanager.manager', 'template' => 'steverobbins/redismanager/manager.phtml'), 'redismanager.manager', 'content', array()), false);
$this->addItemRelation($item, 'redismanager.manager');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'redismanager/adminhtml_manager', 'name' => 'redismanager.grid', 'template' => 'steverobbins/redismanager/grid.phtml'), 'redismanager.grid', 'redismanager.manager', array(0 => 'content')), false);
$this->addItemRelation($item, 'redismanager.grid');
$this->addItemRelation($item, 'redismanager.manager');
$this->addItemRelation($item, 'content');