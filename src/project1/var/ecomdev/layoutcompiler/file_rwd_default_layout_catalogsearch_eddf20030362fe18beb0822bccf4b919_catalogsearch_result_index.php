<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/3columns.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalogsearch/layer', 'name' => 'catalogsearch.leftnav', 'after' => 'currency', 'template' => 'catalog/layer/view.phtml'), 'catalogsearch.leftnav', 'left_first', array()), false);
$this->addItemRelation($item, 'catalogsearch.leftnav');
$this->addItemRelation($item, 'left_first');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'catalog.leftnav.state.renderers', 'as' => 'state_renderers'), 'catalog.leftnav.state.renderers', 'catalogsearch.leftnav', array(0 => 'left_first')), false);
$this->addItemRelation($item, 'catalog.leftnav.state.renderers');
$this->addItemRelation($item, 'catalogsearch.leftnav');
$this->addItemRelation($item, 'left_first');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalogsearch/result', 'name' => 'search.result', 'template' => 'catalogsearch/result.phtml'), 'search.result', 'content', array()), false);
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_list', 'name' => 'search_result_list', 'template' => 'catalog/product/list.phtml'), 'search_result_list', 'search.result', array(0 => 'content')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product_list.name.after', 'as' => 'name.after'), 'product_list.name.after', 'search_result_list', array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'product_list.name.after');
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'product_list.after', 'as' => 'after'), 'product_list.after', 'search_result_list', array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'product_list.after');
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'catalog/product_list_toolbar', 'name' => 'product_list_toolbar', 'template' => 'catalog/product/list/toolbar.phtml'), 'product_list_toolbar', 'search_result_list', array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'product_list_toolbar');
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_pager', 'name' => 'product_list_toolbar_pager'), 'product_list_toolbar_pager', 'product_list_toolbar', array(0 => 'content', 1 => 'search.result', 2 => 'search_result_list')), false);
$this->addItemRelation($item, 'product_list_toolbar_pager');
$this->addItemRelation($item, 'product_list_toolbar');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'search_result_list');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'search_result_list', function ($block) { return $block->addColumnCountLayoutDepend('empty', '6'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'search_result_list', function ($block) { return $block->addColumnCountLayoutDepend('one_column', '5'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'search_result_list', function ($block) { return $block->addColumnCountLayoutDepend('two_columns_left', '4'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'search_result_list', function ($block) { return $block->addColumnCountLayoutDepend('two_columns_right', '4'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnCountLayoutDepend'), 'search_result_list', function ($block) { return $block->addColumnCountLayoutDepend('three_columns', '3'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setToolbarBlockName'), 'search_result_list', function ($block) { return $block->setToolbarBlockName('product_list_toolbar'); }, array(0 => 'content', 1 => 'search.result')), false);
$this->addItemRelation($item, 'search_result_list');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'search.result');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setListOrders'), 'search.result', function ($block) { return $block->setListOrders(); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setListModes'), 'search.result', function ($block) { return $block->setListModes(); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setListCollection'), 'search.result', function ($block) { return $block->setListCollection(); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'search.result');
$this->addItemRelation($item, 'content');