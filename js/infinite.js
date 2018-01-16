if ( $(window).width() > 1030 && !(navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) {
    angular.module('app', ['ngAnimate'])
    .directive('infiniteScroll', function($window, $document, $timeout) {
        return {
            restrict: 'A',
            link: function(scope, element, attrs) {

                // Check if user initiated scroll
                var userScroll = false;
                function mouseEvent(e) { 
                    userScroll = true; 
                }
                // Mozilla/Webkit 
                if(window.addEventListener) {
                    document.addEventListener('DOMMouseScroll', mouseEvent, false); 
                }
                //for IE/OPERA etc 
                document.onmousewheel = mouseEvent;

                // infinite scrolling logic
                angular.element($window).bind("scroll", function() {
                    var h = element[0].scrollHeight - $window.innerHeight;
                    var offset = $window.pageYOffset;

                    if(h == offset && userScroll) {
                        $window.scrollTo(0, 0);
                        userScroll = false;
                        scope.viewportCounterDown = scope.viewportCounterDown + 1;
                        scope.$apply();
                    }
                    else if(offset == 0 && userScroll) {
                        $window.scrollTo(0, h);
                        userScroll = false;
                        scope.viewportCounterUp = scope.viewportCounterUp + 1;
                        scope.$apply();
                    }
                });

                // save viewport height to scope
                var reportValues = function() {
                    scope.viewportHeight = $window.innerHeight;
                }
                reportValues();
                $window.scrollTo(0, $window.innerHeight/2);
                angular.element($window).bind("resize", reportValues);
            }
        }
    })
    .controller('MainController', function($scope) {
        $scope.viewportCounterDown = 0;
        $scope.viewportCounterUp = 0;

        $scope.$watch('viewportCounterDown', function(newValue, oldValue) {
            console.log('viewportCounterDown' + $scope.viewportCounterDown);
        })
        $scope.$watch('viewportCounterUp', function(newValue, oldValue) {
            console.log('viewportCounterUp' + $scope.viewportCounterUp);
        })
    })

    //clone header projects into footer
    $('footer')[0].appendChild($('header')[0].childNodes[1].cloneNode(true));

    
    // infinite scroll hover-bug
    var gridRepeat = $('.grid.repeat');
    var headerFigures = $(gridRepeat[0]).find('figure');
    var footerFigures = $(gridRepeat[1]).find('figure');

    $('figure.effect')
    .mouseover(function(){
        $(this).addClass('hover');
    })
    .mouseout(function(){
        $(this).removeClass('hover');
    });
    
    for (i = 0; i < headerFigures.length; i++) { 
        eval("$(headerFigures[" + i + "]).on('mouseenter mouseleave', function(e){$(footerFigures[" + i + "]).trigger(e.type);})");
        eval("$(footerFigures[" + i + "]).on('mouseenter mouseleave', function(e){$(headerFigures[" + i + "]).trigger(e.type);})");
    }

};


if ( $(window).width() > 1030 && (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) {
    $('.repeat').css('margin-top', $('#menu').css('height'));
}

