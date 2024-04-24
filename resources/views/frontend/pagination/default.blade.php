@if ($paginator->hasPages())
    <div class="products-pagination">
        <div class="products-pagination-page d-flex align-items-center">
            @if (!$paginator->onFirstPage())
                <div class="products-pagination-page-button prev">
                    <div class="icon">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.07727 4.99903C1.14923 4.93844 1.19468 4.90435 1.23634 4.86269C2.58087 3.51816 3.92918 2.17364 5.26992 0.825323C5.35324 0.742001 5.42142 0.628379 5.45172 0.514757C5.50095 0.340537 5.39491 0.151167 5.23583 0.0602694C5.07676 -0.0306282 4.87603 -0.0192661 4.72832 0.0981436C4.68288 0.13223 4.645 0.173891 4.60334 0.215553C3.1414 1.67749 1.67947 3.13942 0.213748 4.60136C-0.0703063 4.88541 -0.0703068 5.11265 0.20996 5.39292C1.68704 6.87001 3.16413 8.3433 4.63743 9.82039C4.77756 9.96052 4.93284 10.0401 5.13357 9.97946C5.44035 9.88856 5.55776 9.52497 5.36461 9.27122C5.33052 9.22577 5.28886 9.18789 5.2472 9.14623C3.90646 7.80549 2.56193 6.46097 1.2212 5.12023C1.18711 5.08236 1.14166 5.05206 1.07727 4.99903Z"
                                fill="black" />
                        </svg>
                    </div>
                    Trước
                </div>
            @endif
            @php
                if (count($elements) == 1) {
                    $margin = 2;
                    $data = $elements[0];
                    $last = count($data);
                    $newElements = [];
                    $startIndex = max(1, min($paginator->currentPage() - $margin, $last - 2 * $margin));
                    $endIndex = min($last, max($paginator->currentPage() + $margin, 1 + 2 * $margin));
                    if ($startIndex > 1) {
                        $newElements[] = [1 => $data[1]];
                    }
                    if ($startIndex > 2) {
                        $newElements[] = '...';
                    }

                    $middleElement = [];
                    for ($i = $startIndex; $i <= $endIndex; $i++) {
                        if (isset($data[$i])) {
                            $middleElement[$i] = $data[$i];
                        }
                    }
                    $newElements[] = $middleElement;

                    if ($endIndex < $last - 1) {
                        $newElements[] = '...';
                    }
                    if ($endIndex < $last) {
                        $newElements[] = [$last => $data[$last]];
                    }
                    $elements = $newElements;
                }
            @endphp
            @foreach ($elements as $element)
                @if (is_string($element))
                    <div class="products-pagination-page-button-etc">{{ $element }}</div>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="products-pagination-page-button active">{{ $page }}</div>
                        @else
                            <a class="products-pagination-page-button"
                                href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <div class="products-pagination-page-button next">
                    Sau
                    <div class="icon">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.85046 4.99903C4.7785 4.93844 4.73305 4.90435 4.69139 4.86269C3.34686 3.51816 1.99855 2.17364 0.657814 0.825323C0.574491 0.742001 0.506318 0.628379 0.476019 0.514757C0.426783 0.340537 0.532829 0.151167 0.6919 0.0602694C0.85097 -0.0306282 1.0517 -0.0192661 1.19941 0.0981436C1.24486 0.13223 1.28273 0.173891 1.3244 0.215553C2.78633 1.67749 4.24826 3.13942 5.71399 4.60136C5.99804 4.88541 5.99804 5.11265 5.71777 5.39292C4.24069 6.87001 2.76361 8.3433 1.29031 9.82039C1.15018 9.96052 0.994892 10.0401 0.79416 9.97946C0.487381 9.88856 0.369971 9.52497 0.563129 9.27122C0.597215 9.22577 0.638877 9.18789 0.680538 9.14623C2.02128 7.80549 3.3658 6.46097 4.70654 5.12023C4.74063 5.08236 4.78607 5.05206 4.85046 4.99903Z"
                                fill="black" />
                        </svg>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif
