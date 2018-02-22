<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_assigned_grid', 'name' => 'tag_assigned_grid', 'output' => 'toHtml'), 'tag_assigned_grid', null, array()), false);
$this->addItemRelation($item, 'tag_assigned_grid');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/widget_grid_serializer', 'name' => 'tag_grid_serializer', 'output' => 'toHtml'), 'tag_grid_serializer', null, array()), false);
$this->addItemRelation($item, 'tag_grid_serializer');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'initSerializerBlock'), 'tag_grid_serializer', function ($block) { return $block->initSerializerBlock('tag_assigned_grid', 'getRelatedProducts', 'tag_assigned_products', 'assigned_products'); }, array(0 => 'tag_grid_serializer')), false);
$this->addItemRelation($item, 'tag_grid_serializer');