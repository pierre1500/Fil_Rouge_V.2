<?php

class codemirror extends lib {
    static function head() {
        echo
        '<script src="lib/files/codemirror/addon/edit/closetag.js"></script>
    <link rel="stylesheet" href="lib/files/codemirror/theme/dracula.css">
    <link href="lib/files/codemirror/lib/codemirror.css" rel="stylesheet">
    <script src="lib/files/codemirror/mode/xml/xml.js"></script>
    <!--Pour Css-->
    <link href="lib/files/codemirror/lib/codemirror.css">
    <script src="lib/files/codemirror/mode/css/css.js"></script>
    <link rel="stylesheet" href="lib/files/codemirror/addon/hint/show-hint.css">
    <script src="lib/files/codemirror/addon/hint/show-hint.js"></script>
    <script src="lib/files/codemirror/addon/hint/css-hint.js"></script>';
    }

    static function body() {
        echo
        '<div id="partie-code-resultat">
            <div class="studio">
                <div class="control-room">
                    <div class="editor" id="htmlEditor" ></div>
                    <div class="editor" id="cssEditor" ></div>
                    <div class="editor" id="jsEditor" ></div>
                </div>
            </div>
        </div>';
    }
}

$codemirror = new codemirror();

