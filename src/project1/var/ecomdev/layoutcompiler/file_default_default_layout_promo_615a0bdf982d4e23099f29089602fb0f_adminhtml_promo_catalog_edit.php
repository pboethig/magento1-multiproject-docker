<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setCanLoadExtJs'), 'head', function ($block) { return $block->setCanLoadExtJs('1'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setCanLoadRulesJs'), 'head', function ($block) { return $block->setCanLoadRulesJs('1'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit_tabs', 'name' => 'promo_catalog_edit_tabs'), 'promo_catalog_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit_tab_main', 'name' => 'promo_catalog_edit_tab_main'), 'promo_catalog_edit_tab_main', 'promo_catalog_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tab_main');
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit_tab_conditions', 'name' => 'promo_catalog_edit_tab_conditions'), 'promo_catalog_edit_tab_conditions', 'promo_catalog_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tab_conditions');
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit_tab_actions', 'name' => 'promo_catalog_edit_tab_actions'), 'promo_catalog_edit_tab_actions', 'promo_catalog_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tab_actions');
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_catalog_edit_tabs', function ($block) { return $block->addTab('main_section', 'promo_catalog_edit_tab_main'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_catalog_edit_tabs', function ($block) { return $block->addTab('conditions_section', 'promo_catalog_edit_tab_conditions'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_catalog_edit_tabs', function ($block) { return $block->addTab('actions_section', 'promo_catalog_edit_tab_actions'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_catalog_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit', 'name' => 'promo_catalog_edit'), 'promo_catalog_edit', 'content', array()), false);
$this->addItemRelation($item, 'promo_catalog_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_catalog_edit_js', 'template' => 'promo/js.phtml', '_ecomdev_system_option' => array('is_anonymous' => true)), 'ANONYMOUS_5a8c37c38c2794.36987169', 'js', array()), false);
$this->addItemRelation($item, 'ANONYMOUS_5a8c37c38c2794.36987169');
$this->addItemRelation($item, 'js');