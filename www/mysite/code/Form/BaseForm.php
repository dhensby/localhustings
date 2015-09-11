<?php

abstract class BaseForm extends Form {

    public function __construct($controller, $name, $fieldList = null, $actionList = null, $validator = null) {
        if (!$fieldList) {
            $fieldList = $this->getCustomFieldList();
        }
        if (!$actionList) {
            $actionList = $this->getCustomActionList();
        }
        if (!$validator) {
            $validator = $this->getCustomValidator();
        }

        parent::__construct($controller, $name, $fieldList, $actionList, $validator);
    }

    abstract public function getCustomFieldList();

    public function getCustomActionList() {
        return FieldList::create(
            FormAction::create('doSubmit', 'Go')
                ->addExtraClass('btn btn-block btn-info')
        );
    }

    /**
     * @param array $data
     * @param Form $form
     * @param SS_HTTPRequest $request
     */
    abstract public function doSubmit($data, $form, $request);

    public function getCustomValidator() {
        return RequiredFields::create();
    }

}
