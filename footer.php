<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>

<script>
    $(document).ready(function() {
        // update rendered pattern when user edits the textareas
        $('#markup textarea').on('keyup', function(e) {
            $('#pattern-wrap').html($(this).val());
        });
        $('#style textarea').on('keyup', function(e) {
            $('div.main style').html($(this).val());
        });

        // auto-select code in textarea when clipboard icon is clicked
        $('#markup a.clip').click(function(){
            $('#markup textarea').select();
            return false;
        });
        $('#style a.clip').click(function(){
            $('#style textarea').select();
            return false;
        });

        // expand/collapse side nav
        $('#nav-toggle').click(function() {
            $('body').toggleClass('expanded');
            return false;
        });

        $(document).foundation();

    });
</script>

</body>

</html>