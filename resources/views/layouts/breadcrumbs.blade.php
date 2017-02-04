@if ($breadcrumbs)
    <ul class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li>
                    <a @if($breadcrumb->url) href="{{ $breadcrumb->url }}" @endif>
                        @if(isset($breadcrumb->icon_class))
                            <i class="{{ $breadcrumb->icon_class }}" ></i>
                        @endif
                        {{ $breadcrumb->title }}
                    </a>
                </li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif
