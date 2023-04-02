$(document).ready(function () {
    // Counter for new form ids
    var indicatorCount = 1;

    // Add an indicator form
    $("#add-indicator").click(function () {
        // Clone the original form
        var newForm = $("#objectives-form .indicator-form").first().clone();

        // Increment the id of each input and select element
        newForm.find('input, select').each(function () {
            var el = $(this);
            var id = el.attr('id');
            if (id) {
                var newId = id + '-' + indicatorCount;
                el.attr('id', newId);
            }
            var name = el.attr('name');
            if (name) {
                var newName = name + '-' + indicatorCount;
                el.attr('name', newName);
            }
        });

        // Add the new form to the DOM
        newForm.insertBefore("#add-indicator");


        // Increment the indicator count
        indicatorCount++;
    });


    // Remove an indicator form
    $("#indicator-forms").on("click", ".remove-btn", function () {
        $(this).closest(".indicator-form").remove();
    });
});
