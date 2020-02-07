require('./bootstrap');

import hljs from 'highlight.js/lib/highlight';
import 'highlight.js/styles/monokai-sublime.css';

hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('htmlbars', require('highlight.js/lib/languages/htmlbars'));
hljs.registerLanguage('http', require('highlight.js/lib/languages/http'));
hljs.registerLanguage('sql', require('highlight.js/lib/languages/sql'));
hljs.initHighlightingOnLoad();

hljs.autoDetection();

$(function () {

    $(".mob").on('click', (event) => {
        event.preventDefault();
    });

    var navMenu = $("#nav-menu");

    $("#menu-button").click(function () {
        navMenu.toggleClass("hidden");
    })

    $(".owner-sub-list").children("a").on("click", function () {
        $(this).next("ul").toggleClass("hidden");
    });
});
