<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_print_shipment', 'name' => 'sales.order.print.shipment', 'template' => 'sales/order/print/shipment.phtml'), 'sales.order.print.shipment', 'content', array()), false);
$this->addItemRelation($item, 'sales.order.print.shipment');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'sales.order.print.shipment', function ($block) { return $block->addItemRender('default', 'sales/order_item_renderer_default', 'sales/order/shipment/items/renderer/default.phtml'); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'sales.order.print.shipment');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'additional.product.info'), 'additional.product.info', null, array()), false);
$this->addItemRelation($item, 'additional.product.info');
$this->addItemRelation($item, NULL);