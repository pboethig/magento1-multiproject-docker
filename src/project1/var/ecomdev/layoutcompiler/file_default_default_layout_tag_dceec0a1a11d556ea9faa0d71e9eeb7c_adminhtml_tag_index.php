<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_tag', 'name' => 'adminhtml.tag.tag'), 'adminhtml.tag.tag', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.tag.tag');
$this->addItemRelation($item, 'content');