<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_comment', 'template' => 'sales/order/create/comment.phtml', 'name' => 'comment'), 'comment', 'content', array()), false);
$this->addItemRelation($item, 'comment');
$this->addItemRelation($item, 'content');