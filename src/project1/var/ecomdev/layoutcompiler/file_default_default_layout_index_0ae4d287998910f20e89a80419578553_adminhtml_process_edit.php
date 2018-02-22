<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'index/adminhtml_process_edit', 'name' => 'process_edit'), 'process_edit', 'content', array()), false);
$this->addItemRelation($item, 'process_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'index/adminhtml_process_edit_tabs', 'name' => 'index_edit_tabs'), 'index_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'index_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'index_edit_tabs', function ($block) { return $block->addTab('main_section', 'index/adminhtml_process_edit_tab_main'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'index_edit_tabs');
$this->addItemRelation($item, 'left');