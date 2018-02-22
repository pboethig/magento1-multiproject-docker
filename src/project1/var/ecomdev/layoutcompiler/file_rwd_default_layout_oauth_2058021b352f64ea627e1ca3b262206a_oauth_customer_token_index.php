<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/customer_token_list', 'name' => 'oauth_customer_token_list', 'template' => 'oauth/customer/token/list.phtml'), 'oauth_customer_token_list', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'oauth_customer_token_list');
$this->addItemRelation($item, 'my.account.wrapper');