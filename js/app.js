// [...document.getElementsByClassName('myc-available-time')].forEach((elem) => {
//     elem.addEventListener('click', () => {
//         document.getElementById('conf').classList.add('hello')
//             // if (elem.classList.contains('myc-available-time selected')) {
//             //     document.getElementById('conf').disabled = false;
//             // }
//     })
// })

(function($) {
    $(document).ready(function() {
        //   "use strict";

        // search overlay toggle
        let searchContainer = $('#searchContainer');
        let searchBtn = $('#searchBtn');
        let searchClose = $('#searchClose');
        searchBtn.on('click', function() {
            searchContainer.addClass('search-active');
        })

        searchClose.on('click', function() {
            searchContainer.removeClass('search-active');
        })

        // delete confirmation popup

        $('.delete').on('click', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2B8FE5',
                cancelButtonColor: '#f03e56',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })



        // hero video popup
        $(document).ready(function() {
            $('.popup-hero').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });

        // meanmenu
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: '991',
        });

        //classes tab with colorfull tab
        $('#colorful').colorfulTab();



        //   preloadder
        $(window).on('load', function() {
            //$("#loading").delay(2000).fadeOut(500);
            $("#loading").fadeOut(500);
        })


        // select tag style plugin


        $('.selectStyle').niceSelect();


        // scroll to top
        //Top to back
        $(".top-btm").click(function() {
            $('html,body').animate({
                "scrollTop": "0"
            }, 1000)
        });

        //fade in fade out
        $(window).scroll(function() {
            var scrollValue = $(this).scrollTop();

            if (scrollValue >= 500) {
                $(".top-btm").fadeIn();
            } else {
                $(".top-btm").fadeOut();
            }
        });
        // hero slider
        $('.active-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fas fa-arrow-right"></i></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fas fa-arrow-left"></i></button>'
        });


        // team slider
        $('.testimonial-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            // prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
            // nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 550,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });



        $('#picker').markyourcalendar({
            availability: [
                ['1:00', '2:00', '3:00', '4:00', '5:00'],
                ['2:00', '3:30', '5:00'],
                ['3:00', '4:00', '5:00'],
                ['4:00'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes
                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerTwo').markyourcalendar({
            availability: [
                ['1:00', '2:00', '5:00'],
                ['2:00', '3:30', '5:00', '6:00', '6:30'],
                ['3:00', '4:00', '5:00'],
                ['4:00', '3:30', '5:00', '6:00', '6:30'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes
                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerThree').markyourcalendar({
            availability: [
                ['1:00', '2:00', '5:00'],
                ['2:00', '3:30', '5:00', '6:00', '6:30'],
                ['3:00', '4:00', '5:00'],
                ['4:00', '3:30', '5:00', '6:00', '6:30'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes

                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerFour').markyourcalendar({
            availability: [
                ['1:00', '2:00', '3:00', '4:00', '5:00'],
                ['2:00', '3:30', '5:00'],
                ['3:00', '4:00', '5:00'],
                ['4:00'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes

                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerFive').markyourcalendar({
            availability: [
                ['1:00', '2:00', '5:00'],
                ['2:00', '3:30', '5:00', '6:00', '6:30'],
                ['3:00', '4:00', '5:00'],
                ['4:00', '3:30', '5:00', '6:00', '6:30'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes

                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerSix').markyourcalendar({
            availability: [
                ['1:00', '2:00', '5:00'],
                ['2:00', '3:30', '5:00', '6:00', '6:30'],
                ['3:00', '4:00', '5:00'],
                ['4:00', '3:30', '5:00', '6:00', '6:30'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes

                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

        $('#pickerSeven').markyourcalendar({
            availability: [
                ['1:00', '2:00', '5:00'],
                ['2:00', '3:30', '5:00', '6:00', '6:30'],
                ['3:00', '4:00', '5:00'],
                ['4:00', '3:30', '5:00', '6:00', '6:30'],
                ['5:00'],
                ['6:00'],
                ['7:00']
            ],
            isMultiple: true,
            onClick: function(ev, data) {
                // data is a list of datetimes

                var html = ``;
                $.each(data, function() {
                    var d = this.split(' ')[0];
                    var t = this.split(' ')[1];
                    html += `<p>` + d + ` ` + t + `</p>`;
                });
                $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
                var arr = [
                    [
                        ['4:00', '5:00', '6:00', '7:00', '8:00'],
                        ['1:00', '5:00'],
                        ['2:00', '5:00'],
                        ['3:30'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['2:00', '5:00'],
                        ['4:00', '5:00', '6:00', '8:00'],
                        ['4:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00'],
                        ['2:00', '5:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '6:00', '7:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00', '7:00', '8:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00'],
                        ['4:00', '5:00']
                    ],
                    [
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00', '7:00', '8:00'],
                        ['4:00', '6:00'],
                        ['4:00', '6:00']
                    ],
                    [
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['3:00', '6:00'],
                        ['4:00'],
                        ['3:00', '6:00']
                    ],
                    [
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['3:00', '4:00'],
                        ['4:00', '5:00', '6:00']
                    ]
                ]
                var rn = Math.floor(Math.random() * 10) % 7;
                instance.setAvailability(arr[rn]);
            }
        });

    });
})(jQuery)


// let appointment_time = document.getElementsByClassName('myc-available-time')

// appointment_time.forEach((elem) => {
//         elem.addEventListener('click', () => {
//             console.log(123);
//             // document.getElementById('conf').classList.add('hello')
//             // if (elem.classList.contains('myc-available-time selected')) {
//             //     document.getElementById('conf').disabled = false;
//             // }
//         })
//     })
// let confirm_btn = document.getElementById('conf').style.display = 'none';

// for (var i = 0; i < appointment_time.length; i++) {
//     appointment_time[i].addEventListener('click', function() {
//         console.log('hello');
//     });
// }