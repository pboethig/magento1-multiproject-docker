<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_authorizedTokens', 'name' => 'oauth_authorizedTokens'), 'oauth_authorizedTokens', 'content', array()), false);
$this->addItemRelation($item, 'oauth_authorizedTokens');
$this->addItemRelation($item, 'content');