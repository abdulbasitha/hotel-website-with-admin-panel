/**
 *  Document   : app.js
 *  Author     : redstar
 *  Description: Core script to handle the entire theme and core functions
 *
 **/
var App = function() {

    // IE mode
    var isIE8 = false;
    var isIE9 = false;
    var isIE10 = false;

    var resizeHandlers = [];

    var assetsPath = '';

    var globalImgPath = 'img/';

    var globalPluginsPath = 'global/plugins/';

    var globalCssPath = 'css/';

    /************* Setting for IE ****************/
    var handleInit = function() {


        isIE8 = !!navigator.userAgent.match(/MSIE 8.0/);
        isIE9 = !!navigator.userAgent.match(/MSIE 9.0/);
        isIE10 = !!navigator.userAgent.match(/MSIE 10.0/);

        if (isIE10) {
            $('html').addClass('ie10'); // detect IE10 version
        }

        if (isIE10 || isIE9 || isIE8) {
            $('html').addClass('ie'); // detect IE10 version
        }
    };
    
    /*************** Change theme color *************/
    var handleColorSetting = function() {

    	jQuery( ".control-sidebar-btn" ).click(function() {
    		
    		jQuery( ".quick-setting" ).toggle( "slide");
    		
    	});

    };

    /************* Handle theme layout ****************/
    var handleTheme = function() {

        var panel = $('.chatpane');

        if ($('body').hasClass('page-boxed') === false) {
            $('.layout-option', panel).val("fluid");
        }

        $('.sidebar-option', panel).val("default");
        $('.page-header-option', panel).val("fixed");
        $('.page-footer-option', panel).val("default");
        if ($('.sidebar-pos-option').attr("disabled") === false) {
            $('.sidebar-pos-option', panel).val('left');
        }
        var lastSelectedLayout = '';

        var setLayout = function() {

            var layoutOption = $('.layout-option', panel).val();
            var sidebarOption = $('.sidebar-option', panel).val();
            var headerOption = $('.page-header-option', panel).val();
            var footerOption = $('.page-footer-option', panel).val();
            var sidebarPosOption = $('.sidebar-pos-option', panel).val();
            var sidebarStyleOption = $('.sidebar-style-option', panel).val();
            var sidebarMenuOption = $('.sidebar-menu-option', panel).val();
            var headerTopDropdownStyle = $('.page-header-top-dropdown-style-option', panel).val();

            if (sidebarOption == "fixed" && headerOption == "default") {
                alert('Default Header with Fixed Sidebar option is not supported. Proceed with Fixed Header with Fixed Sidebar.');
                $('.page-header-option', panel).val("fixed");
                $('.sidebar-option', panel).val("fixed");
                sidebarOption = 'fixed';
                headerOption = 'fixed';
            }

            resetLayout(); // reset layout to default state

            if (layoutOption === "boxed") {
                $("body").addClass("page-boxed");

                // set header
                $('.page-header > .page-header-inner').addClass("container");
                var cont = $('body > .clearfix').after('<div class="container"></div>');

                // set content
                $('.page-container').appendTo('body > .container');

                // set footer
                if (footerOption === 'fixed') {
                    $('.page-footer').html('<div class="container">' + $('.page-footer').html() + '</div>');
                } else {
                    $('.page-footer').appendTo('body > .container');
                }
            }

            if (lastSelectedLayout != layoutOption) {
                //layout changed, run responsive handler: 
                App.runResizeHandlers();
            }
            lastSelectedLayout = layoutOption;

            /************ header ******************/
            if (headerOption === 'fixed') {
                $("body").addClass("page-header-fixed");
                $(".page-header").removeClass("navbar-static-top").addClass("navbar-fixed-top");
            } else {
                $("body").removeClass("page-header-fixed");
                $(".page-header").removeClass("navbar-fixed-top").addClass("navbar-static-top");
            }

            /************ sidebar *****************/
            if ($('body').hasClass('page-full-width') === false) {
                if (sidebarOption === 'fixed') {
                    $("body").addClass("sidemenu-container-fixed");
                    $("sidemenu").addClass("sidemenu-fixed");
                    $("sidemenu").removeClass("page-sidebar-menu-default");
                    Layout.initFixedSidebarHoverEffect();
                } else {
                    $("body").removeClass("sidemenu-container-fixed");
                    $("page-sidebar-menu").addClass("page-sidebar-menu-default");
                    $("page-sidebar-menu").removeClass("sidemenu-default");
                    $('.sidemenu').unbind('mouseenter').unbind('mouseleave');
                }
            }

            /********* top dropdown style ************/
            if (headerTopDropdownStyle === 'dark') {
                $(".top-menu > .navbar-nav > li.dropdown").addClass("dropdown-dark");
            } else {
                $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");
            }

            /************* footer ****************/ 
            if (footerOption === 'fixed') {
                $("body").addClass("page-footer-fixed");
            } else {
                $("body").removeClass("page-footer-fixed");
            }

            /*********** sidebar style ***************/
            if (sidebarStyleOption === 'light') {
                $(".page-sidebar-menu").addClass("page-sidebar-menu-light");
            } else {
                $(".page-sidebar-menu").removeClass("page-sidebar-menu-light");
            }

            /********* sidebar menu ***********************/ 
            if (sidebarMenuOption === 'hover') {
                if (sidebarOption == 'fixed') {
                    $('.sidebar-menu-option', panel).val("accordion");
                    alert("Hover Sidebar Menu is not compatible with Fixed Sidebar Mode. Select Default Sidebar Mode Instead.");
                } else {
                    $(".sidemenu").addClass("sidemenu-hover-submenu");
                }
            } else {
                $(".sidemenu").removeClass("sidemenu-hover-submenu");
            }

            /**************** sidebar left right position setting **************/
            if (sidebarPosOption === 'right') {
                $("body").addClass("sidemenu-container-reversed");
                $('#frontend-link').tooltip('destroy').tooltip({
                    placement: 'left'
                });
            } else {
                $("body").removeClass("sidemenu-container-reversed");
                $('#frontend-link').tooltip('destroy').tooltip({
                    placement: 'right'
                });
            }

            Layout.fixContentHeight(); // fix content height            
            Layout.initFixedSidebar(); // reinitialize fixed sidebar
        };

        $(document).on('click', '.toggler', panel, function() {
            $('.toggler').hide();
            $('.toggler-close').show();
            $('.chatpane > .theme-options').show();
        });

        $(document).on('click', '.toggler-close', panel, function() {
            $('.toggler').show();
            $('.toggler-close').hide();
            $('.chatpane > .theme-options').hide();
        });
        
        
        /*************** spinner  button ******************/
        $(document).on('click', '.spinner button', function() {
            var btn = $(this);
            var input = btn.closest('.spinner').find('input');
            var step = 1;
            if (input.attr('step') != undefined) {
                step = parseInt(input.attr('step'),10);
            }
            if (btn.attr('data-dir') == 'up') {
                if (input.attr('max') == undefined || parseInt(input.val(),10) < parseInt(input.attr('max'),10)) {
                    input.val(parseInt(input.val(), 10) + step);
                } else {
                    btn.next("disabled", true);
                }
            } else {
                if (input.attr('min') == undefined || parseInt(input.val(),10) > parseInt(input.attr('min'),10)) {
                    input.val(parseInt(input.val(), 10) - step);
                } else {
                    btn.prev("disabled", true);
                }
            }
        });

        /*************** TO DO **********************/
        $(document).on('click', '.todo-check label', function() {
            $(this).parents('li').children('.todo-title').toggleClass('line-through');
        });
        $(document).on('click', '.todo-remove', function() {
            $(this).closest("li").remove();
            return false;
        });

        $(document).on('click', '.panel .tools .fa-times', function() {
            $(this).parents(".panel").parent().remove();
        });
        $('.tooltips').tooltip();

        // clickable row for email
        $(document).on('click', '.clickable-row', function() {
            window.document.location = $(this).data("link");
        });


        /************* collapse button in panel***************8*/
        $(document).on('click', '.card .tools .t-collapse', function() {
            var el = $(this).parents(".card").children(".card-body");
            if ($(this).hasClass("fa-chevron-down")) {
                $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
                el.slideUp(200);
            } else {
                $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
                el.slideDown(200);
            }
        });

        /**************** close button in panel *****************/
        $(document).on('click', '.card .tools .t-close', function() {
            $(this).parents(".card").parent().remove();
        });

        /****************** refresh button in panel *****************/
        $('.box-refresh').on('click', function(br) {
            br.preventDefault();
            $("<div class='refresh-block'><span class='refresh-loader'><i class='fa fa-spinner fa-spin'></i></span></div>").appendTo($(this).parents('.tools').parents('.card-head').parents('.card'));
            setTimeout(function() {
                $('.refresh-block').remove();
            }, 1000);
        });

        /***************** set default theme options **************************/

        if ($("body").hasClass("page-boxed")) {
            $('.layout-option', panel).val("boxed");
        }

        if ($("body").hasClass("sidemenu-container-fixed")) {
            $('.sidebar-option', panel).val("fixed");
        }

        if ($("body").hasClass("page-header-fixed")) {
            $('.page-header-option', panel).val("fixed");
        }

        if ($("body").hasClass("page-footer-fixed")) {
            $('.page-footer-option', panel).val("fixed");
        }

        if ($("body").hasClass("sidemenu-container-reversed")) {
            $('.sidebar-pos-option', panel).val("right");
        }

        if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-light")) {
            $('.sidebar-style-option', panel).val("light");
        }

        if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-hover-submenu")) {
            $('.sidebar-menu-option', panel).val("hover");
        }

        var sidebarOption = $('.sidebar-option', panel).val();
        var headerOption = $('.page-header-option', panel).val();
        var footerOption = $('.page-footer-option', panel).val();
        var sidebarPosOption = $('.sidebar-pos-option', panel).val();
        var sidebarStyleOption = $('.sidebar-style-option', panel).val();
        var sidebarMenuOption = $('.sidebar-menu-option', panel).val();

        $('.layout-option, .page-header-option, .page-header-top-dropdown-style-option, .sidebar-option, .page-footer-option, .sidebar-pos-option, .sidebar-style-option, .sidebar-menu-option', panel).change(setLayout);
    };

    /************ Reset theme layout ********************/
    var resetLayout = function() {
        $("body").
        removeClass("page-boxed").
        removeClass("page-footer-fixed").
        removeClass("sidemenu-container-fixed").
        removeClass("page-header-fixed").
        removeClass("sidemenu-container-reversed");

        $('.page-header > .page-header-inner').removeClass("container");

        if ($('.page-container').parent(".container").length === 1) {
            $('.page-container').insertAfter('body > .clearfix');
        }

        if ($('.page-footer > .container').length === 1) {
            $('.page-footer').html($('.page-footer > .container').html());
        } else if ($('.page-footer').parent(".container").length === 1) {
            $('.page-footer').insertAfter('.page-container');
            $('.scroll-to-top').insertAfter('.page-footer');
        }

        $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");

        $('body > .container').remove();
    };


    // runs callback functions set by App.addResponsiveHandler().
    var _runResizeHandlers = function() {
        // reinitialize other subscribed elements
        for (var i = 0; i < resizeHandlers.length; i++) {
            var each = resizeHandlers[i];
            each.call();
        }
    };

    /********** handle the layout reinitialization on window resize ***********/
    var handleOnResize = function() {
        var resize;
        if (isIE8) {
            var currheight;
            $(window).resize(function() {
                if (currheight == document.documentElement.clientHeight) {
                    return; //quite event since only body resized not window.
                }
                if (resize) {
                    clearTimeout(resize);
                }
                resize = setTimeout(function() {
                    _runResizeHandlers();
                }, 50); // wait 50ms until window resize finishes.                
                currheight = document.documentElement.clientHeight; // store last body client height
            });
        } else {
            $(window).resize(function() {
                if (resize) {
                    clearTimeout(resize);
                }
                resize = setTimeout(function() {
                    _runResizeHandlers();
                }, 50); // wait 50ms until window resize finishes.
            });
        }
    };

    /*************** Handles Bootstrap switches in setting panel  ********/
    var handleBootstrapSwitch = function() {
        if (!$().bootstrapSwitch) {
            return;
        }
        $('.make-switch').bootstrapSwitch();
    };

    /*************** Handles Bootstrap Tabs **********************/
    var handleTabs = function() {
        //activate tab if tab id provided in the URL
        if (encodeURI(location.hash)) {
            var tabid = encodeURI(location.hash.substr(1));
            $('a[href="#' + tabid + '"]').parents('.tab-pane:hidden').each(function() {
                var tabid = $(this).attr("id");
                $('a[href="#' + tabid + '"]').click();
            });
            $('a[href="#' + tabid + '"]').click();
        }

        if ($().tabdrop) {
            $('.tabbable-tabdrop .nav-pills, .tabbable-tabdrop .nav-tabs').tabdrop({
                text: '<i class="fa fa-ellipsis-v"></i>&nbsp;<i class="fa fa-angle-down"></i>'
            });
        }
    };

    /************* Handles Bootstrap Dropdowns  ********************/
    var handleDropdowns = function() {
        /*
          Hold dropdown on click  
        */
        $('body').on('click', '.dropdown-menu.hold-on-click', function(e) {
            e.stopPropagation();
        });
    };

    /************** Handles counterup plugin wrapper ****************/
    var handleCounterup = function() {
        if (!$().counterUp) {
            return;
        }

        $("[data-counter='counterup']").counterUp({
            delay: 10,
            time: 1000
        });
    };

    // Fix input placeholder issue for IE8 and IE9
    var handleFixInputPlaceholderForIE = function() {
        //fix html5 placeholder attribute for ie7 & ie8
        if (isIE8 || isIE9) { // ie8 & ie9
            // this is html5 placeholder fix for inputs, inputs with placeholder-no-fix class will be skipped(e.g: we need this for password fields)
            $('input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)').each(function() {
                var input = $(this);

                if (input.val() === '' && input.attr("placeholder") !== '') {
                    input.addClass("placeholder").val(input.attr('placeholder'));
                }

                input.focus(function() {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                input.blur(function() {
                    if (input.val() === '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    };

    // Handle Select2 Dropdowns
    var handleSelect2 = function() {
        if ($().select2) {
            $.fn.select2.defaults.set("theme", "bootstrap");
            $('.select2me').select2({
                placeholder: "Select",
                width: 'auto',
                allowClear: true
            });
        }
    };

    // handle group element heights
    var handleHeight = function() {
        $('[data-auto-height]').each(function() {
            var parent = $(this);
            var items = $('[data-height]', parent);
            var height = 0;
            var mode = parent.attr('data-mode');
			var data_offset = parent.attr('data-offset') ? parent.attr('data-offset') : 0;
            var offset = parseInt(data_offset,10);

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', '');
                } else {
                    $(this).css('min-height', '');
                }

                var height_ = (mode == 'base-height' ? $(this).outerHeight() : $(this).outerHeight(true));
                if (height_ > height) {
                    height = height_;
                }
            });

            height = height + offset;

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', height);
                } else {
                    $(this).css('min-height', height);
                }
            });

            if (parent.attr('data-related')) {
                $(parent.attr('data-related')).css('height', parent.height());
            }
        });
    }

    // Handles quick sidebar toggler
    var handleQuickSidebarToggler = function() {
        // close sidebar using button click
        $(document).on('click', '.dropdown-quick-sidebar-toggler a', function(e) {
            $('body').toggleClass('chat-sidebar-open');
        });
        // close sidebar when click outside box
        $(document).on('click', '.page-content', function(e) {
        	if($("body").hasClass("chat-sidebar-open")){
        			$('body').toggleClass('chat-sidebar-open');
        	}
        });
        // close sidebar using esc key
        $( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 && $("body").hasClass("chat-sidebar-open")) { // ESC
            	$('body').toggleClass('chat-sidebar-open');
            }
        });
    };

    /******* Handle quick Chat sidebar ************/

    var handleQuickSidebarChat = function() {
        var wrapper = $('.chat-sidebar-container');
        var wrapperChat = wrapper.find('.chat-sidebar-chat');

        var initChatSlimScroll = function() {
            var chatUsers = wrapper.find('.chat-sidebar-chat-users');
            var chatUsersHeight;

            chatUsersHeight = wrapper.height() - wrapper.find('.nav-tabs').outerHeight(true);

            // chat user list 
            chatUsers.css("height", wrapper.height() + "px");
            chatUsers.css("overflow", "auto");
            chatUsers.attr("data-height", chatUsersHeight);

            var chatMessages = wrapperChat.find('.chat-sidebar-chat-user-messages');
            var chatMessagesHeight = chatUsersHeight - wrapperChat.find('.chat-sidebar-chat-user-form').outerHeight(true);
            chatMessagesHeight -= wrapperChat.find(".page-quick-sidemenu").outerHeight(true);
            // user chat messages 
            chatMessages.attr("data-height", chatMessagesHeight);
            chatMessages.css("height", chatMessagesHeight);
            chatMessages.css("overflow-y", "auto");
        };

        initChatSlimScroll();
        App.addResizeHandler(initChatSlimScroll); // reinitialize on window resize

        wrapper.find('.chat-sidebar-chat-users .media-list > .media').on('click', function() {
            wrapperChat.addClass("chat-sidebar-content-item-shown");
            $(".chat-sidebar-item").animate({
                scrollTop: $('.chat-sidebar-item').height()
            }, 1000);
        });


        wrapper.find('.chat-sidebar-chat-user .chat-sidebar-back-to-list').on('click', function() {
            wrapperChat.removeClass("chat-sidebar-content-item-shown");
        });


        /******* Manage Chat massage ************/

        var handleChatMessagePost = function(e) {
            e.preventDefault();

            var chatContainer = wrapperChat.find(".chat-sidebar-chat-user-messages");
            var input = wrapperChat.find('.chat-sidebar-chat-user-form .form-control');

            var text = input.val();
            if (text.length === 0) {
                return;
            }

            var preparePost = function(dir, time, name, avatar, message) {
                var tpl = '';
                tpl += '<div class="post ' + dir + '">';
                tpl += '<img class="avatar" alt="" src="' + Layout.getLayoutImgPath() + avatar + '.jpg"/>';
                tpl += '<div class="message">';
                tpl += '<span class="arrow"></span>';
                tpl += '<a href="#" class="name">' + name + '</a>&nbsp;';
                tpl += '<span class="datetime">' + time + '</span>';
                tpl += '<span class="body body-'+dir+'">';
                tpl += message;
                tpl += '</span>';
                tpl += '</div>';
                tpl += '</div>';
                $(".chat-sidebar-chat-user-messages").animate({
                    //scrollTop: $('.chat-sidebar-chat-user-messages').height()
                scrollTop: $(document).height()
                }, 1000);
                return tpl;
            };

            // handle post
            var time = new Date();
            var message = preparePost('out', (time.getHours() + ':' + time.getMinutes()), "Kiran Patel", '../assets/img/dp', text);
            message = $(message);
            chatContainer.append(message);


            input.val("");

            // simulate reply
            setTimeout(function() {
                var time = new Date();
                var message = preparePost('in', (time.getHours() + ':' + time.getMinutes()), "Jacob Ryan", '../assets/img/user/user5', 'Lorem ipsum doloriam nibh...');
                message = $(message);
                chatContainer.append(message);
            }, 2000);
        };

        wrapperChat.find('.chat-sidebar-chat-user-form .btn').on('click', handleChatMessagePost);
        wrapperChat.find('.chat-sidebar-chat-user-form .form-control').on('keypress', function(e) {
            if (e.which == 13) {
                handleChatMessagePost(e);
                return false;
            }
        });
    };

    /********Sidebar slim-menu*********/
    var handleslimscroll_menu = function() {
    	$(".slimscroll-style").slimscroll({
            height: $( window ).height() - 90,
            position: "right",
            size: "5px",
            color: "#9ea5ab",
            wheelStep: 5
        });
    	$(".small-slimscroll-style").slimscroll({
            height: "260px",
            position: "right",
            size: "5px",
            color: "#9ea5ab",
            wheelStep: 5
        });
    };
    
    handleChatScrollbar = function() {
        var t = $(".chat-sidebar-chat"),
            i = function() {
                var i, a = t.find(".chat-sidebar-item"),
                    e = $(".chat-sidebar-chat-users").attr("data-height");
                i = $(".chat-sidebar-chat-users").attr("data-height") - 80 - t.find(".nav-justified > .nav-tabs").outerHeight(), a.attr("data-height", i), a.css("height", e + "px"), a.css("overflow-y", "auto")
            };
        i(), App.addResizeHandler(i)
    };

    // Handles quick sidebar settings
    var handleQuickSidebarSettings = function() {
        var wrapper = $('.chat-sidebar-container');

        var initSettingsSlimScroll = function() {
            var settingsList = wrapper.find('.chat-sidebar-settings-list');
            var settingsListHeight;

            settingsListHeight = wrapper.height() - 80 - wrapper.find('.nav-justified > .nav-tabs').outerHeight();

            // alerts list 
            settingsList.attr("data-height", settingsListHeight);
            settingsList.css("height", wrapper.height() + "px");
            settingsList.css("overflow-y", "auto");
        };

        initSettingsSlimScroll();
        App.addResizeHandler(initSettingsSlimScroll); // reinitialize on window resize
    };



    //* END:CORE HANDLERS *//

    return {

        //main function to initiate the theme
        init: function() {

            //Core handlers
            handleInit(); // initialize core variables
            handleTheme();
            handleOnResize(); // set and handle responsive    
            handleColorSetting();
            
            //UI Component handlers     
            handleBootstrapSwitch(); // handle bootstrap switch plugin
            handleSelect2(); // handle custom Select2 dropdowns
            handleDropdowns(); // handle dropdowns
            handleTabs(); // handle tabs
            handleCounterup(); // handle counterup instances

            handleQuickSidebarToggler(); // handles quick sidebar's toggler
            handleQuickSidebarChat(); // handles quick sidebar's chats
            handleQuickSidebarSettings(); // handles quick sidebar's setting
            handleChatScrollbar();

            handleslimscroll_menu();
            
            //Handle group element heights
            this.addResizeHandler(handleHeight); // handle auto calculating height on window resize

            handleFixInputPlaceholderForIE(); //IE8 & IE9 input placeholder issue fix
        },

        //public function to add callback a function which will be called on window resize
        addResizeHandler: function(func) {
            resizeHandlers.push(func);
        },

        //public functon to call _runresizeHandlers
        runResizeHandlers: function() {
            _runResizeHandlers();
        },

        // wrApper function to scroll(focus) to an element
        scrollTo: function(el, offeset) {
            var pos = (el && el.length > 0) ? el.offset().top : 0;

            if (el) {
                if ($('body').hasClass('page-header-fixed')) {
                    pos = pos - $('.page-header').height();
                } else if ($('body').hasClass('page-header-top-fixed')) {
                    pos = pos - $('.page-header-top').height();
                } else if ($('body').hasClass('page-header-menu-fixed')) {
                    pos = pos - $('.page-header-menu').height();
                }
                pos = pos + (offeset ? offeset : -1 * el.height());
            }

            $('html,body').animate({
                scrollTop: pos
            }, 'slow');
        },
        // function to scroll to the top
        scrollTop: function() {
            App.scrollTo();
        },

        startPageLoading: function(options) {
            if (options && options.animate) {
                $('.page-spinner-bar').remove();
                $('body').append('<div class="page-spinner-bar"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
            } else {
                $('.page-loading').remove();
                $('body').append('<div class="page-loading"><img src="' + this.getGlobalImgPath() + 'loading-spinner-grey.gif"/>&nbsp;&nbsp;<span>' + (options && options.message ? options.message : 'Loading...') + '</span></div>');
            }
        },

        stopPageLoading: function() {
            $('.page-loading, .page-spinner-bar').remove();
        },

        //public helper function to get actual input value(used in IE9 and IE8 due to placeholder attribute not supported)
        getActualVal: function(el) {
            el = $(el);
            if (el.val() === el.attr("placeholder")) {
                return "";
            }
            return el.val();
        },

        //public function to get a paremeter by name from URL
        getURLParameter: function(paramName) {
            var searchString = window.location.search.substring(1),
                i, val, params = searchString.split("&");

            for (i = 0; i < params.length; i++) {
                val = params[i].split("=");
                if (val[0] == paramName) {
                    return unescape(val[1]);
                }
            }
            return null;
        },

        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        },

        getUniqueID: function(prefix) {
            return 'prefix_' + Math.floor(Math.random() * (new Date()).getTime());
        },

        // check IE8 mode
        isIE8: function() {
            return isIE8;
        },

        // check IE9 mode
        isIE9: function() {
            return isIE9;
        },

        getAssetsPath: function() {
            return assetsPath;
        },

        setAssetsPath: function(path) {
            assetsPath = path;
        },

        setGlobalImgPath: function(path) {
            globalImgPath = path;
        },

        getGlobalImgPath: function() {
            return assetsPath + globalImgPath;
        },

        getGlobalCssPath: function() {
            return assetsPath + globalCssPath;
        },

        getResponsiveBreakpoint: function(size) {
            // bootstrap responsive breakpoints
            var sizes = {
                'xs': 480, // extra small
                'sm': 768, // small
                'md': 992, // medium
                'lg': 1200 // large
            };

            return sizes[size] ? sizes[size] : 0;
        }
    };

}();

jQuery(document).ready(function() {
    App.init(); // init core componets
    $(".chat-sidebar-chat-user-messages").animate({
        scrollTop: $(document).height()
    }, 1000);
});