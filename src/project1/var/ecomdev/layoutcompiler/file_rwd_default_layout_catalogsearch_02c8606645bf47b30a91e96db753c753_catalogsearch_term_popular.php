<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle', 'translate' => 'title', 'module' => 'catalogsearch'), 'head', function ($block) { return $block->setTitle(Mage::helper('catalogsearch')->__('Search Terms')); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalogsearch/term', 'name' => 'seo.searchterm', 'template' => 'catalogsearch/term.phtml'), 'seo.searchterm', 'content', array()), false);
$this->addItemRelation($item, 'seo.searchterm');
$this->addItemRelation($item, 'content');