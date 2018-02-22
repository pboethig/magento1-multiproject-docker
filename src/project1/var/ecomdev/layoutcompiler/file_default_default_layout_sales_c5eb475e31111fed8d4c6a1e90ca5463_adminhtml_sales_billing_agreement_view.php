<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_billing_agreement_view', 'name' => 'sales.billing.agreement.view'), 'sales.billing.agreement.view', 'content', array()), false);
$this->addItemRelation($item, 'sales.billing.agreement.view');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/adminhtml_billing_agreement_view_tabs', 'name' => 'sales.billing.agreement.tabs'), 'sales.billing.agreement.tabs', 'left', array()), false);
$this->addItemRelation($item, 'sales.billing.agreement.tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'sales.billing.agreement.tabs', function ($block) { return $block->addTab('billing_agreement_info', 'sales/adminhtml_billing_agreement_view_tab_info'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'sales.billing.agreement.tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'sales.billing.agreement.tabs', function ($block) { return $block->addTab('billing_agreement_orders', 'sales/adminhtml_billing_agreement_view_tab_orders'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'sales.billing.agreement.tabs');
$this->addItemRelation($item, 'left');