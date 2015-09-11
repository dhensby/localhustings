<?php

class WardController extends Controller {

    private static $url_segment = 'ward';

    protected $templates = array('index' => array(
        'WardController',
        'RootURLController',
    ));


    public function Link() {
        return $this->config()->url_segment;
    }

    public function index($request) {
        return $this;
    }

    public function Candidates() {
        return ArrayList::create(array(
            ArrayData::create(array(
                  'Name' => 'Joe Bloggs',
                  'Party' =>  'Raving Monster Looney Party',
            )),
            ArrayData::create(array(
                  'Name' => 'Joe Bloggs',
                  'Party' =>  'Raving Monster Looney Party',
            )),
            ArrayData::create(array(
                  'Name' => 'Joe Bloggs',
                  'Party' =>  'Raving Monster Looney Party',
            )),
        ));
    }

    public function Questions() {
        return ArrayList::create(array(
             ArrayData::create(array(
                   'Question' => 'How well do you know the local area?',
                   'Votes' => 51
               )),
             ArrayData::create(array(
                   'Question' => 'What issues are most important to you in the local community?',
                   'Votes' => 50
               )),
             ArrayData::create(array(
                   'Question' => 'If you were elected would you always vote for the party line? If not, when wouldn’t you?',
                   'Votes' => 25
               )),
             ArrayData::create(array(
                   'Question' => 'What are the most important services the council provides and how would you protect these services?',
                   'Votes' => 10
               )),
             ArrayData::create(array(
                   'Question' => 'How would you make yourself accessible to local people?',
                   'Votes' => 8
               )),
         ));
    }

}
