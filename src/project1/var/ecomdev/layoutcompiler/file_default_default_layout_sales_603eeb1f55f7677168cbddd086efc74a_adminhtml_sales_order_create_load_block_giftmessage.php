<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_giftmessage', 'template' => 'sales/order/create/giftmessage.phtml', 'name' => 'giftmessage'), 'giftmessage', 'content', array()), false);
$this->addItemRelation($item, 'giftmessage');
$this->addItemRelation($item, 'content');