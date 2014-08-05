// Need some javascript? The craft admin already loads jQuery
$(document).ready(function(){$(".js-contact").on("click",function(e){e.preventDefault();SnappyWidget.open({contact:!0})})});