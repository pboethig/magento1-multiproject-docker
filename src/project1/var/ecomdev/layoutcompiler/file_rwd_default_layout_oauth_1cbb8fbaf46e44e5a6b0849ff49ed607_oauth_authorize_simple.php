<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('oauth_root_handle_simple'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('header'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/authorize', 'name' => 'oauth.authorize.form', 'template' => 'oauth/authorize/form/login-simple.phtml'), 'oauth.authorize.form', 'content', array()), false);
$this->addItemRelation($item, 'oauth.authorize.form');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/authorize_button', 'name' => 'oauth.authorize.button', 'template' => 'oauth/authorize/button-simple.phtml'), 'oauth.authorize.button', 'content', array()), false);
$this->addItemRelation($item, 'oauth.authorize.button');
$this->addItemRelation($item, 'content');