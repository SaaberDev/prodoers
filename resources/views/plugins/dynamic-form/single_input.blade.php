<script>
    $(document).ready(function() {
        var buttonAdd = $("#add-button-feature");
        var buttonRemove = $("#remove-button-feature");
        var className = ".dynamic-field";
        var count = 0;
        var field = "";
        var maxFields = 50;

        function totalFields() {
            return $(className).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#dynamic-field-1").clone();
            field.attr("id", "dynamic-field-" + count);
            field.children("label").text("Feature #" + count);
            field.children("input").attr("id", "field-" + count);
            // field.children("input").attr("name", "features." + count);
            field.find("input").val("");
            $(className + ":last").after($(field));
            field.find("a").attr("id", "sweet_delete").addClass('d-none');
        }

        function removeLastField() {
            if (totalFields() > 1) {
                $(className + ":last").remove();
            }
        }

        function enableButtonRemove() {
            if (totalFields() > 1) {
                buttonRemove.removeAttr("disabled");
                buttonRemove.addClass("shadow-sm");
            }
        }

        function disableButtonRemove() {
            if (totalFields() === 1) {
                buttonRemove.attr("disabled", "disabled");
                buttonRemove.removeClass("shadow-sm");
            }
        }

        function disableButtonAdd() {
            if (totalFields() === maxFields) {
                buttonAdd.attr("disabled", "disabled");
                buttonAdd.removeClass("shadow-sm");
            }
        }

        function enableButtonAdd() {
            if (totalFields() === (maxFields - 1)) {
                buttonAdd.removeAttr("disabled");
                buttonAdd.addClass("shadow-sm");
            }
        }

        buttonAdd.click(function() {
            addNewField();
            enableButtonRemove();
            disableButtonAdd();
        });

        buttonRemove.click(function() {
            removeLastField();
            disableButtonRemove();
            enableButtonAdd();
        });
    });

    $("form").submit(function (e) {
        e.preventDefault();
        $(".validation").each(function() {
            var data = $(this).val();
            var id  =  $(this).attr('id');

            if(Trim(data) === ''){
                $(".validation").each(function(e) {
                    $("#" + id).addClass('is-invalid').focus();
                    e.preventDefault();
                    return false;
                });
            }
            else{
                $("#"+id).removeClass('is-invalid');
            }
        });
        // $(this).unbind('submit').submit();
        function Trim(value) {
            return value.replace(/^\s+|\s+$/g, '');
        }
    });
</script>
