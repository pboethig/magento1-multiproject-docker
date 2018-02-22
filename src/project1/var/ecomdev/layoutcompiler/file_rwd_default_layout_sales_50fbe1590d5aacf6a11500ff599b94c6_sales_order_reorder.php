<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_view', 'name' => 'sales.order.view'), 'sales.order.view', 'content', array()), false);
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'content');