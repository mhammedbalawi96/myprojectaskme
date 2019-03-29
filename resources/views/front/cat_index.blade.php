<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Visualize by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="cat/assets/css/main.css" />
		
	</head>
	<body id="cover">
		<article id="main1">
			@if(Auth::guest())
			@else  
		<!-- Wrapper -->
			<div id="wrapper" >
			  
				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="cat/images/avatar.jpg" alt="" /></span>
					<h1> <strong>{{Auth::user()->name}}أهلاً</strong></h1><strong> مرحبا بك في ارض المعرفة, </strong> <small>اختر 4 على الاكثر  مايناسبك من المواضيع</small>
					
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								@if(count($cats)<1) 
								@else
								
								
								<div>
									
										<a id={{$cats[0]->id}} >
											
											<img  src={{$cats[0]->cat_image}} alt="" />
											<h3>{{$cats[0]->cat_name}}</h3>
										</a>
										
									</div>
									<div>
									<a id={{$cats[1]->id}}>
										<img src={{$cats[1]->cat_image}} alt="" />
										<h3>{{$cats[1]->cat_name}}</h3>
									</a>
									
								</div>
								<div>
								<a id={{$cats[2]->id}} >
									    
										<img src={{$cats[2]->cat_image}} alt="" />
										<h3>{{$cats[2]->cat_name}}</h3>
									</a>
							
								</div>
								<div>
									<a id={{$cats[3]->id}} >
										<img src={{$cats[3]->cat_image}} alt="" />
										<h3>{{$cats[3]->cat_name}}</h3>
									</a>
								</div>
								<div>
									<a id={{$cats[4]->id}} >
										<img src={{$cats[4]->cat_image}} alt="" />
										<h3>{{$cats[4]->cat_name}}</h3>
									</a>
								</div>
								<div>
									<a id={{$cats[5]->id}} >
										<img src={{$cats[5]->cat_image}} alt="" />
										<h3>{{$cats[5]->cat_name}}</h3>
									</a>
								</div> @endif
								
							</section>
							<div class="buttons">
							<form id="form1">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<input type="submit" id="submit" class="btn-hover color-4"/>
								</form>
								</div>
					</section>

				  

			</div>
           @endif
		<!-- Scripts -->
		<script src="cat/assets/js/grad2.js"></script>
			<script src="cat/assets/js/jquery.min.js"></script>
			<script src="js/jquery.min.js"></script>
			<script src="cat/assets/js/jquery.poptrox.min.js"></script>
			<script src="cat/assets/js/skel.min.js"></script>
			<script src="cat/assets/js/main.js"></script>
		</div></article>
	</body>
</html>