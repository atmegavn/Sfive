$(document).ready(function() {
    console.log("loading ready");
    //$("#content").height($("#entry").height()+100);
    $("#accordion").accordion({
        heightStyle: "content"
    });
    $(".jquery-menu").menu();

    $("#slides").slidesjs({
        play: {
            active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
            effect: "fade",
            // [string] Can be either "slide" or "fade".
            interval: 5000,
            // [number] Time spent on each slide in milliseconds.
            auto: true,
            // [boolean] Start playing the slideshow on load.
            swap: true,
            // [boolean] show/hide stop and play buttons
            pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
                    // [number] restart delay on inactive slideshow
        },
        effect: {
            fade: {
                speed: 2000,
                // [number] Speed in milliseconds of the fade animation.
                crossfade: true
                        // [boolean] Cross-fade the transition.
            }
        }
    });
    layoutAction.run_marquee();
    //layoutAction.skyper_init();
});

var layoutAction = {
    run_marquee: function() {
        $left = parseInt($("#runtext").css('left'));
        console.log($("#runtext").css('left'));
        $wid = 0 - $("#runtext").width();
        $txt = $("#runtext span").text();
        setInterval(function() {
            $left = $left - 1;
            if ($left == $wid) {
                $left = 1000;
            }
            //console.log($left);
            $("#runtext").css('left', $left);
        }, 20);
    },
    skyper_init: function() {
        Skype.ui({
            "name": "chat",
            "element": "thuhoai0810",
            "participants": ["thuhoai0810"],
            "imageSize": 12
        });
        Skype.ui({
            "name": "chat",
            "element": "atmegavn",
            "participants": ["atmegavn"],
            "imageSize": 12
        });
    }
};
