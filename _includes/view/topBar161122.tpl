	<!-- topbar starts -->
		<div class="navbar">
		<div >
			<div class="container-fluid">
				<a href="http://{$CRM_SERVER}/{#system_name#}/home/"> <img alt="Charisma Logo" src="http://{$CRM_SERVER}/{#system_name#}/resources/img/logoPage.jpg" /> <span>| Si No está en Satec No Existe</span></a>				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> {$USER_SESSION}</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="http://{$CRM_SERVER}/{#system_name#}/security/closeSession.php">{#text_logOut#}</a></li>
						<li class="divider"></li>
						<li><a href="http://{$CRM_SERVER}/{#system_name#}/login/cambioclave/frmChangePwd.php">{#text_changepwd#}</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->

			</div>
		</div>
	</div>	
	<!-- topbar ends -->
