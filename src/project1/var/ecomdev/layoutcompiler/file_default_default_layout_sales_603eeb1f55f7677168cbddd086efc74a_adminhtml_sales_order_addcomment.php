<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_view_history', 'name' => 'order_history', 'template' => 'sales/order/view/history.phtml', 'output' => 'toHtml'), 'order_history', null, array()), false);
$this->addItemRelation($item, 'order_history');
$this->addItemRelation($item, NULL);