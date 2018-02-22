<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_consumer_edit', 'name' => 'oauth_consumer.edit'), 'oauth_consumer.edit', 'content', array()), false);
$this->addItemRelation($item, 'oauth_consumer.edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'oauth/adminhtml_oauth_consumer_edit_form', 'name' => 'form'), 'form', 'oauth_consumer.edit', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'oauth_consumer.edit');
$this->addItemRelation($item, 'content');