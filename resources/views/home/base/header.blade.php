<div class=td-header-top-menu-full>
    <div class="td-container td-header-row td-header-top-menu">
        <div class=top-bar-style-1>
            <div class=td-header-sp-top-menu>
                <div class=td_data_time>
                    <div>
                        Sunday, February 19, 2017
                    </div>
                </div>
                <ul class="top-header-menu td_ul_login">
                    <li class=menu-item>
                        <a class="td-login-modal-js menu-item" href="#login-form" data-effect=mpf-td-login-effect>Sign
                            in / Join</a>
                    </li>
                </ul>
                <div class=menu-top-container>
                    <ul id=menu-top-menu class=top-header-menu>
                        <li id=menu-item-155>
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{--Login form--}}
            <div id=login-form class="white-popup-block mfp-hide mfp-with-anim">
                <div class=td-login-wrap>
                    <a href="#" class=td-back-button><i class=td-icon-modal-back></i></a>
                    <div id=td-login-div class="td-login-form-div td-display-block">
                        <div class=td-login-panel-title>Sign in</div>
                        <div class=td-login-panel-descr>Welcome! Log into your account</div>
                        <div class=td_display_err></div>
                        <div class=td-login-inputs>
                            <input class=td-login-input type=text name=login_email id=login_email value="" required>
                            <label>your username</label>
                        </div>
                        <div class=td-login-inputs>
                            <input class=td-login-input type=password name=login_pass id=login_pass value="" required>
                            <label>your password</label></div>
                        <input type=button name=login_button id=login_button class="wpb_button btn td-login-button"
                               value=Login>
                        <div class=td-login-info-text>
                            <a href="#" id=forgot-pass-link>Forgot your password? Gethelp</a>
                        </div>
                    </div>
                    <div id=td-forgot-pass-div class="td-login-form-div td-display-none">
                        <div class=td-login-panel-title>Password recovery</div>
                        <div class=td-login-panel-descr>Recover your password</div>
                        <div class=td_display_err></div>
                        <div class=td-login-inputs>
                            <input class=td-login-input type=text name=forgot_email id=forgot_email value="" required>
                            <label>your email</label>
                        </div>
                        <input type=button name=forgot_button id=forgot_button
                               class="wpb_button btn td-login-button" value="Send My Password">
                        <div class=td-login-info-text>A password will be e-mailed to you.</div>
                    </div>
                </div>
            </div>
            {{--Login form--}}
        </div>
    </div>
    <div class=td-header-menu-wrap-full>
        <div class="td-header-menu-wrap td-header-gradient">
            <div class="td-container td-header-row td-header-main-menu">
                <div id=td-header-menu role=navigation>
                    <div id=td-top-mobile-toggle><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>
                    <div class="td-main-menu-logo td-logo-in-header">
                        <a class="td-mobile-logo td-sticky-header" href="https://demo.tagdiv.com/newspaper_tech/">
                            <img class=td-retina-data
                                 data-retina="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-footer@2x.png"
                                 src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-footer.png"
                                 alt=""/>
                        </a>
                        <a class="td-header-logo td-sticky-header" href="https://demo.tagdiv.com/newspaper_tech/">
                            <img class=td-retina-data
                                 data-retina="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-header@2x.png"
                                 src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-header.png"
                                 alt=""/>
                        </a>
                    </div>
                    <style type="text/css">

                        a:hover{
                            text-decoration: none;
                        }
                        .td_mega_menu_sub_cats a{
                            text-decoration: none;
                        }
                    </style>
                    <div class=menu-main-menu-container>
                        <ul id=menu-main-menu-1 class=sf-menu>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-139 current_page_item menu-item-first td-menu-item td-normal-menu menu-item-143">
                                <a href="">Trang chủ</a>
                            </li>

                            @foreach($cateGL as $item)
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-mega-menu menu-item-144">
                                <a href="{{ $item->id }}"
                                   class="sf-with-ul">{{ $item->name }}<i class="td-icon-menu-down"></i></a>
                                <ul class="sub-menu" style="display: none; float: none; width: 20em;">
                                    <li class="menu-item-0" style="white-space: normal; float: left; width: 100%;">
                                        <div class="td-container-border">
                                            <div class="td-mega-grid">
                                                <div class="td_block_wrap td_block_mega_menu td_uid_1_58ace76cb3183_rand">
                                                    <div class="td_mega_menu_sub_cats">
                                                        <div style="text-transform:uppercase">
                                                            @foreach($item->categories as $category)
                                                            <a id="{{ $category->name }}" href="#{{ $category->alias }}">
                                                                {{ $category->name }}
                                                            </a>
                                                                <script>
                                                                    jQuery(function ($) {
                                                                        $("#{{ $category->name }}").click(function () {
                                                                            $.get('ajax/getNew/{{ $category->id }}', function (data) {
                                                                                $("#result").html(data);
                                                                            });
                                                                        });
                                                                    });
                                                                </script>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div id="td_uid_1_58ace76cb3183"
                                                         class="td_block_inner td_animated_xlong td_fadeInDown"
                                                         style="height: auto;">
                                                        <div class="td-mega-row" id="result">
                                                            @foreach($item->categories as $category)
                                                                @foreach($category->news as $item_news)
                                                                    <div class="td-mega-span">
                                                                        <div class="td_module_mega_menu td_mod_mega_menu">
                                                                            <div class="td-module-image">
                                                                                <div class="td-module-thumb">
                                                                                    <a href="#"></a>
                                                                                        <img width="218" height="150" class="entry-thumb" src="upload/news/{{ $item_news->image }}" sizes="(max-width: 218px) 100vw, 218px">

                                                                                </div>
                                                                                <div class="item-details">
                                                                                    <h3 class="entry-title td-module-title">
                                                                                        <a href="#" rel="bookmark">
                                                                                            {{ $item_news->title }}
                                                                                        </a>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            @endforeach

                            @foreach($cateGNames as $cateGName)
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-mega-menu menu-item-144">
                                    <a href="{{ $cateGName->id }}">{{ $cateGName->name }}</a>

                                    <ul class=sub-menu>
                                        <li>
                                            <div class=td-container-border>
                                                <div class=td-mega-grid>
                                                    <div class="td_block_wrap td_block_mega_menu">
                                                        <div>
                                                            {{--slider--}}
                                                            <div id="carousel-example-{{ $cateGName->id }}"
                                                                 class="carousel slide hidden-xs" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="td-mega-row item active">
                                                                        @foreach($cateGName->categories as $category)
                                                                            @foreach($category->news as $item_news)
                                                                                <div class=td-mega-span>
                                                                                    <div class="td_module_mega_menu td_mod_mega_menu">
                                                                                        <div class=td-module-image>
                                                                                            <div class=td-module-thumb>
                                                                                                <a href="#" rel=bookmark
                                                                                                   title="{{ $item_news->title }}">
                                                                                                    <img width=218
                                                                                                         height=150

                                                                                                         src="upload/news/{{ $item_news->image }}"
                                                                                                         sizes="(max-width: 218px) 100vw, 218px"
                                                                                                         alt=""
                                                                                                         title="#"/>
                                                                                                </a>
                                                                                            </div>
                                                                                            <a href="#"
                                                                                               class=td-post-category>Reviews</a>
                                                                                        </div>
                                                                                        <div class=item-details>
                                                                                            <h3 class="entry-title td-module-title">
                                                                                                <a href="#" rel=bookmark
                                                                                                   title="{{ $item_news->title }}">
                                                                                                    {{ $item_news->title }}
                                                                                                </a>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="td-mega-row item">
                                                                        @foreach($cateGName->categories as $category)
                                                                            @foreach($category->news as $item_news)
                                                                                <div class=td-mega-span>
                                                                                    <div class="td_module_mega_menu td_mod_mega_menu">
                                                                                        <div class=td-module-image>
                                                                                            <div class=td-module-thumb>
                                                                                                <a href="#" rel=bookmark
                                                                                                   title="{{ $item_news->title }}">
                                                                                                    <img width=218
                                                                                                         height=150

                                                                                                         src="upload/news/{{ $item_news->image }}"
                                                                                                         sizes="(max-width: 218px) 100vw, 218px"
                                                                                                         alt=""
                                                                                                         title="#"/>
                                                                                                </a>
                                                                                            </div>
                                                                                            <a href="#"
                                                                                               class=td-post-category>Reviews</a>
                                                                                        </div>
                                                                                        <div class=item-details>
                                                                                            <h3 class="entry-title td-module-title">
                                                                                                <a href="#" rel=bookmark
                                                                                                   title="{{ $item_news->title }}">
                                                                                                    {{ $item_news->title }}
                                                                                                </a>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--slider--}}
                                                        </div>
                                                        <div class=td-next-prev-wrap>
                                                            <a href="#carousel-example-{{ $cateGName->id }}"
                                                               class="td-ajax-prev-page ajax-page-disabled"
                                                               data-slide="prev">
                                                                <i class="td-icon-font td-icon-menu-left"></i>
                                                            </a>
                                                            <a href="#carousel-example-{{ $cateGName->id }}"
                                                               class="td-ajax-next-page" data-slide="next">
                                                                <i class="td-icon-font td-icon-menu-right"></i>
                                                            </a>
                                                        </div>
                                                        <div class=clearfix></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class=td-search-wrapper>
                    <div id=td-top-search>
                        <div class=header-search-wrap>
                            <div class="dropdown header-search">
                                <a id=td-header-search-button href="#" role=button class="dropdown-toggle "
                                   data-toggle=dropdown><i class=td-icon-search></i></a>
                                <a id=td-header-search-button-mob href="#" role=button class="dropdown-toggle "
                                   data-toggle=dropdown><i class=td-icon-search></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=header-search-wrap>
                    <div class="dropdown header-search">
                        <div class=td-drop-down-search aria-labelledby=td-header-search-button>
                            <form method=get class=td-search-form action="https://demo.tagdiv.com/newspaper_tech/">
                                <div role=search class=td-head-form-search-wrap>
                                    <input id=td-header-search type=text value="" name=s autocomplete=off/><input
                                            class="wpb_button wpb_btn-inverse btn" type=submit
                                            id=td-header-search-top value=Search/>
                                </div>
                            </form>
                            <div id=td-aj-search></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=td-banner-wrap-full>
        <div class="td-container td-header-row td-header-header">
            <div class=td-header-sp-logo>
                <h1 class=td-logo><a class=td-main-logo href="https://demo.tagdiv.com/newspaper_tech/">
                        <img class=td-retina-data
                             data-retina="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-header@2x.png"
                             src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-header.png"
                             alt=""/>
                        <span class=td-visual-hidden>Newspaper Tech News Demo</span>
                    </a>
                </h1>
            </div>
            <div class="td-header-sp-recs">
                <div class="td-header-rec-wrap">
                    <div class="td-a-rec td-a-rec-id-header  ">
                        <div class="td-visible-desktop">
                            <a href="http://themeforest.net/item/newspaper/5489609"><img class="td-retina"
                                                                                         style="width:728px"
                                                                                         src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/rec728.jpg"
                                                                                         alt="" height="728" width="90"></a>
                        </div>
                        <div class="td-visible-tablet-landscape">
                            <a href="http://themeforest.net/item/newspaper/5489609"><img class="td-retina"
                                                                                         style="width:728px"
                                                                                         src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/rec728.jpg"
                                                                                         alt="" height="728" width="90"></a>
                        </div>
                        <div class="td-visible-tablet-portrait">
                            <a href="http://themeforest.net/item/newspaper/5489609"><img class="td-retina"
                                                                                         style="width:468px"
                                                                                         src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/rec468.jpg"
                                                                                         alt="" height="468" width="60"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
