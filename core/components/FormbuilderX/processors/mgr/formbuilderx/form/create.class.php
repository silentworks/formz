<?php
class FormbuilderXCreateProcessor extends modObjectCreateProcessor {
    /* Class in model directory */
    public $classKey = 'fbxForms';

    /* Language package to load */
    public $languageTopics = array('FormbuilderX:default');

    /* Used to load the correct language error message */
    public $objectType = 'FormbuilderX.form';

    public function beforeSave() {
        // Setting creator and time created
        $this->object->set('createdby', $this->modx->user->get('id'));
        $this->object->set('createdon', date('Y-m-d H:i:s',time()));

    	return parent::beforeSave();
    }
}

return 'FormbuilderXCreateProcessor';
