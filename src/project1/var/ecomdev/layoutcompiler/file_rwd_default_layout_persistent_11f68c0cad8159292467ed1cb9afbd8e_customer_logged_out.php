<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/reorder_sidebar', 'name' => 'sale.reorder.sidebar', 'as' => 'reorder', 'template' => 'sales/reorder/sidebar.phtml'), 'sale.reorder.sidebar', 'right', array()), false);
$this->addItemRelation($item, 'sale.reorder.sidebar');
$this->addItemRelation($item, 'right');