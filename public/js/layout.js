$(document).ready(function() {
    $curentMarId = -1;
    $curentMarText = "Không tải được dòng sự kiện...";
    $isRunMar = true;
    $marqueeStop = true;
    $("#accordion").accordion({
        heightStyle: "content",
        collapsible: true
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
    $("#runtext a").hover(function() {
        $marqueeStop = !$marqueeStop;
    });
    layoutAction.getFirstArticles();


});

var layoutAction = {
    run_marquee: function() {
        if ($isRunMar) {
            $left = parseInt($("#runtext").css('left'));
            $wid = 0 - $("#runtext").width();
            $txt = $("#runtext span").text();
            setInterval(function() {
                if (!$marqueeStop) {
                    $left = $left - 1;
                    if ($left == $wid) {
                        $left = 1000;
                        $marqueeStop = true;
                        layoutAction.getNewArticles();
                    }
                    $("#runtext").css('left', $left);
                }
            }, 30);
        }
    },
    getNewArticles: function() {
        $.ajax({
            url: "/Sfive/public/application/articles/getmore",
            type: "post",
            data: 'id=' + $curentMarId,
            success: function(result) {
                if (result['result'] == 'OK') {
                    $curentMarId = result['id'];
                    $curentMarText = result['title'];
                    $("#runtext a li").text($curentMarText);
                    $("#runtext a").attr('href', '/Sfive/public/articles/detail/' + $curentMarId);
                    $marqueeStop = false;
                } else {
                    layoutAction.sendErrorMessage("Không tải được dòng sự kiện");
                }
            }
        });
    },
    getFirstArticles: function() {
        $.ajax({
            url: "/Sfive/public/application/articles/getfist",
            type: "post",
            data: '',
            success: function(result) {
                if (result['result'] == 'OK') {
                    $curentMarId = result['id'];
                    $curentMarText = result['title'];
                    $("#runtext a li").text($curentMarText);
                    $("#runtext a").attr('href', '/Sfive/public/articles/detail/' + $curentMarId);
                    $marqueeStop = false;
                } else {
                    layoutAction.sendErrorMessage("Không tải được dòng sự kiện");
                }
            }
        });
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
                stayTime: 4000
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
    },
    addPopUp: function() {
        $.ajax({
            url: "/Sfive/public/home/index/checkpopup",
            type: "post",
            data: '',
            success: function(result) {
                if (result['result'] == 'on') {
                    $.blockUI({message: '<a href="/Sfive/public/register/"><img href="/Sfive/public/home/" src="/Sfive/public/img/pop-up3.jpg"/></a>'});
                    $('.blockUI ').css('cursor', 'default');
                    $('.blockUI ').click(function() {
                        $.unblockUI();
                    });
                }
            }
        });

    },
    removePopUp: function() {
        $.unblockUI();
    }
};
