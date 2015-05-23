var MainPage = function() {

    return {

        initMainFunctions: function() {

            $(document).ready(function() {

                $("#travel_radius").ionRangeSlider({
                    min: 50,
                    max: 800,
                    type: 'single',
                    step: 10,
                    postfix: " NM",
                    grid: true,
                    onFinish: function (data) {
                    }
                });
                $("#distance_from_airport").ionRangeSlider({
                    min: 0,
                    max: 50,
                    type: 'single',
                    step: 2,
                    postfix: " mi",
                    grid: false,
                    onFinish: function (data) {
                    }
                });
                $("#min_runway_length").ionRangeSlider({
                    min: 1000,
                    max: 8000,
                    type: 'single',
                    step: 50,
                    postfix: " ft",
                    grid: false,
                    onFinish: function (data) {
                    }
                });
            });
        }
    };
}();