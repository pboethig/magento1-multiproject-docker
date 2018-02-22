<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tab_tag_customer', 'name' => 'admin.product.tags.customers'), 'admin.product.tags.customers', 'root', array()), false);
$this->addItemRelation($item, 'admin.product.tags.customers');
$this->addItemRelation($item, 'root');