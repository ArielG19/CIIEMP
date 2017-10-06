$(function () {
    $(".time_circles").TimeCircles({count_past_zero: false, time: {
        Days: { show: false },
        Hours: { show: true },
        Minutes: { show: true },
        Seconds: { show: true }
    }});
    //.end().fadeOut();
});
