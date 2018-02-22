<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_shipment_view_tracking', 'name' => 'shipment_tracking', 'template' => 'sales/order/shipment/view/tracking.phtml'), 'shipment_tracking', null, array()), false);
$this->addItemRelation($item, 'shipment_tracking');
$this->addItemRelation($item, NULL);