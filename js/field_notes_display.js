$(document).ready(function() {
    if (typeof fieldNotesDisplay.hover !== 'undefined') {
        $.each(fieldNotesDisplay.hover, function(field_name, field_notes) {
            $('#' + field_name + '-tr').prop('title', field_notes).find('.note').hide();
        });
    }

    $.each({tooltip: 'title', popover: 'data-content'}, function(mode, attr) {
        if (typeof fieldNotesDisplay[mode] === 'undefined') {
            return;
        }

        var $helper = $('<a href="javascript:;" data-toggle="' + mode + '" class="help">?</span>');
        $.each(fieldNotesDisplay[mode], function(field_name, field_notes) {
            $helper.attr(attr, field_notes);
            $('#' + field_name + '-tr .note').replaceWith($helper);
        });

        $('[data-toggle="' + mode + '"]')[mode]();
    });
});
