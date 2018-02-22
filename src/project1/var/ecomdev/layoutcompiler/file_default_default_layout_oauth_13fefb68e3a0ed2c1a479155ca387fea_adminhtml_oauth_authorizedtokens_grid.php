<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_authorizedTokens_grid', 'name' => 'oauth_authorizedTokens.grid', 'output' => 'toHtml'), 'oauth_authorizedTokens.grid', null, array()), false);
$this->addItemRelation($item, 'oauth_authorizedTokens.grid');
$this->addItemRelation($item, NULL);