<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_orders', 'name' => 'adminhtml.customer.edit.tab.orders'), 'adminhtml.customer.edit.tab.orders', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.customer.edit.tab.orders');
$this->addItemRelation($item, 'root');