    <!-- footer -->
    <footer>
        <article class="container">
            <div>
                <?php if(is_active_sidebar('footer-1')): ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php endif; ?>
            </div>
        
            <div>
                <?php if(is_active_sidebar('footer-2')): ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
                
            </div>
            <div>
            <?php if(is_active_sidebar('footer-3')): ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
                
            </div>
        </article>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>