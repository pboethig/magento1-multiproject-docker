<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'category.tree', 'type' => 'adminhtml/catalog_category_tree', 'template' => 'catalog/category/tree.phtml'), 'category.tree', 'left', array()), false);
$this->addItemRelation($item, 'category.tree');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'category.edit', 'type' => 'adminhtml/catalog_category_edit', 'template' => 'catalog/category/edit.phtml'), 'category.edit', 'content', array()), false);
$this->addItemRelation($item, 'category.edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'template' => 'catalog/wysiwyg/js.phtml', 'name' => 'catalog.wysiwyg.js'), 'catalog.wysiwyg.js', 'js', array()), false);
$this->addItemRelation($item, 'catalog.wysiwyg.js');
$this->addItemRelation($item, 'js');