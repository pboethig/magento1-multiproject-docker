<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tag/popular', 'name' => 'tags_popular', 'template' => 'tag/popular.phtml'), 'tags_popular', 'left', array()), false);
$this->addItemRelation($item, 'tags_popular');
$this->addItemRelation($item, 'left');