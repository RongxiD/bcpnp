<?php
/*
Template Name: Jupiter Child Theme
*/
// get_header();
?>
<script type="text/javascript">
   jQuery(document).ready(function($){
        var result03 = 0;
        var result04 = 0;
        var result05 = 0;
        var result07 = 0;
        var result08 = 0;

        var edu = -1;
        var eduScore = new Array(7);
        eduScore[0] = 0;
        eduScore[1] = 5;
        eduScore[2] = 5;
        eduScore[3] = 15;
        eduScore[4] = 15;
        eduScore[5] = 22;
        eduScore[6] = 27;
        
        var eduBC = -1;
        var eduBCScore = new Array(3);
        eduBCScore[0] = 0;
        eduBCScore[1] = 6;
        eduBCScore[2] = 8;
        
        var eduBCProf = 0;

        var lan = -1;
        var lanCLBScore = new Array(7);
        lanCLBScore[0] = 0;
        lanCLBScore[1] = 5;
        lanCLBScore[2] = 10;
        lanCLBScore[3] = 15;
        lanCLBScore[4] = 20;
        lanCLBScore[5] = 25;
        lanCLBScore[6] = 30;

        var frenEng = 0;

        var work = -1;
        var workScore = new Array(7);
        workScore[0] = 0;
        workScore[1] = 1;
        workScore[2] = 4;
        workScore[3] = 8;
        workScore[4] = 12;
        workScore[5] = 16;
        workScore[6] = 20;

        var canadaWork = 0;
        var currWork = 0;

        var bcArea = -1;
        var bcAreaScore = new Array(3);
        bcAreaScore[0] = 0;
        bcAreaScore[1] = 5;
        bcAreaScore[2] = 15;

        var bcAreaRegional = 0;

        var salary = -1;

        $('.inputtext').val('');
        $('[type="radio"]:not(.checked)').removeAttr("checked");
        $('[type="checkbox"]').removeAttr("checked");
        
        $('[name="ques03"]').click(function(){
            edu=$(this).val();
            updateEduResult();
            updateFinalResult();
        })

        $('[name="ques03_1"]').click(function(){
            eduBC=$(this).val();
            updateEduResult();
            updateFinalResult();
        })

        $('[name="ques03_2"]').click(function(){
            if($(this).prop("checked") == true){
                // console.log("Checkbox is checked.");
                eduBCProf=5;
                updateEduResult();
                updateFinalResult();
            }
            else if($(this).prop("checked") == false){
                // console.log("Checkbox is unchecked.");
                eduBCProf=0;
                updateEduResult();
                updateFinalResult();
            }
        })

        $('[name="ques04"]').click(function(){
            lan=$(this).val();
            updateLanResult();
            updateFinalResult();
        })

        $('[name="ques04_1"]').click(function(){
            if($(this).prop("checked") == true){
                // console.log("Checkbox is checked.");
                frenEng=10;
                updateLanResult();
                updateFinalResult();
            }
            else if($(this).prop("checked") == false){
                // console.log("Checkbox is unchecked.");
                frenEng=0;
                updateLanResult();
                updateFinalResult();
            }
        })

        $('[name="ques05"]').click(function(){
            work=$(this).val();
            updateWorkResult();
            updateFinalResult();
        })

        $('[name="ques05_1"]').click(function(){
            if($(this).prop("checked") == true){
                // console.log("Checkbox is checked.");
                canadaWork=10;
                updateWorkResult();
                updateFinalResult();
            }
            else if($(this).prop("checked") == false){
                // console.log("Checkbox is unchecked.");
                canadaWork=0;
                updateWorkResult();
                updateFinalResult();
            }
        })

        $('[name="ques05_2"]').click(function(){
            if($(this).prop("checked") == true){
                // console.log("Checkbox is checked.");
                currWork=10;
                updateWorkResult();
                updateFinalResult();
            }
            else if($(this).prop("checked") == false){
                // console.log("Checkbox is unchecked.");
                currWork=0;
                updateWorkResult();
                updateFinalResult();
            }
        })

        $('[name="ques08"]').click(function(){
            bcArea=$(this).val();
            updateAreaResult();
            updateFinalResult();
        })

        $('[name="ques08_1"]').click(function(){
            if($(this).prop("checked") == true){
                // console.log("Checkbox is checked.");
                bcAreaRegional=10;
                updateAreaResult();
                updateFinalResult();
            }
            else if($(this).prop("checked") == false){
                // console.log("Checkbox is unchecked.");
                bcAreaRegional=0;
                updateAreaResult();
                updateFinalResult();
            }
        })

        $('#ques07').change(function(){
            salary =$(this).val();
            salary = parseInt(salary);
            salary = salary>0 ? salary : 0;
            updateSalaryResult();
            updateFinalResult();
        })

        function updateSalaryResult(){
            if (salary == -1) return;
            result07 = salary - 15;
            $('#result07').html(result07);
        }

        function updateAreaResult(){
            if (bcArea == -1) return;
            result08 = bcAreaScore[bcArea] + bcAreaRegional;
            $('#result08').html(result08);
        }

        function updateWorkResult(){
            if (work == -1) return;
            result05 = workScore[work] + canadaWork + currWork;
            $('#result05').html(result05);
        }

        function updateEduResult(){
            if (edu == -1 || eduBC == -1) return;
            result03 = eduScore[edu] + eduBCScore[eduBC] + eduBCProf;
            $('#result03').html(result03);
        }

        function updateLanResult(){
            if (lan == -1) return;
            result04 = lanCLBScore[lan] + frenEng;
            $('#result04').html(result04);
        }

        function updateFinalResult(){
            var finalresult = 0;
            finalresult = result03 + result04 + result05 + result07 + result08;
            $('#finalresult').html(finalresult);
        }
   })
</script>

<style>
    .questionnaire{
        border-collapse:collapse;
        width:60%;
		margin: 60px auto 0 auto;
	    position: relative;
        z-index: 300;
    }
    .questionnaire td {
        text-align: center;
        padding: 2px;
        border: 1px solid;
        vertical-align: top;
        font-size: 13px;
        font-family: 'Arial'!important;
        color: #000000!important;
        line-height: 1.7;
    }
    .questionnaire p {
        font-size: 13px;
        font-family: 'Arial'!important;
        color: #000000!important;
        line-height: 1.7;
    }
    .questionnaire td input {
        margin-right: 5px;
    }
    .questionnaire td input[type=text] {
        padding: 1px 2px;
        margin: 0;
        padding: 1px 2px;
        color: #767676;
        font-size: 12px;
        border: 1px solid #767676;
        width: 40%;
    }
    .commoninput input {
        margin: 0;
        padding: 1px 2px;
        color: #767676;
        font-size: 12px;
        border: 1px solid #767676;
        width: 40%;
    }
    .td-edu {
        padding: 3px 8px !important;
    }
    td.commoninput {
        border: none;
    }
    .questionnaire td a {
        color: red;
        margin-right: 10px;
    }
    .questionnaire .left{
        text-align:left;
        float: none!important;
    }
    #ques12{
        text-align: left;
        padding-left: 91px;
    }
	.form-wrapper {
		max-width: 1000px;
		display: block;
		margin: 0 auto;
	}
	input#payment-submit {
    color: #fef4e9;
    border: solid 1px #da7c0c;
    background: #D60707;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
    display: inline-block;
    zoom: 1;
    display: inline;
    vertical-align: baseline;
    margin: 0 2px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    font: 15px/100% "Microsoft Yahei", Arial, Helvetica, sans-serif;
    padding: .5em 2em .55em;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
    height: 40px;
}
input#payment-submit:hover {
    background: #f47c20;
    background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
    background: -moz-linear-gradient(top, #f88e11, #f06015);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
    text-decoration: none;
}
@media (max-width: 991px){
    .questionnaire {
        border-collapse: collapse;
        width: 90%;
        margin: 100px auto 0 auto;
        position: relative;
        z-index: 300;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    } 
}
@media (max-width: 768px){
    .questionnaire {
        margin: 30px auto 0 auto;
    } 
    #mk-page-introduce.intro-left {
        text-align: center;
    }
    .questionnaire td{
        width: 1px !important;
    }
    .mk-footer-copyright {
        width: 100%;
        text-align: center;
        margin-top: 0!important;
        padding: 15px 0!important;
        border-top: 1px solid #fff;
    }
    .questionnaire td input[type=text]{
        width: 80%!important;
    }
}
</style>

<div class="form-wrapper">
<table class="questionnaire">
<tbody>
<tr style="height:45px; font-weight:bold;">
<td style="text-align:left; vertical-align:middle;" colspan="2">&ensp;A.核心/人力资本因素 Core/Human Capital Factors - 满分120</td>
<td style="vertical-align:middle;">得分</td>
</tr>
<tr>
</tr>
<tr>
<td>教育经历</td>
<td class="left td-edu">
            <label><input type="radio" value="0" name="ques03"> 高中毕业及以下</label><br>
            <label><input type="radio" value="1" name="ques03"> 大专文凭或证书</label><br>
            <label><input type="radio" value="2" name="ques03"> 副学士学位</label><br>
            <label><input type="radio" value="3" name="ques03"> 学士学位</label><br>
            <label><input type="radio" value="4" name="ques03"> 硕士文凭</label><br>
            <label><input type="radio" value="5" name="ques03"> 硕士学位</label><br>
            <label><input type="radio" value="6" name="ques03"> 博士学位</label><br>
            <label style="color: #0067f4;">教育经历额外加分项</label><br>
            <label><input type="radio" value="0" name="ques03_1"> 无加拿大境内高等教育文凭</label><br>
            <label><input type="radio" value="1" name="ques03_1"> 在（加拿大境内）BC省外完成高等教育</label><br>
            <label><input type="radio" value="2" name="ques03_1"> 在BC省内完成高等教育</label><br>
            <label style="color: #0067f4;">技能证书额外加分项</label><br>
            <label><input type="checkbox" value="5" name="ques03_2"> 拥有指定专业资质</label><br>
</td>
<td><span id="result03"></span></td>
</tr>
<tr>
<td>语言能力</td>
<td class="left td-edu">
            <label><input type="radio" value="0" name="ques04"> CLB3及以下</label><br>
            <label><input type="radio" value="1" name="ques04"> CLB4</label><br>
            <label><input type="radio" value="2" name="ques04"> CLB5</label><br>
            <label><input type="radio" value="3" name="ques04"> CLB6</label><br>
            <label><input type="radio" value="4" name="ques04"> CLB7</label><br>
            <label><input type="radio" value="5" name="ques04"> CLB8</label><br>
            <label><input type="radio" value="6" name="ques04"> CLB9及以上</label><br>
            <label style="color: #0067f4;">双语额外加分项</label><br>
            <label><input type="checkbox" value="0" name="ques04_1"> 法语能力CLB4及以上</label><br>
</td>
<td><span id="result04"></span></td>
</tr>
<tr>
<td>相关工作经验</td>
<td class="left td-edu">
            <label><input type="radio" value="0" name="ques05"> 无</label><br>
            <label><input type="radio" value="1" name="ques05"> 1年以下</label><br>
            <label><input type="radio" value="2" name="ques05"> 1年</label><br>
            <label><input type="radio" value="3" name="ques05"> 2年</label><br>
            <label><input type="radio" value="4" name="ques05"> 3年</label><br>
            <label><input type="radio" value="5" name="ques05"> 4年</label><br>
            <label><input type="radio" value="6" name="ques05"> 5年及以上</label><br>
            <label style="color: #0067f4;">额外加分项（多选）</label><br>
            <label><input type="checkbox" value="0" name="ques05_1"> 有至少1年直接相关加拿大工作经验</label><br>
            <label><input type="checkbox" value="0" name="ques05_2"> 目前正在担保雇主处相同职位上工作</label><br>
        </td>
<td><span id="result05"></span></td>
</tr>
<tr style="height:45px; font-weight:bold;">
<td style="text-align:left; vertical-align:middle;" colspan="2">&ensp;B.经济因素 Economic Factors - 满分80</td>
<td style="vertical-align:middle;">得分</td>
</tr>
<tr>
<td>薪资</td>
<td class="left td-edu">
        <label>工作时薪&ensp;&ensp;&ensp;&ensp;&ensp;<input type="text" placeholder="请填写时薪" id="ques07" name="ques07" width="120px" class="inputtext">&ensp;刀/小时<br></label>
</td>
<td><span id="result07"></span></td>
</tr>
<tr>
<td>BC地区</td>
<td class="left td-edu">
            <label><input type="radio" value="0" name="ques08"> 地区1：大温地区</label><br>
            <label><input type="radio" value="1" name="ques08"> 地区2：Squamish, Abbotsford, Agassiz, Mission, and Chilliwack</label><br>
            <label><input type="radio" value="2" name="ques08"> 地区3：BC省内其他地区</label><br>
            <label style="color: #0067f4;">额外加分项</label><br>
            <label><input type="checkbox" value="0" name="ques08_1"> 在地区2/3有工作经验或毕业</label><br>
</td>
<td><span id="result08"></span></td>
</tr>

<tr style="height:45px; font-weight:bold;">
<td style="text-align:left; vertical-align:middle;" colspan="2">&ensp;总分</td>
<td style="vertical-align:middle;"><span id="finalresult"></span></td>
</tr>
</tbody></table>

<div style="margin-top:20px;margin-bottom:40px;text-align:center;">

</div></div><!-- tabs-wrapper end --><div class="clear"></div>
</form>
	</div>
<?php
// get_footer();
?>