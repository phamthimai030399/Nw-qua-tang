<!-- START PRODUCT DETAIL TABS -->
<section class="tabs">
    <div class="container">
        <div class="nav nav-tabs tabs-list" role="tablist">
            <button class="nav-link tabs-link active" id="description-tab" data-bs-toggle="tab"
                data-bs-target="#description" role="tab" aria-controls="description" aria-selected="true">
                Thông tin sản phẩm
            </button>
            <button class="nav-link tabs-link" id="size-tab" data-bs-toggle="tab" data-bs-target="#size" type="button"
                role="tab" aria-controls="size" aria-selected="false">
                Hướng dẫn mua hàng
            </button>
            <button class="nav-link tabs-link" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery"
                type="button" role="tab" aria-controls="delivery" aria-selected="false">
                Chính sách
            </button>
        </div>
        <div class="tab-content tabs-content">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                {!! $detail->chitiet !!}
            </div>
            <div class="tab-pane fade" id="size" role="tabpanel" aria-labelledby="size-tab">
                @foreach ($blocksContent as $item)
                    @if ($item->block_code == 'buying-guide' && $item->parent_id == null)
                        {!! $item->content !!}
                    @endif
                @endforeach
            </div>
            <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                @foreach ($blocksContent as $item)
                @if ($item->block_code == 'policy' && $item->parent_id == null)
                    {!! $item->content !!}
                @endif  
            @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END PRODUCT DETAIL TABS -->
<script>
    $(document).ready(function() {
        $('.nav-tabs .nav-link').on('click', function() {
            $('.nav-tabs .nav-link').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('data-bs-target');
            $('.tab-pane').removeClass('show active');
            $(target).addClass('show active');
        });
    });
</script>
