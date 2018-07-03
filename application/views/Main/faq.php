<div class="subpage-main-wrapper about-full">

	<!--Breadcrumb start-->
	<div class="breadcrumbs-wrapper breadcumbs-bg1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcrumbs breadcrumbs-style1 sep1 posr">
						<ul>
							<li>
								<div class="breadcrumbs-icon1">
									<a href="<?= site_url('Main/'); ?>" target="_blank" title="Return to home">
										<i class="fa fa-home"></i>
									</a>
								</div>
							</li>
							<li>FAQ</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Breadcrumb end-->

	<!--FAQ main area start-->

	<div class="faq_main_area">
		<div class="container">
			<h1 class="faq_page_title">FAQ</h1>
			<div class="row">
                <?php
                foreach ($faq_category as $category_row) {
                    ?>  
                        <h3><?= $category_row['faq_category'] ?></h3>
                        <div class="panel-group" id="faq_group_<?= $category_row["faq_category_id"] ?>">
                            <?php
                                foreach($category_row['faq'] as $row){
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#faq_group_<?= $category_row["faq_category_id"] ?>" href="#faq__<?= $row["faq_id"] ?>"><?= $row['title'] ?></a>
                                            </h4>
                                        </div>
                                        <div id="faq__<?= $row["faq_id"] ?>" class="panel-collapse collapse">
                                            <div class="panel-body"><?= $row['content']?> </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <br>
                        <?php
                    }
                    ?>
                </div>
			</div>
		</div>
    </div>
</div>