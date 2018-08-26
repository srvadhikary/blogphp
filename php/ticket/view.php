<?php
/* @var $this yii\web\View */
use frontend\models\LanguageTranslations;
use backend\models\Replyproductdetails;

$this->title = 'srv View Ticket';
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
<div class="innerpagtopshad margintop204">
	<section class="container">
		<div class="" style="padding: 12px 0;">
			<h3 class="pagetitle text-uppercase margnbttm25"><?php
			$engtxt = 'View Ticket';
			if($sel_lang=='arabik')
			{                                
			$arabictxt = LanguageTranslations::getarabictext($engtxt);
			if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
			} 
			else { echo $engtxt; } 
			?>: <?=$find_record->ticket_number;?></h3>
			<div class="container-fluid">
				 <div class="row">
						<div class="col-lg-12">
							<div class="custom_content_box">
								<div class="custom_header_sec">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<h3><?=$find_record->product_name?></h3>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<a href="<?=Yii::$app->request->baseUrl?>/tickets" class="btn btn-default pull-right" style="margin-left:10px; margin-top:8px;padding: 7px;margin-right:10px;"><?php
											$engtxt = 'Back';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?></a>
											<?php
											/*
											if($find_record->status==1)
											{
											?>
											<button class="btn btn-success pull-right custom_orange_btn" type="submit" style="margin-top:8px" onclick="close_ticket(<?=$find_record->id;?>)"><?php
											$engtxt = 'Close Ticket';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?></button>
											<?php
											}
											else
											{?>
											<button class="btn btn-success pull-right custom_orange_btn" type="submit" style="margin-top:8px"><?php
											$engtxt = 'Closed';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?></button>
										    <?php
											}*/?>
										</div>
									</div>
								</div>
								<div class="custom_content_boxinner">
									<div class="row">
										<div class="col-lg-12">
											<h4><?php
											$engtxt = 'Details';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?></h4>
										</div>
									 </div>
									 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Ticket number';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><span class="warning_text"><?=$find_record->ticket_number?></span></div>
										 </div>
									 </div>
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Product name';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=$find_record->product_name?></div>
										 </div>
									 </div> 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Request type';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=$find_record->request_type?></div>
										 </div>
									 </div> 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Product link';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<?php
											$productlink=explode('$##$',$find_record->product_link);
											if(!empty($productlink))
											{
												foreach($productlink as $eachkink)
												{
													$url=$eachkink;
													if (!preg_match("~^(?:f|ht)tps?://~i", $url)) 
													{
															$url = "http://" . $url;
													}
											?>
											<div class="custom_float_l"><a href="<?=$url?>" target="_blank"><?=$eachkink?></a></div><br/>
											<?php
												}
											}
											?>
											
										 </div>
									 </div> 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Quantity';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=$find_record->quantity?></div>
										 </div>
									 </div> 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Message';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=$find_record->message?></div>
										 </div>
									 </div> 
									 <div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Post Date';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=date('d-m-Y',strtotime($find_record->date))?></div>
										 </div>
									 </div>
									 <?php
									if($find_record->status==0)
									{
									?>
									<div class="row">
										<div class="col-xs-12 col-sm-3 col-md-2 col-lg-1" >
											<div class="custom_float_r"><?php
											$engtxt = 'Closing Date';
											if($sel_lang=='arabik')
											{                                
											$arabictxt = LanguageTranslations::getarabictext($engtxt);
											if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
											} 
											else { echo $engtxt; } 
											?> :</div>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
											<div class="custom_float_l"><?=date('d-m-Y',$find_record->cloase_date)?></div>
										 </div>
									 </div>
									<?php
									}?>
								</div>
							</div>
						</div>
					 </div>
				 <div class="row">
					<div class="col-lg-12">
						<div class="custom_content_box">
							<div class="custom_header_sec">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<h3 class="custom_red_text">Messages</h3>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										&nbsp;
									</div>
								</div>
							</div>
							<div class="custom_content_boxinner">
								<?php
								if($find_record->status==1)
								{
								?>
								<div class="row">
									<div class="col-lg-12">
										<h4>Comment</h4>
									</div>
								 </div>
								 
								 <div class="row">
									<div class="col-xs-12 col-lg-12" >
										<textarea class="form-control" rows="3" id="reply_msg" placeholder="Type your message here..."></textarea>
									</div>
								 </div>
								 
								 <div class="row">
									<div class="col-xs-12 col-lg-12" style="margin-top:15px;" >
									<button class="btn btn-success custom_green_btn" type="submit" id="reply_btn" onclick="send_reply()">Add Comment</button>
									</div>
								 </div>
								 <?php
								}?>
								<div id="chat_conversation">
								<?php
								if(!empty($chats))
								{
									foreach($chats as $eachmsg)
									{
								?>
								 <div class="row">
									<div class="col-xs-12 col-lg-12" >
										<div class="comment_box">
											<div class="header">
												<div class="row">
													<div class="col-xs-12 col-lg-6">
														<div class="left">
														<?php
														if($eachmsg['from_userid']==0)
														{
															echo 'srv Support Team';
														}
														else
														{
															echo $userdetails['firstname'];
														}
														?></div>
													</div>
													<div class="col-xs-12 col-lg-6">
														<div class="right"><?php echo date('Y-m-d h:i a',$eachmsg['time']);?></div>
													</div>
												</div>    
											</div>
											<div class="comment_box_inner">
												<?php
													//check if have product details
													$Replyproductdetails=Replyproductdetails::find()->where(['ticket_id'=>$eachmsg['ticket_id'],'ticket_reply_id'=>$eachmsg['id']])->all();
													if(!empty($Replyproductdetails))
													{
														$i=1;
														foreach($Replyproductdetails as $eachreplyproduct)
														{
													?>
													<div class="row" style="padding: 20px;">
														<div style=""><b>No. <?=$i?></b></div>
														<div class="per_product_row ">
															<div class="row" style="">
																<div class=""><b><?php
																$engtxt = 'Product Name';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> <?=$eachreplyproduct['product_name'];?></div>
																<div class=""><b><?php
																$engtxt = 'Product Link';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> <?=$eachreplyproduct['product_link'];?></div>
															</div>
															<p></p>
															<div class="row" style="margin-top: 13px;">
																<div class=""><b><?php
																$engtxt = 'Price';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> $<?=$eachreplyproduct['price']?></div>
																<div class=""><b><?php
																$engtxt = 'Weight';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> <?=$eachreplyproduct['weight']?> Grams</div>
																<div class=""><b><?php
																$engtxt = 'Shipping Charge';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> $<?=$eachreplyproduct['shipping']?></div>
																<div class=""><b><?php
																$engtxt = 'Tax';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> $<?=$eachreplyproduct['tax']?></div>
															</div>
															<p></p>
														</div>
													</div>
													<hr/>
													<?php
														$i++;
														}
													?>
													<div class="row" style="padding-bottom: 13px;">
														<div class=""><b><?php
																$engtxt = 'Shipping Tax(per Grams)';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> <?=$eachmsg['unit_shipping_price']?></div>
														<div class=""><b><?php
																$engtxt = 'Free Shipping Upto(Grams)';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> <?=$eachmsg['free_ship_limit']?></div>
														<div class=""><b><?php
																$engtxt = 'Total Price';
																if($sel_lang=='arabik')
																{                                
																$arabictxt = LanguageTranslations::getarabictext($engtxt);
																if(!empty( $arabictxt)) echo $arabictxt[0]['arabic']; else echo $engtxt;
																} 
																else { echo $engtxt; } 
																?> :</b> $<?=$eachmsg['total_price']?></div>
													</div>
													<hr/>
													<?php
													}
													?>
											<p><?=$eachmsg['message']?></p>
											</div>
										</div>
									</div>
								 </div>
								 <?php
									}
								}?>
							  </div>
							</div>
						</div>
					</div>
				 </div>
			</div>
		</div> 
	</section>
<!--container end here-->
</div>
<script>
function send_reply()
{
	var from_userid=<?php echo $find_record->user_id;?>;
	var to_user_id=0;
	var msg=$('#reply_msg').val();
	var pid=<?php echo $find_record->id;?>;
	if(msg)
	{
		$.ajax({
				  url: '<?php echo Yii::$app->request->baseUrl;?>/ticket/reply',
				  type : 'POST',
				 // dataType:'json',
				  data: {from_userid: from_userid,to_user_id:to_user_id,msg:msg,pid:pid},
				  success: function(data) 
			      {
					  $('#reply_msg').val('');
					  $('#chat_conversation').prepend(data);
				    
				  },
				  error: function ()
				  {
				  	alert("Unable to post your reply.Please try again");
				  }
			});
	}
	else
	{
		alert('Please Type your Message');
	}
}
function close_ticket(id)
{
	if(confirm('Are you sure?'))
	{
	    var dataString = 'id=' + id;
		$.ajax({
					type: "POST",
					url: "<?php echo Yii::$app->request->baseUrl;?>/ticket/close",
					data: dataString,
					cache: false,
					success: function (data) {
						location.reload();					
					},
					error: function(err) {
						console.log(err);
					}
				});
	}
}
</script>
