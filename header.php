        <header class="general flex_wrapper">
			<div class="logo">
				<h1>
					<a href="./">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.header.png" alt="ABK 財団法人アジア学生文化協会The Asian Students Cultural Association" class="">
					</a>	
				</h1>	
			</div>
			<div class="sp_ham sp">
    			<div class="menu-trigger" href="#">
  					<span></span>
  					<span></span>
  					<span></span>
  				</div>
    		</div>			
			<div class="navz">
				<nav class="list">
					<ul class="flex_wrapper">
						<li class="hover more_tree">
							<a href="<?php echo get_site_url(); ?>/association">協会ご紹介</a>
							<ul class="dropdwn_menu">
								<li><a href="<?php echo $pagename == 'association' ? '#greeting' : get_site_url() . '/association#greeting'; ?>">ご挨拶</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#association_overview' : get_site_url() . '/association#association_overview'; ?>">概要</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#history' : get_site_url() . '/association#history'; ?>">沿革</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#business_content' : get_site_url() . '/association#business_content'; ?>">事業内容</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#organization_chart' : get_site_url() . '/association#organization_chart'; ?>">組織図・役員</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#information' : get_site_url() . '/association#information'; ?>">情報公開</a></li>
								<li><a href="<?php echo $pagename == 'association' ? '#map' : get_site_url() . '/association#map'; ?>">所在地</a></li>
							</ul>
							<p class="accordion_icon"><span></span><span></span></p>
						</li>
						<li class="hover more_tree more_tree_2">
							<a href="<?php echo get_site_url(); ?>/asian_cultural_center">アジア文化会館<br>学生・留学生寮</a>
							<ul class="dropdwn_menu">
								<li><a href="<?php echo $pagename == 'asian_cultural_center' ? '#international_student_dormitory' : get_site_url() . '/asian_cultural_center#international_student_dormitory'; ?>">留学生寮</a></li>
								<li><a href="<?php echo $pagename == 'asian_cultural_center' ? '#shared_dormitory' : get_site_url() . '/asian_cultural_center#shared_dormitory'; ?>">共同学寮</a></li>
								<li><a href="<?php echo $pagename == 'asian_cultural_center' ? '#photo_news' : get_site_url() . '/asian_cultural_center#photo_news'; ?>">PHOTO NEWS</a></li>
							</ul>
							<p class="accordion_icon"><span></span><span></span></p>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/japanese_course">留学生日本語コース</a>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/jpss">日本留学情報</a>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/international_business_support">国際教育支援</a>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/asia">アジアの友</a>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/seminar">アジア各国語講座</a>
						</li>
						<li class="hover more_tree">
							<a href="<?php echo get_site_url(); ?>/donation">会費・ご寄付</a>
							<ul class="dropdwn_menu">
								<li><a href="<?php echo $pagename == 'donation' ? '#sec_1' : get_site_url() . '/asian_cultural_center#sec_1'; ?>">会費・寄付</a></li>
								<li><a href="<?php echo $pagename == 'donation' ? '#sec_2' : get_site_url() . '/asian_cultural_center#sec_2'; ?>">お支払い</a></li>
								<li><a href="<?php echo $pagename == 'donation' ? '#sec_3' : get_site_url() . '/asian_cultural_center#sec_3'; ?>">免税措置</a></li>
								<li><a href="<?php echo $pagename == 'donation' ? '#sec_4' : get_site_url() . '/asian_cultural_center#sec_4'; ?>">入会申込み</a></li>
							</ul>
							<p class="accordion_icon"><span></span><span></span></p>
						</li>
						<li class="hover">
							<a href="<?php echo get_site_url(); ?>/contact">お問い合わせ</a>
						</li>
					</ul>
				</nav>		
			</div>
		</header>
		<nav class="site_info">
			<ul class="flex_wrapper flex_sp">
				<!--<li class="hover"><a>サイトマップ</a></li>-->
				<li class="hover">
					<a href="<?php echo $pagename == 'association' ? '#map' : get_site_url() . '/association#map'; ?>">アクセス</a>
				</li>
				<li class="hover">
					<select name="language">
						<option value="" hidden="">Language</option>
						<option value="japanese">日本語</option>
						<option value="English">English</option>
						<option value="简体中文">简体中文</option>
						<option value="한국어">한국어</option>
					</select>
				</li>
			</ul>
		</nav>