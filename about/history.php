<div class="subpage-title">
    <h6>Home <i class="fa fa-angle-double-right"></i> About <i class="fa fa-angle-double-right"></i> Our history</h6>
</div>

<div class="blue content center">
    <div class="row section-header">
        <h5>Our History</h5>
        <p>Click on the images below to learn more about each UFRGSMUN edition</p>
    </div>
    <?php
        include 'about/years.php';
    ?>
    <?php foreach ($history as $years => $year) :?>
        <?php three_column($years-2003) ;?>
        <div class="col-md-4 modal-call">
            <div class="circle" data-toggle="modal" data-target="<?php echo '#bs-example-modal-lg' . $years ;?>" style="background: url('<?php echo $year['image'];?>');"></div>
            <p class="year"><?php echo $years;?></p>
            <p><?php echo $year['name'];?></p>
        </div>

        <?php foreach ($year as $key => $value) :?>
            <div class="modal fade" id="<?php echo 'bs-example-modal-lg' . $years ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="modal-circle" style="background: url('<?php echo $year['image'];?>'); background-color:rgba(0, 0, 0, 0.4);"></div>
                            <h6 class="modal-title" id="myModalLabel"><?php echo $year['name'] ;?></h6>
                        </div>
                        <div class="modal-body">
                            <p><?php echo $year['info'] ;?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <?php if ($year['website']!=''): ?>
                            <a href="<?php echo $year['website'];?>" target="_blank">
                                <button type="button" class="btn btn-primary">
                                    Visit the website
                                </button>
                            </a>
                            <?php else :?>
                                <button type="button" class="btn btn-primary" disabled="disabled">
                                    Website not available
                                </button>
                            <?php endif ;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div>
</div>
