<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit', 'name' => 'product_edit'), 'product_edit', 'content', array()), false);
$this->addItemRelation($item, 'product_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_tabs', 'name' => 'product_tabs'), 'product_tabs', 'left', array()), false);
$this->addItemRelation($item, 'product_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/catalog_product_edit_js', 'template' => 'catalog/product/js.phtml', 'name' => 'catalog_product_js'), 'catalog_product_js', 'js', array()), false);
$this->addItemRelation($item, 'catalog_product_js');
$this->addItemRelation($item, 'js');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'template' => 'catalog/wysiwyg/js.phtml', '_ecomdev_system_option' => array('is_anonymous' => true)), 'ANONYMOUS_5a8eb70ba64d38.41777973', 'js', array()), false);
$this->addItemRelation($item, 'ANONYMOUS_5a8eb70ba64d38.41777973');
$this->addItemRelation($item, 'js');