<div id="home" class="banner">
    <div class="banner-agileinfo">
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="menu">
                    <a href="" id="menuToggle"> <span class="navClosed"></span> </a>
                    <nav>
                        <a href="#home" class="active scroll">Home</a>
                        <a href="#about" class="scroll">About Me</a>
                        <a href="#skills" class="scroll">Skills</a>
                        <a href="#gallery" class="scroll">My Work</a>
                        <a href="#services" class="scroll">Services</a>
                        <a href="#contact" class="scroll">Contact</a>
                    </nav>
                    <script>
                        (function ($) {
                            // Menu Functions
                            $(document).ready(function () {
                                $('#menuToggle').click(function (e) {
                                    var $parent = $(this).parent('.menu');
                                    $parent.toggleClass("open");
                                    var navState = $parent.hasClass('open') ? "hide" : "show";
                                    $(this).attr("title", navState + " navigation");
                                    // Set the timeout to the animation length in the CSS.
                                    setTimeout(function () {
                                        console.log("timeout set");
                                        $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                                    }, 200);
                                    e.preventDefault();
                                });
                            });
                        })(jQuery);
                    </script>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
    </div>
</div>
