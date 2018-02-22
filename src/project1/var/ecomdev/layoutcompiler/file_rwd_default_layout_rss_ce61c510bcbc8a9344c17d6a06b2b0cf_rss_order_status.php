<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/order_status', 'output' => 'toHtml', 'name' => 'rss.order.status'), 'rss.order.status', null, array()), false);
$this->addItemRelation($item, 'rss.order.status');
$this->addItemRelation($item, NULL);