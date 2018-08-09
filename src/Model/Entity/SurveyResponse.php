<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SurveyResponse Entity
 *
 * @property int $id
 * @property string $Nationality
 * @property int $Ethnicity_Race
 * @property string $Ethnicity_Race_Other
 * @property int $Gender
 * @property string $Birthyear
 * @property string $Institution
 * @property string $Country
 * @property int $Modeofstudy
 * @property int $Institutiontype
 * @property string $Institutiontype_Other
 * @property int $Levelofeducation
 * @property string $Levelofeducation_Other
 * @property int $Programme
 * @property string $Programme_Other
 * @property int $Language
 * @property string $Language_Other
 * @property int $Firstlanguage
 * @property string $Firstlanguage_Other
 * @property int $Plan
 * @property string $Plan_Other
 * @property int $Influence_Institution
 * @property int $Influence_Teachers
 * @property int $Influence_Jobmarket
 * @property int $Influence_Family
 * @property int $Influence_IndependentSelf
 * @property int $Influence_friends
 * @property int $Influence_Media
 * @property int $Influence_CareerExhibition
 * @property int $Influence_Other
 * @property string $Influence_Other_Specify
 * @property int $Guidance_classtime
 * @property int $Guidance_outsideclass
 * @property int $Guidance_duringbreaktime
 * @property int $Guidance_Viaemail
 * @property int $Guidance_Socialmedia
 * @property string $Age_phone
 * @property string $Age_mobiledata
 * @property string $Age_Wifi
 * @property int $Frequent_Entertainment
 * @property int $Frequent_Education
 * @property int $Frequent_Keepintouch
 * @property int $Frequent_news
 * @property int $Frequent_otherpurpose
 * @property int $Socialmedia_sites_Facebook
 * @property int $Socialmedia_sites_Youtube
 * @property int $Socialmedia_sites_Instagram
 * @property int $Socialmedia_sites_Qzone
 * @property int $Socialmedia_sites_weibo
 * @property int $Socialmedia_sites_Twitter
 * @property int $Socialmedia_sites_reddit
 * @property int $Socialmedia_sites_Pinterest
 * @property int $Socialmedia_sites_Ask_fm
 * @property int $Socialmedia_sites_Tumblr
 * @property int $Socialmedia_sites_Flickr
 * @property int $Socialmedia_sites_Google
 * @property int $Socialmedia_app_Whatsapp
 * @property int $Socialmedia_app_Messenger
 * @property int $Socialmedia_app_WeChat
 * @property int $Socialmedia_app_Instagram
 * @property int $Socialmedia_app_Qzone
 * @property int $Socialmedia_app_Viber
 * @property int $Socialmedia_app_LINE
 * @property int $Socialmedia_app_Snapchat
 * @property int $Socialmedia_app_YY
 * @property int $Socialmediausage_rank
 * @property int $studyindependent
 * @property int $brainstorm
 * @property int $direction
 * @property int $material_digital
 * @property int $memorizefact
 * @property int $visualize
 * @property int $shortnote
 * @property int $discuss_friends
 * @property int $differentsource
 * @property int $writedown
 * @property int $ownresponsibility
 * @property int $motivation_instructor
 * @property int $trust_instructor
 * @property int $guidance_friends
 * @property int $Q1_a
 * @property int $Q1_b
 * @property int $Q2_a
 * @property int $Q2_b
 * @property int $Q3_a
 * @property int $Q3_b
 * @property int $Q4_a
 * @property int $Q4_b
 * @property int $Q5_a
 * @property int $Q5_b
 * @property int $Q6_a
 * @property int $Q6_b
 * @property int $Q7_a
 * @property int $Q7_b
 * @property int $Q8_a
 * @property int $Q8_b
 * @property int $Q9_a
 * @property int $Q9_b
 * @property int $Q10_a
 * @property int $Q10_b
 * @property int $Q11_a
 * @property int $Q11_b
 * @property int $Q12_a
 * @property int $Q12_b
 * @property int $Q13_a
 * @property int $Q13_b
 * @property int $Q14_a
 * @property int $Q14_b
 * @property int $Q15_a
 * @property int $Q15_b
 * @property int $Q16_a
 * @property int $Q16_b
 * @property int $Q17_a
 * @property int $Q17_b
 * @property int $Q18_a
 * @property int $Q18_b
 * @property int $Q19_a
 * @property int $Q19_b
 * @property int $Q20_a
 * @property int $Q20_b
 * @property int $Q21_a
 * @property int $Q21_b
 * @property int $Q22_a
 * @property int $Q22_b
 * @property int $Q23_a
 * @property int $Q23_b
 * @property int $Q24_a
 * @property int $Q24_b
 * @property int $Q25_a
 * @property int $Q25_b
 * @property int $Q26_a
 * @property int $Q26_b
 * @property int $Q27_a
 * @property int $Q27_b
 * @property int $Q28_a
 * @property int $Q28_b
 * @property int $Q29_a
 * @property int $Q29_b
 * @property int $Q30_a
 * @property int $Q30_b
 * @property int $Q31_a
 * @property int $Q31_b
 * @property int $Q32_a
 * @property int $Q32_b
 * @property int $Q33_a
 * @property int $Q33_b
 * @property int $Q34_a
 * @property int $Q34_b
 * @property int $Q35_a
 * @property int $Q35_b
 * @property int $Q36_a
 * @property int $Q36_b
 * @property int $Q37_a
 * @property int $Q37_b
 * @property int $Q38_a
 * @property int $Q38_b
 * @property int $Q39_a
 * @property int $Q39_b
 * @property int $Q40_a
 * @property int $Q40_b
 * @property int $Q41_a
 * @property int $Q41_b
 * @property int $Q42_a
 * @property int $Q42_b
 * @property int $Q43_a
 * @property int $Q43_b
 * @property int $Q44_a
 * @property int $Q44_b
 * @property \Cake\I18n\Time $Created_Date
 */
class SurveyResponse extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
