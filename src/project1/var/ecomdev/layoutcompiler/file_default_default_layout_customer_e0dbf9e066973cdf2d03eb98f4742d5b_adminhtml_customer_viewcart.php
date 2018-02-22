<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_view_cart', 'name' => 'admin.customer.view.cart'), 'admin.customer.view.cart', 'root', array()), false);
$this->addItemRelation($item, 'admin.customer.view.cart');
$this->addItemRelation($item, 'root');