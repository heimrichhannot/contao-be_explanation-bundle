(function($)
{
    BE_EXPLANATION = {
        init: function()
        {
            this.initCollapsibles();
        },
        initCollapsibles: function()
        {
            $('.be_explanation .toggle').on('click', function() {
                var $toggle = $(this);

                $toggle.parent().toggleClass('open');
            });
        }
    };

    $(document).ready(function()
    {
        BE_EXPLANATION.init();
    });
})(jQuery);