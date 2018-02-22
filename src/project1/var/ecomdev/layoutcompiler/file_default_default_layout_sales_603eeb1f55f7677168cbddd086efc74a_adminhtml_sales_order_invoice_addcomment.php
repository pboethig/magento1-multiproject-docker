<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_invoice_view_comments', 'name' => 'invoice_comments'), 'invoice_comments', null, array()), false);
$this->addItemRelation($item, 'invoice_comments');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_comments_view', 'name' => 'order_comments', 'template' => 'sales/order/comments/view.phtml'), 'order_comments', 'invoice_comments', array()), false);
$this->addItemRelation($item, 'order_comments');
$this->addItemRelation($item, 'invoice_comments');