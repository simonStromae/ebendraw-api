<h1 class="page-title">
    @for($i = 0; $i < count($breadcrumbs); $i++)

        @if($i== 0)
            {{ $breadcrumbs[$i] }}
        @else
            <small>
                <small><i class="fa fa-angle-right"></i> {{ $breadcrumbs[$i] }}</small>
            </small>
        @endif

    @endfor
</h1>
