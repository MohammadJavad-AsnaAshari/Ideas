<div class="card">
    <div class="px-3 pt-4 pb-2">
        @if($profileEditing ?? false)
            @if (auth()->user()->is_admin || auth()->user()->is($user))
                @include('users.shared.user-card-edit')
            @endif
        @else
            @include('users.shared.user-card-show')
        @endif
    </div>
</div>
