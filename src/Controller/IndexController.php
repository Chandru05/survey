<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\ServiceController;

class IndexController extends AppController
{
    private $service;

    public function initialize() {
        parent::initialize();

        //initializing object for service controller
        $this->service = new ServiceController();
    }

    public function index() {
        if($this->request->is('post')) {
            $data = $this->request->data;
            $processedData = array();
            foreach ($data as $column => $value) {
                if(strpos($column, 'Q') === 0) {
                    $processedData[$column.'_a'] = ($value == 1) ? 1 : 0;
                    $processedData[$column.'_b'] = ($value == 2) ? 1 : 0;
                } elseif(is_array($value)) {
                    foreach($value as $selectedValue) {
                        $processedData[$column.'_'.$selectedValue] = 1;
                    }
                } else {
                    $processedData[$column] = $value;
                }
            }
            $this->service->_saveSurveyResponse($processedData);
            $this->redirect('/success');
        }

        if($this->request->query('lang') == 'cn' ) {
            $this->render('chinese');
        }

        if($this->request->query('lang') == 'id' ) {
            $this->render('indonesian');
        }

        $this->set('lang', $this->request->query('lang'));
    }

    public function success() {

    }

    public function report() {

    }

    public function export() {
        if($this->request->is('post')) {
            $this->response->download("export.csv");
            $data = $this->service->_getSurveyResponse($this->request->data['from'], $this->request->data['to']);
            $this->set(compact('data'));

            // $this->layout = 'ajax';
            $this->viewBuilder()->layout('ajax');

            return;
        } else {
            $this->redirect('/report');
        }
    }
}