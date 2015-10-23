<div id="history" class="background">
    <div class="row purple-70 content">
        <div class="breadcrumb">
            <p>home > about > our history</p>
        </div>
        <div class="section-title">
            <h2>Our History</h2>
        </div>
    </div>
    <div class="row purple-50 section-p content">
        <div class="col-lg-12">
            <p class="center content-smaller">
                In 2003, UFRGSMUN had its first edition. Every year after that a new edition of
                UFRGS Model United Nations took place in Porto Alegre. Different themes, committees, staff...
                all dedicated to organizing the best UFRGSMUN possible.<br/>Check out our previous editions' websites.
            </p>
        </div>
    </div>
</div>
    <div class="row purple section-p content">

        <?php
            include 'about/years.php';
            $history = array_reverse($history);
            $change = FALSE;
        ?>
        <?php foreach ($history as $year) :?>
            <article class="row timeline-row">
                <div class="col-xs-6 timeline-left">
                    <?php if ($change == FALSE) :?>
                        <img src="<?php echo $year['image']?>" alt="" class="timeline-img" data-toggle="modal" data-target="<?php echo '#bs-example-modal-lg' . $year['year'] ;?>"/>
                    <?php else :?>
                        <p class="timeline-year"><?php echo $year['year'];?></p>
                        <p class="timeline-edition"><?php echo $year['edition'];?></p>
                        <p class="timeline-name"><?php echo $year['name'];?></p>
                    <?php endif; ?>
                </div>
                <div class="col-xs-6 timeline-right">
                    <?php if ($change == FALSE) :?>
                        <p class="timeline-year"><?php echo $year['year'];?></p>
                        <p class="timeline-edition"><?php echo $year['edition'];?></p>
                        <p class="timeline-name"><?php echo $year['name'];?></p>
                    <?php else :?>
                        <img src="<?php echo $year['image']?>" alt="" class="timeline-img" data-toggle="modal" data-target="<?php echo '#bs-example-modal-lg' . $year['year'] ;?>"/>
                    <?php endif; ?>
                </div>
            </article>
            <?php
                if ($change == FALSE)
                    $change = TRUE;
                else
                    $change = FALSE;
            ?>

            <div class="modal fade" id="<?php echo 'bs-example-modal-lg' . $year['year'] ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content modal-timeline">
                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div data-toggle="modal" data-target="<?php //echo "#" . $organ . $profile . $item;?>"></div>-->
                            <h6><?php echo $year['year'] ;?></h6>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo $year['image'];?>" class="modal-img">
                            <h6 class="center" id="myModalLabel"><?php newName($year['name']);?></h6>
                            <p class="modal-post"><?php websiteExist($year['website']) ;?></p>
                            <p class="modal-bio"><?php echo $year['info'];?><p>
                        </div>
                        <!--<div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>-->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
