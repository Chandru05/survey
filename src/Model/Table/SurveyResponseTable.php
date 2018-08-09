<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SurveyResponse Model
 *
 * @method \App\Model\Entity\SurveyResponse get($primaryKey, $options = [])
 * @method \App\Model\Entity\SurveyResponse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SurveyResponse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SurveyResponse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SurveyResponse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SurveyResponse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SurveyResponse findOrCreate($search, callable $callback = null, $options = [])
 */
class SurveyResponseTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('survey_response');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('Nationality');

        $validator
            ->integer('Ethnicity_Race')
            ->allowEmpty('Ethnicity_Race');

        $validator
            ->allowEmpty('Ethnicity_Race_Other');

        $validator
            ->integer('Gender')
            ->allowEmpty('Gender');

        $validator
            ->allowEmpty('Birthyear');

        $validator
            ->allowEmpty('Institution');

        $validator
            ->allowEmpty('Country');

        $validator
            ->integer('Modeofstudy')
            ->allowEmpty('Modeofstudy');

        $validator
            ->integer('Institutiontype')
            ->allowEmpty('Institutiontype');

        $validator
            ->allowEmpty('Institutiontype_Other');

        $validator
            ->integer('Levelofeducation')
            ->allowEmpty('Levelofeducation');

        $validator
            ->allowEmpty('Levelofeducation_Other');

        $validator
            ->integer('Programme')
            ->allowEmpty('Programme');

        $validator
            ->allowEmpty('Programme_Other');

        $validator
            ->integer('Language')
            ->allowEmpty('Language');

        $validator
            ->allowEmpty('Language_Other');

        $validator
            ->integer('Firstlanguage')
            ->allowEmpty('Firstlanguage');

        $validator
            ->allowEmpty('Firstlanguage_Other');

        $validator
            ->integer('Plan')
            ->allowEmpty('Plan');

        $validator
            ->allowEmpty('Plan_Other');

        $validator
            ->integer('Influence_Institution')
            ->allowEmpty('Influence_Institution');

        $validator
            ->integer('Influence_Teachers')
            ->allowEmpty('Influence_Teachers');

        $validator
            ->integer('Influence_Jobmarket')
            ->allowEmpty('Influence_Jobmarket');

        $validator
            ->integer('Influence_Family')
            ->allowEmpty('Influence_Family');

        $validator
            ->integer('Influence_IndependentSelf')
            ->allowEmpty('Influence_IndependentSelf');

        $validator
            ->integer('Influence_friends')
            ->allowEmpty('Influence_friends');

        $validator
            ->integer('Influence_Media')
            ->allowEmpty('Influence_Media');

        $validator
            ->integer('Influence_CareerExhibition')
            ->allowEmpty('Influence_CareerExhibition');

        $validator
            ->integer('Influence_Other')
            ->allowEmpty('Influence_Other');

        $validator
            ->allowEmpty('Influence_Other_Specify');

        $validator
            ->integer('Guidance_classtime')
            ->allowEmpty('Guidance_classtime');

        $validator
            ->integer('Guidance_outsideclass')
            ->allowEmpty('Guidance_outsideclass');

        $validator
            ->integer('Guidance_duringbreaktime')
            ->allowEmpty('Guidance_duringbreaktime');

        $validator
            ->integer('Guidance_Viaemail')
            ->allowEmpty('Guidance_Viaemail');

        $validator
            ->integer('Guidance_Socialmedia')
            ->allowEmpty('Guidance_Socialmedia');

        $validator
            ->allowEmpty('Age_phone');

        $validator
            ->allowEmpty('Age_mobiledata');

        $validator
            ->allowEmpty('Age_Wifi');

        $validator
            ->integer('Frequent_Entertainment')
            ->allowEmpty('Frequent_Entertainment');

        $validator
            ->integer('Frequent_Education')
            ->allowEmpty('Frequent_Education');

        $validator
            ->integer('Frequent_Keepintouch')
            ->allowEmpty('Frequent_Keepintouch');

        $validator
            ->integer('Frequent_news')
            ->allowEmpty('Frequent_news');

        $validator
            ->integer('Frequent_otherpurpose')
            ->allowEmpty('Frequent_otherpurpose');

        $validator
            ->integer('Socialmedia_sites_Facebook')
            ->allowEmpty('Socialmedia_sites_Facebook');

        $validator
            ->integer('Socialmedia_sites_Youtube')
            ->allowEmpty('Socialmedia_sites_Youtube');

        $validator
            ->integer('Socialmedia_sites_Instagram')
            ->allowEmpty('Socialmedia_sites_Instagram');

        $validator
            ->integer('Socialmedia_sites_Qzone')
            ->allowEmpty('Socialmedia_sites_Qzone');

        $validator
            ->integer('Socialmedia_sites_weibo')
            ->allowEmpty('Socialmedia_sites_weibo');

        $validator
            ->integer('Socialmedia_sites_Twitter')
            ->allowEmpty('Socialmedia_sites_Twitter');

        $validator
            ->integer('Socialmedia_sites_reddit')
            ->allowEmpty('Socialmedia_sites_reddit');

        $validator
            ->integer('Socialmedia_sites_Pinterest')
            ->allowEmpty('Socialmedia_sites_Pinterest');

        $validator
            ->integer('Socialmedia_sites_Ask_fm')
            ->allowEmpty('Socialmedia_sites_Ask_fm');

        $validator
            ->integer('Socialmedia_sites_Tumblr')
            ->allowEmpty('Socialmedia_sites_Tumblr');

        $validator
            ->integer('Socialmedia_sites_Flickr')
            ->allowEmpty('Socialmedia_sites_Flickr');

        $validator
            ->integer('Socialmedia_sites_Google')
            ->allowEmpty('Socialmedia_sites_Google');

        $validator
            ->integer('Socialmedia_app_Whatsapp')
            ->allowEmpty('Socialmedia_app_Whatsapp');

        $validator
            ->integer('Socialmedia_app_Messenger')
            ->allowEmpty('Socialmedia_app_Messenger');

        $validator
            ->integer('Socialmedia_app_WeChat')
            ->allowEmpty('Socialmedia_app_WeChat');

        $validator
            ->integer('Socialmedia_app_Instagram')
            ->allowEmpty('Socialmedia_app_Instagram');

        $validator
            ->integer('Socialmedia_app_Qzone')
            ->allowEmpty('Socialmedia_app_Qzone');

        $validator
            ->integer('Socialmedia_app_Viber')
            ->allowEmpty('Socialmedia_app_Viber');

        $validator
            ->integer('Socialmedia_app_LINE')
            ->allowEmpty('Socialmedia_app_LINE');

        $validator
            ->integer('Socialmedia_app_Snapchat')
            ->allowEmpty('Socialmedia_app_Snapchat');

        $validator
            ->integer('Socialmedia_app_YY')
            ->allowEmpty('Socialmedia_app_YY');

        $validator
            ->integer('Socialmediausage_rank')
            ->allowEmpty('Socialmediausage_rank');

        $validator
            ->integer('studyindependent')
            ->allowEmpty('studyindependent');

        $validator
            ->integer('brainstorm')
            ->allowEmpty('brainstorm');

        $validator
            ->integer('direction')
            ->allowEmpty('direction');

        $validator
            ->integer('material_digital')
            ->allowEmpty('material_digital');

        $validator
            ->integer('memorizefact')
            ->allowEmpty('memorizefact');

        $validator
            ->integer('visualize')
            ->allowEmpty('visualize');

        $validator
            ->integer('shortnote')
            ->allowEmpty('shortnote');

        $validator
            ->integer('discuss_friends')
            ->allowEmpty('discuss_friends');

        $validator
            ->integer('differentsource')
            ->allowEmpty('differentsource');

        $validator
            ->integer('writedown')
            ->allowEmpty('writedown');

        $validator
            ->integer('ownresponsibility')
            ->allowEmpty('ownresponsibility');

        $validator
            ->integer('motivation_instructor')
            ->allowEmpty('motivation_instructor');

        $validator
            ->integer('trust_instructor')
            ->allowEmpty('trust_instructor');

        $validator
            ->integer('guidance_friends')
            ->allowEmpty('guidance_friends');

        $validator
            ->integer('Q1_a')
            ->allowEmpty('Q1_a');

        $validator
            ->integer('Q1_b')
            ->allowEmpty('Q1_b');

        $validator
            ->integer('Q2_a')
            ->allowEmpty('Q2_a');

        $validator
            ->integer('Q2_b')
            ->allowEmpty('Q2_b');

        $validator
            ->integer('Q3_a')
            ->allowEmpty('Q3_a');

        $validator
            ->integer('Q3_b')
            ->allowEmpty('Q3_b');

        $validator
            ->integer('Q4_a')
            ->allowEmpty('Q4_a');

        $validator
            ->integer('Q4_b')
            ->allowEmpty('Q4_b');

        $validator
            ->integer('Q5_a')
            ->allowEmpty('Q5_a');

        $validator
            ->integer('Q5_b')
            ->allowEmpty('Q5_b');

        $validator
            ->integer('Q6_a')
            ->allowEmpty('Q6_a');

        $validator
            ->integer('Q6_b')
            ->allowEmpty('Q6_b');

        $validator
            ->integer('Q7_a')
            ->allowEmpty('Q7_a');

        $validator
            ->integer('Q7_b')
            ->allowEmpty('Q7_b');

        $validator
            ->integer('Q8_a')
            ->allowEmpty('Q8_a');

        $validator
            ->integer('Q8_b')
            ->allowEmpty('Q8_b');

        $validator
            ->integer('Q9_a')
            ->allowEmpty('Q9_a');

        $validator
            ->integer('Q9_b')
            ->allowEmpty('Q9_b');

        $validator
            ->integer('Q10_a')
            ->allowEmpty('Q10_a');

        $validator
            ->integer('Q10_b')
            ->allowEmpty('Q10_b');

        $validator
            ->integer('Q11_a')
            ->allowEmpty('Q11_a');

        $validator
            ->integer('Q11_b')
            ->allowEmpty('Q11_b');

        $validator
            ->integer('Q12_a')
            ->allowEmpty('Q12_a');

        $validator
            ->integer('Q12_b')
            ->allowEmpty('Q12_b');

        $validator
            ->integer('Q13_a')
            ->allowEmpty('Q13_a');

        $validator
            ->integer('Q13_b')
            ->allowEmpty('Q13_b');

        $validator
            ->integer('Q14_a')
            ->allowEmpty('Q14_a');

        $validator
            ->integer('Q14_b')
            ->allowEmpty('Q14_b');

        $validator
            ->integer('Q15_a')
            ->allowEmpty('Q15_a');

        $validator
            ->integer('Q15_b')
            ->allowEmpty('Q15_b');

        $validator
            ->integer('Q16_a')
            ->allowEmpty('Q16_a');

        $validator
            ->integer('Q16_b')
            ->allowEmpty('Q16_b');

        $validator
            ->integer('Q17_a')
            ->allowEmpty('Q17_a');

        $validator
            ->integer('Q17_b')
            ->allowEmpty('Q17_b');

        $validator
            ->integer('Q18_a')
            ->allowEmpty('Q18_a');

        $validator
            ->integer('Q18_b')
            ->allowEmpty('Q18_b');

        $validator
            ->integer('Q19_a')
            ->allowEmpty('Q19_a');

        $validator
            ->integer('Q19_b')
            ->allowEmpty('Q19_b');

        $validator
            ->integer('Q20_a')
            ->allowEmpty('Q20_a');

        $validator
            ->integer('Q20_b')
            ->allowEmpty('Q20_b');

        $validator
            ->integer('Q21_a')
            ->allowEmpty('Q21_a');

        $validator
            ->integer('Q21_b')
            ->allowEmpty('Q21_b');

        $validator
            ->integer('Q22_a')
            ->allowEmpty('Q22_a');

        $validator
            ->integer('Q22_b')
            ->allowEmpty('Q22_b');

        $validator
            ->integer('Q23_a')
            ->allowEmpty('Q23_a');

        $validator
            ->integer('Q23_b')
            ->allowEmpty('Q23_b');

        $validator
            ->integer('Q24_a')
            ->allowEmpty('Q24_a');

        $validator
            ->integer('Q24_b')
            ->allowEmpty('Q24_b');

        $validator
            ->integer('Q25_a')
            ->allowEmpty('Q25_a');

        $validator
            ->integer('Q25_b')
            ->allowEmpty('Q25_b');

        $validator
            ->integer('Q26_a')
            ->allowEmpty('Q26_a');

        $validator
            ->integer('Q26_b')
            ->allowEmpty('Q26_b');

        $validator
            ->integer('Q27_a')
            ->allowEmpty('Q27_a');

        $validator
            ->integer('Q27_b')
            ->allowEmpty('Q27_b');

        $validator
            ->integer('Q28_a')
            ->allowEmpty('Q28_a');

        $validator
            ->integer('Q28_b')
            ->allowEmpty('Q28_b');

        $validator
            ->integer('Q29_a')
            ->allowEmpty('Q29_a');

        $validator
            ->integer('Q29_b')
            ->allowEmpty('Q29_b');

        $validator
            ->integer('Q30_a')
            ->allowEmpty('Q30_a');

        $validator
            ->integer('Q30_b')
            ->allowEmpty('Q30_b');

        $validator
            ->integer('Q31_a')
            ->allowEmpty('Q31_a');

        $validator
            ->integer('Q31_b')
            ->allowEmpty('Q31_b');

        $validator
            ->integer('Q32_a')
            ->allowEmpty('Q32_a');

        $validator
            ->integer('Q32_b')
            ->allowEmpty('Q32_b');

        $validator
            ->integer('Q33_a')
            ->allowEmpty('Q33_a');

        $validator
            ->integer('Q33_b')
            ->allowEmpty('Q33_b');

        $validator
            ->integer('Q34_a')
            ->allowEmpty('Q34_a');

        $validator
            ->integer('Q34_b')
            ->allowEmpty('Q34_b');

        $validator
            ->integer('Q35_a')
            ->allowEmpty('Q35_a');

        $validator
            ->integer('Q35_b')
            ->allowEmpty('Q35_b');

        $validator
            ->integer('Q36_a')
            ->allowEmpty('Q36_a');

        $validator
            ->integer('Q36_b')
            ->allowEmpty('Q36_b');

        $validator
            ->integer('Q37_a')
            ->allowEmpty('Q37_a');

        $validator
            ->integer('Q37_b')
            ->allowEmpty('Q37_b');

        $validator
            ->integer('Q38_a')
            ->allowEmpty('Q38_a');

        $validator
            ->integer('Q38_b')
            ->allowEmpty('Q38_b');

        $validator
            ->integer('Q39_a')
            ->allowEmpty('Q39_a');

        $validator
            ->integer('Q39_b')
            ->allowEmpty('Q39_b');

        $validator
            ->integer('Q40_a')
            ->allowEmpty('Q40_a');

        $validator
            ->integer('Q40_b')
            ->allowEmpty('Q40_b');

        $validator
            ->integer('Q41_a')
            ->allowEmpty('Q41_a');

        $validator
            ->integer('Q41_b')
            ->allowEmpty('Q41_b');

        $validator
            ->integer('Q42_a')
            ->allowEmpty('Q42_a');

        $validator
            ->integer('Q42_b')
            ->allowEmpty('Q42_b');

        $validator
            ->integer('Q43_a')
            ->allowEmpty('Q43_a');

        $validator
            ->integer('Q43_b')
            ->allowEmpty('Q43_b');

        $validator
            ->integer('Q44_a')
            ->allowEmpty('Q44_a');

        $validator
            ->integer('Q44_b')
            ->allowEmpty('Q44_b');

        $validator
            ->dateTime('Created_Date')
            // ->requirePresence('Created_Date', 'create')
            ->allowEmpty('Created_Date');

        return $validator;
    }
}
