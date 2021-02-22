(function($) {

    "use strict";

    Dropzone.autoDiscover = false;

    $(document).ready(function() {

        //
        // Horizontal scroll
        //

        [].forEach.call(document.querySelectorAll('[data-horizontal-scroll]'), function (el) {
            function scrollHorizontally(e) {
                e = window.event || e;
                var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
                el.scrollLeft -= (delta*28);
                e.preventDefault();
            }

            if (el.addEventListener) {
                el.addEventListener("mousewheel", scrollHorizontally, false);
                el.addEventListener("DOMMouseScroll", scrollHorizontally, false);
            } else {
                el.attachEvent("onmousewheel", scrollHorizontally);
            }
        });

        //
        // Detect mobile devices
        //

        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPod|iPad/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        //
        // Modified accordion(settings.html)
        //

        if ( !isMobile.any() ) {
            [].forEach.call(document.querySelectorAll('.modified-accordion [data-toggle="collapse"]'), function (e) {
                e.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                });
            });

            [].forEach.call(document.querySelectorAll('.modified-accordion .collapse'), function (e) {
                e.classList.add('show');
            });
        }

        //
        // Emoji
        //

        if ( !isMobile.any() ) {
            [].forEach.call(document.querySelectorAll('[data-emoji-form]'), function (form) {
                var button = form.querySelector('[data-emoji-btn]');

                var picker = new EmojiButton({
                    position: "top",
                    zIndex: 1020
                });

                picker.on('emoji', function(emoji) {
                    form.querySelector('[data-emoji-input]').value += emoji;
                });

                button.addEventListener('click', function () {
                    picker.pickerVisible ? picker.hidePicker() : picker.showPicker(button);
                });
            });
        } else {
            [].forEach.call(document.querySelectorAll('[data-emoji-form]'), function (form) {
                form.querySelector('[data-emoji-btn]').style.display = 'none';
            });
        }

        //
        // Toggle chat
        //

        [].forEach.call(document.querySelectorAll('[data-chat="open"]'), function (a) {
            a.addEventListener('click', function () {
                document.querySelector('.main').classList.toggle('main-visible');
            }, false );
        });

        //
        // Toggle chat`s sidebar
        //

        [].forEach.call(document.querySelectorAll('[data-chat-sidebar-toggle]'), function (e) {
            e.addEventListener('click', function (event) {
                event.preventDefault();
                var chat_sidebar_id = e.getAttribute('data-chat-sidebar-toggle');
                var chat_sidebar = document.querySelector(chat_sidebar_id);

                if (typeof(chat_sidebar) != 'undefined' && chat_sidebar != null) {
                    if ( chat_sidebar.classList.contains('chat-sidebar-visible') ) {
                        chat_sidebar.classList.remove('chat-sidebar-visible')
                        document.body.classList.remove('sidebar-is-open');
                    } else {
                        [].forEach.call(document.querySelectorAll('.chat-sidebar'), function (e) {
                            e.classList.remove('chat-sidebar-visible');
                            document.body.classList.remove('sidebar-is-open');
                        });
                        chat_sidebar.classList.add('chat-sidebar-visible');
                        document.body.classList.add('sidebar-is-open');
                    }
                }

            });
        });

        //
        // Close all chat`s sidebars
        //

        [].forEach.call(document.querySelectorAll('[data-chat-sidebar-close]'), function (a) {
            a.addEventListener('click', function (event) {
                event.preventDefault();
                document.body.classList.remove('sidebar-is-open');
                [].forEach.call(document.querySelectorAll('.chat-sidebar'), function (a) {
                    a.classList.remove('chat-sidebar-visible');
                });
            }, false );
        });

        //
        // Dropzone
        //

        if ( document.querySelector('#dropzone-template-js') ) {
            var template = document.querySelector('#dropzone-template-js');
            var template_element = document.querySelector('#dropzone-template-js');
            template_element.parentNode.removeChild(template_element);
        }

        [].forEach.call(document.querySelectorAll('.dropzone-form-js'), function (el) {

            var clickable         = el.querySelector('.dropzone-button-js').id;
            var url               = el.getAttribute('data-dz-url');
            var previewsContainer = el.querySelector('.dropzone-previews-js');

            var myDropzone = new Dropzone(el, {
                url: url,
                previewTemplate: template.innerHTML,
                previewsContainer: previewsContainer,
                clickable: '#' + clickable
            });
        });

        //
        // Mobile screen height minus toolbar height
        //

        function mobileScreenHeight() {
            if ( document.querySelectorAll('.navigation').length && document.querySelectorAll('.sidebar').length ) {
                document.querySelector('.sidebar').style.height = windowHeight - document.querySelector('.navigation').offsetHeight + 'px';
            }
        }

        if ( isMobile.any() && (document.documentElement.clientWidth < 1024) ) {
            var windowHeight = document.documentElement.clientHeight;
            mobileScreenHeight();

            window.addEventListener('resize', function(event){
                if (document.documentElement.clientHeight != windowHeight) {
                    windowHeight = document.documentElement.clientHeight;
                    mobileScreenHeight();
                }
            });
        }

        //
        // Scroll to end of chat
        //

        if (document.querySelector('.end-of-chat')) {
            document.querySelector('.end-of-chat').scrollIntoView();
        }

        //
        // Autosize
        //

        autosize(document.querySelectorAll('[data-autosize="true"]'));

        //
        // SVG inject
        //

        SVGInjector(document.querySelectorAll('img[data-inject-svg]'));

    });

})(jQuery);