<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_email_creditmemo_items', 'name' => 'items', 'template' => 'email/order/creditmemo/items.phtml'), 'items', null, array()), false);
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'items', function ($block) { return $block->addItemRender('default', 'sales/order_email_items_default', 'email/order/items/creditmemo/default.phtml'); }, array()), false);
$this->addItemRelation($item, 'items');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'items', function ($block) { return $block->addItemRender('grouped', 'sales/order_email_items_order_grouped', 'email/order/items/creditmemo/default.phtml'); }, array()), false);
$this->addItemRelation($item, 'items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'creditmemo_totals_wrapper', 'as' => 'creditmemo_totals', 'template' => 'email/order/totals/wrapper.phtml'), 'creditmemo_totals_wrapper', 'items', array()), false);
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItemRelation($item, 'items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_creditmemo_totals', 'name' => 'creditmemo_totals', 'template' => 'sales/order/totals.phtml'), 'creditmemo_totals', 'creditmemo_totals_wrapper', array(0 => 'items')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItemRelation($item, 'items');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setLabelProperties'), 'creditmemo_totals', function ($block) { return $block->setLabelProperties('colspan="3" align="right" style="padding:3px 9px"'); }, array(0 => 'items', 1 => 'creditmemo_totals_wrapper')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setValueProperties'), 'creditmemo_totals', function ($block) { return $block->setValueProperties('align="right" style="padding:3px 9px"'); }, array(0 => 'items', 1 => 'creditmemo_totals_wrapper')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tax/sales_order_tax', 'name' => 'tax', 'template' => 'tax/order/tax.phtml'), 'tax', 'creditmemo_totals', array(0 => 'items', 1 => 'creditmemo_totals_wrapper')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsPlaneMode'), 'tax', function ($block) { return $block->setIsPlaneMode('1'); }, array(0 => 'items', 1 => 'creditmemo_totals_wrapper', 2 => 'creditmemo_totals')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, 'creditmemo_totals_wrapper');
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'additional.product.info'), 'additional.product.info', null, array()), false);
$this->addItemRelation($item, 'additional.product.info');
$this->addItemRelation($item, NULL);