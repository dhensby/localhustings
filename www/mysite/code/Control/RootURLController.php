<?php

class RootURLController extends Controller {

    private static  $url_segment = 'home';

    private static $allowed_actions = array(
        'FindHustingForm',
    );

    public function Link() {
        return $this->config()->url_segment . '/';
    }

	/**
	 * @param SS_HTTPRequest $request
	 */
	public function index($request) {
		return $this;
	}

    public function FindHustingForm() {
        $form = FindHustingForm::create($this, __FUNCTION__);
        return $form;
    }

}
