<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_pcompared', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_pcompared'), 'sidebar_pcompared', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_pcompared');
$this->addItemRelation($item, 'content');