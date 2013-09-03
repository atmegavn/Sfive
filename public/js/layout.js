$(document).ready(function() {
    console.log("loading ready");
    $("#accordion").accordion({
        heightStyle: "content"
    });
    $(".jquery-menu").menu();
    Skype.ui({
        "name": "dropdown",
        "element": "SkypeButton_Dropdown_atmegavn_1",
        "participants": ["atmegavn"],
        "imageSize": 32
    });
});
