$(document).ready(function() {
    $isRunMar = true;
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
    //layoutAction.run_marquee();
    //layoutAction.skyper_init();
});

var layoutAction = {
    run_marquee: function() {
        if ($isRunMar) {
            $left = parseInt($("#runtext").css('left'));
            console.log($("#runtext").css('left'));
            $wid = 0 - $("#runtext").width();
            $txt = $("#runtext span").text();
            setInterval(function() {
                $left = $left - 1;
                if ($left == $wid) {
                    $left = 1000;
                }
                $("#runtext").css('left', $left);
            }, 30);
        }

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
    },
    sendMessage: function(type, text, time) {
        if (time == null) {
            $().toastmessage('showToast', {
                text: text,
                sticky: false,
                position: 'bottom-left',
                type: type,
                stayTime: 2000
            });
        } else {
            $().toastmessage('showToast', {
                text: text,
                sticky: true,
                position: 'bottom-left',
                type: type,
                stayTime: time
            });
        }

    },
    sendSuccesMessage: function($text, $time) {
        layoutAction.sendMessage("success", $text, $time);
    },
    sendErrorMessage: function($text, $time) {
        layoutAction.sendMessage("error", $text, $time);
    },
    sendNoticeMessage: function($text, $time) {
        layoutAction.sendMessage("notice", $text, $time);
    },
    sendWarningMessage: function($text, $time) {
        layoutAction.sendMessage("warning", $text, $time);
    },
    addLoading: function() {
        $.blockUI({message: '<h1><img style="height: 30px" src="/Sfive/public/img/loading1.gif"/></h1>'});
    },
    removeLoading: function() {
        $.unblockUI();
    }
};
