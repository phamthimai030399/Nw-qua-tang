<?php
function formatCurrency($number)
{
    // Sử dụng number_format để định dạng số và thêm dấu phân cách hàng nghìn
    $formatted_number = number_format($number);

    // Thêm "đ" vào cuối chuỗi
    $formatted_number .= "đ";

    return $formatted_number;
}
