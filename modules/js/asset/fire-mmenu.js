jQuery(document).ready(function( $ ) {
    $("#menu").mmenu({
    // "extensions": [
    //     "fx-menu-zoom"
    // ],
    // configuration
        offCanvas: {
            pageSelector: "#page-wrapper"
        },

    "navbars": [
        {
            "position": "top",
            "content": [
                "searchfield"
            ]
        },
        {
            "position": "top"
        },
        {
            "position": "bottom",
            "content": [
                "<a class='fa fa-twitter' href='#/'></a>",
                "<a class='fa fa-facebook' href='#/'></a>"
            ]
        }
    ]
    });
});