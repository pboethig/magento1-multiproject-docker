<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('oauth_root_handle_simple'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('header'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/authorize_button', 'name' => 'oauth.authorize.confirm', 'template' => 'oauth/authorize/confirm-simple.phtml'), 'oauth.authorize.confirm', 'content', array()), false);
$this->addItemRelation($item, 'oauth.authorize.confirm');
$this->addItemRelation($item, 'content');