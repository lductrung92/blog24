<div class=td-footer-wrapper>
    <div class=td-container>
        <div class=td-pb-row>
            <div class=td-pb-span12>
            </div>
        </div>
        <div class=td-pb-row>

            <div class=td-pb-span4>
                <div class="td_block_wrap td_block_7 td_uid_14_58a9894343ae9_rand td-pb-border-top td_block_template_1"
                     data-td-block-uid=td_uid_14_58a9894343ae9>
                   
                    <div class=td-block-title-wrap><h4 class=block-title><span
                                    class=td-pulldown-size>TIN GIẢI TRÍ</span></h4></div>
                    <div id=td_uid_14_58a9894343ae9 class=td_block_inner>
                        @foreach($enters as $item) 
                        <div class=td-block-span12>
                            <div class="td_module_6 td_module_wrap td-animation-stack">
                                <div class=td-module-thumb>
                                <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}" title="{{ $item->title }}">
                                    <img width=100 height=70 class="entry-thumb" src="upload/news/{{ $item->image }}" sizes="(max-width: 100px) 100vw, 100px" alt="" title="{{ $item->title }}"/>
                                </a>
                                </div>
                                <div class=item-details>
                                    <h3 class="entry-title td-module-title">
                                        <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}" title="{{ $item->title }}">{{ $item->title }}</a>
                                    </h3>
                                    <div class=td-module-meta-info>
                                        <span class=td-post-date>
                                            <time class="entry-date updated td-module-date" datetime="2015-05-04T15:30:51+00:00">{{ date_format($item->created_at, 'd/m/Y') }}
                                            </time>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class=td-pb-span4>
                <div class="td_block_wrap td_block_7 td_uid_15_58a989434453a_rand td-pb-border-top td_block_template_1">
                    <div class=td-block-title-wrap>
                        <h4 class=block-title>
                            <span class=td-pulldown-size>BÀI VIẾT MỚI</span>
                        </h4>
                    </div>
                    <div id=td_uid_15_58a989434453a class=td_block_inner>
                        @foreach($newforDates as $item)
                        <div class=td-block-span12>
                            <div class="td_module_6 td_module_wrap td-animation-stack">
                                <div class=td-module-thumb>
                                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}" title="{{ $item->title }}">
                                        <img width=100 height=70 class="entry-thumb" src="upload/news/{{ $item->image }}" sizes="(max-width: 100px) 100vw, 100px" title="{{ $item->title }}"/>
                                    </a>
                                </div>
                                <div class=item-details>
                                    <h3 class="entry-title td-module-title">
                                        <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}" title="{{ $item->title }}">{{ $item->title }}
                                        </a>
                                    </h3>
                                    <div class=td-module-meta-info>
                                        <div class=entry-review-stars>
                                            <i class=td-icon-star></i>
                                            <i class=td-icon-star></i>
                                            <i class=td-icon-star></i>
                                            <i class=td-icon-star></i>
                                            <i class=td-icon-star-half></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=td-pb-span4>
                <div class="td_block_wrap td_block_popular_categories td_uid_16_58a9894344f3e_rand widget widget_categories td-pb-border-top td_block_template_1">
                    <h4 class=block-title>
                        <span class=td-pulldown-size>NỔI BẬT</span>
                    </h4>
                    <ul class=td-pb-padding-side>
                        @foreach($cateGs as $cateG) 
                        <?php 
                            $sum = 0;
                            foreach ($cateG->categories as $item) {
                               $sum += count($item->news);
                            }
                        ?>
                        <li>
                            <a href="group/{{ $cateG->alias }}.html">{{ $cateG->name }}
                                <span class="td-cat-no">{{ $sum }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <div class=td-footer-bottom-full>
        <div class=td-container>
            <div class=td-pb-row>
                <div class=td-pb-span3>
                    <aside class=footer-logo-wrap>
                        <a href="https://demo.tagdiv.com/newspaper_tech/">
                            <img class=td-retina-data src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-footer.png" data-retina="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/tech-footer@2x.png" alt="" title=""/>
                        </a>
                    </aside>
                </div>
                <div class=td-pb-span5>
                    <aside class=footer-text-wrap>
                        <div class=block-title>
                            <span>GIỚI THIỆU</span>
                        </div>
                        Đây là blog cá nhân
                        <div class=footer-email-wrap>Liên hệ: 
                            <a href="mailto:lductrung92@gmail.com">lductrung92@gmail.com</a>
                        </div>
                    </aside>
                </div>
                <div class=td-pb-span4>
                    <aside class="footer-social-wrap td-social-style-2">
                        <div class=block-title><span>FOLLOW US</span></div>
                        <span class=td-social-icon-wrap>
                            <a target=_blank href="#" title=Facebook>
                                <i class="td-icon-font td-icon-facebook"></i>
                            </a>
                        </span>
                        
                        <span class=td-social-icon-wrap>
                            <a target=_blank href="#" title=Youtube>
                                <i class="td-icon-font td-icon-youtube"></i>
                            </a>
                        </span>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class=td-sub-footer-container>
        <div class=td-container>
            <div class=td-pb-row>
                <div class="td-pb-span7 td-sub-footer-menu">
                    <!-- <div class=menu-footer-menu-container>
                        <ul id=menu-footer-menu class=td-subfooter-menu>
                            <li id=menu-item-158
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-first td-menu-item td-normal-menu menu-item-158">
                                <a href="#">About us</a></li>
                            <li id=menu-item-159
                                class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-159">
                                <a href="#">Advertise</a></li>
                            <li id=menu-item-161
                                class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-161">
                                <a href="#">Write a review</a></li>
                            <li id=menu-item-162
                                class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-162">
                                <a href="#">Contact us</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="td-pb-span5 td-sub-footer-copy">
                    &copy; Copyright 2017 - Trung Lê
                </div>
            </div>
        </div>
    </div>