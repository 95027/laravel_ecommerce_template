function jsValidator(id) {
    $(`#${id}`).parsley({
        errorsWrapper: '<div class="parsley-errors-list"></div>',
        errorTemplate: "<span></span>",
    }); 
}
