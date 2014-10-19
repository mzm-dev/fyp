function formWysiwyg() {
    "use strict";

    /*----------- BEGIN wysihtml5 CODE -------------------------*/
    //$('#wysihtml5').wysihtml5();
    //$('#wysihtml5').wysihtml5();
    $('#wysihtml5').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": false, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": false, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false //Button to change color of font  
    });
    /*----------- END wysihtml5 CODE -------------------------*/

    /*----------- BEGIN Markdown.Editor CODE -------------------------*/
//    var converter = Markdown.getSanitizingConverter();
//    var editor = new Markdown.Editor(converter);
//    editor.run();
//    /*----------- END Markdown.Editor CODE -------------------------*/
//
//    /*----------- BEGIN cleditor CODE -------------------------*/
//    editor = $("#cleditor").cleditor({width: "100%", height: "100%"})[0].focus();
//    $(window).resize();
//
//    $(window).resize(function() {
//        var $win = $('#cleditorDiv');
//        $("#cleditor").width($win.width() - 24).height($win.height() - 24).offset({
//            left: 15,
//            top: 15
//        });
//        editor.refresh();
//    });
    /*----------- END cleditor CODE -------------------------*/

}