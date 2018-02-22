<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'importexport/import/form/before.phtml', 'name' => 'import.form.before', 'alias' => 'form_before'), 'import.form.before', 'content', array()), false);
$this->addItemRelation($item, 'import.form.before');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'importexport/adminhtml_import_edit', 'name' => 'import.form.container'), 'import.form.container', 'content', array()), false);
$this->addItemRelation($item, 'import.form.container');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'importexport/import/form/after.phtml', 'name' => 'import.form.after', 'alias' => 'form_after'), 'import.form.after', 'content', array()), false);
$this->addItemRelation($item, 'import.form.after');
$this->addItemRelation($item, 'content');