<script>
    $(document).ready(function() {
        var buttonAdd = $("#add-button-multiple");
        var buttonRemove = $("#remove-button-multiple");
        var className = ".dynamic-field-multiple";
        var count = 0;
        var field = "";
        var maxFields = 50;

        function totalFields() {
            return $(className).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#dynamic-field-multiple-1").clone();
            field.attr("id", "dynamic-field-multiple-" + count);
            field.find("input").attr("id", "field-1-" + count);
            field.find("textarea").attr("id", "field-2-" + count);
            field.find("input").val("");
            field.find("textarea").val("");
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
        $(".validation-multiple").each(function() {
            var data = $(this).val();
            var id  =  $(this).attr('id');

            if(Trim(data) === ''){
                $(".validation-multiple").each(function(e) {
                    $("#" + id).addClass('is-invalid').focus();
                    e.preventDefault();
                    return false;
                });
            }else{
                $("#"+id).removeClass('is-invalid');
            }
        });
        $(this).unbind('submit').submit();
        function Trim(value) {
            return value.replace(/^\s+|\s+$/g, '');
        }
    });
</script>
