<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_reorder', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_reorder'), 'sidebar_reorder', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_reorder');
$this->addItemRelation($item, 'content');