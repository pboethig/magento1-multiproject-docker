<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'reports/product_viewed', 'before' => 'right.permanent.callout', 'name' => 'right.reports.product.viewed', 'template' => 'reports/product_viewed.phtml'), 'right.reports.product.viewed', 'right', array()), false);
$this->addItemRelation($item, 'right.reports.product.viewed');
$this->addItemRelation($item, 'right');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'reports/product_compared', 'before' => 'right.permanent.callout', 'name' => 'right.reports.product.compared', 'template' => 'reports/product_compared.phtml'), 'right.reports.product.compared', 'right', array()), false);
$this->addItemRelation($item, 'right.reports.product.compared');
$this->addItemRelation($item, 'right');