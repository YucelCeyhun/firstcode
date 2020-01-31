let Obj = {
    basic: {
        'hr': {tag: 'hr'},
        'br': {tag: 'br'}
    },
    basicWrap: {
        "bold": {tag: 'b'},
        "italic": {tag: 'i'},
        "strike": {tag: 's'},
        "paragraph": {tag: 'p'},
        "underline": {tag: 'u'},

    },
    specific: {}
}

$(function () {
    var editor = document.getElementById('editor');

    $('a').on('click', function () {
        var anchorClass = $(this).attr('class');
        var id = $(this).attr('id');

        switch (anchorClass) {
            case 'basic':
                basic(id,editor);
                break;
            case 'basic-wrap':
                basicWrap(id,editor);
                break;
        }
    })

    $('a#edit-btn').on('click',function () {
        $("#review-wrapper").addClass('hidden');
        $("#editor-wrapper").removeClass('hidden')
    })

    $('a#review-btn').on('click',function () {
        $("#review-wrapper > #review").html($("#editor").val());
        $("#review-wrapper").removeClass('hidden');
        $("#editor-wrapper").addClass('hidden')
    })
})

function basic(id,editor) {
    var start = editor.selectionStart;
    editor.value = editor.value.substring(0, start) + '<' + Obj.basic[id].tag + '>' + editor.value.substring(start, editor.value.length);
}

function basicWrap(id,editor) {
    var start = editor.selectionStart;
    var end = editor.selectionEnd;
    editor.value = editor.value.substring(0, start) + '<' + Obj.basicWrap[id].tag + '>' + window.getSelection() + '</' + Obj.basicWrap[id].tag + '>' + editor.value.substring(end, editor.value.length);
}


function nl2br(val) {
    return val.replace(/(\r\n|\n\r|\r|\n)/g,'<br>');
}

function br2nl(val) {
    return val.replace(/<br>/g,'\r');
}
