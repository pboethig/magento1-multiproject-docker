<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit', 'name' => 'cms_page_edit'), 'cms_page_edit', 'content', array()), false);
$this->addItemRelation($item, 'cms_page_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit_tabs', 'name' => 'cms_page_edit_tabs'), 'cms_page_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit_tab_main', 'name' => 'cms_page_edit_tab_main'), 'cms_page_edit_tab_main', 'cms_page_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tab_main');
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit_tab_content', 'name' => 'cms_page_edit_tab_content'), 'cms_page_edit_tab_content', 'cms_page_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tab_content');
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit_tab_design', 'name' => 'cms_page_edit_tab_design'), 'cms_page_edit_tab_design', 'cms_page_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tab_design');
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/cms_page_edit_tab_meta', 'name' => 'cms_page_edit_tab_meta'), 'cms_page_edit_tab_meta', 'cms_page_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tab_meta');
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'cms_page_edit_tabs', function ($block) { return $block->addTab('main_section', 'cms_page_edit_tab_main'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'cms_page_edit_tabs', function ($block) { return $block->addTab('content_section', 'cms_page_edit_tab_content'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'cms_page_edit_tabs', function ($block) { return $block->addTab('design_section', 'cms_page_edit_tab_design'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'cms_page_edit_tabs', function ($block) { return $block->addTab('meta_section', 'cms_page_edit_tab_meta'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'cms_page_edit_tabs');
$this->addItemRelation($item, 'left');