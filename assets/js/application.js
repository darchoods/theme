jQuery(document).ready(function(){
    initBS();
    jQuery(document).ajaxSuccess(function(event, request, settings){
        initBS();
    });
});


function initBS(){
    if (jQuery('[data-toggle="tooltip"]').length) {
        jQuery('[data-toggle="tooltip"]').tooltip();
    }
    if (jQuery('[data-toggle="popover"]').length) {
        jQuery('[data-toggle="popover"]').popover({
            html: true,
            trigger: 'hover',
            content: function(){
                return jQuery(this).parents('[class*="item"]').find(' > div').text();
            },
            placement: 'auto top'
        });
    }
}
