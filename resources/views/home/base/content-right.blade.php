<div class="td-pb-span4 td-main-sidebar" role=complementary>
    <div class=td-ss-main-sidebar>
        <div class="td_block_wrap td_block_1">
            <div class=td-block-title-wrap>
                <h4 class=block-title><span class=td-pulldown-size>CÔNG NGHỆ</span></h4>
            </div>
           <?php 
                $i = 1;
           ?>
            <div class=td_block_inner>
                @foreach($tnls as $item)
                    @if($i == 1)
                    <div class=td-block-span12>
                        <div class="td_module_4 td_module_wrap td-animation-stack">
                            <div class=td-module-image>
                                <div class=td-module-thumb>
                                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">
                                        <img width=324 height=235 class="entry-thumb" src="upload/news/{{ $item->image }}" title="#"/>
                                    </a>
                                </div>
                                <a href="{{ $item->category->alias }}" class=td-post-category>{{ $item->category->name }}</a>
                            </div>

                            <h3 class="entry-title td-module-title">
                                <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">{{ $item->title }}</a>
                            </h3>

                            <div class=td-module-meta-info>
                                <span class=td-post-author-name>
                                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html">Administrator</a> 
                                    <span>-</span> 
                                </span>
                                <span class=td-post-date>
                                    <time class="entry-date updated td-module-date" datetime="2015-05-04T14:58:28+00:00">{{ date_format($item->created_at, 'd/m/Y') }}</time>
                                </span>
                                <div class=td-module-comments>
                                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html">0</a>
                                </div>
                            </div>
                            <div class=td-excerpt>
                                {{ $item->description }}
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @else
                    <div class=td-block-span12>
                        <div class="td_module_6 td_module_wrap td-animation-stack">
                            <div class=td-module-thumb>
                                <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">
                                <img width=100 height=70 class="entry-thumb" src="upload/news/{{ $item->image }}" sizes="(max-width: 100px) 100vw, 100px" title="{{ $item->title }}"/></a>
                            </div>
                            <div class=item-details>
                                <h3 class="entry-title td-module-title">
                                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <div class=td-module-meta-info>
                                    <span class=td-post-date>
                                    <time class="entry-date updated td-module-date" datetime="2015-05-04T14:58:27+00:00">
                                        {{ date_format($item->created_at, 'd/m/Y') }}
                                    </time>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endif
                @endforeach
            </div>
            
        </div>



        <aside class="td_block_template_1 widget widget_categories">
            <h4 class=block-title>
                <span>BÀI VIẾT</span>
            </h4>
            <ul>
                @foreach($cateGs as $cateG) 
                    <?php 
                        $sum = 0;
                        foreach ($cateG->categories as $item) {
                           $sum += count($item->news);
                        }
                    ?>
                    
                <li class="cat-item cat-item-7">
                    <a href="{{ $cateG->alias }}/{{ $item->id }}" title="{{ $cateG->name }}">
                        <span style="float: left;top: 8px;" class="glyphicon glyphicon-hand-right"></span>
                        {{ $cateG->name }} ({{ $sum }})
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>

        
    </div>
</div>