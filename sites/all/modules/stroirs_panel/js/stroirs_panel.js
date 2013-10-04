jQuery(document).ready(function() {
    jQuery('#spanel1').slidePanel({
        triggerName: '#strigger1',
        triggerTopPos: '175px',
        panelTopPos: '165px',
        position: 'fixed',
        panelOpacity: '0.9',
        clickOutsideToClose: true
    });
});