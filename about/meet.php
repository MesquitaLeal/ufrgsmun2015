<div id="meet">
    <div class="subpage-title">
        <h6>Home <i class="fa fa-angle-double-right"></i> About <i class="fa fa-angle-double-right"></i> Meet us</h6>
    </div>
    <div class="blue">
        <div class="row blue profiles content">
            <div class="col-sm-12">

                <?php
                    $count = 0;
                    $profile=1;
                    $path = "images/profiles/";
                    include 'about/profiles.php';
                ?>

                <?php foreach ($people as $organ => $sections) :?>
                    <div class="row section-header">
                        <h5><?php echo $organ;?></h5>
                        <p>Click on the images below to learn more about our staff</p>
                    </div>
                    <?php foreach ($sections as $item => $items) :?>
                        <?php echo $organ == 'Academic' ? "<div class=\"row academic\"><h6>" . $item . "</h6></div>" : "" ;?>
                        <?php foreach ($items as $key => $value) :?>
                            <?php echo ($profile == 1 || $profile == 4 || $profile == 7) ? "<div class=\"row profiles\">" : "" ;?>
                            <div class="col-sm-4 modal-call">
                                <div class="circle" data-toggle="modal" data-target="<?php echo "#" . $organ . $profile . $item;?>" style="background: url('<?php echo $path . $value['img'];?>');"></div>
                                <p><?php echo $value['name'];?></p>
                                <p><?php echo $value['role'];?></p>
                            </div>
                                <div class="modal fade" id="<?php echo $organ . $profile . $item;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="modal-circle" data-toggle="modal" data-target="<?php echo "#" . $organ . $profile . $item;?>" style="background: url('<?php echo $path . $value['img'];?>');"></div>
                                                <h6 class="modal-title" id="myModalLabel"><?php echo $value['name'];?></h6>
                                                <p><?php echo $value['role'];?></p>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $value['bio'];?><p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            echo ($profile%3 == 0) ? "</div>" : "";
                            $profile++;
                            ?>
                        <?php endforeach; ?>
                        <?php
                        echo "</div>";
                        $profile=1;
                        ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>


        </div>
    </div>
</div>
