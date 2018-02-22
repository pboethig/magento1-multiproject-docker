<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'importexport/export/form/before.phtml', 'name' => 'export.form.before', 'alias' => 'form_before'), 'export.form.before', 'content', array()), false);
$this->addItemRelation($item, 'export.form.before');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'importexport/adminhtml_export_edit', 'name' => 'export.form.container'), 'export.form.container', 'content', array()), false);
$this->addItemRelation($item, 'export.form.container');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/template', 'template' => 'importexport/export/form/after.phtml', 'name' => 'export.form.after', 'alias' => 'form_after'), 'export.form.after', 'content', array()), false);
$this->addItemRelation($item, 'export.form.after');
$this->addItemRelation($item, 'content');