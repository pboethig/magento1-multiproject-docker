<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_consumer_grid', 'name' => 'oauth_consumer.grid', 'output' => 'toHtml'), 'oauth_consumer.grid', null, array()), false);
$this->addItemRelation($item, 'oauth_consumer.grid');
$this->addItemRelation($item, NULL);