<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/configurableswatches/product-media.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/configurableswatches/swatches-product.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setGalleryFilterHelper'), 'product.info.media', function ($block) { return $block->setGalleryFilterHelper('configurableswatches/productimg'); }, array()), false);
$this->addItemRelation($item, 'product.info.media');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setGalleryFilterMethod'), 'product.info.media', function ($block) { return $block->setGalleryFilterMethod('filterImageInGallery'); }, array()), false);
$this->addItemRelation($item, 'product.info.media');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'configurableswatches/catalog_media_js_product', 'name' => 'configurableswatches.media.js.product'), 'configurableswatches.media.js.product', 'product.info.media.after', array()), false);
$this->addItemRelation($item, 'configurableswatches.media.js.product');
$this->addItemRelation($item, 'product.info.media.after');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'configurableswatches/catalog_product_view_type_configurable_swatches', 'template' => 'configurableswatches/catalog/product/view/type/options/configurable/swatches.phtml', '_ecomdev_system_option' => array('is_anonymous' => true)), 'ANONYMOUS_5a8eb65e3c9fa2.79192920', 'product.info.options.configurable.renderers', array()), false);
$this->addItemRelation($item, 'ANONYMOUS_5a8eb65e3c9fa2.79192920');
$this->addItemRelation($item, 'product.info.options.configurable.renderers');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'template' => 'configurableswatches/catalog/product/view/type/configurable/swatch-js.phtml', '_ecomdev_system_option' => array('is_anonymous' => true)), 'ANONYMOUS_5a8eb65e3ca453.54572241', 'product.info.options.configurable.after', array()), false);
$this->addItemRelation($item, 'ANONYMOUS_5a8eb65e3ca453.54572241');
$this->addItemRelation($item, 'product.info.options.configurable.after');