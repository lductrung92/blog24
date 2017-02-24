@extends('home.base.base')
@section('title')
	@foreach($newDetail as $item)
		{{ $item->title }}
	@endforeach
@endsection
@section('content')


<div class="td-pb-span8 td-main-content" role=main>
    <div class="td-ss-main-content td_block_template_1">
    	@foreach($newDetail as $item)
        <div class="td_module_10 td_module_wrap td-animation-stack">
			<h1 class="entry-title" style="font-size: 32px; line-height: 35px">{{ $item->title }}</h1>
			<div class="td-module-meta-info">
				<div class="td-post-author-name">
					<div class="td-author-by">By</div> 
					<a href="#">Administrator</a>
					<div class="td-author-line"> - </div> 
				</div> 
				<span class="td-post-date">
					<time class="entry-date updated td-module-date" datetime="2015-05-04T14:58:28+00:00">{{ date_format($item->created_at, 'd/m/Y') }}</time>
				</span>  
			</div>
			<div class="page-content">
				{!! $item->description !!}
				{!! $item->content !!}
			</div>
        </div>
    	<?php 
    		$relateds = DB::table('news')
    					->join('categories', 'categories.id', '=', 'news.category_id')
    					->where('news.category_id', '=', $item->category_id)
    					->where('news.id', '<>', $item->id)
    					->select('news.*', 'categories.alias as cate_alias', 'categories.name')
    					->orderBy('news.created_at', 'ASC')
    					->take(6)
    					->get();
    				
    	?>				
		@endforeach
        <!-- Related -->
        <div class="td_block_wrap td_block_related_posts" data-td-block-uid="td_uid_13_58ab5e74f1fd4">
        	<h4 class="td-related-title td-block-title">
        		<a class="td-related-left td-cur-simple-item" href="#">BÀI VIẾT LIÊN QUAN</a>
        	</h4>
        	<div class="td_block_inner td_animated_xlong td_fadeInDown" style="height: auto;">
        		
				<div class="td-related-row">
					@foreach($relateds as $item)
					<div class="td-related-span4">
				        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
				            <div class="td-module-image">
				                <div class="td-module-thumb">
				                	<a href="{{ $item->cate_alias }}/ {{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">
				                		<img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="upload/news/{{ $item->image }}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{ $item->title }}">
				                	</a>
				                </div>                
				                <a href="{{ $item->cate_alias }}" class="td-post-category">{{ $item->name }}</a>            </div>
				            <div class="item-details">
				                <h3 class="entry-title td-module-title">
				                	<a href="{{ $item->cate_alias }}/ {{ $item->id }}/{{ $item->alias }}.html" rel="bookmark" title="{{ $item->title }}">
				                		{{ $item->title }}
				                	</a>
				                </h3>            
				            </div>
				        </div>
		        	
					</div> <!-- ./td-related-span4 -->
					@endforeach

				</div><!--./row-fluid-->

				

			</div>
		</div>
		 <!-- Related -->

    </div>
</div>

@endsection