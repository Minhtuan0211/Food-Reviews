        <footer class="page-footer">
            <div class="footer-container">

                <div class="footer-col1 tempborder">
                    <div>Search Bar</div>
                </div>

                <ul class="footer-col2 tempborder">
                <?php
                dynamic_sidebar('footer-1')
            ?> 
                </ul>

                <ul class="footer-col3 tempborder">
                    <li>Follow</li>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Twitter</li>
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