// AFFICHAGE HTML
const liveRoom = document.getElementById('live');
CodeMirror.on(editor, 'change', function () {
    liveRoom.contentWindow.document.body.innerHTML = editor.getValue();
})
CodeMirror.on(editorOfCss, 'change', function () {
    let html = '<style>' + editorOfCss.getValue() + '</style>';
    html += '<script>' + editorOfJs.getValue() + '</script>';
    liveRoom.contentWindow.document.head.innerHTML = html;
})
CodeMirror.on(editorOfJs, 'change', function () {
    let html = '<style>' + editorOfCss.getValue() + '</style>';
    html += '<script>' + editorOfJs.getValue() + '</script>';
    liveRoom.contentWindow.document.head.innerHTML = html;
})