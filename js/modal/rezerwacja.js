$(document).ready(function() {
    if(typeof jQuery().deleteConfirm !== "undefined"){
        $(".delete-button").deleteConfirm();
    }
    if(typeof jQuery().loadModal !== "undefined") {
        $('.add-button').loadModal({klasa : 'loadValidationRezerwacja'});
        $('.edit-button').loadModal({klasa : 'loadValidationRezerwacja'});
    }
});
