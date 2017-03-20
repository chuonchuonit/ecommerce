        <ul class="nav nav-sidebar"><!-- available classes "right-aligned" -->

            <li>
                <a href="{!! URL::route('admin.news.index', $news->id) !!}">
                    Overview
                </a>
            </li>
            @if(isset($newsEdit))
            <li class="active">
            @else
            <li>
            @endif
                <a href="{{ URL::route('admin.news.edit', $news->id) }}">
                    <span class="visible-xs"><i class="entypo-gauge"></i></span>
                    <span class="hidden-xs">Edit</span>
                </a>
            </li>

            @if(isset($newsEditSeo))
            <li class="active">
            @else
            <li>
            @endif
                <a href="{{ URL::route('admin.news.edit_seo', $news->id) }}">
                    <span class="visible-xs"><i class="entypo-gauge"></i></span>
                    <span class="hidden-xs">Seo</span>
                </a>
            </li>  
           
            @if(isset($newsImages))
            <li class="active">
            @else
            <li>
            @endif
                <a href="{!! URL::route('admin.news.{newsId}.images.index', $news->id) !!}">
                    <span class="visible-xs"><i class="entypo-user"></i></span>
                    <span class="hidden-xs">Images</span>
                </a>
            </li>     


   

        </ul>