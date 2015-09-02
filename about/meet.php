<?php
    $count = 0;
    $profile = 1;
    $path = "images/profiles/";
    include 'about/profiles.php';

    function opacity($organ) {
        if ($organ == 'Secretariat')
            echo "-50";
        else if ($organ == 'Administrative')
            echo "";
        else if ($organ == 'Academic')
            echo "-dark";
    }

    function academic($organ, $item) {
        if ($organ == 'Academic' && $item === 'ASIA-PACIFIC ECONOMIC COOPERATION')
            echo  "<div class=\"row\"><div class=\"col-md-1\"></div><div class=\"col-md-10\"><h6 class=\"academic-committees-first\">" . $item . "</h6></div></div>";
        else if ($organ == 'Academic')
            echo  "<div class=\"row\"><div class=\"col-md-1\"></div><div class=\"col-md-10\"><h6 class=\"academic-committees\">" . $item . "</h6></div></div>";
    }

    function beginRow($key) {
        if ($key == 0 || $key == 5 || $key == 10)
            echo "<div class=\"row profiles\"><div class=\"col-md-1\"></div>";
    }

    function endRow($item, $key) {
        if ($item === 'DISARMAMENT AND INTERNATIONAL SECURITY COMMITTEE' && $key == 5)
            echo "</div>";
        else if ($item === 'INTERNATIONAL LAW COMMISSION' && $key == 3)
            echo "</div>";
        else if ($item === 'INTERNATIONAL PRESS COMMITTEE' && $key == 2)
            echo "</div>";
        else if ($key == 4 || $key == 9 || $key == 14)
            echo "<div class=\"col-md-1\"></div></div>";
    }

    function renameCommittees($item){
        $committee = strtolower(implode('',explode(' ', $item)));
        return $committee;
    }
?>

<div id="meet" class="background">
    <div class="row purple-70 content">
        <div class="breadcrumb">
            <p>home > about > meet</p>
        </div>
        <div class="section-title">
            <h2>Meet us</h2>
        </div>
    </div>
        <?php foreach ($people as $organ => $sections) :?>
            <div class="row purple<?php opacity($organ);?> section-p content">
                <h3 class="center"><?php echo $organ;?></h3>
                <p class="meet-click">Click on the images below to learn more about our staff</p>
                <?php foreach ($sections as $item => $items) :?>
                    <?php academic($organ, $item) ;?>
                    <?php foreach ($items as $key => $value) :?>
                        <?php beginRow($key);?>
                            <div class="col-md-2 modal-call">
                                <div data-toggle="modal" data-target="<?php echo "#" . $organ . renameCommittees($item) . $key;?>">
                                    <img src="<?php echo $path . $value['img'];?>" class="profiles-img">
                                </div>
                                <p class="profile-name"><?php echo $value['name'];?></p>
                                <p><?php echo $value['role'];?></p>
                            </div>
                            <div class="modal fade" id="<?php echo $organ . renameCommittees($item) . $key;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content modal-<?php echo strtolower($organ);?>">
                                        <div class="modal-header">
                                            <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <div data-toggle="modal" data-target="<?php //echo "#" . $organ . $profile . $item;?>"></div>-->
                                            <h6><?php echo $organ == 'Academic' ? $item : $organ;?></h6>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?php echo $path . $value['img'];?>" class="modal-img">
                                            <h6 class="center" id="myModalLabel"><?php echo $value['name'];?></h6>
                                            <p class="modal-post"><?php echo $value['role'];?></p> 
                                            <p class="modal-bio"><?php echo $value['bio'];?><p>
                                        </div>
                                        <!--<div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        <?php endRow($item, $key);?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <?php if ($organ === 'Secretariat') echo "</div>";?>            
        <?php endforeach; ?>
</div>
