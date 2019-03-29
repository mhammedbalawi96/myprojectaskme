<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>إسألني – قالب اسئلة واجوبة</title>
	<meta name="description" content="إسألني – قالب اسئلة واجوبة">
	<meta name="author" content="vbegy">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Skins -->
	<link rel="stylesheet" href="css/skins/skins.css">

	<!-- Responsive Style -->
	<link rel="stylesheet" href="css/responsive.css">

	<!-- RTL Style -->
	<link rel="stylesheet" href="css/rtl.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="/images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>تسجيل دخول</h2>
						{{--<div class="form-style form-style-3">--}}
							{{--<form>--}}
								{{--<div class="form-inputs clearfix">--}}
									{{--<p class="login-text">--}}
										{{--<input type="text" value="الأسم" onfocus="if (this.value == 'الأسم') {this.value = '';}" onblur="if (this.value == '') {this.value = 'الأسم';}">--}}
										{{--<i class="icon-user"></i>--}}
									{{--</p>--}}
									{{--<p class="login-password">--}}
										{{--<input type="password" value="كلمة المرور" onfocus="if (this.value == 'كلمة المرور') {this.value = '';}" onblur="if (this.value == '') {this.value = 'كلمة المرور';}">--}}
										{{--<i class="icon-lock"></i>--}}
										{{--<a href="#">نسيت كلمة المرور</a>--}}
									{{--</p>--}}
								{{--</div>--}}
								{{--<p class="form-submit login-submit">--}}
									{{--<input type="submit" value="تسجيل دخول" class="button color small login-submit submit">--}}
								{{--</p>--}}
								{{--<div class="rememberme">--}}
									{{--<label><input type="checkbox" checked="checked"> تذكرني</label>--}}
								{{--</div>--}}
							{{--</form>--}}
						{{--</div>--}}
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>تسجيل جديد</h2>
						<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
						<a class="button color small signup">تسجيل حساب جديد</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>سجل الأن<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">الأسم<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">البريد الإلكتروني<span>*</span></label>
						<input type="email">
					</p>
					<p>
						<label class="required">كلمة المرور<span>*</span></label>
						<input type="password" value="">
					</p>
					<p>
						<label class="required">إعادة كلمة المرور<span>*</span></label>
						<input type="password" value="">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="تسجيل جديد" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>نسيت كلمة المرور<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>نسيت كلمة المرور ؟ لو سمحت قم بادخال الاسم والبريد الإلكتروني. وسوف يصلك كلمة المرور الجديدة علي البريد الإلكتروني.</p>
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">الأسم<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">البريد الإلكتروني<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="أستعادة" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	
	@include('layouts.header')
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#" class="current">آخر الاسئلة</a></li>
		                <li class="tab"><a href="#">الاكثر إجابة</a></li>
		                <li class="tab"><a href="#">المجاب مؤخرا</a></li>
		                <li class="tab"><a href="#">بدون إجابات</a></li>
		            </ul>
					<div id="qst">

					</div>
					<a href="#" class="load-questions"><i class="icon-refresh"></i>المزيد من الاسئلة</a>
		        </div><!-- End page-content -->
			</div><!-- End main -->
			@include('layouts.aside')
		</div><!-- End row -->
	</section><!-- End container -->
	
	@include('layouts.footer')

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
        getQuestions();
	    setInterval(function(){
            getQuestions();
		}, 10000);
	});

	function getQuestions(){
	    $.ajax({
			url: '/view',
			type: 'GET',
			datatype: 'json',
			success: function(data){
			    html = '';
			    //var dt = jQuery.parseJSON(data);
				for(var i = 0; i < data.length; i++)
				{
				    html += '\t\t            <div class="tab-inner-warp">\n' +
                        '\t\t\t\t\t\t<div class="tab-inner">\n' +
                        '\t\t\t\t\t\t\t<article class="question question-type-normal">\n' +
                        '\t\t\t\t\t\t\t\t<h2>\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="/viewqust/'+data[i].id+'/">'+data[i].qustion_title+'</a>\n' +
                        '\t\t\t\t\t\t\t\t</h2>\n' +
                        '\t\t\t\t\t\t\t\t<a class="question-report" href="#">تبليغ</a>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-type-main"><i class="icon-question-sign"></i>سؤال</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-author">\n' +
                        '\t\t\t\t\t\t\t\t\t<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t<div class="question-inner">\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t\t<p class="question-desc">'+data[i].qustion_desc.substring(1, 200)+'...</p>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="question-details">\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-answered question-answered-done"><i class="icon-ok"></i>تم الحل</span>\n' +
                        '\t\t\t\t\t\t\t\t\t\t<span class="question-favorite"><i class="icon-star"></i>5</span>\n' +
                        '\t\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-category"><a href="#"><i class="icon-folder-close"></i>وردبريس</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-date"><i class="icon-time"></i>منذ 4 دقائق</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 إجابات</a></span>\n' +
                        '\t\t\t\t\t\t\t\t\t<span class="question-view"><i class="icon-user"></i>70 مشاهدة</span>\n' +
                        '\t\t\t\t\t\t\t\t\t<div class="clearfix"></div>\n' +
                        '\t\t\t\t\t\t\t\t</div>\n' +
                        '\t\t\t\t\t\t\t</article>\n' +
                        '\n' +
                        '\n' +
                        '\t\t\t\t\t    </div>\n' +
                        '\t\t\t\t\t</div>';
                    //console.log(data[i].qustion_title);
                }
                $('#qst').html(html);
			    },
			error: function()
			{

			}
		});
	}
</script>