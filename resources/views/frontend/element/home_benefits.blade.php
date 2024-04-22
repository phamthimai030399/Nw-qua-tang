<!-- START HOME BENEFITS -->
<section class="benefits">
    <div class="container">
        <div class="benefits-scroll row">
            @foreach ($blocksContent as $item)
                @if ($item->block_code == 'service' && $item->parent_id == null)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 benefits-box">
                        <div class="benefits-img">
                            <img src="{{$item->image}}" alt="">
                        </div>
                        <div class="vertical-line"></div>
                        <p>
                            {{ $item->title }}
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- END HOME BENEFITS-->
