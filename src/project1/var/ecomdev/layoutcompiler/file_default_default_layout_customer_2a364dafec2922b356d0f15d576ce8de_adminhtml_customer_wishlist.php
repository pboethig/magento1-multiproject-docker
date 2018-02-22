<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_wishlist', 'name' => 'customer.wishlist.edit.tab', 'output' => 'toHtml'), 'customer.wishlist.edit.tab', null, array()), false);
$this->addItemRelation($item, 'customer.wishlist.edit.tab');
$this->addItemRelation($item, NULL);