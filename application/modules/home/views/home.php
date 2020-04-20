<!DOCTYPE HTML>
<?php echo main_header();?>
<html>
    <head>        
        <title><?php echo $title?></title>                                 
    </head>   
    <body>       
        <nav class="navbar navbar-inverse navbar-fixed-top" id="load-header">            
        </nav>        
        <div class="col-sm-3 col-md-2 sidebar" id="load-side-bar">            
        </div>           
        <div class="col-sm-9 col-sm-offset-4 col-md-10 col-md-offset-2 main">
            <!-- Content -->
            <div class="main-grids" id="load-videos">                                                        
            </div>
            <!-- footer -->
            <div class="footer-design" id="load-footer">            
            </div>
        </div>          
    </body>
</html>
<script type="application/x-javascript">
    var baseUrl = '<?php echo base_url();?>';      
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    };  
    var load_videos = function(){
        $('#load-videos').load(baseUrl + "home/load_videos");
    }
    $(document).ready(function() {
        load_videos();
        load_sidebar();
        load_footer();
        load_header();       
    });
</script>