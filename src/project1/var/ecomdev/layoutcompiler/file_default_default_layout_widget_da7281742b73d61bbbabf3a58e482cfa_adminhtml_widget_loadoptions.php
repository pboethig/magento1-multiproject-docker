<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'wysiwyg_widget.options', 'type' => 'widget/adminhtml_widget_options', 'output' => 'toHtml'), 'wysiwyg_widget.options', null, array()), false);
$this->addItemRelation($item, 'wysiwyg_widget.options');
$this->addItemRelation($item, NULL);