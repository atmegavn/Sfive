$(document).ready(function() {
    console.log("loading ready");
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
});
