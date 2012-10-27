<body>
	<div id="art-main">
		<?php echo $this->container->CreateHMenu($hmenu,'hmenu'); ?>
		<?php $this->load->view('skins/template_main_header'); ?>

		<div class="art-sheet clearfix">
			<div class="art-layout-wrapper clearfix">
				<div class="art-content-layout">
					<div class="art-content-layout-row">
						<div class="art-layout-cell art-sidebar1 clearfix">
							<?php echo $this->container->CreateVMenu($vmenu,'vmenu'); ?>
							
							<?php echo $this->container->CreateBlock($data1,'block1'); ?>

						</div>
						<div class="art-layout-cell art-content clearfix">
							
						</div>
						<div class="art-layout-cell art-sidebar2 clearfix">
							<div class="art-block clearfix">
								<div class="art-blockheader">
									<h3 class="t">Categories</h3>
								</div>
								<div class="art-blockcontent">
									<div>
										<p>Lorem ipsum dolor sit amet. Nam sit amet sem. Mauris a
											ante.</p>
										<ul>
											<li><a href="#" title="All News">All News</a> (50)</li>
											<li><a href="#" title="Best of the Year">Best of the Year</a>
												(4)</li>
											<li><a href="#" title="Hyperlink">Hyperlink</a> (24)</li>
											<li><a href="#" title="Visited link" class="visited">Visited
													link</a> (17)</li>
											<li><a href="#" title="Hovered link" class="hover">Hovered
													link</a> (6)</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="art-block clearfix">
								<div class="art-blockheader">
									<h3 class="t">Archive</h3>
								</div>
								<div class="art-blockcontent">
									<div>
										<ul>
											<li><a href="#" title="November 2008">November 2008</a></li>
											<li><a href="#" title="October 2008">October 2008</a></li>
											<li><a href="#" title="September 2008">September 2008</a></li>
											<li><a href="#" title="June 2008">June 2008</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="art-block clearfix">
								<div class="art-blockheader">
									<h3 class="t">Blogroll</h3>
								</div>
								<div class="art-blockcontent">
									<div>
										<ul>
											<li><a href="#">My first blog</a></li>
											<li><a href="#">Who will prevail?</a></li>
											<li><a href="#">Stay positive!</a></li>
											<li><a href="#">Oil still going up</a></li>
											<li><a href="#">Gripes and Grins</a></li>
											<li><a href="#">2012 Olympics</a></li>
											<li><a href="#">How to SEO</a></li>
											<li><a href="#">On Global Warming</a></li>
											<li><a href="#">Can you guess?</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('skins/template_main_footer'); ?>
	</div>
</body>
