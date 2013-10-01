jQuery(document).ready(function() {
    jQuery('#spanel1').slidePanel({
        triggerName: '#strigger1',
        triggerTopPos: '220px',
        panelTopPos: '200px',
        position: 'fixed',
        clickOutsideToClose: true
    });
});