<div class="top-navigation">
    <div class="t-menu">MENU</div>
    <div class="t-img">
        <img src="<?php echo base_url()?>/assets/images/lines.png" alt="" />
    </div>
    <div class="clearfix"> </div>
</div>
<div class="drop-navigation drop-navigation">
    <ul class="nav nav-sidebar">
        <li class="active">
            <a href="<?php echo base_url()?>Home/index" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
        </li>
        <li>
            <a href="#" class="user-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Profile</a>
        </li>
        <li>
            <a href="#" class="sub-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Education</a>
        </li>   
        <li>
            <a href="#" class="sub-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Proects</a>
        </li>             
    </ul>
    <!-- script-for-menu -->
    <script>
        $(".top-navigation").click(function() {
            $(".drop-navigation").slideToggle(300, function() {
                // Animation complete.
            });
        });
    </script>    
</div>