@extends('home.base.base')
@section('title')
	Trang chủ
@endsection
@section('content')

<div class="td-pb-span8 td-main-content" role=main>
	<div class="td_block_wrap td_block_1">
		<div class="td-block-title-wrap">
			<h4 class="block-title"><span class="td-pulldown-size" style="margin-right: 0px;">BÀI VIẾT MỚI</span></h4>
		</div>
		<div class="td_block_inner td_animated_xlong td_fadeInDown" style="height: auto;">
	<div class="td-block-row">
		@foreach($showbiz as $item)
		<div class="td-block-span6">
	        <div class="td_module_4 td_module_wrap td-animation-stack">
	            <div class="td-module-image">
	                <div class="td-module-thumb">
	                	<a href="{{ $item->cate_alias }}/{{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">
	                		<img width="324" height="235" class="entry-thumb td-animation-stack-type0-2" src="upload/news/{{ $item->image }}" alt="" title="{{ $item->title }}">
	                	</a>
	                </div>                
	                <a href="{{ $item->cate_alias }}" class="td-post-category">{{ $item->name }}</a>            </div>

	            <h3 class="entry-title td-module-title">
	            	<a href="{{ $item->cate_alias }}/{{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">{{ $item->title }}
	            	</a>
	            </h3>
	            <div class="td-module-meta-info">
	                <div class="entry-review-stars">
		                <i class="td-icon-star"></i>
		                <i class="td-icon-star"></i>
		                <i class="td-icon-star"></i>
		                <i class="td-icon-star"></i>
		                <i class="td-icon-star-half"></i>
	                </div>                
		            <div class="td-module-comments">
		             	<a href="{{ $item->cate_alias }}/{{ $item->id }}/{{ $item->alias }}.html">0</a>
		            </div>            
	            </div>
	            <div class="td-excerpt">{{ $item->description }}</div>
	        </div>

        
		</div> <!-- ./td-block-span6 -->
		@endforeach

	<div class="td-block-span6">
		
			@foreach($postNews as $item)
				
		        <div class="td_module_6 td_module_wrap td-animation-stack">
			        <div class="td-module-thumb">
			        	<a href="{{ $item->cate_alias }}/{{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">
			        		<img width="100" height="70" class="entry-thumb td-animation-stack-type0-2" src="upload/news/{{ $item->image }}" sizes="(max-width: 100px) 100vw, 100px" alt="" title="{{ $item->title }}">
			        	</a>
			        </div>
			        <div class="item-details">
			            <h3 class="entry-title td-module-title">
			            	<a href="{{ $item->cate_alias }}/{{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">{{ $item->title }}
			            	</a>
			            </h3>            
			            <div class="td-module-meta-info">
			                <span class="td-post-date">
			                	<time class="entry-date updated td-module-date" datetime="2005-04-19 12:50 GMT">{{ date_format(date_create($item->created_at), 'd/m/Y') }}</time>
			                </span>                            
			            </div>
			        </div>

		        </div>
		      
	        @endforeach
        
        

        
	</div> 
	</div></div></div>
	<div class="td-ss-main-content td_block_template_1">
		<div class="td-block-title-wrap">
			<h4 class="block-title"><span class="td-pulldown-size">DANH SÁCH BÀI VIẾT</span></h4>
		</div>
	    @foreach($news as $item)
	    <div class="td_module_10 td_module_wrap td-animation-stack">
	        <div class=td-module-thumb>
	            <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">
	                <img width=218 height=150 class="entry-thumb" src="upload/news/{{ $item->image }}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{ $item->title }}"/>
	            </a>
	        </div>
	        <div class=item-details>
	            <h3 class="entry-title td-module-title">
	                <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">{{ $item->title }}</a>
	            </h3>
	            <div class=td-module-meta-info>
	                <a href="{{ $item->category->alias }}"
	                   class=td-post-category>{{ $item->category->name }}</a>
	                <div class=entry-review-stars>
	                    <i class=td-icon-star></i>
	                    <i class=td-icon-star></i>
	                    <i class=td-icon-star></i>
	                    <i class=td-icon-star-half></i>
	                    <i class=td-icon-star-empty></i>
	                </div>
	                <div class=td-module-comments>
	                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html">0</a>
	                </div>
	            </div>
	            <div class=td-excerpt>
	                {{ $item->description }}
	            </div>
	        </div>
	    </div>
	    @endforeach
	    
	    {!! $news->render() !!}
	</div>
</div>
@endsection