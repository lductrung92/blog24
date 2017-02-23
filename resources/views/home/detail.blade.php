@extends('home.base.base')
@section('title')
	@foreach($newDetail as $item)
		{{ $item->title }}
	@endforeach
@endsection
@section('content')

@foreach($newDetail as $item)
<div class="td-pb-span8 td-main-content" role=main>
    <div class="td-ss-main-content td_block_template_1">
        <div class="td_module_10 td_module_wrap td-animation-stack">
			<h1 class="entry-title" style="font-size: 32px; line-height: 35px">{{ $item->title }}</h1>
			<div class="td-module-meta-info">
				<div class="td-post-author-name">
					<div class="td-author-by">By</div> 
					<a href="https://demo.tagdiv.com/newspaper_tech/author/admin/">Administrator</a>
					<div class="td-author-line"> - </div> 
				</div> 
				<span class="td-post-date">
					<time class="entry-date updated td-module-date" datetime="2015-05-04T14:58:28+00:00">{{ date_format($item->created_at, 'd/m/Y') }}</time>
				</span>  
			</div>
			<div class="content">
				{!! $item->content !!}
			</div>
 			
        </div>

        <!-- Related -->
        <div class="td_block_wrap td_block_related_posts" data-td-block-uid="td_uid_13_58ab5e74f1fd4">
        	<h4 class="td-related-title td-block-title">
        		<a class="td-related-left td-cur-simple-item" href="#">RELATED ARTICLES</a>
        	</h4>
        	<div id="td_uid_13_58ab5e74f1fd4" class="td_block_inner td_animated_xlong td_fadeInDown" style="height: auto;">

				<div class="td-related-row">
					<div class="td-related-span4">

				        <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
				            <div class="td-module-image">
				                <div class="td-module-thumb"><a href="https://demo.tagdiv.com/newspaper_tech/td-post-trimmed-the-beard-down-for-a-job-interview-tomorrow-and-can-no-longer-stroke-it-while-pondering-problems-like-an-old-kung-fu-master/" rel="bookmark" title="Trimmed the beard down for a job interview tomorrow and can no longer"><img width="218" height="150" class="entry-thumb td-animation-stack-type0-2" src="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/551-218x150.jpg" srcset="https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/551-218x150.jpg 218w, https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/551-100x70.jpg 100w" sizes="(max-width: 218px) 100vw, 218px" alt="" title="Trimmed the beard down for a job interview tomorrow and can no longer"></a></div>                <a href="https://demo.tagdiv.com/newspaper_tech/category/tagdiv-reviews/" class="td-post-category">Reviews</a>            </div>
				            <div class="item-details">
				                <h3 class="entry-title td-module-title"><a href="https://demo.tagdiv.com/newspaper_tech/td-post-trimmed-the-beard-down-for-a-job-interview-tomorrow-and-can-no-longer-stroke-it-while-pondering-problems-like-an-old-kung-fu-master/" rel="bookmark" title="Trimmed the beard down for a job interview tomorrow and can no longer">Trimmed the beard down for a job interview tomorrow and can no longer</a></h3>            </div>
				        </div>
		        
					</div> <!-- ./td-related-span4 -->
				</div><!--./row-fluid-->

				

			</div>
		</div>
		 <!-- Related -->

    </div>
</div>
@endforeach
@endsection