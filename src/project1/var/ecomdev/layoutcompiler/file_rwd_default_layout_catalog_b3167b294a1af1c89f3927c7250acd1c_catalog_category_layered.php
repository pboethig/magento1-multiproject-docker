<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/layer_view', 'name' => 'catalog.leftnav', 'after' => 'currency', 'template' => 'catalog/layer/view.phtml'), 'catalog.leftnav', 'left_first', array()), false);
$this->addItemRelation($item, 'catalog.leftnav');
$this->addItemRelation($item, 'left_first');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'catalog.leftnav.state.renderers', 'as' => 'state_renderers'), 'catalog.leftnav.state.renderers', 'catalog.leftnav', array(0 => 'left_first')), false);
$this->addItemRelation($item, 'catalog.leftnav.state.renderers');
$this->addItemRelation($item, 'catalog.leftnav');
$this->addItemRelation($item, 'left_first');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/category_view', 'name' => 'category.products', 'template' => 'catalog/category/view.phtml'), 'category.products', 'content', array()), false);
$this->addItemRelation($item, 'category.products');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_list', 'name' => 'product_list', 'template' => 'catalog/product/list.phtml'), 'product_list', 'category.products', array(0 => 'content')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'category.products');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product_list.name.after', 'as' => 'name.after'), 'product_list.name.after', 'product_list', array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list.name.after');
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product_list.after', 'as' => 'after'), 'product_list.after', 'product_list', array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list.after');
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_list_toolbar', 'name' => 'product_list_toolbar', 'template' => 'catalog/product/list/toolbar.phtml'), 'product_list_toolbar', 'product_list', array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list_toolbar');
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_pager', 'name' => 'product_list_toolbar_pager'), 'product_list_toolbar_pager', 'product_list_toolbar', array(0 => 'content', 1 => 'category.products', 2 => 'product_list')), false);
$this->addItemRelation($item, 'product_list_toolbar_pager');
$this->addItemRelation($item, 'product_list_toolbar');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItemRelation($item, 'product_list');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'product_list', function ($block) { return $block->addColumnCountLayoutDepend('empty', '6'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'product_list', function ($block) { return $block->addColumnCountLayoutDepend('one_column', '5'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'product_list', function ($block) { return $block->addColumnCountLayoutDepend('two_columns_left', '4'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'product_list', function ($block) { return $block->addColumnCountLayoutDepend('two_columns_right', '4'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'product_list', function ($block) { return $block->addColumnCountLayoutDepend('three_columns', '3'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setToolbarBlockName'), 'product_list', function ($block) { return $block->setToolbarBlockName('product_list_toolbar'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setColumnCount'), 'product_list', function ($block) { return $block->setColumnCount('4'); }, array(0 => 'content', 1 => 'category.products')), false);
$this->addItemRelation($item, 'product_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'category.products');