<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_admin_token', 'name' => 'oauth_admin_token'), 'oauth_admin_token', 'content', array()), false);
$this->addItemRelation($item, 'oauth_admin_token');
$this->addItemRelation($item, 'content');