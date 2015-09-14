// Need some javascript? The craft admin already loads jQuery
$(document).ready(function() {
    // Support Tag - feel free to remove
    $('.js-contact').on('click', function(e)
    {
        e.preventDefault();
        SnappyWidget.open({contact: true});
    });
});