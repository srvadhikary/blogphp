<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<link rel="stylesheet" type="text/css" href="<?=Yii::$app->params['cloudfornt_url']?>css/intlTelInput1.css"/>
<script src="<?//=Yii::$app->request->baseUrl.'/frontend/web/js/jquery.1.11.3.min.js';?>" type="text/javascript"></script>
<script type="text/javascript" src="<?=Yii::$app->params['cloudfornt_url']?>js/intlTelInput.js"></script>
<div class="innerpagtopshad margintop204">
<!--container start here-->
<section class="container">
<div class="breadcrumblist">
    <ul>
        <li><a href="<?=Yii::$app->request->baseUrl;?>/">الصفحة الرئيسية </a></li>
        <li>|</li>
        <li><a href="javascript:void(0)">اطلب منتج</a></li>
    </ul>
</div>

<div class="col-sm-46">
    <h3 class="pagetitle text-uppercase">(مدة استلام الطلب من 15 يوم الى 20 يوم)اطلب منتج </h3>
    <div id="pinfo" style="text-align:center;">
                <?php echo Yii::$app->session->getFlash('flashmsg');?>
    </div>    
    
    <?php
    $form = ActiveForm::begin(['id'=>'shipping_address']); ?>
    <div class="shopprofdiv margintop16">
	<div class="formchangpass">
            <label>الاسم</label>
            <input type="text" required="required" value="<?php echo $Shopuser['firstname']?>" name="Ticket[firstname]" class="form-control" id="firstname"  readonly="readonly">
        </div>
        <div class="formchangpass">
            <label>البريد الالكتروني</label>
            <input type="text" required="required" value="<?php echo $Shopuser['email']?>" name="Ticket[email]" class="form-control" id="email"  readonly="readonly">
        </div>	
	<div class="formchangpass">
           <label>رقم الهاتف</label>
            <div class="inputlevel">
            <input type="text" class="inputcountcd marginright3" required="required" value="<?php echo $Shopuser['countrycode']?>" name="Ticket[countrycode]" class="form-control" id="countrycode"  readonly="readonly"/>
            <input type="text" class="inputnumbrcd" required="required" value="<?php echo $Shopuser['phone']?>" name="Ticket[phone]" class="form-control" id="phone"  readonly="readonly"/>
            </div>
        </div>
		 <div class="formchangpass">
            <label>العنوان كامل (المحافظة / المنقطة / نقطة دالة)</label>
            <textarea name="Ticket[address]" required="required"></textarea>
        </div>
        <div class="formchangpass">
            <label>اسم المنتج</label>
            <input type="text" value="" name="Ticket[product_name]" class="form-control" id="product_name" required="required">
        </div>
        <div class="formchangpass">
	    <label>&nbsp;</label>
            <select name="Ticket[request_type]">
            	<option>طلب منتج من امريكا</option>
				<option>طلب منتج من دولة اخرى</option>
            </select>
        </div>
        <div class="formchangpass">
        	<label>رابط المنتج(Link)</label>
		   	<input type="text" value="" name="Ticket[product_link][]" class="form-control" id="product_link" required="required">
            <a href="javascript:void(0)" onclick="add_morelink()">
                <img src="<?=Yii::$app->request->baseUrl;?>/frontend/web/images/grn_plus.png" width="19" height="19">
            </a>
        </div>
        <div id="link_contain">
            
        </div>
        <div class="formchangpass">
        	<label>الكمية</label>
            	<input type="number" value="" name="Ticket[quantity]" class="form-control" id="quantity" >
        </div>
        <div class="formchangpass">
            <label>تفاصيل المنتج</label>
            <textarea name="Ticket[message]" required="required"></textarea>
        </div>        
        <div class="formchangpass">
        	<label>&nbsp;</label>
            <input type="submit" value="Submit" class="greenbutton noborder" style="cursor:pointer; padding:0 25px;">
			<a href="<?=Yii::$app->request->baseUrl?>/tickets" class="orgbutton noborder" style="cursor:pointer; padding:10px;">Cancel</a>
        </div>
      </div>   
      <?php ActiveForm::end(); ?>
</div>
</section>
<!--container end here-->
</div>
<script>
var linkadded=1;
function add_morelink()
{
    var totalextralink=$('.morelink').length;
    if(totalextralink<=4)
    {
        $('#link_contain').append('<div class="formchangpass morelink" id="add_lnk_'+linkadded+'"><label> </label><input type="text" value="" name="Ticket[product_link][]" class="form-control" required="required">  <a href="javascript:void(0)" onclick="remove_morelink('+linkadded+')"><img src="<?=Yii::$app->request->baseUrl;?>/frontend/web/images/rd_error.png" width="19" height="19"></a></div>');
        linkadded +=1;
    }
    else
    {
        alert('You can add maximum five more links at a time.');
    }
}
function remove_morelink(cnt)
{
    $('#add_lnk_'+cnt).remove();
}
</script>

