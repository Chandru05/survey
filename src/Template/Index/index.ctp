<?php if(isset($surveyCompleted)) { ?>
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  <strong>Great!</strong> Your response have been submitted successfully. Thank you for spending time to do the survey.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<form method="post" id="surveyForm">
    <h4 class="text-center mt-3">
        Preferred Learning Styles of Young Generation in Different Cultures and Generations
    </h4>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Dear Participants,</h5>
            <p class="card-text">
                This survey is to obtain your opinions on preferred learning style.  It is known that information about one’s own learning preference is very helpful in making your study more enjoyable, fulfilling, and hence result in improved learning.
            </p>
            <p class="card-text">
                This questionnaire is divided into 2 sections.  Section A covers demographical information and Section B is on Preferred Learning Style of young generation.
            </p>
            <p class="card-text">
                Kindly respond by ticking the appropriate box or by filling up your answers in the blank spaces provided.  All information collected from respondents will be treated with strict confidentiality.
            </p>
        </div>
    </div>
    <hr class="mt-4 mb-4"/>
    <h3>
        SECTION A:
        <small class="text-primary">DEMOGRAPHICS</small>
    </h3>
    <div class="card">
        <div class="card-header">
            <span class="text-primary">1.</span> Country of Origin (e.g. Malaysia, China, Indonesia, etc.)
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" name="Nationality" class="form-control" data-sanitize="trim upper" placeholder="Enter Answer" data-validation="required">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> Ethnicity / Race
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race1" name="Ethnicity_Race" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Ethnicity_Race1">Chinese</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race2" name="Ethnicity_Race" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Ethnicity_Race2">Indian</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race3" name="Ethnicity_Race" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Ethnicity_Race3">Malay</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race4" name="Ethnicity_Race" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Ethnicity_Race4">Other Asian</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race5" name="Ethnicity_Race" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Ethnicity_Race5">Caucasian</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race6" name="Ethnicity_Race" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Ethnicity_Race6">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Ethnicity_Race_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> Gender
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender1" name="Gender" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Gender1">Male</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender2" name="Gender" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Gender2">Female</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> Year of birth
        </div>
        <div class="card-body">
            <div class="form-group">
                <select class="form-control" name="Birthyear" data-validation="required">
                    <option value="">Select Year</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">5.</span> Name of currently enrolled Learning Institution and the Country
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="Institution" class="col-sm-2 col-form-label">Institution</label>
                <div class="col-sm-10">
                    <input type="text" name="Institution" class="form-control" id="Institution" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
            <div class="form-group row">
                <label for="Country" class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-10">
                    <input type="text" name="Country" class="form-control" id="Country" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> Mode of study
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy1" name="Modeofstudy" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Modeofstudy1">Full time</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy2" name="Modeofstudy" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Modeofstudy2">Part time</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> Type of Learning Institution
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype1" name="Institutiontype" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Institutiontype1">High School</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype2" name="Institutiontype" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Institutiontype2">Vocational school</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype3" name="Institutiontype" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Institutiontype3">Polytechnic</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype4" name="Institutiontype" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Institutiontype4">College / University College</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype5" name="Institutiontype" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Institutiontype5">University</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype6" name="Institutiontype" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Institutiontype6">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Institutiontype_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> Current level of education
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation1" name="Levelofeducation" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Levelofeducation1">Secondary</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation2" name="Levelofeducation" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Levelofeducation2">Foundation / Certificate</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation3" name="Levelofeducation" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Levelofeducation3">Diploma</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation4" name="Levelofeducation" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Levelofeducation4">Bachelor's</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation5" name="Levelofeducation" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Levelofeducation5">Master's</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation6" name="Levelofeducation" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Levelofeducation6">Doctorate</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation7" name="Levelofeducation" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Levelofeducation7">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Levelofeducation_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> Programme currently studying / programme intended to study
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme1" name="Programme" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Programme1">Humanities (e.g. languages, philosophy, history, religious studies)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme2" name="Programme" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Programme2">Physical Sciences (e.g. physics, chemistry, earth science, etc.)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme3" name="Programme" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Programme3">Agriculture, biological / life sciences (biology, biochemistry, botany, zoology, etc.)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme4" name="Programme" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Programme4">Art &amp; Design (e.g. fine arts, performing arts, music, animation, graphic design)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme5" name="Programme" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Programme5">Social Sciences (e.g. political science, sociology, psychology, anthropology)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme6" name="Programme" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Programme6">Mathematics / Actuarial Science / Statistics</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme7" name="Programme" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Programme7">Communication / Journalism / Media Studies</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme8" name="Programme" class="custom-control-input" value="8">
                    <label class="custom-control-label" for="Programme8">Engineering</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme9" name="Programme" class="custom-control-input" value="9">
                    <label class="custom-control-label" for="Programme9">Architecture</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme10" name="Programme" class="custom-control-input" value="10">
                    <label class="custom-control-label" for="Programme10">Environmental Studies (e.g. geography, urban studies, green technology)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme11" name="Programme" class="custom-control-input" value="11">
                    <label class="custom-control-label" for="Programme11">Business (e.g. economics, marketing, commerce, accounting)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme12" name="Programme" class="custom-control-input" value="12">
                    <label class="custom-control-label" for="Programme12">Hospitality / Tourism / Parks and Recreation / Culinary / Leisure and Fitness</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme13" name="Programme" class="custom-control-input" value="13">
                    <label class="custom-control-label" for="Programme13">Health Science (e.g. medicine, physiotherapy) / Kinesiology / Nursing</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme14" name="Programme" class="custom-control-input" value="14">
                    <label class="custom-control-label" for="Programme14">Computer Science / Information Technology</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme15" name="Programme" class="custom-control-input" value="15">
                    <label class="custom-control-label" for="Programme15">Education</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme16" name="Programme" class="custom-control-input" value="16">
                    <label class="custom-control-label" for="Programme16">Social and Community Services / Law enforcement</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme17" name="Programme" class="custom-control-input" value="17">
                    <label class="custom-control-label" for="Programme17">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Programme_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> Language used for teaching in school
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language1" name="Language" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Language1">English</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language2" name="Language" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Language2">Bahasa Melayu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language3" name="Language" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Language3">Mandarin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language4" name="Language" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Language4">Bahasa Indonesia</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language5" name="Language" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Language5">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Language_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> First language (spoken)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage1" name="Firstlanguage" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Firstlanguage1">English</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage2" name="Firstlanguage" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Firstlanguage2">Bahasa Melayu</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage3" name="Firstlanguage" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Firstlanguage3">Mandarin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage4" name="Firstlanguage" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Firstlanguage4">Bahasa Indonesia</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage5" name="Firstlanguage" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Firstlanguage5">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Firstlanguage_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> What will you do after graduation?
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan1" name="Plan" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Plan1">Further study</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan2" name="Plan" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Plan2">Start a job</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan3" name="Plan" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Plan3">Study while working</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan4" name="Plan" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Plan4">Join family business</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan5" name="Plan" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Plan5">Start own business</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan6" name="Plan" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Plan6">Not decided</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan7" name="Plan" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Plan7">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Plan_Other" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> Whom among the following has influenced your future plan: (can choose more than one option)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Institution" name="Influence[]" value="Institution" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Influence_Institution">Institution / University</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Teachers" name="Influence[]" value="Teachers"/>
                    <label class="custom-control-label" for="Influence_Teachers">Teachers / Lecturers</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Jobmarket" name="Influence[]" value="Jobmarket"/>
                    <label class="custom-control-label" for="Influence_Jobmarket">Job market</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Family" name="Influence[]" value="Family"/>
                    <label class="custom-control-label" for="Influence_Family">Family</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_IndependentSelf" name="Influence[]" value="IndependentSelf"/>
                    <label class="custom-control-label" for="Influence_IndependentSelf">Independent self</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_friends" name="Influence[]" value="friends"/>
                    <label class="custom-control-label" for="Influence_friends">Friends</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Media" name="Influence[]" value="Media"/>
                    <label class="custom-control-label" for="Influence_Media">Media</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_CareerExhibition" name="Influence[]" value="CareerExhibition"/>
                    <label class="custom-control-label" for="Influence_CareerExhibition">Career exhibition</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Other" name="Influence[]" value="Other"/>
                    <label class="custom-control-label" for="Influence_Other">Other</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Influence_Other_Specify" class="form-control" placeholder="Please Specify" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> I would like to get guidance from the instructor during (can choose more than one option)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_classtime" name="Guidance[]" value="classtime" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Guidance_classtime">Class time</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_outsideclass" name="Guidance[]" value="outsideclass"/>
                    <label class="custom-control-label" for="Guidance_outsideclass">Outside class</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_duringbreaktime" name="Guidance[]" value="duringbreaktime"/>
                    <label class="custom-control-label" for="Guidance_duringbreaktime">During break time</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Viaemail" name="Guidance[]" value="Viaemail"/>
                    <label class="custom-control-label" for="Guidance_Viaemail">Via email</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Socialmedia" name="Guidance[]" value="Socialmedia"/>
                    <label class="custom-control-label" for="Guidance_Socialmedia">Social media (WhatsApp, WeChat, etc.)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> At what age did you own your first mobile phone?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_phone" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> At what age you started to have full access to mobile data?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_mobiledata" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> How old were you when you first had Wi-Fi access in your own home?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_Wifi" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> How often do you use the internet for (Please √ where applicable)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Everyday</th>
                        <th scope="col" class="text-center">More than once a day</th>
                        <th scope="col" class="text-center">Once a week</th>
                        <th scope="col" class="text-center">Once a month</th>
                        <th scope="col" class="text-center">Less than once a month</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Entertainment (Youtube, movie streaming, gaming…etc)</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Entertainment" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment1" name="Frequent_Entertainment" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Entertainment1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment2" name="Frequent_Entertainment" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Entertainment2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment3" name="Frequent_Entertainment" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Entertainment3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment4" name="Frequent_Entertainment" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Entertainment4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Entertainment5" name="Frequent_Entertainment" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Entertainment5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">School, studying and doing homework</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Education" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education1" name="Frequent_Education" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Education1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education2" name="Frequent_Education" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Education2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education3" name="Frequent_Education" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Education3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education4" name="Frequent_Education" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Education4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Education5" name="Frequent_Education" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Education5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Keeping in touch with friends and family</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_Keepintouch" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch1" name="Frequent_Keepintouch" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_Keepintouch1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch2" name="Frequent_Keepintouch" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_Keepintouch2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch3" name="Frequent_Keepintouch" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_Keepintouch3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch4" name="Frequent_Keepintouch" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_Keepintouch4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_Keepintouch5" name="Frequent_Keepintouch" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_Keepintouch5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">News</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_news" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news1" name="Frequent_news" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_news1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news2" name="Frequent_news" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_news2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news3" name="Frequent_news" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_news3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news4" name="Frequent_news" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_news4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_news5" name="Frequent_news" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_news5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Other purpose(s)</th>
                        <td class="text-center">
                            <input type="hidden" name="Frequent_otherpurpose" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose1" name="Frequent_otherpurpose" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="Frequent_otherpurpose1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose2" name="Frequent_otherpurpose" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="Frequent_otherpurpose2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose3" name="Frequent_otherpurpose" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="Frequent_otherpurpose3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose4" name="Frequent_otherpurpose" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="Frequent_otherpurpose4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="Frequent_otherpurpose5" name="Frequent_otherpurpose" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="Frequent_otherpurpose5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">19.</span> Please select the Top 3 Social Media Sites that you use
        </div>
        <div class="card-body">
            <div class="form-group limit-selection" data-max-allowed="3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Facebook" name="Socialmedia_sites[]" value="Facebook" data-validation="checkbox_group" data-validation-qty="3-3" data-validation-error-msg="Please choose 3 items"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Facebook">Facebook</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Youtube" name="Socialmedia_sites[]" value="Youtube"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Youtube">Youtube</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Instagram" name="Socialmedia_sites[]" value="Instagram"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Instagram">Instagram</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Qzone" name="Socialmedia_sites[]" value="Qzone"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Qzone">Qzone</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_weibo" name="Socialmedia_sites[]" value="weibo"/>
                    <label class="custom-control-label" for="Socialmedia_sites_weibo">Weibo</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Twitter" name="Socialmedia_sites[]" value="Twitter"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Twitter">Twitter</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_reddit" name="Socialmedia_sites[]" value="reddit"/>
                    <label class="custom-control-label" for="Socialmedia_sites_reddit">Reddit</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Pinterest" name="Socialmedia_sites[]" value="Pinterest"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Pinterest">Pinterest</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Ask_fm" name="Socialmedia_sites[]" value="Ask_fm"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Ask_fm">Ask.fm</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Tumblr" name="Socialmedia_sites[]" value="Tumblr"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Tumblr">Tumblr</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Flickr" name="Socialmedia_sites[]" value="Flickr"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Flickr">Flickr</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_sites_Google" name="Socialmedia_sites[]" value="Google"/>
                    <label class="custom-control-label" for="Socialmedia_sites_Google">Google+</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">20.</span> Please select the Top 3 Social Media Apps that you use
        </div>
        <div class="card-body">
            <div class="form-group limit-selection" data-max-allowed="3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Whatsapp" name="Socialmedia_app[]" value="Whatsapp" data-validation="checkbox_group" data-validation-qty="3-3" data-validation-error-msg="Please choose 3 items"/>
                    <label class="custom-control-label" for="Socialmedia_app_Whatsapp">WhatsApp</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Messenger" name="Socialmedia_app[]" value="Messenger"/>
                    <label class="custom-control-label" for="Socialmedia_app_Messenger">Messenger</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_WeChat" name="Socialmedia_app[]" value="WeChat"/>
                    <label class="custom-control-label" for="Socialmedia_app_WeChat">WeChat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Instagram" name="Socialmedia_app[]" value="Instagram"/>
                    <label class="custom-control-label" for="Socialmedia_app_Instagram">Instagram</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Qzone" name="Socialmedia_app[]" value="Qzone"/>
                    <label class="custom-control-label" for="Socialmedia_app_Qzone">Qzone</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Viber" name="Socialmedia_app[]" value="Viber"/>
                    <label class="custom-control-label" for="Socialmedia_app_Viber">Viber</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_LINE" name="Socialmedia_app[]" value="LINE"/>
                    <label class="custom-control-label" for="Socialmedia_app_LINE">LINE</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_Snapchat" name="Socialmedia_app[]" value="Snapchat"/>
                    <label class="custom-control-label" for="Socialmedia_app_Snapchat">Snapchat</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Socialmedia_app_YY" name="Socialmedia_app[]" value="YY"/>
                    <label class="custom-control-label" for="Socialmedia_app_YY">YY</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">21.</span> I learn effectively when I, (Please √ where applicable)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Strongly disagree</th>
                        <th scope="col" class="text-center">Disagree</th>
                        <th scope="col" class="text-center">Neutral</th>
                        <th scope="col" class="text-center">Agree</th>
                        <th scope="col" class="text-center">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Study independently</th>
                        <td class="text-center">
                            <input type="hidden" name="studyindependent" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent1" name="studyindependent" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="studyindependent1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent2" name="studyindependent" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="studyindependent2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent3" name="studyindependent" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="studyindependent3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent4" name="studyindependent" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="studyindependent4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="studyindependent5" name="studyindependent" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="studyindependent5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Brainstorm with a small group of friends</th>
                        <td class="text-center">
                            <input type="hidden" name="brainstorm" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm1" name="brainstorm" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="brainstorm1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm2" name="brainstorm" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="brainstorm2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm3" name="brainstorm" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="brainstorm3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm4" name="brainstorm" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="brainstorm4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="brainstorm5" name="brainstorm" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="brainstorm5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Follow directions from instructor</th>
                        <td class="text-center">
                            <input type="hidden" name="direction" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction1" name="direction" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="direction1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction2" name="direction" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="direction2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction3" name="direction" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="direction3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction4" name="direction" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="direction4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="direction5" name="direction" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="direction5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Get materials in digital form</th>
                        <td class="text-center">
                            <input type="hidden" name="material_digital" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital1" name="material_digital" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="material_digital1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital2" name="material_digital" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="material_digital2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital3" name="material_digital" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="material_digital3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital4" name="material_digital" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="material_digital4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="material_digital5" name="material_digital" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="material_digital5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">22.</span> I learn effectively when I, (Please √ where applicable)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Strongly disagree</th>
                        <th scope="col" class="text-center">Disagree</th>
                        <th scope="col" class="text-center">Neutral</th>
                        <th scope="col" class="text-center">Agree</th>
                        <th scope="col" class="text-center">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Memorize facts</th>
                        <td class="text-center">
                            <input type="hidden" name="memorizefact" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact1" name="memorizefact" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="memorizefact1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact2" name="memorizefact" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="memorizefact2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact3" name="memorizefact" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="memorizefact3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact4" name="memorizefact" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="memorizefact4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="memorizefact5" name="memorizefact" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="memorizefact5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Visualize / recall everything instructed the materials thought</th>
                        <td class="text-center">
                            <input type="hidden" name="visualize" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize1" name="visualize" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="visualize1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize2" name="visualize" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="visualize2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize3" name="visualize" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="visualize3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize4" name="visualize" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="visualize4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="visualize5" name="visualize" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="visualize5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Make short notes or short questions</th>
                        <td class="text-center">
                            <input type="hidden" name="shortnote" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote1" name="shortnote" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="shortnote1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote2" name="shortnote" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="shortnote2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote3" name="shortnote" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="shortnote3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote4" name="shortnote" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="shortnote4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="shortnote5" name="shortnote" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="shortnote5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Discuss the topic with friends</th>
                        <td class="text-center">
                            <input type="hidden" name="discuss_friends" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends1" name="discuss_friends" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="discuss_friends1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends2" name="discuss_friends" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="discuss_friends2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends3" name="discuss_friends" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="discuss_friends3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends4" name="discuss_friends" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="discuss_friends4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="discuss_friends5" name="discuss_friends" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="discuss_friends5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Explore from different sources such as lectures, readings, and discussion</th>
                        <td class="text-center">
                            <input type="hidden" name="differentsource" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource1" name="differentsource" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="differentsource1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource2" name="differentsource" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="differentsource2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource3" name="differentsource" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="differentsource3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource4" name="differentsource" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="differentsource4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="differentsource5" name="differentsource" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="differentsource5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Write it down during lecture</th>
                        <td class="text-center">
                            <input type="hidden" name="writedown" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown1" name="writedown" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="writedown1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown2" name="writedown" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="writedown2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown3" name="writedown" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="writedown3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown4" name="writedown" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="writedown4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="writedown5" name="writedown" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="writedown5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">23.</span> In my opinion, (Please √ where applicable)
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Strongly disagree</th>
                        <th scope="col" class="text-center">Disagree</th>
                        <th scope="col" class="text-center">Neutral</th>
                        <th scope="col" class="text-center">Agree</th>
                        <th scope="col" class="text-center">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Learning is my own responsibility</th>
                        <td class="text-center">
                            <input type="hidden" name="ownresponsibility" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility1" name="ownresponsibility" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="ownresponsibility1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility2" name="ownresponsibility" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="ownresponsibility2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility3" name="ownresponsibility" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="ownresponsibility3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility4" name="ownresponsibility" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="ownresponsibility4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="ownresponsibility5" name="ownresponsibility" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="ownresponsibility5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">My instructor should motivate me in my learning</th>
                        <td class="text-center">
                            <input type="hidden" name="motivation_instructor" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor1" name="motivation_instructor" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="motivation_instructor1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor2" name="motivation_instructor" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="motivation_instructor2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor3" name="motivation_instructor" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="motivation_instructor3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor4" name="motivation_instructor" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="motivation_instructor4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="motivation_instructor5" name="motivation_instructor" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="motivation_instructor5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">I should have high level of trust in my instructor</th>
                        <td class="text-center">
                            <input type="hidden" name="trust_instructor" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor1" name="trust_instructor" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="trust_instructor1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor2" name="trust_instructor" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="trust_instructor2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor3" name="trust_instructor" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="trust_instructor3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor4" name="trust_instructor" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="trust_instructor4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="trust_instructor5" name="trust_instructor" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="trust_instructor5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">I must depend on my classmates / friends for more guidance</th>
                        <td class="text-center">
                            <input type="hidden" name="guidance_friends" value="0"/>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends1" name="guidance_friends" class="custom-control-input" value="1" data-validation="required">
                                <label class="custom-control-label" for="guidance_friends1"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends2" name="guidance_friends" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="guidance_friends2"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends3" name="guidance_friends" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="guidance_friends3"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends4" name="guidance_friends" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="guidance_friends4"></label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="guidance_friends5" name="guidance_friends" class="custom-control-input" value="5">
                                <label class="custom-control-label" for="guidance_friends5"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h3 class="mt-3">
        SECTION B:
        <small class="text-primary">HOW DO I LEARN BEST?</small>
    </h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                Choose the answer which best explains your preference and circle the letter(s) next to it. You may only choose one answer for each question and you must answer every question. If both "a" and "b" seem to apply to you, please choose the one that applies more frequently.
            </p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">1.</span> I understand something better after I
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_a" name="Q1" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q1_a">Try it out</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_b" name="Q1" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q1_b">Think it through</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> I would rather be considered
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_a" name="Q2" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q2_a">Realistic</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_b" name="Q2" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q2_b">Innovative</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> When I think about what I did yesterday, I am most likely to get
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_a" name="Q3" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q3_a">A picture</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_b" name="Q3" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q3_b">Words</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> I tend to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_a" name="Q4" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q4_a">Understand details of a subject but may be fuzzy about its overall structure</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_b" name="Q4" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q4_b">Understand the overall structure but may be fuzzy about details</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">5.</span> When I am learning something new, it helps me to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_a" name="Q5" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q5_a">Talk about it</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_b" name="Q5" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q5_b">Think about it</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> If I were a teacher, I would rather teach a course
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_a" name="Q6" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q6_a">That deals with facts and real life situations</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_b" name="Q6" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q6_b">That deals with ideas and theories</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> I prefer to get new information in
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_a" name="Q7" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q7_a">Pictures, diagrams, graphs, or maps</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_b" name="Q7" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q7_b">Written directions or verbal information</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> Once I understand
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_a" name="Q8" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q8_a">All the parts, I understand the whole thing</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_b" name="Q8" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q8_b">The whole thing, I see how the parts fit</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> In a study group working on difficult material, I am more likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_a" name="Q9" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q9_a">Jump in and contribute ideas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_b" name="Q9" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q9_b">Sit back and listen</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> I find it easier
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_a" name="Q10" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q10_a">To learn facts</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_b" name="Q10" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q10_b">To learn concepts</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> In a book with lots of pictures and charts, I am likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_a" name="Q11" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q11_a">Look over the pictures and charts carefully</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_b" name="Q11" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q11_b">Focus on the written text</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> When I solve math’s problems
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_a" name="Q12" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q12_a">I usually work my way to the solutions one step at a time</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_b" name="Q12" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q12_b">I often just see the solutions but then have to struggle to figure out the steps to get to them</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> In classes I have taken
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_a" name="Q13" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q13_a">I have usually got to know many of the students</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_b" name="Q13" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q13_b">I have rarely got to know many of the students</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> In reading non-fiction, I prefer
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_a" name="Q14" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q14_a">Something that teaches me new facts or tells me how to do something</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_b" name="Q14" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q14_b">Something that gives me new ideas to think about</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> I like teachers
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_a" name="Q15" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q15_a">Who put a lot of diagrams on the board</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_b" name="Q15" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q15_b">Who spend a lot of time explaining</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> When I'm analyzing a story or a novel
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_a" name="Q16" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q16_a">I think of the incidents and try to put them together to figure out the themes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_b" name="Q16" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q16_b">I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> When I start a homework problem, I am more likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_a" name="Q17" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q17_a">Start working on the solution immediately</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_b" name="Q17" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q17_b">Try to fully understand the problem first</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> I prefer the idea of
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_a" name="Q18" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q18_a">Certainty</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_b" name="Q18" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q18_b">Theory</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">19.</span> I remember best
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_a" name="Q19" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q19_a">what I see</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_b" name="Q19" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q19_b">what I hear</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">20.</span> It is more important to me that an instructor
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_a" name="Q20" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q20_a">Lay out the material in clear sequential steps</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_b" name="Q20" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q20_b">Give me an overall picture and relate the material to other subjects</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">21.</span> I prefer to study
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_a" name="Q21" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q21_a">In a group</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_b" name="Q21" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q21_b">Alone</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">22.</span> I am more likely to be considered
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_a" name="Q22" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q22_a">Careful about the details of my work</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_b" name="Q22" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q22_b">Creative about how to do my work</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">23.</span> When I get directions to a new place, I prefer
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_a" name="Q23" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q23_a">A map</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_b" name="Q23" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q23_b">Written instructions</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">24.</span> I learn
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_a" name="Q24" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q24_a">At a fairly regular pace. If I study hard, I'll "get it."</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_b" name="Q24" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q24_b">In fits and starts. I'll be totally confused and then suddenly it all "clicks." </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">25.</span> I would rather first
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_a" name="Q25" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q25_a">Try things out</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_b" name="Q25" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q25_b">Think about how I'm going to do it</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">26.</span> When I am reading for enjoyment, I like writers to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_a" name="Q26" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q26_a">Clearly say what they mean</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_b" name="Q26" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q26_b">Say things in creative, interesting ways</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">27.</span> When I see a diagram or sketch in class, I am most likely to remember
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_a" name="Q27" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q27_a">The picture</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_b" name="Q27" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q27_b">What the instructor said about it</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">28.</span> When considering a body of information, I am more likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_a" name="Q28" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q28_a">Focus on details and miss the big picture</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_b" name="Q28" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q28_b">Try to understand the big picture before getting into the details</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">29.</span> I more easily remember
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_a" name="Q29" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q29_a">Something I have done</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_b" name="Q29" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q29_b">Something I have thought a lot about</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">30.</span> When I have to perform a task, I prefer to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_a" name="Q30" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q30_a">Master one way of doing it</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_b" name="Q30" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q30_b">Come up with new ways of doing it</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">31.</span> When someone is showing me data, I prefer
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_a" name="Q31" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q31_a">Charts or graphs</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_b" name="Q31" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q31_b">Text summarizing the results</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">32.</span> When writing a paper, I am more likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_a" name="Q32" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q32_a">Work on (think about or write) the beginning of the paper and progress forward</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_b" name="Q32" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q32_b">Work on (think about or write) different parts of the paper and then order them</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">33.</span> When I have to work on a group project, I first want to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_a" name="Q33" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q33_a">Have a "group brainstorming" where everyone contributes ideas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_b" name="Q33" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q33_b">Brainstorm individually and then come together as a group to compare ideas</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">34.</span> I consider it higher praise to call someone
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_a" name="Q34" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q34_a">Sensible</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_b" name="Q34" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q34_b">Imaginative</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">35.</span> When I meet people at a party, I am more likely to remember
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_a" name="Q35" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q35_a">What they looked like</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_b" name="Q35" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q35_b">What they said about themselves</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">36.</span> When I am learning a new subject, I prefer to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_a" name="Q36" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q36_a">Stay focused on that subject, learning as much about it as I can</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_b" name="Q36" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q36_b">Try to make connections between that subject and related subjects</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">37.</span> I am more likely to be considered
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_a" name="Q37" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q37_a">Outgoing</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_b" name="Q37" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q37_b">Reserved</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">38.</span> I prefer courses that emphasise
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_a" name="Q38" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q38_a">Concrete material (facts, data)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_b" name="Q38" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q38_b">Abstract material (concepts, theories)</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">39.</span> For entertainment, I would rather
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_a" name="Q39" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q39_a">Watch television</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_b" name="Q39" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q39_b">Read a book</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">40.</span> Some teachers start their lectures with an outline of what they will cover. Such outlines are
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_a" name="Q40" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q40_a">Somewhat helpful to me</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_b" name="Q40" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q40_b">Very helpful to me</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">41.</span> The idea of doing homework in groups, with one grade for the entire group,
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_a" name="Q41" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q41_a">Appeals to me</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_b" name="Q41" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q41_b">Does not appeal to me</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">42.</span> When I am doing long calculations,
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_a" name="Q42" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q42_a">I tend to repeat all my steps and check my work carefully</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_b" name="Q42" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q42_b">I find checking my work tiresome and have to force myself to do it</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">43.</span> I tend to picture places I have been
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_a" name="Q43" class="custom-control-input"  value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q43_a">Easily and fairly accurately</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_b" name="Q43" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q43_b">With difficulty and without much detail</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">44.</span> When solving problems in a group, I would be more likely to
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_a" name="Q44" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q44_a">Think of the steps in the solution process</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_b" name="Q44" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q44_b">Think of possible consequences or applications of the solution in a wide range of areas</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 offset-sm-4 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-primary btn-sm btn-block">Complete Survey</button>
            <small class="form-text text-muted">Thank you for spending time to do the survey</small>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="selectLang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Choose Language</h5>
            </div>
            <form method="get" id="chooseLangForm">
                <div class="modal-body">
                    <select id="lang" name="lang" class="form-control">
                        <option value="">Choose Language</option>
                        <option value="en">English</option>
                        <option value="cn">Chinese</option>
                        <option value="id">Indonesian</option>
                    </select>
                    <small id="langAlert" class="form-text text-danger">
                        Please select a language
                    </small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Okay</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // will first fade out the loading animation
        $("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
        $("#preloader").delay(1000).fadeOut("slow", function() {
            <?php if($lang != 'en') {?>
            $('#selectLang').modal({
                backdrop: 'static',
                show: true
            })
            <?php } ?>
        });

        <?php if($lang != 'en') {?>
        $('#chooseLangForm').submit(function() {
            if($('#lang').val() == '') {
                $('#langAlert').show()
                return false;
            } else if($('#lang').val() == 'en') {
                $('#selectLang').modal('hide')
                return false;
            }
        })
        <?php } ?>
    })
</script>