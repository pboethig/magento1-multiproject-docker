<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_totals', 'template' => 'sales/order/create/totals.phtml', 'name' => 'totals'), 'totals', 'content', array()), false);
$this->addItemRelation($item, 'totals');
$this->addItemRelation($item, 'content');