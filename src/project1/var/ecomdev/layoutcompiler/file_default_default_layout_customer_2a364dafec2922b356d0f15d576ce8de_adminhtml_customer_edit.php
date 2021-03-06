<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit', 'name' => 'customer_edit'), 'customer_edit', 'content', array()), false);
$this->addItemRelation($item, 'customer_edit');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'name' => 'optional_zip_countries', 'as' => 'optional_zip_countries', 'template' => 'directory/js/optional_zip_countries.phtml'), 'optional_zip_countries', 'head', array()), false);
$this->addItemRelation($item, 'optional_zip_countries');
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/adminhtml/product/composite/configure.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/configurable.js'); }, array()), false);
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tabs', 'name' => 'customer_edit_tabs'), 'customer_edit_tabs', 'left', array()), false);
$this->addItemRelation($item, 'customer_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_view', 'name' => 'customer_edit_tab_view', 'template' => 'customer/tab/view.phtml'), 'customer_edit_tab_view', 'customer_edit_tabs', array(0 => 'left')), false);
$this->addItemRelation($item, 'customer_edit_tab_view');
$this->addItemRelation($item, 'customer_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_view_sales', 'name' => 'sales', 'template' => 'customer/tab/view/sales.phtml', 'before' => '-'), 'sales', 'customer_edit_tab_view', array(0 => 'left', 1 => 'customer_edit_tabs')), false);
$this->addItemRelation($item, 'sales');
$this->addItemRelation($item, 'customer_edit_tab_view');
$this->addItemRelation($item, 'left');
$this->addItemRelation($item, 'customer_edit_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_edit_tab_view_accordion', 'name' => 'accordion'), 'accordion', 'customer_edit_tab_view', array(0 => 'left', 1 => 'customer_edit_tabs')), false);
$this->addItemRelation($item, 'accordion');
$this->addItemRelation($item, 'customer_edit_tab_view');
$this->addItemRelation($item, 'left');
$this->addItemRelation($item, 'customer_edit_tabs');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addTab'), 'customer_edit_tabs', function ($block) { return $block->addTab('customer_edit_tab_view', 'customer_edit_tab_view'); }, array(0 => 'left')), false);
$this->addItemRelation($item, 'customer_edit_tabs');
$this->addItemRelation($item, 'left');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'customer/edit/js.phtml', 'name' => 'customer.edit.js', 'as' => 'customer_edit_js'), 'customer.edit.js', 'js', array()), false);
$this->addItemRelation($item, 'customer.edit.js');
$this->addItemRelation($item, 'js');