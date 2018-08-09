<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Exception\Exception;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Log\Log;
use Cake\I18n\Time;

/**
 * Service Controller
 *
 * This controller will treat as a Business layer
 */
class ServiceController extends AppController
{
    private $connectionManager = null;

    public function initialize() {
        parent::initialize();

        $this->connectionManager = ConnectionManager::get('default');
    }

    public function _saveSurveyResponse($surveyResponseData) {
        
        try {
            $this->connectionManager->begin();

            $surveyResponseTable = TableRegistry::get('SurveyResponse');

            if(count($surveyResponseData) > 0) {
                $surveyResponse = $surveyResponseTable->newEntity();
                $surveyResponse = $surveyResponseTable->patchEntity($surveyResponse, $surveyResponseData);

                if(!$surveyResponseTable->save($surveyResponse))
                    throw new Exception("Error occured while saving resonse", 1);
            }

            $this->connectionManager->commit();
        } catch (\Exception $ex) {
            $this->connectionManager->rollback();
            Log::write(LOG_ERR, '================================');
            Log::write(LOG_ERR, 'Message: '.$ex->getMessage());
            Log::write(LOG_ERR, 'Raw Message:');
            Log::write(LOG_ERR, $ex);
        }
    }

    public function _getSurveyResponse($from, $to) {
        // $surveyResponse = array();
        try {
            $this->connectionManager->begin();

            $surveyResponseTable = TableRegistry::get('SurveyResponse');

            $surveyResponse = $surveyResponseTable->find('all')
                                    ->where([
                                            'SurveyResponse.Created_Date BETWEEN "'.$from.' 00:00:00" AND "'.$to.' 23:59:59"'
                                        ])
                                    ->toArray();
            $this->connectionManager->commit();
        } catch (\Exception $ex) {
            $this->connectionManager->rollback();
            Log::write(LOG_ERR, '================================');
            Log::write(LOG_ERR, 'Message: '.$ex->getMessage());
            Log::write(LOG_ERR, 'Raw Message:');
            Log::write(LOG_ERR, $ex);
        }
        return $surveyResponse;
    }
}