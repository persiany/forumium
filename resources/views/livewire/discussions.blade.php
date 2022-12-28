<div class="flex flex-col gap-8 w-full">
    <form class="w-full">
        {{ $this->form }}
    </form>
    <div class="w-full flex flex-col gap-1">
        @if($selectedSort)
            <div class="text-slate-700 font-medium text-lg flex items-center gap-2">
                {{ $selectedSort }} <div wire:loading><i class="fa fa-spinner fa-spin"></i></div>
            </div>
        @endif
        @if($q)
            <span class="text-slate-700 font-medium text-sm">
                Search for: {{ $q }}
            </span>
        @endif
    </div>
    <div class="w-full flex flex-col">
        @if($discussions->count())
            @foreach($discussions as $discussion)
                @include('partials.layouts.discussion-item', compact('discussion'))
            @endforeach
        @else
            <span class="px-3 text-slate-700 font-medium text-sm">
                @if($q)
                    No discussions available for your current search! Maybe you should start a new discussions.
                @else
                    No discussions available for now! Please come back later, or start a new discussion.
                @endif
            </span>
        @endif
    </div>
    @if(!$disableLoadMore)
        <div class="w-full flex justify-center items-center text-center">
            <button type="button" wire:click="loadMore" wire:loading.attr="disabled"
                    class="bg-slate-100 disabled:bg-slate-50 px-3 py-2 text-slate-500 border-slate-100 rounded hover:cursor-pointer w-fit hover:bg-slate-200">
                Load more
            </button>
        </div>
    @endif
</div>
