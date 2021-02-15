<div class="row">
    <div wire:poll.100ms="show_tags" class="col-xl-7 col-md-12 mb-xlg">
        @foreach($tags as $tag)
            <span class="mt-2 badge badge-dark">
                {{ $tag->name }}
                <a href="#" wire:click="delete_tag({{ $tag->id }})"><i class="text-white ml-2 fa fa-remove"></i></a>
            </span>
        @endforeach
    </div>
    @if(user_connect()->id === $illustration->user->id)
        <div class="col-xl-5 col-md-12 mb-xlg">
            <livewire:add-tag-to-illustration :illustration="$illustration" />
        </div>
    @endif
</div>

@push('css')
    <link href="/master/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script type="text/javascript" src="/master/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
@endpush
