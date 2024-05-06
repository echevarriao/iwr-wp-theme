<?php if(!is_front_page()): ?>
        </div>
    </div>
</div>
<?php endif; ?>    <div class = "long-row uc-gray black-top-line">
        <div class = "row">
<?php if(is_active_sidebar('footer-area-1')): ?>
            <div class = "large-12 left column header-top-padding footer-column">
<?php dynamic_sidebar('footer-area-1'); ?>
            </div>
<?php else: ?>
            <div class = "large-12 left column header-top-padding">
                <p>
                    <span class = "footerfmt">
                        <a href = "http://www.uconn.edu/azindex.php">A-Z Index</a> | 
                        <a href = "http://www.uconn.edu/">UConn Web</a> | 
                        <a href = "http://uconn.edu/disclaimers-and-copyrights.php">Disclaimers, Privacy &amp; Copyright</a> | 
                        <a href = "http://audit.uconn.edu/arra.htm">Recovery Act/Stimulus Information</a> | 
                        &copy; University of Connecticut
                    </span>
                </p>
            </div>
<?php endif; ?>
        </div>
    </div>
</div>
<script language = "javascript" type = "text/javascript">
    
    $(document).ready(function(){
        
        $(document).foundation();
        
    });
    
        
</script>
<?php wp_footer(); ?>
</body>
</html>