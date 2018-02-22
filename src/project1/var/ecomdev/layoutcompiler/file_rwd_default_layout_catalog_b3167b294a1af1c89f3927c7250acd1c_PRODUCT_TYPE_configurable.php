<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_view_type_configurable', 'name' => 'product.info.configurable', 'as' => 'product_type_data', 'template' => 'catalog/product/view/type/default.phtml'), 'product.info.configurable', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.configurable');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product.info.configurable.extra', 'as' => 'product_type_data_extra', 'translate' => 'label'), 'product.info.configurable.extra', 'product.info.configurable', array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.info.configurable.extra');
$this->addItemRelation($item, 'product.info.configurable');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_view_type_configurable', 'name' => 'product.info.availability', 'as' => 'product_type_availability', 'template' => 'catalog/product/view/type/availability/default.phtml'), 'product.info.availability', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.availability');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_view_type_configurable', 'name' => 'product.info.options.configurable', 'as' => 'options_configurable', 'before' => '-', 'template' => 'catalog/product/view/type/options/configurable.phtml'), 'product.info.options.configurable', 'product.info.options.wrapper', array()), false);
$this->addItemRelation($item, 'product.info.options.configurable');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product.info.options.configurable.renderers', 'as' => 'attr_renderers'), 'product.info.options.configurable.renderers', 'product.info.options.configurable', array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.options.configurable.renderers');
$this->addItemRelation($item, 'product.info.options.configurable');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product.info.options.configurable.after', 'as' => 'after'), 'product.info.options.configurable.after', 'product.info.options.configurable', array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.options.configurable.after');
$this->addItemRelation($item, 'product.info.options.configurable');
$this->addItemRelation($item, 'product.info.options.wrapper');