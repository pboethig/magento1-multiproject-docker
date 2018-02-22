<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_admin_token_grid', 'name' => 'oauth_admin_token.grid', 'output' => 'toHtml'), 'oauth_admin_token.grid', null, array()), false);
$this->addItemRelation($item, 'oauth_admin_token.grid');
$this->addItemRelation($item, NULL);