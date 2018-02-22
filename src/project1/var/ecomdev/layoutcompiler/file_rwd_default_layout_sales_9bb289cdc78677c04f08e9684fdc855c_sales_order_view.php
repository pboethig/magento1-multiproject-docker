<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_info', 'as' => 'info', 'name' => 'sales.order.info'), 'sales.order.info', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_info_buttons', 'as' => 'buttons', 'name' => 'sales.order.info.buttons'), 'sales.order.info.buttons', 'sales.order.info', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'sales.order.info.buttons');
$this->addItemRelation($item, 'sales.order.info');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_view', 'name' => 'sales.order.view'), 'sales.order.view', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_items', 'name' => 'order_items', 'template' => 'sales/order/items.phtml'), 'order_items', 'sales.order.view', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'order_items', function ($block) { return $block->addItemRender('default', 'sales/order_item_renderer_default', 'sales/order/items/renderer/default.phtml'); }, array(0 => 'my.account.wrapper', 1 => 'sales.order.view')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'order_items', function ($block) { return $block->addItemRender('grouped', 'sales/order_item_renderer_grouped', 'sales/order/items/renderer/default.phtml'); }, array(0 => 'my.account.wrapper', 1 => 'sales.order.view')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_totals', 'name' => 'order_totals', 'template' => 'sales/order/totals.phtml'), 'order_totals', 'order_items', array(0 => 'my.account.wrapper', 1 => 'sales.order.view')), false);
$this->addItemRelation($item, 'order_totals');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setLabelProperties'), 'order_totals', function ($block) { return $block->setLabelProperties('colspan="4" class="a-right"'); }, array(0 => 'my.account.wrapper', 1 => 'sales.order.view', 2 => 'order_items')), false);
$this->addItemRelation($item, 'order_totals');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'order_items');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setValueProperties'), 'order_totals', function ($block) { return $block->setValueProperties('class="last a-right"'); }, array(0 => 'my.account.wrapper', 1 => 'sales.order.view', 2 => 'order_items')), false);
$this->addItemRelation($item, 'order_totals');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'order_items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tax/sales_order_tax', 'name' => 'tax', 'template' => 'tax/order/tax.phtml'), 'tax', 'order_totals', array(0 => 'my.account.wrapper', 1 => 'sales.order.view', 2 => 'order_items')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'order_totals');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'order_items');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('view', '', Mage::helper('sales')->__('Order Information')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('invoice', '*/*/invoice', Mage::helper('sales')->__('Invoices')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('shipment', '*/*/shipment', Mage::helper('sales')->__('Shipments')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('creditmemo', '*/*/creditmemo', Mage::helper('sales')->__('Refunds')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'additional.product.info', 'translate' => 'label'), 'additional.product.info', null, array()), false);
$this->addItemRelation($item, 'additional.product.info');
$this->addItemRelation($item, NULL);