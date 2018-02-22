<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setCanLoadExtJs'), 'head', function ($block) { return $block->setCanLoadExtJs('1'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/adminhtml/wysiwyg/widget.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('js', 'prototype/window.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('js_css', 'prototype/windows/themes/default.css'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('lib/prototype/windows/themes/magento.css'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance_edit', 'name' => 'widget_instance_edit'), 'widget_instance_edit', 'content', array()), false);
$this->addItemRelation($item, 'widget_instance_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance_edit_tabs', 'name' => 'widget_instance_edit_tabs'), 'widget_instance_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance_edit_tab_settings', 'name' => 'widget_instance_edit_tab_settings'), 'widget_instance_edit_tab_settings', 'widget_instance_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tab_settings');
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance_edit_tab_main', 'name' => 'widget_instance_edit_tab_main'), 'widget_instance_edit_tab_main', 'widget_instance_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tab_main');
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance_edit_tab_properties', 'name' => 'widget_instance_edit_tab_properties'), 'widget_instance_edit_tab_properties', 'widget_instance_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tab_properties');
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'widget_instance_edit_tabs', function ($block) { return $block->addTab('settings_section', 'widget_instance_edit_tab_settings'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'widget_instance_edit_tabs', function ($block) { return $block->addTab('main_section', 'widget_instance_edit_tab_main'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'widget_instance_edit_tabs', function ($block) { return $block->addTab('properties_section', 'widget_instance_edit_tab_properties'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'widget_instance_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'widget/instance/js.phtml', 'name' => 'widget_instance_js'), 'widget_instance_js', 'js', array()), false);
$this->addItemRelation($item, 'widget_instance_js');
$this->addItemRelation($item, 'js');