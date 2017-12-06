$(function() {
    $('.datainput').datepicker({
        localization: 'zh-tw',
        dateFormat: 'yy-mm-dd',
        changeYear: true,
        changeMonth: true,
        showButtonPanel: true,
        yearRange: "-80:-18"
    });
});
