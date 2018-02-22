<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'pagecache/adminhtml_cache_additional', 'name' => 'page.cache.additional', 'template' => 'pagecache/cache/additional.phtml'), 'page.cache.additional', 'cache.additional', array()), false);
$this->addItemRelation($item, 'page.cache.additional');
$this->addItemRelation($item, 'cache.additional');