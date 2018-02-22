<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_view_type_virtual', 'name' => 'product.info.virtual', 'as' => 'product_type_data', 'template' => 'catalog/product/view/type/default.phtml'), 'product.info.virtual', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.virtual');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product.info.virtual.extra', 'as' => 'product_type_data_extra', 'translate' => 'label'), 'product.info.virtual.extra', 'product.info.virtual', array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.info.virtual.extra');
$this->addItemRelation($item, 'product.info.virtual');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_view_type_virtual', 'name' => 'product.info.availability', 'as' => 'product_type_availability', 'template' => 'catalog/product/view/type/availability/default.phtml'), 'product.info.availability', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.availability');
$this->addItemRelation($item, 'product.info');