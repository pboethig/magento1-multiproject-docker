<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_reviews', 'name' => 'admin.customer.reviews'), 'admin.customer.reviews', 'root', array()), false);
$this->addItemRelation($item, 'admin.customer.reviews');
$this->addItemRelation($item, 'root');