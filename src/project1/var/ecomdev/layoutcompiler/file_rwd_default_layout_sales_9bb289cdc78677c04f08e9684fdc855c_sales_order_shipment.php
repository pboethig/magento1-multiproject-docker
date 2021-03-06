<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_info', 'as' => 'info', 'name' => 'sales.order.info'), 'sales.order.info', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_info_buttons', 'as' => 'buttons', 'name' => 'sales.order.info.buttons'), 'sales.order.info.buttons', 'sales.order.info', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'sales.order.info.buttons');
$this->addItemRelation($item, 'sales.order.info');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_shipment', 'name' => 'sales.order.shipment'), 'sales.order.shipment', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'sales.order.shipment');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_shipment_items', 'name' => 'shipment_items', 'template' => 'sales/order/shipment/items.phtml'), 'shipment_items', 'sales.order.shipment', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'shipment_items');
$this->addItemRelation($item, 'sales.order.shipment');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'shipment_items', function ($block) { return $block->addItemRender('default', 'sales/order_item_renderer_default', 'sales/order/shipment/items/renderer/default.phtml'); }, array(0 => 'my.account.wrapper', 1 => 'sales.order.shipment')), false);
$this->addItemRelation($item, 'shipment_items');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.shipment');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_comments', 'name' => 'shipment_comments', 'template' => 'sales/order/comments.phtml'), 'shipment_comments', 'shipment_items', array(0 => 'my.account.wrapper', 1 => 'sales.order.shipment')), false);
$this->addItemRelation($item, 'shipment_comments');
$this->addItemRelation($item, 'shipment_items');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItemRelation($item, 'sales.order.shipment');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('view', '*/*/view', Mage::helper('sales')->__('Order Information')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('invoice', '*/*/invoice', Mage::helper('sales')->__('Invoices')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('shipment', '', Mage::helper('sales')->__('Shipments')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'sales.order.info', function ($block) { return $block->addLink('creditmemo', '*/*/creditmemo', Mage::helper('sales')->__('Refunds')); }, array()), false);
$this->addItemRelation($item, 'sales.order.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'additional.product.info'), 'additional.product.info', null, array()), false);
$this->addItemRelation($item, 'additional.product.info');
$this->addItemRelation($item, NULL);