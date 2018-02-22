<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/order_new', 'output' => 'toHtml', 'name' => 'rss.order.new'), 'rss.order.new', null, array()), false);
$this->addItemRelation($item, 'rss.order.new');
$this->addItemRelation($item, NULL);