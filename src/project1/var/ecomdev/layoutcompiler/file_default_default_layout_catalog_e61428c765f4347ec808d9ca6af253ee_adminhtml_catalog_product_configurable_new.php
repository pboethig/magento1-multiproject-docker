<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('product_tabs'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tabs_configurable', 'name' => 'configurable_product_tabs'), 'configurable_product_tabs', 'left', array()), false);
$this->addItemRelation($item, 'configurable_product_tabs');
$this->addItemRelation($item, 'left');