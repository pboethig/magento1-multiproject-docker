<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/bundle.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'product.info', function ($block) { return $block->addPriceBlockType('bundle', 'bundle/catalog_product_price', 'bundle/catalog/product/price.phtml'); }, array()), false);
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/catalog_product_price', 'name' => 'bundle.prices', 'as' => 'bundle_prices', 'template' => 'bundle/catalog/product/view/price.phtml'), 'bundle.prices', 'product.info', array()), false);
$this->addItemRelation($item, 'bundle.prices');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setMAPTemplate'), 'bundle.prices', function ($block) { return $block->setMAPTemplate('catalog/product/price_msrp_item.phtml'); }, array(0 => 'product.info')), false);
$this->addItemRelation($item, 'bundle.prices');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/catalog_product_view_type_bundle', 'name' => 'product.info.bundle', 'as' => 'product_type_data', 'template' => 'bundle/catalog/product/view/type/bundle.phtml'), 'product.info.bundle', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.bundle');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/catalog_product_view_type_bundle', 'name' => 'product.info.availability', 'as' => 'product_type_availability', 'template' => 'bundle/catalog/product/view/type/bundle/availability.phtml'), 'product.info.availability', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.availability');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/catalog_product_view_type_bundle', 'name' => 'product.info.bundle.options', 'as' => 'type_bundle_options', 'template' => 'bundle/catalog/product/view/type/bundle/options.phtml'), 'product.info.bundle.options', 'product.info.options.wrapper', array()), false);
$this->addItemRelation($item, 'product.info.bundle.options');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.info.bundle.options', function ($block) { return $block->addRenderer('select', 'bundle/catalog_product_view_type_bundle_option_select'); }, array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.bundle.options');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.info.bundle.options', function ($block) { return $block->addRenderer('multi', 'bundle/catalog_product_view_type_bundle_option_multi'); }, array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.bundle.options');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.info.bundle.options', function ($block) { return $block->addRenderer('radio', 'bundle/catalog_product_view_type_bundle_option_radio'); }, array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.bundle.options');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.info.bundle.options', function ($block) { return $block->addRenderer('checkbox', 'bundle/catalog_product_view_type_bundle_option_checkbox'); }, array(0 => 'product.info.options.wrapper')), false);
$this->addItemRelation($item, 'product.info.bundle.options');
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'insert'), 'product.info.options.wrapper', function ($block) { return $block->insert('product.info.bundle.options'); }, array()), false);
$this->addItemRelation($item, 'product.info.options.wrapper');
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('product.tierprices'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/catalog_product_view', 'name' => 'bundle.tierprices', 'as' => 'tierprices', 'before' => '-', 'template' => 'bundle/catalog/product/view/tierprices.phtml'), 'bundle.tierprices', 'product.info.options.wrapper.bottom', array()), false);
$this->addItemRelation($item, 'bundle.tierprices');
$this->addItemRelation($item, 'product.info.options.wrapper.bottom');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'cataloginventory/qtyincrements', 'name' => 'product.info.qtyincrements', 'before' => '-', 'template' => 'cataloginventory/qtyincrements.phtml'), 'product.info.qtyincrements', 'product.info.options.wrapper.bottom', array()), false);
$this->addItemRelation($item, 'product.info.qtyincrements');
$this->addItemRelation($item, 'product.info.options.wrapper.bottom');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'product.clone_prices', function ($block) { return $block->addPriceBlockType('bundle', 'bundle/catalog_product_price', 'bundle/catalog/product/view/price.phtml'); }, array()), false);
$this->addItemRelation($item, 'product.clone_prices');