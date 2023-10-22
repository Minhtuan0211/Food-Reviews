<?php 
    function disable_widget ($name){
        if(! is_active_sidebar($name)){
            echo "disabled";
        }
    }
?> 

        <footer class="page-footer">
            <div class="footer-container">

                <div class="footer-col1 tempborder <?php disable_widget("footer-2")?> ">
                    <!-- Search bar -->
                    <?php
                        dynamic_sidebar('footer-2')
                    ?> 
                </div>

                <ul class="footer-col2 tempborder <?php disable_widget("footer-1")?>">
                <?php
                    dynamic_sidebar('footer-1')
                ?> 
                </ul>

                <ul class="footer-col3 tempborder <?php disable_widget("footer-3")?>">
                    <?php
                        dynamic_sidebar('footer-3')
                    ?> 
                </ul>

                <div class="footer-col4 tempborder">
                    <div>Join newsletter</div>
                </div>
            </div>
            
            <div class="footer-cc tempborder">
                <p>© The Food Reviewer 2023. Privacy Policy.</p>
            </div>
            
        </footer>
        <?php
            wp_footer();
        ?>
    </body>
</html>