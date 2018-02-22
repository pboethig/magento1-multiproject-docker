<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_newsletter', 'template' => 'sales/order/create/abstract.phtml', 'name' => 'newsletter'), 'newsletter', 'content', array()), false);
$this->addItemRelation($item, 'newsletter');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_newsletter_form', 'template' => 'sales/order/create/newsletter/form.phtml', 'name' => 'form'), 'form', 'newsletter', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'newsletter');
$this->addItemRelation($item, 'content');