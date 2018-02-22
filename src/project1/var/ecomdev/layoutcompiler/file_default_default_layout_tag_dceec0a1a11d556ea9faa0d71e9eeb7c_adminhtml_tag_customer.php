<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_customer_grid', 'name' => 'adminhtml.tag.customer.grid'), 'adminhtml.tag.customer.grid', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.tag.customer.grid');
$this->addItemRelation($item, 'root');