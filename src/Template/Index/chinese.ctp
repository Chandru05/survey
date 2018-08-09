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
        不同文化和时代的年轻人学习风格 
    </h4>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">亲爱的参与者们,</h5>
            <p class="card-text">
                此次调查的目的是为了了解您的个人学习过程中对学习偏好的一些看法。我们认为对于学生的学习偏 好的了解能够极大的帮助学生提高学习成效，使你们的学习更加愉悦及满足。
            </p>
            <p class="card-text">
                本问卷分为两个部分。A部分涵盖了个人基本信息，B部分涉及了当代学生对学习风格的相关问题。
            </p>
            <p class="card-text">
                请在合适的的方框里打钩或在空白处填上您的答案。统计信息将会得到严格保密。
            </p>
        </div>
    </div>
    <hr class="mt-4 mb-4"/>
    <h3>
        A 部分:
        <small class="text-primary">个人基本信息</small>
    </h3>
    <div class="card">
        <div class="card-header">
            <span class="text-primary">1.</span> 国籍（例如：马来西亚籍，中国籍，印度尼西亚籍）
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" name="Nationality" class="form-control" data-sanitize="trim upper" placeholder="Enter Answer" data-validation="required">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> 民族 / 种族
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race1" name="Ethnicity_Race" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Ethnicity_Race1">华人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race2" name="Ethnicity_Race" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Ethnicity_Race2">印度人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race3" name="Ethnicity_Race" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Ethnicity_Race3">马来人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race4" name="Ethnicity_Race" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Ethnicity_Race4">其他亚裔</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race5" name="Ethnicity_Race" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Ethnicity_Race5">白种人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Ethnicity_Race6" name="Ethnicity_Race" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Ethnicity_Race6">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Ethnicity_Race_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> 性别
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender1" name="Gender" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Gender1">男</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Gender2" name="Gender" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Gender2">女</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> 出生日期
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
            <span class="text-primary">5.</span> 目前注册的学习院校和国家名称
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="Institution" class="col-sm-2 col-form-label">在读院校</label>
                <div class="col-sm-10">
                    <input type="text" name="Institution" class="form-control" id="Institution" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
            <div class="form-group row">
                <label for="Country" class="col-sm-2 col-form-label">在读国家</label>
                <div class="col-sm-10">
                    <input type="text" name="Country" class="form-control" id="Country" placeholder="Enter Answer" data-validation="required" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> 学习模式
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy1" name="Modeofstudy" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Modeofstudy1">全职</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Modeofstudy2" name="Modeofstudy" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Modeofstudy2">兼职</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> 所在院校类型
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype1" name="Institutiontype" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Institutiontype1">高中</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype2" name="Institutiontype" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Institutiontype2">职业学校</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype3" name="Institutiontype" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Institutiontype3">技术学院</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype4" name="Institutiontype" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Institutiontype4">学院 / 大学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype5" name="Institutiontype" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Institutiontype5">大学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Institutiontype6" name="Institutiontype" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Institutiontype6">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Institutiontype_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> 目前受教育程度
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation1" name="Levelofeducation" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Levelofeducation1">初中</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation2" name="Levelofeducation" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Levelofeducation2">预科 / 文凭</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation3" name="Levelofeducation" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Levelofeducation3">专科</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation4" name="Levelofeducation" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Levelofeducation4">本科</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation5" name="Levelofeducation" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Levelofeducation5">研究生</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation6" name="Levelofeducation" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Levelofeducation6">博士</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Levelofeducation7" name="Levelofeducation" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Levelofeducation7">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Levelofeducation_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> 目前正在学习或者预备学习科目
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme1" name="Programme" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Programme1">人文学科（如语言、哲学、历史、宗教研究）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme2" name="Programme" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Programme2">物理科学（如物理、化学、地球科学）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme3" name="Programme" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Programme3">农业、生物 / 生命科学（生物、生物化学、植物学、动物学等）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme4" name="Programme" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Programme4">艺术与设计（如美术、表演艺术、音乐、动画、平面设计）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme5" name="Programme" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Programme5">社会科学（如政治学、社会学、心理学、人类学）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme6" name="Programme" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Programme6">数学 / 精算科学 / 统计</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme7" name="Programme" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Programme7">通讯 / 新闻 / 媒体研究</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme8" name="Programme" class="custom-control-input" value="8">
                    <label class="custom-control-label" for="Programme8">工程学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme9" name="Programme" class="custom-control-input" value="9">
                    <label class="custom-control-label" for="Programme9">建筑学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme10" name="Programme" class="custom-control-input" value="10">
                    <label class="custom-control-label" for="Programme10">环境研究（如地理、城市研究、绿色技术）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme11" name="Programme" class="custom-control-input" value="11">
                    <label class="custom-control-label" for="Programme11">商业（如经济、市场、贸易、会计）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme12" name="Programme" class="custom-control-input" value="12">
                    <label class="custom-control-label" for="Programme12">酒店 / 旅游 / 公园娱乐 / 烹饪 / 休闲和健身</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme13" name="Programme" class="custom-control-input" value="13">
                    <label class="custom-control-label" for="Programme13">健康科学（如医学、物理疗法）/ 人体运动学 / 护理</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme14" name="Programme" class="custom-control-input" value="14">
                    <label class="custom-control-label" for="Programme14">计算机科学 / 信息技术</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme15" name="Programme" class="custom-control-input" value="15">
                    <label class="custom-control-label" for="Programme15">教育学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme16" name="Programme" class="custom-control-input" value="16">
                    <label class="custom-control-label" for="Programme16">社会和社区服务 / 执法</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Programme17" name="Programme" class="custom-control-input" value="17">
                    <label class="custom-control-label" for="Programme17">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Programme_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> 学校所用的教学语言
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language1" name="Language" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Language1">英语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language2" name="Language" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Language2">马来文语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language3" name="Language" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Language3">中文</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language4" name="Language" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Language4">印尼语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Language5" name="Language" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Language5">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Language_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> 第一语言 (母语)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage1" name="Firstlanguage" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Firstlanguage1">英语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage2" name="Firstlanguage" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Firstlanguage2">马来文语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage3" name="Firstlanguage" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Firstlanguage3">中文</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage4" name="Firstlanguage" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Firstlanguage4">印尼语</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Firstlanguage5" name="Firstlanguage" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Firstlanguage5">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Firstlanguage_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> 毕业后的打算?
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan1" name="Plan" class="custom-control-input" value="1" data-validation="required">
                    <label class="custom-control-label" for="Plan1">进修</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan2" name="Plan" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="Plan2">工作</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan3" name="Plan" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="Plan3">边工边读</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan4" name="Plan" class="custom-control-input" value="4">
                    <label class="custom-control-label" for="Plan4">接手家族生意</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan5" name="Plan" class="custom-control-input" value="5">
                    <label class="custom-control-label" for="Plan5">创业</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan6" name="Plan" class="custom-control-input" value="6">
                    <label class="custom-control-label" for="Plan6">未决定</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Plan7" name="Plan" class="custom-control-input" value="7">
                    <label class="custom-control-label" for="Plan7">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Plan_Other" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> 下列选项中，哪一个会影响你对未来的计划: (多选)
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Institution" name="Influence[]" value="Institution" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Influence_Institution">学院 / 大学</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Teachers" name="Influence[]" value="Teachers"/>
                    <label class="custom-control-label" for="Influence_Teachers">教师 / 讲师</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Jobmarket" name="Influence[]" value="Jobmarket"/>
                    <label class="custom-control-label" for="Influence_Jobmarket">就业市场</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Family" name="Influence[]" value="Family"/>
                    <label class="custom-control-label" for="Influence_Family">家庭</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_IndependentSelf" name="Influence[]" value="IndependentSelf"/>
                    <label class="custom-control-label" for="Influence_IndependentSelf">独立性自我</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_friends" name="Influence[]" value="friends"/>
                    <label class="custom-control-label" for="Influence_friends">朋友</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Media" name="Influence[]" value="Media"/>
                    <label class="custom-control-label" for="Influence_Media">媒体</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_CareerExhibition" name="Influence[]" value="CareerExhibition"/>
                    <label class="custom-control-label" for="Influence_CareerExhibition">事业展</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Influence_Other" name="Influence[]" value="Other"/>
                    <label class="custom-control-label" for="Influence_Other">其他</label>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="Influence_Other_Specify" class="form-control" placeholder="请具体说明" data-sanitize="trim upper">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> 我希望可以在以下的期间或者方式中得到导师的帮助（多选）
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_classtime" name="Guidance[]" value="classtime" data-validation="checkbox_group" data-validation-qty="min1"/>
                    <label class="custom-control-label" for="Guidance_classtime">上课时间</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_outsideclass" name="Guidance[]" value="outsideclass"/>
                    <label class="custom-control-label" for="Guidance_outsideclass">课后</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_duringbreaktime" name="Guidance[]" value="duringbreaktime"/>
                    <label class="custom-control-label" for="Guidance_duringbreaktime">课间休息时</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Viaemail" name="Guidance[]" value="Viaemail"/>
                    <label class="custom-control-label" for="Guidance_Viaemail">通过邮件</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Guidance_Socialmedia" name="Guidance[]" value="Socialmedia"/>
                    <label class="custom-control-label" for="Guidance_Socialmedia">社交媒体（WhatsApp、微信等）</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> 你拥有第一部手机的时间?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_phone" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> 你从什么时候开始频繁使用移动数据?
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_mobiledata" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> 你第一次在自己家里使用 Wi-Fi 时是几岁？
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="number" name="Age_Wifi" class="form-control" placeholder="Enter Answer" data-validation="number" data-validation-allowing="range[1;60]" data-validation-error-msg="Please enter a valid age">
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> 你使用互联网的频率是（请在相应的框内打钩）
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">每天</th>
                        <th scope="col" class="text-center">每天多次</th>
                        <th scope="col" class="text-center">一周一次</th>
                        <th scope="col" class="text-center">一月一次</th>
                        <th scope="col" class="text-center">一月少于 一次</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">娱乐（YouTube、电影流媒 体、游戏等等）</th>
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
                        <th scope="row">学校，学习和做作业</th>
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
                        <th scope="row">与朋友和家人保持联系</th>
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
                        <th scope="row">新闻</th>
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
                        <th scope="row">其他用途</th>
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
            <span class="text-primary">19.</span> 请选择您最常使用的社交媒体网站（选择前三名）:
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
            <span class="text-primary">20.</span> 请选择您最常使用的社交媒体应用（选择前三名）
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
            <span class="text-primary">21.</span> 当我（请在适当的地方打钩）时，我能够更有效地学习。
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">第一选择</th>
                        <th scope="col" class="text-center">不赞同</th>
                        <th scope="col" class="text-center">中立</th>
                        <th scope="col" class="text-center">赞同</th>
                        <th scope="col" class="text-center">完全赞同</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">自主学习</th>
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
                        <th scope="row">小组讨论学习中</th>
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
                        <th scope="row">依照导师的指导</th>
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
                        <th scope="row">在数据表格中获取材料</th>
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
            <span class="text-primary">22.</span> 如果我（请在适当的地方打钩），我认为我可以学得更好
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">非常不赞同</th>
                        <th scope="col" class="text-center">不赞同</th>
                        <th scope="col" class="text-center">中立</th>
                        <th scope="col" class="text-center">赞同</th>
                        <th scope="col" class="text-center">非常赞同</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">记住事实</th>
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
                        <th scope="row">形象化 / 回忆所有指导材料中的中 心思想</th>
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
                        <th scope="row">做简短的笔记或简短的问题</th>
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
                        <th scope="row">与朋友进行话题讨论</th>
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
                        <th scope="row">参加不同的活动，如讲座，阅读，和讨论中探索</th>
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
                        <th scope="row">在课堂上记笔记</th>
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
            <span class="text-primary">23.</span> 我认为（请在适当的地方打钩）:
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">非常不赞同</th>
                        <th scope="col" class="text-center">不赞同</th>
                        <th scope="col" class="text-center">中立</th>
                        <th scope="col" class="text-center">赞同</th>
                        <th scope="col" class="text-center">非常赞同</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">学习是我自己的责任</th>
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
                        <th scope="row">我的老师在我的学习中应该激励我</th>
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
                        <th scope="row">我应该对我的导师有高度的信任</th>
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
                        <th scope="row">我必须依靠我的同学 / 朋友来获得更多的指导</th>
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
        B 部分:
        <small class="text-primary">学习风格?</small>
    </h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
            选择最能解释您的偏好的答案，并圈选旁边的字母。你只能为每个问题选择一个答案，你必须回答每个问题。如果“a”和“b”似乎适用于您，请选择适用频率更高的那个。
            </p>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">1.</span> 以下何種方法比較能夠使我理解一件事物
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_a" name="Q1" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q1_a">实际操作</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q1_b" name="Q1" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q1_b">思考</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">2.</span> 我比较希望别人认为我是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_a" name="Q2" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q2_a">实际的</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q2_b" name="Q2" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q2_b">创新的</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">3.</span> 当我想到昨天做过的事情，我最有可能
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_a" name="Q3" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q3_a">想起一幅完整的画面</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q3_b" name="Q3" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q3_b">用语言或文字来表述</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">4.</span> 我倾向于
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_a" name="Q4" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q4_a">理解事物的某些细节，但对于整体结构却不十分清楚</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q4_b" name="Q4" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q4_b">理解事物的整体结构，但对具体细节却不十分清楚</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">5.</span> 下列何种方法比较能够帮助我学习一件新的事物?
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_a" name="Q5" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q5_a">谈论</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q5_b" name="Q5" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q5_b">思考</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">6.</span> 假若我是老师，我会比较倾向讲授何种课程
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_a" name="Q6" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q6_a">涉及事实及实际生活的课程</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q6_b" name="Q6" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q6_b">涉及观念及理论的课程</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">7.</span> 我比较偏好藉由下列何种形式获得新的资讯
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_a" name="Q7" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q7_a">相片，图表，示意图或者地图</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q7_b" name="Q7" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q7_b">书面指示或语言讯息</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">8.</span> 一旦我理解了
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_a" name="Q8" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q8_a">各个部分，我就能够理解一件事情的整体</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q8_b" name="Q8" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q8_b">整体事物，我就会理解各个局部的关连特性</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">9.</span> 在小组学习中，面对一个比较困难的问题时，我比较有可能
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_a" name="Q9" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q9_a">积极投入其中并提出自己的想法</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q9_b" name="Q9" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q9_b">坐在旁边听其他小组成员的意见</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">10.</span> 我认为下列何者较容易学习
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_a" name="Q10" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q10_a">事实性内容</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q10_b" name="Q10" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q10_b">概念性內容</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">11.</span> 在有很多图表的书中，我可能会
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_a" name="Q11" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q11_a">把所有图表仔细的看过</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q11_b" name="Q11" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q11_b">更专注于其中的文字说明</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">12.</span> 当我在求解数学问题时
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_a" name="Q12" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q12_a">我通常会一步步的解题，直到最后得到答案</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q12_b" name="Q12" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q12_b">我通常会先想到答案，之后才努力想办法找出解题的步骤</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">13.</span> 在我修的课堂中，我通常
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_a" name="Q13" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q13_a">会去认识大部分同学</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q13_b" name="Q13" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q13_b">不太认识其他同学</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">14.</span> 当我在阅读「非小说」时，我偏好的是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_a" name="Q14" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q14_a">能告诉我事实和如何实际操作的读物</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q14_b" name="Q14" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q14_b">能提供我新的想法去思考的读物</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">15.</span> 我喜欢的老师是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_a" name="Q15" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q15_a">会利用很多图表讲课的老师</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q15_b" name="Q15" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q15_b">会花很多时间在解说上的老师</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">16.</span> 当我分析一个故事或小说时
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_a" name="Q16" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q16_a">我会先想到书中的各个情节，之后再试着整理出整个故事的主题</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q16_b" name="Q16" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q16_b">在读完之后，我就知道故事的主题，然后再倒回去找出体现主题的情节</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">17.</span> 当我面对作业中的问题时，我通常会
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_a" name="Q17" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q17_a">立刻开始尝试去解答</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q17_b" name="Q17" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q17_b">先尝试完全理解问题</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">18.</span> 我比较喜欢的想法是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_a" name="Q18" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q18_a">确定性的</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q18_b" name="Q18" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q18_b">理论性的</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">19.</span> 我最能够记住的是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_a" name="Q19" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q19_a">我看到过的</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q19_b" name="Q19" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q19_b">我听到过的</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">20.</span> 对我来说比较重要的是，教师能
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_a" name="Q20" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q20_a">以一连串清楚的步骤呈现课程材料</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q20_b" name="Q20" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q20_b">能给我总体性的概念并与其他主题相关联</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">21.</span> 我比较喜欢这样的读书方式
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_a" name="Q21" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q21_a">在一个学习小组中</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q21_b" name="Q21" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q21_b">独自一人</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">22.</span> 我比较有可能被认为是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_a" name="Q22" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q22_a">对于工作细节很仔细的人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q22_b" name="Q22" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q22_b">对于如何工作具有创造力的人</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">23.</span> 当我到了一个全然陌生的地方时，我会希望自己所拿到的指南是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_a" name="Q23" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q23_a">一本地图</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q23_b" name="Q23" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q23_b">一本书面说明书</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">24.</span> 我通常这样学习
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_a" name="Q24" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q24_a">以相对规律的节奏，只要努力学习，我就可以学会</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q24_b" name="Q24" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q24_b">总是断断续续的，一开始可能大惑不解，但一段时间后总会茅塞顿开 </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">25.</span> 我做事情较喜欢
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_a" name="Q25" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q25_a">直接尝试付诸行动</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q25_b" name="Q25" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q25_b">先仔细思考该怎么做</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">26.</span> 当我纯粹为了娱乐而阅读时，我偏好作者
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_a" name="Q26" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q26_a">清楚明白地说明他想表达的内容</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q26_b" name="Q26" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q26_b">用具有创意，有趣的方式说出某些事物</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">27.</span> 当我看过课堂中的图表或草图之后，我比较有可能会记住
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_a" name="Q27" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q27_a">这幅图</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q27_b" name="Q27" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q27_b">教师的解释</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">28.</span> 当考虑很多关联资讯时，我可能会
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_a" name="Q28" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q28_a">专注在细节上，而不太在意整体</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q28_b" name="Q28" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q28_b">先尝试理解整体构架再了解细节</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">29.</span> 我比较容易记得
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_a" name="Q29" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q29_a">我曾经做过的事</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q29_b" name="Q29" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q29_b">我曾经深入思考过的事</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">30.</span> 当我必须去执行某件工作时，我偏好
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_a" name="Q30" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q30_a">精通一种执行工作的方法</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q30_b" name="Q30" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q30_b">想出更多新的執行工作的方法</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">31.</span> 当别人想把资料「秀」给我看的时候，我所偏好的形式是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_a" name="Q31" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q31_a">表格和图片</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q31_b" name="Q31" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q31_b">以文字总结的成果</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">32.</span> 当我在写一篇文章或论文时，我比较有可能
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_a" name="Q32" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q32_a">直接从头写到尾</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q32_b" name="Q32" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q32_b">先写各个不同的部分，之后再统整在一起</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">33.</span> 当我必须在群组专案中工作时，我会希望先
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_a" name="Q33" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q33_a">让全部组员进行「脑力激荡」，各抒己见</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q33_b" name="Q33" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q33_b">各自进行「脑力激荡」，然后再集合比较</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">34.</span> 我认为赞美某人以下何者，对某人有比较高的评价
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_a" name="Q34" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q34_a">有判断力</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q34_b" name="Q34" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q34_b">富有想像力</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">35.</span> 当我在聚会中碰到很多人，我可能会记住得
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_a" name="Q35" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q35_a">他们的长相</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q35_b" name="Q35" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q35_b">他们介绍自己的话</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">36.</span> 当我在学习一个新的主题时，我倾向于
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_a" name="Q36" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q36_a">只专注在该主题，并尽可能地去学习它</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q36_b" name="Q36" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q36_b">尝试寻找这个主题和其他相关主题的联系</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">37.</span> 我比较有可能被认为是
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_a" name="Q37" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q37_a">外向的人</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q37_b" name="Q37" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q37_b">內向的人</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">38.</span> 我较喜欢具有下列何种教材内容的课程
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_a" name="Q38" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q38_a">具体的（事实，数据）</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q38_b" name="Q38" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q38_b">抽象的（观念，理论）</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">39.</span> 就娱乐而言，我较喜欢
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_a" name="Q39" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q39_a">看电视</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q39_b" name="Q39" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q39_b">看书</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">40.</span> 某些老师会在课程的一开始就列出课程内容的大纲，我认为这些大纲
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_a" name="Q40" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q40_a">对我有一点帮助</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q40_b" name="Q40" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q40_b">对我非常有帮助</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">41.</span> 对于分组做作业并且每个小组成员拿到同一分数的方式
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_a" name="Q41" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q41_a">十分吸引我</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q41_b" name="Q41" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q41_b">並不吸引我</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">42.</span> 当在做一个冗长的计算时
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_a" name="Q42" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q42_a">我会一再地重复所有步骤并仔细地检查</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q42_b" name="Q42" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q42_b">我发觉检查的工作是非常累人的，我必须强迫自己去做</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">43.</span> 我使用绘图方式描绘我去过的地方时
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_a" name="Q43" class="custom-control-input"  value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q43_a">轻易且正确无误</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q43_b" name="Q43" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q43_b">有些困難而細節也不清楚</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <span class="text-primary">44.</span> 当我在小组工作中解决问题时，我比较有可能会
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_a" name="Q44" class="custom-control-input" value="1" data-validation="required"/>
                    <label class="custom-control-label" for="Q44_a">思考如何去解决问题的步骤</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Q44_b" name="Q44" class="custom-control-input" value="2"/>
                    <label class="custom-control-label" for="Q44_b">从比较广的范围去思考可能的结果或应用</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 offset-sm-4 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-primary btn-sm btn-block">Complete Survey</button>
            <small class="form-text text-muted">感谢您花时间做这项调查。</small>
    </div>
</form>

<script>
    $(document).ready(function() {
        // will first fade out the loading animation
        $("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
        $("#preloader").delay(1000).fadeOut("slow");
    })
</script>