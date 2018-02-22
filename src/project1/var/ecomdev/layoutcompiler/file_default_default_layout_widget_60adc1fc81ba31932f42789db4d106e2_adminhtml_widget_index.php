<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'wysiwyg_widget', 'type' => 'widget/adminhtml_widget', 'output' => 'toHtml'), 'wysiwyg_widget', null, array()), false);
$this->addItemRelation($item, 'wysiwyg_widget');
$this->addItemRelation($item, NULL);