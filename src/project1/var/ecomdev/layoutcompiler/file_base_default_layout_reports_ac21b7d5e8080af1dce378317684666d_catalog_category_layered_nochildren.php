<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right.reports.product.viewed'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'reports/product_viewed', 'before' => 'right.permanent.callout', 'name' => 'left.reports.product.viewed', 'template' => 'reports/product_viewed.phtml'), 'left.reports.product.viewed', 'right', array()), false);
$this->addItemRelation($item, 'left.reports.product.viewed');
$this->addItemRelation($item, 'right');