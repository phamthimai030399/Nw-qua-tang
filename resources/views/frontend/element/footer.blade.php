<!-- START FOOTER -->
<footer id="fhm-footer" class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-element footer-element-info">
                <div class="logo-footer" style="margin-bottom: 15px">
                    <img src="{{ $web_information->image->logo }}" alt="">
                </div>
                <ul>
                    <li>
                        <p>Địa chỉ: {{ $web_information->information->address }}</p>
                    </li>
                    <li>
                        <p>
                            Hotline:
                            <a href="tel:{{ $web_information->information->phone }}"
                                title="{{ $web_information->information->phone }}">{{ $web_information->information->phone }}</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            Email:
                            <a href="mailto:{{ $web_information->information->email }}"
                                title="{{ $web_information->information->email }}">{{ $web_information->information->email }}</a>
                        </p>
                    </li>
                </ul>
            </div>
            @foreach ($blocksContent as $item)
                @if ($item->block_code == 'footer' && $item->parent_id == null)
                    <div class="footer-element">
                        <h5>{{ $item->title }}</h5>
                        <ul class="footer-grid">
                            @foreach ($blocksContent as $item_child)
                                @if ($item->block_code == 'footer' && $item_child->parent_id == $item->id)
                                    <li><a href="#" title="{{ $item_child->title }}">{{ $item_child->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                    </div>
                @endif
            @endforeach
            <div class="footer-group">
                <div class="footer-element footer-element-center">
                    <h5>Theo dõi trang</h5>
                    <div class="footer-social">
                        @foreach ($blocksContent as $item)
                            @if ($item->block_code == 'social' && $item->parent_id == null)
                                <a href="#" title="{{$item->title}}" class="footer-social-icon">
                                    <img src="{{$item->image}}" alt="{{$item->title}}" title="{{$item->title}}" />
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <p>{{ $web_information->information->copyright}}</p>
            <div class="footer-element-download footer-element-center">
                <h5></h5>
                <div class="download-group">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'camket' && $item->parent_id == null)
                            <a href="#" class="download-icon" title="{{$item->title}}">
                                <img src="{{$item->image}}" alt="{{$item->title}}"
                                    title="{{$item->title}}" />
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
