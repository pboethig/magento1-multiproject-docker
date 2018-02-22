<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'customer/address_book', 'name' => 'address_book', 'template' => 'customer/address/book.phtml'), 'address_book', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'address_book');
$this->addItemRelation($item, 'my.account.wrapper');