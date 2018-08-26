<?php
/* @var $this yii\web\View */
use frontend\models\LanguageTranslations;
$this->title = 'srv Tickets';
$session = Yii::$app->session;
$sel_lang = $session['lang'];
?>
<?php if($sel_lang=='arabik') { ?>
<link href="<?=Yii::$app->params['cloudfornt_url']?>css/s_style_arb.css" rel="stylesheet" type="text/css">
<?php
}
else
{?>
<link href="<?=Yii::$app->params['cloudfornt_url']?>css/s_style.css" rel="stylesheet" type="text/css">
<?php
}?>
<link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="<?=Yii::$app->params['cloudfornt_url']?>js/jquery-1.12.3.js" ></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" ></script>
<script>
<?php
if($sel_lang=='arabik')
{
?>
var currentLang = {
					"sDecimal":        "",
					"sEmptyTable":     "لا توجد بيانات في الجدول",
					"sInfo":           "عرض _START_ إلى _END_ من إدخالات _TOTAL_",
					"sInfoEmpty":      "عرض 0-0 من 0 مقالات",
					"sInfoFiltered":   "(تمت تصفيتها من مجموع المقالات _MAX_)",
					"sInfoPostFix":    "",
					"sThousands":      ",",
					"sLengthMenu":     "تظهر إدخالات _MENU_",
					"sLoadingRecords": "جار التحميل...",
					"sProcessing":     "معالجة...",
					"sSearch":         "بحث:",
					"sZeroRecords":    "لا توجد سجلات مطابقة وجدت",
					"oPaginate": {
						"sFirst":      "الأول",
						"sLast":       "آخر",
						"sNext":       "التالى",
						"sPrevious":   "سابق"
					},
					"sAria": {
						"sSortAscending":  ": تفعيل لفرز العمود تصاعدي",
						"sSortDescending": ": تفعيل لفرز العمود الهابطة"
					}
                };
<?php
}
else
{?>
var currentLang = {"sLengthMenu": "Display _MENU_ records per page",
              "sZeroRecords": "Nothing found - sorry",
              "sInfo": "Showing _START_ to _END_ of _TOTAL_ records",
              "sInfoEmpty": "Showing 0 to 0 of 0 records",
              "sInfoFiltered": "(filtered from _MAX_ total records)"
          };
<?php
}?>
	$(document).ready(function() {
    $('#example').DataTable({"oLanguage": currentLang});
		} );
	
</script>
<div class="innerpagtopshad margintop204">
	<section class="container">
		<div class="" style="padding: 12px 0;">
			<h3 class="pagetitle text-uppercase margnbttm25">
			<?php
			$engtxt = 'Tickets';
			if($sel_lang=='arabik')
			{                                
			$arabictxt = LanguageTranslations::getarabictext($engtxt);
			if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
			} 
			else { echo $engtxt; } 
			?>
			</h3>
			<?php
			if(!empty($tickets))
			{
			?>
			<div class="container-fluid">
				 <div class="row">
					<div class="col-lg-12">
						<div class="top_orange_btn">
							<?php
							if($todaytkt<=0)
							{
							?>
								<span><a href="<?=Yii::$app->request->baseUrl?>/ticket/create" class="btn btn-success custom_orange_btn"><?php
								$engtxt = 'Create Ticket';
								if($sel_lang=='arabik')
								{                                
								$arabictxt = LanguageTranslations::getarabictext($engtxt);
								if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
								} 
								else { echo $engtxt; } 
								?></a></span>
							<?php
						    }
							$all_tkt_cls='custom_green_btn';
							$open_tkt_cls='custom_green_btn';
							$close_tkt_cls='custom_green_btn';
							if($tkt_status=='')
							{
								$all_tkt_cls='btn_active';
							}
							if($tkt_status==1)
							{
								$open_tkt_cls='btn_active';
							}
							if($tkt_status==0 && $tkt_status!='')
							{
								$close_tkt_cls='btn_active';
							}
							/*echo $all_tkt_cls.'<br/>'.$open_tkt_cls.'<br/>'.$close_tkt_cls;
							die;*/
							?>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets" class="btn btn-success <?=$all_tkt_cls?>"><?php
							$engtxt = 'All Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets?stat=0" class="btn btn-success <?=$close_tkt_cls?>"><?php
							$engtxt = 'Closed Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets?stat=1" class="btn btn-success <?=$open_tkt_cls?>"><?php
							$engtxt = 'Open Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
						</div>    
					   
					</div>
				</div>   
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-12">
								<div class="custom_deta_table">
									<table id="example" class="table table-striped custom_deta_table " width="100%" cellspacing="0">
										<thead>
											<tr>
												<th><?php
												$engtxt = 'Action';
												if($sel_lang=='arabik')
												{
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?></th>
												<th><?php
												$engtxt = 'Status';
												if($sel_lang=='arabik')
												{
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?></th>
												<th><?php
												$engtxt = 'Ticket Number';
												if($sel_lang=='arabik')
												{ 
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?></th>
												<th><?php
												$engtxt = 'Product Name';
												if($sel_lang=='arabik')
												{
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?></th>
												<th><?php
												$engtxt = 'Date';
												if($sel_lang=='arabik')
												{
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?></th>
								
											</tr>
										</thead>
										<tbody>
											<?php
											foreach($tickets as $eachticket)
											{
											?>
											<tr>
												<td><a href="<?=Yii::$app->request->baseUrl?>/ticket/view/<?=$eachticket['ticket_number']?>" title="<?php
												$engtxt = 'View Details';
												if($sel_lang=='arabik')
												{
												$arabictxt = LanguageTranslations::getarabictext($engtxt);
												if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
												} 
												else { echo $engtxt; } 
												?>" <?php
												if($eachticket['totalunread']>0)
												{
													echo 'class="badge1" data-badge="'.$eachticket['totalunread'].'"';
												}
												?>><i class="fa fa-comments fa-fw"></i></a></td>
												<td>
												<?php
												if($eachticket['status']==1)
												{
													$engtxt = 'Open';
													if($sel_lang=='arabik')
													{
														$arabictxt = LanguageTranslations::getarabictext($engtxt);
														if(!empty( $arabictxt))
															$engtxt =$arabictxt[0]['arabic'];
													}
													echo '<span style="color:green;font-weight:bold;">'.$engtxt.'</span>';
												}
												else
												{
													$engtxt = 'Closed';
													if($sel_lang=='arabik')
													{
														$arabictxt = LanguageTranslations::getarabictext($engtxt);
														if(!empty( $arabictxt))
															$engtxt =$arabictxt[0]['arabic'];
													}
													echo '<span style="color:Red;font-weight:bold;">'.$engtxt.'</span>';
												}
												?>
												</td>
												<td><?=$eachticket['ticket_number']?></td>
												<td><?=$eachticket['product_name']?></td>
												<td><?=date('d-m-Y',strtotime($eachticket['date']))?></td>
											</tr>
											<?php
											}?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			else
			{?>
				<div class="row">
					<div class="col-lg-12">
						<div class="top_orange_btn">
							<span><a href="<?=Yii::$app->request->baseUrl?>/ticket/create" class="btn btn-success custom_orange_btn"><?php
							$engtxt = 'Create Ticket';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
							<?php
							$all_tkt_cls='custom_green_btn';
							$open_tkt_cls='custom_green_btn';
							$close_tkt_cls='custom_green_btn';
							if($tkt_status=='')
							{
								$all_tkt_cls='btn_active';
							}
							if($tkt_status==1)
							{
								$open_tkt_cls='btn_active';
							}
							if($tkt_status==0 && $tkt_status!='')
							{
								$close_tkt_cls='btn_active';
							}
							/*echo $all_tkt_cls.'<br/>'.$open_tkt_cls.'<br/>'.$close_tkt_cls;
							die;*/
							?>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets" class="btn btn-success <?=$all_tkt_cls?>"><?php
							$engtxt = 'All Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets?stat=0" class="btn btn-success <?=$close_tkt_cls?>"><?php
							$engtxt = 'Closed Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
							<span><a href="<?=Yii::$app->request->baseUrl?>/tickets?stat=1" class="btn btn-success <?=$open_tkt_cls?>"><?php
							$engtxt = 'Open Tickets';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></a></span>
						</div>
					</div>
				</div>
				<p style='margin-top:5px;text-align:center;'><?php
							$engtxt = 'No Ticket found';
							if($sel_lang=='arabik')
							{                                
							$arabictxt = LanguageTranslations::getarabictext($engtxt);
							if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
							} 
							else { echo $engtxt; } 
							?></p>
		    <?
			}?>
		</div> 
	</section>
<!--container end here-->
</div>
