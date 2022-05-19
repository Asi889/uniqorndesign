<?php
defined('ABSPATH') || die();
?>

</div>

<!-- end of sticky-footer -->

<footer>
    <?php
    get_template_part('footer-cmps/footer-site', null, ['name' => 'asi']);
    ?>
    
    <!-- <div class="bottom tac">
        Dev: <a class="nemo-hover" target="_blank" href="https://www.naamanfrenkel.dev" rel="noopener noreferrer">nemo</a>
    </div> -->
   
</footer>

<!-- end of app -->
</div>

<?php
wp_footer();

// echo '<a href="https://naamanfrenkel.dev/" style="display:none; font-size:0px; color:transparent; visibility:hidden;"> Made By Naaman Frenkel; מתכנת נעמן פרנקל </a>';
?>

</body>

</html>