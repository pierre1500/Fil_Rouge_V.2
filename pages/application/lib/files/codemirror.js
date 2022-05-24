// CODE EDITOR HTML
const editor = CodeMirror(document.getElementById('htmlEditor'),
    {
        mode: "xml",
        theme: "dracula",
        lineNumbers: true,
        autoCloseTags: true,
        autoCloseBrackes: true,
        indentUnit: 4,
    });
editor.setSize("950", "530");


// CODE EDITOR CSS
const editorOfCss = CodeMirror(document.getElementById('cssEditor'),
    {
        mode: "css",
        theme: "dracula",
        autoCloseTags: true,
        autoCloseBrackes: true,
        indentUnit: 4,
        extraKeys:{"Shift-Space":"autocomplete"},
    });
editorOfCss.setSize("950", "530");


// CODE EDITOR JS
const editorOfJs = CodeMirror(document.getElementById('jsEditor'),
    {
        name: "javascript",
        json: true,
        theme: "dracula",
        tabSize: 4,
        indentUnit: 4,
    });
editorOfJs.setSize("950", "530");
