jQuery(document).ready(function() {
    jQuery('#spanel1').slidePanel({
        triggerName: '#strigger1',
        triggerTopPos: '240px',
        panelTopPos: '230px',
        position: 'fixed',
        panelOpacity: '0.9',
        clickOutsideToClose: true
    });
});