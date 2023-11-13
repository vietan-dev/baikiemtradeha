<?php
// Tạo mảng kết hợp chứa thông tin sản phẩm
$products = array(
    array("name" => "Sản phẩm A", "price" => 20, "quantity" => 5),
    array("name" => "Sản phẩm B", "price" => 30, "quantity" => 8),
    array("name" => "Sản phẩm C", "price" => 15, "quantity" => 12),
);

// Hiển thị thông tin của tất cả sản phẩm
echo "Thông tin sản phẩm:\n";
foreach ($products as $product) {
    echo "Tên: " . $product['name'] . "\n";
    echo "Giá: $" . $product['price'] . "\n";
    echo "Số lượng: " . $product['quantity'] . "\n";
    echo "-----------------\n";
}

// Hàm tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

// Hiển thị tổng giá trị của tất cả sản phẩm
echo "Tổng giá trị của tất cả sản phẩm là: $" . calculateTotalValue($products) . "\n";
?>
