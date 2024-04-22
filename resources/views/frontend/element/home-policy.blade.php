<section id="home-policy">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                @foreach ($blocksContent as $item)
                    @if ($item->block_code == 'service' && $item->parent_id == null)
                        <div class="grid__item large--three-twelfths">
                            <div class="policy-content text-center">
                                <i class="{{ $item->icon }}" aria-hidden="true"></i> {{ $item->title }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
