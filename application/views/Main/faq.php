
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
                                <a href="<?= site_url('Main/'); ?>" target="_blank" title="Return to home"><i class="fa fa-home"></i></a>
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
        
            <div id="faq" role="tablist" aria-multiselectable="true">
         
                    <?php
                        foreach($faq_category as $row){
                            ?>
                            <h3><?= $row['faq_category'] ?></h3>
                            <?php
                                $i = 1;
                            foreach($row['faq'] as $faq_row){
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="category_<?= $row['faq_category_id'] ?>_faq_<?= $faq_row['faq_id'] ?>">
                                        <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer2" aria-expanded="false" aria-controls="answer2">
                                                <?= $i . ". " . $faq_row["title"]?>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="answer2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question2">
                                        <div class="panel-body">
                                            <?= $faq_row["content"]?>
                                            <!-- <a data-toggle="collapse" data-parent="#faq" href="#answer3">
                                                To Answer 3
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        }    
                    ?>
                    <!-- <h3>Category 1</h3>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="question1">
                            <h5 class="panel-title">
                                <a data-toggle="collapse" data-parent="#faq" href="#answer1" aria-expanded="true" aria-controls="answer1">
                                Question 1
                                </a>
                            </h5>
                        </div>
                        <div id="answer1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="question1">
                            <div class="panel-body">
                                Answer 1...
                                <a data-toggle="collapse" data-parent="#faq" href="#answer2">
                                    To Answer 2
                                </a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>       
    </div>
</div>