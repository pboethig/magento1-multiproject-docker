<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_compared', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_compared'), 'sidebar_compared', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_compared');
$this->addItemRelation($item, 'content');