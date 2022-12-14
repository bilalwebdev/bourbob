(function () {
    "use strict";

    // Show modal
    $("#aroma-modal-show").on("click", function () {
        const el = document.querySelector("#aroma-modal");
        const modal = tailwind.Modal.getOrCreateInstance(el);
        modal.show();
    });

    // Hide modal
    $("#programmatically-hide-modal").on("click", function () {
        const el = document.querySelector("#programmatically-modal");
        const modal = tailwind.Modal.getOrCreateInstance(el);
        modal.hide();
    });

    // Toggle modal
    $("#programmatically-toggle-modal").on("click", function () {
        const el = document.querySelector("#programmatically-modal");
        const modal = tailwind.Modal.getOrCreateInstance(el);
        modal.toggle();
    });
})();
