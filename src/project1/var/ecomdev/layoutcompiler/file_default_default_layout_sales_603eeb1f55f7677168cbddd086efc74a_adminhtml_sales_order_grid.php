<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('formkey'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_grid', 'name' => 'sales_order.grid', 'output' => 'toHtml'), 'sales_order.grid', null, array()), false);
$this->addItemRelation($item, 'sales_order.grid');
$this->addItemRelation($item, NULL);