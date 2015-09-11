<?php

class FindHustingForm extends BaseForm {

    public function getCustomFieldList() {
        return FieldList::create(
            TextField::create('Postcode', '')
                ->setAttribute('placeholder', 'Postode')
        );
    }

    public function getCustomActionList() {
        $actions = parent::getCustomActionList();

        $actions->first()->setTitle('Find hustings');

        return $actions;
    }

    public function doSubmit($data, $form, $request) {
        $this->getController()->redirect('/ward');
    }

}
