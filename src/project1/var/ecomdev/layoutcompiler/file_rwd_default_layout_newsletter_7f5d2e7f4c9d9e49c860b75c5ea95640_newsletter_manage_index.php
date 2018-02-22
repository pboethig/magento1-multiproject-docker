<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'customer/newsletter', 'name' => 'customer_newsletter'), 'customer_newsletter', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer_newsletter');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'customer.newsletter.form.before', 'as' => 'form_before', 'translate' => 'label'), 'customer.newsletter.form.before', 'customer_newsletter', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'customer.newsletter.form.before');
$this->addItemRelation($item, 'customer_newsletter');
$this->addItemRelation($item, 'my.account.wrapper');