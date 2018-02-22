<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_email_shipment_items', 'name' => 'items', 'template' => 'email/order/shipment/items.phtml'), 'items', null, array()), false);
$this->addItemRelation($item, 'items');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'items', function ($block) { return $block->addItemRender('default', 'sales/order_email_items_default', 'email/order/items/shipment/default.phtml'); }, array()), false);
$this->addItemRelation($item, 'items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'additional.product.info'), 'additional.product.info', null, array()), false);
$this->addItemRelation($item, 'additional.product.info');
$this->addItemRelation($item, NULL);