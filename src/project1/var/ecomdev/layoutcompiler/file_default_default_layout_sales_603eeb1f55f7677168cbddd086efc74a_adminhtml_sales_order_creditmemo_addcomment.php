<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_view_comments', 'name' => 'creditmemo_comments'), 'creditmemo_comments', null, array()), false);
$this->addItemRelation($item, 'creditmemo_comments');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_comments_view', 'name' => 'order_comments', 'template' => 'sales/order/comments/view.phtml'), 'order_comments', 'creditmemo_comments', array()), false);
$this->addItemRelation($item, 'order_comments');
$this->addItemRelation($item, 'creditmemo_comments');