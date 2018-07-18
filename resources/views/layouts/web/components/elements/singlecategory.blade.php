<?php $Categories = \App\Models\Category::all(); ?>

<!-- Single Catagory -->
@foreach($Categories as $category)
    <div class="single-products-catagory clearfix">
        <a href="{{ url('shop') }}/{{ $category->id  }}/products">
            @if(!$category->use_url)
                <img src="{{ url("$category->path") }}" alt="{{ $category->name  }}">
            @else
                <img src="{{ $category->url }}"  alt="{{ $category->name  }}">
            @endif
            <!-- Hover Content -->
            <div class="hover-content">
                <div class="line"></div>
                    @if(!empty($category->min_price))
                        <p>From ${{ $category->min_price }}</p>
                    @endif
                <h4>{{ $category->name }}</h4>
            </div>
        </a>
    </div>
@endforeach