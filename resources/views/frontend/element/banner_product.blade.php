 <!-- START BANNER -->
 <section class="banner d-none d-lg-block">
    <div class="banner-img">
        @foreach ($blocksContent as $item)
            @if ($item->block_code == 'banner_product' && $item->parent_id == null)
                <img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}" />
            @endif
        @endforeach
    </div>
</section>
<!-- END BANNER -->