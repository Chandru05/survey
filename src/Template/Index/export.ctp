<?php
$columns = array(
    "Nationality",
    "Ethnicity_Race",
    "Gender",
    "Birthyear",
    "Institution",
    "Country",
    "Modeofstudy",
    "Institutiontype",
    "Levelofeducation",
    "Programme",
    "Language",
    "Firstlanguage",
    "Plan",
    "Influence_Institution",
    "Influence_Teachers",
    "Influence_Jobmarket",
    "Influence_Family",
    "Influence_IndependentSelf",
    "Influence_friends",
    "Influence_Media",
    "Influence_CareerExhibition",
    "Influence_Other",
    "Guidance_classtime",
    "Guidance_outsideclass",
    "Guidance_duringbreaktime",
    "Guidance_Viaemail",
    "Guidance_Socialmedia",
    "Age_phone",
    "Age_mobiledata",
    "Age_Wifi",
    "Frequent_Entertainment",
    "Frequent_Education",
    "Frequent_Keepintouch",
    "Frequent_news",
    "Frequent_otherpurpose",
    "Socialmedia_sites_Facebook",
    "Socialmedia_sites_Youtube",
    "Socialmedia_sites_Instagram",
    "Socialmedia_sites_Qzone",
    "Socialmedia_sites_weibo",
    "Socialmedia_sites_Twitter",
    "Socialmedia_sites_reddit",
    "Socialmedia_sites_Pinterest",
    "Socialmedia_sites_Ask_fm",
    "Socialmedia_sites_Tumblr",
    "Socialmedia_sites_Flickr",
    "Socialmedia_sites_Google",
    "Socialmedia_app_Whatsapp",
    "Socialmedia_app_Messenger",
    "Socialmedia_app_WeChat",
    "Socialmedia_app_Instagram",
    "Socialmedia_app_Qzone",
    "Socialmedia_app_Viber",
    "Socialmedia_app_LINE",
    "Socialmedia_app_Snapchat",
    "Socialmedia_app_YY",
    "Socialmediausage_rank",
    "studyindependent",
    "brainstorm",
    "direction",
    "material_digital",
    "memorizefact",
    "visualize",
    "shortnote",
    "discuss_friends",
    "differentsource",
    "writedown",
    "ownresponsibility",
    "motivation_instructor",
    "trust_instructor",
    "guidance_friends",
    "Q1_a",
    "Q1_b",
    "Q2_a",
    "Q2_b",
    "Q3_a",
    "Q3_b",
    "Q4_a",
    "Q4_b",
    "Q5_a",
    "Q5_b",
    "Q6_a",
    "Q6_b",
    "Q7_a",
    "Q7_b",
    "Q8_a",
    "Q8_b",
    "Q9_a",
    "Q9_b",
    "Q10_a",
    "Q10_b",
    "Q11_a",
    "Q11_b",
    "Q12_a",
    "Q12_b",
    "Q13_a",
    "Q13_b",
    "Q14_a",
    "Q14_b",
    "Q15_a",
    "Q15_b",
    "Q16_a",
    "Q16_b",
    "Q17_a",
    "Q17_b",
    "Q18_a",
    "Q18_b",
    "Q19_a",
    "Q19_b",
    "Q20_a",
    "Q20_b",
    "Q21_a",
    "Q21_b",
    "Q22_a",
    "Q22_b",
    "Q23_a",
    "Q23_b",
    "Q24_a",
    "Q24_b",
    "Q25_a",
    "Q25_b",
    "Q26_a",
    "Q26_b",
    "Q27_a",
    "Q27_b",
    "Q28_a",
    "Q28_b",
    "Q29_a",
    "Q29_b",
    "Q30_a",
    "Q30_b",
    "Q31_a",
    "Q31_b",
    "Q32_a",
    "Q32_b",
    "Q33_a",
    "Q33_b",
    "Q34_a",
    "Q34_b",
    "Q35_a",
    "Q35_b",
    "Q36_a",
    "Q36_b",
    "Q37_a",
    "Q37_b",
    "Q38_a",
    "Q38_b",
    "Q39_a",
    "Q39_b",
    "Q40_a",
    "Q40_b",
    "Q41_a",
    "Q41_b",
    "Q42_a",
    "Q42_b",
    "Q43_a",
    "Q43_b",
    "Q44_a",
    "Q44_b"
);
echo implode(',', $columns)."\n";
foreach ($data as $row) {
    for($columnIndex = 0; $columnIndex < count($columns); $columnIndex++) {
        echo $row[$columns[$columnIndex]];
        if($columnIndex != (count($columns) - 1)) {
            echo ",";
        } else {
            echo "\n";
        }
    }
}