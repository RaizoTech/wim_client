<script src="assets/js/custom.hero.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isInViewport.jquery.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/scrolla.jquery.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
    $(window).scroll( function(){
        if($(window).scrollTop()){
            $('.navbar').css('background','#1C1B1A');
            $('a').addClass('text-white');
            $('.nav-bg').css('background','#1C1B1A');
        }
        else {
            $('.navbar').css('background','transparent');
            $('a').removeClass('text-white');
        }
    });

    $(document).ready( function(){
        // Raizo Function added
        $('#about_me_buttons-CM').on('click', function(){
            location.href = 'IamWim#contact';
        });
            //---
        $('#about_me_buttons-CV').on('click', function(){
            location.href = 'IamWim#portfolio';
        });
    });

    $('#SkillsButton').mouseenter( function(){
        $('#SkillsButton').removeClass('btn-light');
        $('#SkillsButton').addClass('btn-dark');
    });

    $('#SkillsButton').mouseleave( function(){
        $('#SkillsButton').removeClass('btn-dark');
        $('#SkillsButton').addClass('btn-light');
    });

    $('#about_me_buttons-CM').mouseenter( function(){
        $('#about_me_buttons-CM').removeClass('btn-light');
        $('#about_me_buttons-CM').addClass('btn-dark');
    });

    $('#about_me_buttons-CM').mouseleave( function(){
        $('#about_me_buttons-CM').removeClass('btn-dark');
        $('#about_me_buttons-CM').addClass('btn-light');
    });

    $('#about_me_buttons-CV').mouseenter( function(){
        $('#about_me_buttons-CV').removeClass('btn-dark');
        $('#about_me_buttons-CV').addClass('btn-light');
    });

    $('#about_me_buttons-CV').mouseleave( function(){
        $('#about_me_buttons-CV').removeClass('btn-light');
        $('#about_me_buttons-CV').addClass('btn-dark');
    });
</script>