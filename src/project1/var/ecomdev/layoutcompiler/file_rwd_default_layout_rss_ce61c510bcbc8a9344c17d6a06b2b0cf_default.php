<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/list', 'name' => 'head_rss', 'ifconfig' => 'rss/config/active'), 'head_rss', null, array()), false);
$this->addItemRelation($item, 'head_rss');
$this->addItemRelation($item, NULL);