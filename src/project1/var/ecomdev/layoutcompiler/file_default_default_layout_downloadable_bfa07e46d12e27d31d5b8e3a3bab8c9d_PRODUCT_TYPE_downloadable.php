<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'downloadable/adminhtml_catalog_product_composite_fieldset_downloadable', 'name' => 'product.composite.fieldset.downloadable', 'before' => 'product.composite.fieldset.options', 'template' => 'downloadable/product/composite/fieldset/downloadable.phtml'), 'product.composite.fieldset.downloadable', 'product.composite.fieldset', array()), false);
$this->addItemRelation($item, 'product.composite.fieldset.downloadable');
$this->addItemRelation($item, 'product.composite.fieldset');