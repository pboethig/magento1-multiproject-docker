<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('oauth_root_handle_simple'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('header'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/authorize_button', 'name' => 'oauth.authorize.reject', 'template' => 'oauth/authorize/reject-simple.phtml'), 'oauth.authorize.reject', 'content', array()), false);
$this->addItemRelation($item, 'oauth.authorize.reject');
$this->addItemRelation($item, 'content');