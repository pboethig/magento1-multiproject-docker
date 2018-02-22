<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_address', 'name' => 'sales_order_address.form.container'), 'sales_order_address.form.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order_address.form.container');
$this->addItemRelation($item, 'content');