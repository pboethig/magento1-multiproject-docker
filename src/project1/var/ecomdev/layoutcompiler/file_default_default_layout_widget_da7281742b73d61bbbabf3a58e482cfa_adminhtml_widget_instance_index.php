<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'widget/adminhtml_widget_instance', 'name' => 'widget_instance'), 'widget_instance', 'content', array()), false);
$this->addItemRelation($item, 'widget_instance');
$this->addItemRelation($item, 'content');