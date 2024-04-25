<!-- START LIST PRODUCT -->
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="products-filter-list">
                    <div class="products-filter-close">&#10005;</div>
                    <div class="products-filter-item">
                        <div class="products-filter-heading" data-bs-toggle="collapse" data-bs-target="#filter-category">
                            <h2 class="heading">
                                Danh mục
                            </h2>
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="filter-category" class="filter-item collapse show">
                            <ul class="products-filter-criteria">
                                @php
                                    $taxonomy_filter = request()->input('taxonomy_ids') ?? [];
                                @endphp
                                @foreach ($taxonomy_all as $taxonomy)
                                    @if (empty($taxonomy->parent_id) && $taxonomy->taxonomy == 'san-pham')
                                        <li>
                                            <input type="checkbox" name="taxonomy_ids[]" value="{{ $taxonomy->id }}"
                                                {{ in_array($taxonomy->id, request()->input('taxonomy_ids') ?? []) ? 'checked' : '' }} />
                                            <label>
                                                {{ $taxonomy->title }}
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="clear-button">
                                <div class="icon">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.99219 4.16426C2.03925 4.01863 2.10983 3.89072 2.25689 3.82184C2.4314 3.73918 2.59611 3.75689 2.75101 3.87104C2.78631 3.89662 2.81768 3.93007 2.84905 3.96156C3.8765 4.99277 4.90395 6.02398 5.93336 7.05519C5.95493 7.07683 5.97846 7.09848 6.01572 7.13587C6.03729 7.10635 6.05101 7.07683 6.07258 7.05519C7.10395 6.01611 8.13729 4.97899 9.17062 3.94385C9.35297 3.76083 9.56474 3.72344 9.7667 3.83364C10.0157 3.9714 10.0843 4.30595 9.90983 4.5303C9.88238 4.56572 9.85101 4.59721 9.81964 4.6287C8.79219 5.65991 7.76474 6.69112 6.73729 7.72232C6.71572 7.74397 6.69023 7.76168 6.64317 7.79907C6.68434 7.82663 6.71376 7.8404 6.73532 7.86402C7.76866 8.90113 8.80199 9.93627 9.83533 10.9734C10.0216 11.1603 10.0589 11.3827 9.93925 11.5854C9.8667 11.7094 9.74905 11.7724 9.61768 11.8157C9.56474 11.8157 9.51376 11.8157 9.46081 11.8157C9.3118 11.7802 9.20591 11.6819 9.10199 11.5756C8.09219 10.5601 7.08042 9.54662 6.07062 8.53115C6.04905 8.50951 6.03532 8.47999 6.00591 8.43866C5.96866 8.48392 5.95101 8.50951 5.92944 8.53115C4.91964 9.54662 3.90787 10.5601 2.89807 11.5756C2.79415 11.6799 2.68827 11.7783 2.53925 11.8157C2.48631 11.8157 2.43532 11.8157 2.38238 11.8157C2.34121 11.7999 2.30003 11.7862 2.26082 11.7665C2.1118 11.6976 2.03729 11.5716 1.99219 11.4221C1.99219 11.3689 1.99219 11.3178 1.99219 11.2646C2.02944 11.1151 2.12552 11.0088 2.2314 10.9045C3.24317 9.89101 4.25297 8.87555 5.26474 7.86205C5.28631 7.8404 5.31572 7.82663 5.35689 7.79711C5.3118 7.75972 5.28631 7.742 5.26474 7.72036C4.25297 6.70686 3.24317 5.69139 2.2314 4.6779C2.12748 4.5736 2.02944 4.46733 1.99219 4.31776C1.99219 4.26856 1.99219 4.21543 1.99219 4.16426Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <p class="text">Clear All</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($search as $item_search)
                        <div class="products-filter-item">
                            <div class="products-filter-heading" data-bs-toggle="collapse"
                                data-bs-target="#filter-{{ $item_search->id }}">
                                <h2 class="heading">
                                    {{ $item_search->title }}
                                </h2>
                                <div class="icon">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="filter-{{ $item_search->id }}" class="filter-item collapse show">
                                <ul class="products-filter-criteria">
                                    @foreach ($item_search->searchDetails as $item)
                                        <li>
                                            <input type="checkbox" name="{{ toVariableParam($item_search->title) }}[]"
                                                value="{{ $item->id }}" {{ in_array($item->id, request()->input(toVariableParam($item_search->title)) ?? []) ? 'checked' : '' }} />
                                            <label>
                                                {{ $item->title }}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="clear-button">
                                    <div class="icon">
                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.99219 4.16426C2.03925 4.01863 2.10983 3.89072 2.25689 3.82184C2.4314 3.73918 2.59611 3.75689 2.75101 3.87104C2.78631 3.89662 2.81768 3.93007 2.84905 3.96156C3.8765 4.99277 4.90395 6.02398 5.93336 7.05519C5.95493 7.07683 5.97846 7.09848 6.01572 7.13587C6.03729 7.10635 6.05101 7.07683 6.07258 7.05519C7.10395 6.01611 8.13729 4.97899 9.17062 3.94385C9.35297 3.76083 9.56474 3.72344 9.7667 3.83364C10.0157 3.9714 10.0843 4.30595 9.90983 4.5303C9.88238 4.56572 9.85101 4.59721 9.81964 4.6287C8.79219 5.65991 7.76474 6.69112 6.73729 7.72232C6.71572 7.74397 6.69023 7.76168 6.64317 7.79907C6.68434 7.82663 6.71376 7.8404 6.73532 7.86402C7.76866 8.90113 8.80199 9.93627 9.83533 10.9734C10.0216 11.1603 10.0589 11.3827 9.93925 11.5854C9.8667 11.7094 9.74905 11.7724 9.61768 11.8157C9.56474 11.8157 9.51376 11.8157 9.46081 11.8157C9.3118 11.7802 9.20591 11.6819 9.10199 11.5756C8.09219 10.5601 7.08042 9.54662 6.07062 8.53115C6.04905 8.50951 6.03532 8.47999 6.00591 8.43866C5.96866 8.48392 5.95101 8.50951 5.92944 8.53115C4.91964 9.54662 3.90787 10.5601 2.89807 11.5756C2.79415 11.6799 2.68827 11.7783 2.53925 11.8157C2.48631 11.8157 2.43532 11.8157 2.38238 11.8157C2.34121 11.7999 2.30003 11.7862 2.26082 11.7665C2.1118 11.6976 2.03729 11.5716 1.99219 11.4221C1.99219 11.3689 1.99219 11.3178 1.99219 11.2646C2.02944 11.1151 2.12552 11.0088 2.2314 10.9045C3.24317 9.89101 4.25297 8.87555 5.26474 7.86205C5.28631 7.8404 5.31572 7.82663 5.35689 7.79711C5.3118 7.75972 5.28631 7.742 5.26474 7.72036C4.25297 6.70686 3.24317 5.69139 2.2314 4.6779C2.12748 4.5736 2.02944 4.46733 1.99219 4.31776C1.99219 4.26856 1.99219 4.21543 1.99219 4.16426Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    <p class="text">Clear All</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="products-list">
                    <div class="products-sort">
                        @if (!empty($taxonomy_product))
                            <h1>{{ $taxonomy_product->title }}</h1>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownSubmenu"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Danh mục con
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownSubmenu">
                                    @foreach ($taxonomy_all as $item)
                                        @if ($item->parent_id == $taxonomy_product->id)
                                            <li><a class="dropdown-item"
                                                    href="{{ route('frontend.cms.product_category', ['alias' => $item->url_part]) }}">{{ $item->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <h1>Tất cả sản phẩm</h1>
                        @endif
                        <div class="products-filter-toggle main-btn">Filter</div>
                    </div>
                    <div class="products-container">
                        @foreach ($products as $product)
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}">
                                        <img class="product-img-default" src="{{ $product->image }}"
                                            alt="{{ $product->title }}" title="{{ $product->title }}" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <span class="product-type">Denim</span>
                                    <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}"
                                        class="product-name" title="{{ $product->title }}">
                                        {{ $product->title }}
                                    </a>
                                    @if ($product->gia != null)
                                        <div class="product-price">
                                            <span
                                                class="product-price_detail product-price-current">{{ formatCurrency($product->gia) }}</span>
                                            @if ($product->giakm != null)
                                                <span
                                                    class="product-price_detail product-price-old">{{ formatCurrency($product->giakm) }}</span>
                                            @endif
                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span class="product-price-current">Liên hệ</span>
                                        </div>
                                    @endif
                                </div>
                                <button class="main-btn add-cart" data-id="{{$product->id}}">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.72117 1.54131C1.33081 1.54131 0.949755 1.54596 0.568694 1.54131C0.159752 1.53666 -0.109779 1.14631 0.0435745 0.77919C0.131869 0.560777 0.303811 0.435306 0.540812 0.430659C1.10776 0.426012 1.67935 0.421365 2.24629 0.430659C2.53906 0.435306 2.75282 0.649072 2.78535 0.946485C2.8597 1.62496 2.92941 2.30808 2.99912 2.98655C3.00841 3.05626 3.0177 3.12596 3.03165 3.21426C3.106 3.21426 3.18035 3.21426 3.2547 3.21426C7.11643 3.21426 10.9781 3.21426 14.8399 3.21426C15.4347 3.21426 15.9041 3.56279 15.9877 4.11579C16.0202 4.33885 15.9831 4.57585 15.9366 4.79891C15.5137 6.79251 15.0908 8.78611 14.654 10.7797C14.4774 11.5976 13.8175 12.1181 12.981 12.1181C10.1184 12.1181 7.25119 12.1181 4.38859 12.1181C3.45918 12.1181 2.77141 11.4768 2.67847 10.5566C2.51582 8.9534 2.33923 7.35016 2.17194 5.75156C2.02788 4.38068 1.88382 3.00979 1.7444 1.63425C1.73511 1.61566 1.73046 1.59243 1.72117 1.54131ZM3.13853 4.3342C3.20823 4.97085 3.27329 5.58427 3.33835 6.20233C3.48706 7.61969 3.63577 9.03705 3.78912 10.4544C3.83094 10.8262 4.03541 11.0074 4.41647 11.0074C7.26513 11.0074 10.1091 11.0074 12.9578 11.0074C13.311 11.0074 13.5062 10.8494 13.5805 10.5009C13.9383 8.83258 14.2962 7.15963 14.654 5.49133C14.7376 5.11027 14.8166 4.72456 14.9003 4.3342C10.9735 4.3342 7.06531 4.3342 3.13853 4.3342Z"
                                            fill="white" />
                                        <path
                                            d="M3.34277 14.911C3.34277 13.9909 4.09095 13.238 5.00643 13.238C5.92655 13.238 6.67938 13.9862 6.67938 14.9017C6.67938 15.8218 5.9312 16.5746 5.01572 16.5746C4.10025 16.5793 3.34277 15.8265 3.34277 14.911ZM5.00643 15.4593C5.30849 15.4593 5.56408 15.213 5.56408 14.911C5.56872 14.6089 5.32243 14.3533 5.02037 14.3487C4.71366 14.344 4.45342 14.5996 4.45342 14.9063C4.45807 15.2084 4.70901 15.4593 5.00643 15.4593Z"
                                            fill="white" />
                                        <path
                                            d="M11.6893 16.5746C10.7738 16.5746 10.021 15.8218 10.021 14.9017C10.021 13.9862 10.7738 13.2334 11.6939 13.2334C12.6141 13.2334 13.3622 13.9862 13.3622 14.9063C13.3622 15.8265 12.6094 16.5746 11.6893 16.5746ZM11.6893 14.3487C11.3872 14.3487 11.1363 14.5996 11.1363 14.9017C11.1363 15.2038 11.3826 15.4547 11.6846 15.4593C11.9914 15.464 12.2516 15.2038 12.2469 14.8971C12.2469 14.595 11.9914 14.3487 11.6893 14.3487Z"
                                            fill="white" />
                                    </svg>

                                    Thêm vào giỏ hàng
                                </button>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->withQueryString()->links('frontend.pagination.default') }}
                    <div class="products-guide">
                        <h2 class="heading">HƯỚNG DẪN MUA HÀNG</h2>
                        <article class="products-guide-content">
                            @foreach ($blocksContent as $item)
                                @if ($item->block_code == 'buying-guide' && $item->parent_id == null)
                                    {!! $item->content !!}
                                @endif
                            @endforeach
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END LIST PRODUCT -->

<!-- ============================================= -->

<script>
    const filterRangeSlider = document.querySelector(
        ".products-filter-range-slider"
    );

    const filterRangeSliderInputMin = document.querySelector(
        ".products-filter-range-input .min"
    );
    const filterRangeSliderInputMax = document.querySelector(
        ".products-filter-range-input .max"
    );

    const openFilterButton = document.querySelector(".products-filter-toggle");

    const closeFilterButton = document.querySelector(".products-filter-close");

    const productFilterList = document.querySelector(".products-filter-list");

    openFilterButton.addEventListener("click", () => {
        productFilterList.classList.add("active");
    });

    closeFilterButton.addEventListener("click", () => {
        productFilterList.classList.remove("active");
    });

    // clear all checkbox
    const clearBtn = document.querySelectorAll(".clear-button");
    Array.from(clearBtn).forEach((btn) => {
        btn.addEventListener("click", function() {
            checkList = this.parentElement.querySelectorAll('input[type="checkbox"]');
            Array.from(checkList).forEach((check) => {
                check.checked = false;
            });
            handleFilter();
        });
    });
</script>
