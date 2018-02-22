<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setCanLoadExtJs'), 'head', function ($block) { return $block->setCanLoadExtJs('1'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setCanLoadRulesJs'), 'head', function ($block) { return $block->setCanLoadRulesJs('1'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tabs', 'name' => 'promo_quote_edit_tabs'), 'promo_quote_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_main', 'name' => 'promo_quote_edit_tab_main'), 'promo_quote_edit_tab_main', 'promo_quote_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_main');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_conditions', 'name' => 'promo_quote_edit_tab_conditions'), 'promo_quote_edit_tab_conditions', 'promo_quote_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_conditions');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_actions', 'name' => 'promo_quote_edit_tab_actions'), 'promo_quote_edit_tab_actions', 'promo_quote_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_actions');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_labels', 'name' => 'promo_quote_edit_tab_labels'), 'promo_quote_edit_tab_labels', 'promo_quote_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_labels');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_coupons', 'name' => 'promo_quote_edit_tab_coupons'), 'promo_quote_edit_tab_coupons', 'promo_quote_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_coupons_form', 'name' => 'promo_quote_edit_tab_coupons_form'), 'promo_quote_edit_tab_coupons_form', 'promo_quote_edit_tab_coupons', array(0 => 'left', 1 => 'promo_quote_edit_tabs')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons_form');
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons');
$this->addItemRelation($item, 'left');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit_tab_coupons_grid', 'name' => 'promo_quote_edit_tab_coupons_grid'), 'promo_quote_edit_tab_coupons_grid', 'promo_quote_edit_tab_coupons', array(0 => 'left', 1 => 'promo_quote_edit_tabs')), false);
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons_grid');
$this->addItemRelation($item, 'promo_quote_edit_tab_coupons');
$this->addItemRelation($item, 'left');
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_quote_edit_tabs', function ($block) { return $block->addTab('main_section', 'promo_quote_edit_tab_main'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_quote_edit_tabs', function ($block) { return $block->addTab('conditions_section', 'promo_quote_edit_tab_conditions'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_quote_edit_tabs', function ($block) { return $block->addTab('actions_section', 'promo_quote_edit_tab_actions'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_quote_edit_tabs', function ($block) { return $block->addTab('labels_section', 'promo_quote_edit_tab_labels'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'promo_quote_edit_tabs', function ($block) { return $block->addTab('coupons_section', 'promo_quote_edit_tab_coupons'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'promo_quote_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'promo/salesrulejs.phtml', 'name' => 'promo_quote_edit_jsinit'), 'promo_quote_edit_jsinit', 'left', array()), false);
$this->addItemRelation($item, 'promo_quote_edit_jsinit');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/promo_quote_edit', 'name' => 'promo_quote_edit'), 'promo_quote_edit', 'content', array()), false);
$this->addItemRelation($item, 'promo_quote_edit');
$this->addItemRelation($item, 'content');