<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'bundle/adminhtml_catalog_product_composite_fieldset_bundle', 'before' => 'product.composite.fieldset.options', 'name' => 'product.composite.fieldset.bundle', 'template' => 'bundle/product/composite/fieldset/options/bundle.phtml'), 'product.composite.fieldset.bundle', 'product.composite.fieldset', array()), false);
$this->addItemRelation($item, 'product.composite.fieldset.bundle');
$this->addItemRelation($item, 'product.composite.fieldset');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.composite.fieldset.bundle', function ($block) { return $block->addRenderer('select', 'bundle/adminhtml_catalog_product_composite_fieldset_options_type_select'); }, array(0 => 'product.composite.fieldset')), false);
$this->addItemRelation($item, 'product.composite.fieldset.bundle');
$this->addItemRelation($item, 'product.composite.fieldset');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.composite.fieldset.bundle', function ($block) { return $block->addRenderer('multi', 'bundle/adminhtml_catalog_product_composite_fieldset_options_type_multi'); }, array(0 => 'product.composite.fieldset')), false);
$this->addItemRelation($item, 'product.composite.fieldset.bundle');
$this->addItemRelation($item, 'product.composite.fieldset');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.composite.fieldset.bundle', function ($block) { return $block->addRenderer('radio', 'bundle/adminhtml_catalog_product_composite_fieldset_options_type_radio'); }, array(0 => 'product.composite.fieldset')), false);
$this->addItemRelation($item, 'product.composite.fieldset.bundle');
$this->addItemRelation($item, 'product.composite.fieldset');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addRenderer'), 'product.composite.fieldset.bundle', function ($block) { return $block->addRenderer('checkbox', 'bundle/adminhtml_catalog_product_composite_fieldset_options_type_checkbox'); }, array(0 => 'product.composite.fieldset')), false);
$this->addItemRelation($item, 'product.composite.fieldset.bundle');
$this->addItemRelation($item, 'product.composite.fieldset');