<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('sales_recurring_profile_view__tabs'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsViewCurrent'), 'sales.recurring.profile.view.tab.orders', function ($block) { return $block->setIsViewCurrent('1'); }, array()), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.tab.orders');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/recurring_profile_view', 'name' => 'sales.recurring.profile.view.orders', 'as' => 'table', 'template' => 'sales/recurring/grid.phtml'), 'sales.recurring.profile.view.orders', 'sales.recurring.profile.view', array()), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'prepareRelatedOrdersFrontendGrid'), 'sales.recurring.profile.view.orders', function ($block) { return $block->prepareRelatedOrdersFrontendGrid(); }, array(0 => 'sales.recurring.profile.view')), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setViewLabel', 'translate' => 'value'), 'sales.recurring.profile.view.orders', function ($block) { return $block->setViewLabel(Mage::helper('core')->__('Orders Based on This Profile')); }, array(0 => 'sales.recurring.profile.view')), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setEmptyGridMessage', 'translate' => 'value'), 'sales.recurring.profile.view.orders', function ($block) { return $block->setEmptyGridMessage(Mage::helper('core')->__('There are no orders yet.')); }, array(0 => 'sales.recurring.profile.view')), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setGridHtmlClass'), 'sales.recurring.profile.view.orders', function ($block) { return $block->setGridHtmlClass('info-box'); }, array(0 => 'sales.recurring.profile.view')), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setGridHtmlCss'), 'sales.recurring.profile.view.orders', function ($block) { return $block->setGridHtmlCss('border:0'); }, array(0 => 'sales.recurring.profile.view')), false);
$this->addItemRelation($item, 'sales.recurring.profile.view.orders');
$this->addItemRelation($item, 'sales.recurring.profile.view');