<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_consumer', 'name' => 'oauth_consumer'), 'oauth_consumer', 'content', array()), false);
$this->addItemRelation($item, 'oauth_consumer');
$this->addItemRelation($item, 'content');