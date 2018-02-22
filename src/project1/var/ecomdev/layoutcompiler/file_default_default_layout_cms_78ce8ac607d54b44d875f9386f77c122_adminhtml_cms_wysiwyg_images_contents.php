<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('name' => 'wysiwyg_images.files', 'type' => 'adminhtml/cms_wysiwyg_images_content_files', 'template' => 'cms/browser/content/files.phtml', 'output' => 'toHtml'), 'wysiwyg_images.files', null, array()), false);
$this->addItemRelation($item, 'wysiwyg_images.files');
$this->addItemRelation($item, NULL);