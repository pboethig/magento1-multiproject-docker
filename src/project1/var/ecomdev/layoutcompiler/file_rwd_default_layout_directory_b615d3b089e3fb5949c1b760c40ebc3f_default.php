<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'optional_zip_countries', 'as' => 'optional_zip_countries', 'template' => 'directory/js/optional_zip_countries.phtml'), 'optional_zip_countries', 'head', array()), false);
$this->addItemRelation($item, 'optional_zip_countries');
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'directory/currency', 'name' => 'currency', 'as' => 'currency_switcher', 'template' => 'directory/currency.phtml'), 'currency', 'header', array()), false);
$this->addItemRelation($item, 'currency');
$this->addItemRelation($item, 'header');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'directory/currency', 'name' => 'footer_currency', 'after' => 'footer_store_language', 'template' => 'directory/currency.phtml'), 'footer_currency', 'footer', array()), false);
$this->addItemRelation($item, 'footer_currency');
$this->addItemRelation($item, 'footer');