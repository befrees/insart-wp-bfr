jQuery(function ($) {
    console.log(window.location);

    try {
        $(".select_api_list").select2();
    } catch (e) {}
    try{
    $("#api-search")
        .autocomplete({
            source: function (req, response) {
                // $.getJSON(MyAcSearch.url+'?callback=?&action='+acs_action, req, response);
                $.post(
                    "/wp-admin/admin-ajax.php",
                    { action: "loadsearch", str: $("#api-search").val() },
                    function (data) {
                        response(
                            $.map(data, function (value) {
                                console.log(value);
                                return {
                                    value: value.value,
                                    label: value.label,
                                };
                            })
                        );
                    },
                    "json"
                );
            },
            // source: projects,
            select: function (event, ui) {
                // window.location.href=ui.item.link;
            },
            minLength: 2,
            appendTo: ".header-api__search",
        })
        .data("ui-autocomplete")._renderItem = function (ul, item) {
        return $("<li></li>")
            .data("item.autocomplete", item)
            .append(item.label)
            .appendTo(ul);
    };
} catch(e){}
    //     var paramsSolutions = {
    //         url: '/wp-json/wp/v2/company',
    //         data: {
    //             // action: 'wp-json/wp/v2/company',
    //             // s: '',
    //             // paged: 1,
    //             nopaging: 1,
    //             posts_per_page: '-1',
    //             // field_key: 'field_5ec4eb2fc23f9',
    //             // nonce: 'b9f2b55c3c',
    //             // post_id: '25'
    //         }

    //     }
    //     $.get(paramsSolutions.url, paramsSolutions.data, function (d) {
    //         console.log(d)
    //     },'json'  )
    //     // console.log(cnArgs);
    //     // var compModel = new wp.api.models.Post({type: 'company'})
    // var comppostsCollection = new wp.api.collections.Posts();
    //     // var postsCollection = new wp.api.collections.Company('company');
    //     var ps = comppostsCollection.fetch({ data: { per_page: 25, filter: { type: 'company' } } });
    //     console.log(ps);

    var generateData = function (number) {
        var result = [];

        for (var i = 1; i < number + 1; i++) {
            result.push(i);
        }

        return result;
    };

    var generateObjData = function (number) {
        var result = [];

        for (var i = 1; i < number + 1; i++) {
            result.push({ a: i });
        }

        return result;
    };
    try {
        getAccordion("#tabs", 768);
    } catch (e) {}

    try {
        $("#accordion")
            .find(".panel")
            .each(function (i, el) {
                if ($(el).find(".collapse.in").length) {
                    $(el).find(".panel-heading").addClass("open");
                } else {
                    $(el).find(".panel-heading").removeClass("open");
                }
            });
        $("#accordion").on(
            "hidden.bs.collapse show.bs.collapse shown.bs.collapse",
            function () {
                console.log(this);
                $(this)
                    .find(".panel")
                    .each(function (i, el) {
                        if ($(el).find(".collapse.in").length) {
                            $(el).find(".panel-heading").addClass("open");
                        } else {
                            $(el).find(".panel-heading").removeClass("open");
                        }
                    });
            }
        );
        $("#accordion").on("show.bs.collapse", function () {
            $(this)
                .find(".panel")
                .each(function (i, el) {
                    if ($(el).find(".collapse.in").length) {
                        $(el).find(".panel-heading").addClass("open");
                    } else {
                        $(el).find(".panel-heading").removeClass("open");
                    }
                });
        });
    } catch (e) {}

    try {
        // console.log(document.querySelectorAll('#js-pager > div'));
        var dataSource = [];
        $("#js-pager .item-card").each(function (i, el) {
            dataSource.push(el);
        });
        $("#js-pager").pagination({
            pageSize: 15,
            // dataSource: [1, 2, 3, 4, 5, 6, 7,  195],
            dataSource: dataSource,
            callback: function (data, pagination) {
                console.log(data);
                $(".rel-posts").html(data);
                // template method of yourself
                // var html = template(data);
                // dataContainer.html(html);
            },
        });
    } catch (e) {
        console.log(e);
    }

    $("#cookie-notice").attr("style", "");

    $(".link-to-top").click(function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 300);
    });
    var checkInput = (function checkInput() {
        $(".input-row").each(function (i, el) {
            activeInput(el);
        });
        return checkInput;
    })();

    function activeInput(el) {
        if (!!$(el).find("input").val() || $(el).find("input").is(":focus")) {
            $(el).addClass("active");
        } else {
            $(el).removeClass("active");
        }
    }

    $(".input-row input").focus(function (e) {
        e.preventDefault();
        activeInput($(this).closest(".input-row"));
    });

    $(".input-row input").blur(function (e) {
        e.preventDefault();
        activeInput($(this).closest(".input-row"));
    });

    $(".form-box-anime .form-row input").focus(function (e) {
        e.preventDefault();
        activeInput($(this).closest(".form-row"));
    });

    $(".form-box-anime .form-row input").blur(function (e) {
        e.preventDefault();
        activeInput($(this).closest(".form-row"));
    });

    /**
     * API Catalog  Begin
     *
     */

    $("body").on("click", ".btn-to-form", function (e) {
        e.preventDefault();
        var pos = $(".form-api-box").offset().top;
        $("html, body").animate({ scrollTop: pos }, 500);
    });

    $("body").on("click", ".toggle-sidebar-btn", function (e) {
        e.preventDefault();
        $(".col-sidebar")
            .toggleClass("sidebar-open")
            .find(".inner-sidebar")
            .slideToggle(200);
        var t1 = $(this).text();
        var t2 = $(this).data("text");
        $(this).find(".hide-open, .hide-close").toggle();
    });

    $("body").on("change blur", "#text-api-area", function (e) {
        var messSrc = $("#text-api-area").text();
        $("#message-api").val(messSrc);
    });

    $(".block-part-cat .head").on("click", function (e) {
        e.preventDefault();
        $(this)
            .parents(".block-part-cat")
            .toggleClass("open")
            .find(".toggle-block")
            .slideToggle(200);
    });

    var colorCheck = (function colorCheck(els, event) {
        var els = els || $(".checkbox-styler-color");
        var event = event || null;
        if (!els.length) return colorCheck;

        $(els).each(function (i, el) {
            var color = $(el).attr("data-color");
            console.log(color);
            if ($(el).hasClass("checked")) {
                $(el).css({ "border-color": color });
            } else {
                $(el).css({ "border-color": "initial" });
            }
            $(el).find("div").css("color", color);
            $(el)
                .parent(".row-filter")
                .find(".icon-ic-spin")
                .css("color", color)
                .find("svg")
                .css("fill", color);
            if (event != "change") {
                // $(el).find('div').append('<span class="before" style="background:' +color+ '">');
                // $(el).find('div').append('<span class="after" style="background:' +color+ '">');
            }
        });
        return colorCheck;
    })();

    var apiTagsKey = "api-tags[]";
    var apiKey = "api[]";

    $("input.checkbox-styler-color").on("change", function (e) {
        e.preventDefault();
        var $this = $(this);
        // console.log($this.attr('onchange'));
        if ($this.attr("onchange") != undefined) {
            return true;
        }
        var row = $this.parents(".row-filter");
        // colorCheck(null, 'change');
        row.find(".icon-ic-spin").show();
        var check = [];
        $("input.checkbox-styler-color:checked").each(function (i, el) {
            let str = el.name + "=" + el.value;
            check.push(str);
        });
        var checkUri = check.length ? check : [];
        console.log(location);
        var uri =
            "?" +
            checkUri.concat(parserUri(location.search, apiTagsKey)).join("&");
        if (uri === "?") uri = "";
        var href = location.origin + location.pathname + uri;
        console.log(uri);

        loadPage(href);
    });

    $(window).on("popstate", function (e) {
        loadPage(location.href);
    });

    $("body").on("click", ".tags-card__ a", function (e) {
        e.preventDefault();
        console.log(e);
        _href = apiTagsKey + "=" + $(this).data("id");
        var uri = "?" + _href + parserUri(location.search, apiKey).join("&");
        if (uri === "?") uri = "";
        var href = location.origin + location.pathname + uri;
        loadPage(href);
    });

    function loadPage(href) {
        if (href == "#") return false;
        // console.log(href);

        $.get(
            href,
            "",
            function (d) {
                $("#ajax-content").html(
                    $("#ajax-content", $.parseHTML(d)).html()
                );
                $("body").removeClass("no-loading");
                $(".icon-ic-spin").hide();
                if (history.pushState) {
                    var _url =
                        window.location.protocol + "//" + window.location.host;
                    href = href.replace(_url, "");
                    var newurl =
                        window.location.protocol +
                        "//" +
                        window.location.host +
                        href;
                    window.history.pushState({ path: newurl }, "", newurl);
                }
            },
            "html"
        );
    }

    function parserUri(str, key) {
        if (!str || str === "?") return [];
        var out = [],
            cut = function (str) {
                return str.replace(/^\?/, "");
            };
        str = cut(str);
        var _str = str.split("&");
        for (i = 0; i < _str.length; i++) {
            let _par = _str[i].split("=");
            if (!key || key === _par[0]) out.push(_str[i]);
        }
        return out;
    }
    /*
    var scrollPostLoad = (function scrollPostLoad() {
        console.log($('.preloader-flag').length);
        if (!$('.preloader-flag').length) return scrollPostLoad;
        try {
            var bottomOffset = $('.preloader-flag').offset().top;
            var dataAjax = $('#data-ajax').data();

            var windowHeight = $(window).height();
            var docHeight = $(document).height();
            var docScroll = $(document).scrollTop();

            // console.log(dataAjax);
            var data = {
                'action': 'loadmore',
                'query': dataAjax.true_posts,
                'page': dataAjax.current_page
            };
            console.log($(window).height(), $(document).height(), $(document).scrollTop() , (bottomOffset - $(window).height()), ($(document).height() - bottomOffset), bottomOffset);

            if (
                //$(document).scrollTop() > ($(document).height() - bottomOffset) 
                $(document).scrollTop() > (bottomOffset - $(window).height() - 200) &&
                !$('body').hasClass('loading') &&
                !$('body').hasClass('no-loading') ||
                windowHeight > (bottomOffset - 200)
            ) {
                console.log('LOAD...')
                $.ajax({
                    url: dataAjax.ajaxurl,
                    data: data,
                    type: 'POST',
                    beforeSend: function(xhr) {
                        $('body').addClass('loading');
                    },
                    success: function(data) {

                        if (data) {
                            $('#load_more_gs').append(data);
                            $('body').removeClass('loading');
                            dataAjax.current_page++;
                            if ($(window).height() > (bottomOffset - 200))
                                scrollPostLoad();
                        } else {
                            $('body').removeClass('loading');
                            // $('#load_more_gs').remove();
                            $('body').addClass('no-loading');
                        }
                    }
                });
            }
        } catch (e) {
            console.log(e)
        }
        return scrollPostLoad;
    }());
*/

    $(document).on("scroll", function () {
        // return true;
        // scrollPostLoad();
    });

    /** API Catalog end */

    document.addEventListener(
        "wpcf7submit",
        function (event) {
            var messSrc = $("#text-api-area").text();
            $("#message-api").val(messSrc);

            var inputs = event.detail.inputs;

            for (var i = 0; i < inputs.length; i++) {
                // console.log( inputs[i].value );
                if ("your-name" == inputs[i].name) {
                    break;
                }
            }
        },
        false
    );

    $("body").on("click", "#chose-api-btn", function (e) {
        e.preventDefault();
        console.log(this);
        // var boxSel = $('.box-select');
        // var innerBox = $('.form-api-inner');

        // var pos = boxSel.position().top;
        // innerBox.css({
        //     "transform": "translate(0, -"+pos+"px)",
        //     "-webkit-transform": "translate(0, -"+pos+"px)",
        // })
        $(".switch-api-form").slideUp();
        $(".box-select").slideDown();
        $(".form-api-inner").addClass("open");
    });

    $("input.api-sel").on("change", function (e) {
        e.preventDefault();
        checkApiBtn();
        // $('#chose-api-btn').text(this.value);
    });

    $(".btn-api-reset").click(function (e) {
        e.preventDefault();
        $("input.api-sel:checked").prop("checked", false);
        $("input.api-sel").trigger("refresh");
        checkApiBtn();
    });

    $("input.api-sel").on("click", function (e) {
        // e.preventDefault();
        console.log(this);
        // $(this).find('input:checked').prop('checked', false);
        $("input.api-sel").trigger("refresh");
        checkApiBtn();
    });
    var checkApiBtn = (function checkApiBtn() {
        if (
            $("input.api-sel:checked").length &&
            $("input.api-sel:checked").val()
        ) {
            $("#chose-api-btn").text($("input.api-sel:checked").val());
        } else {
            $("#chose-api-btn").text($("#chose-api-btn").attr("data-api-text"));
        }
        return checkApiBtn;
    })();

    $(".back-form-api").on("click", function (e) {
        e.preventDefault();
        $(".switch-api-form").slideDown();
        $(".box-select").slideUp();
        $(".form-api-inner").removeClass("open");
    });
});
