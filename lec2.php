<?php
// مصفوفة تحتوي على أرقام
$numbers = [5, 3, 8, 2, 1];

// دالة الفرز بشكل تصاعدي
sort($numbers);
echo "Sorted array in ascending order: ";
print_r($numbers);

// دالة الفرز بشكل تنازلي
rsort($numbers);
echo "Sorted array in descending order: ";
print_r($numbers);

// دالة البحث
$searchValue = 8;
$key = array_search($searchValue, $numbers);
if ($key !== false) {
    echo "The value $searchValue is found at index $key.";
} else {
    echo "The value $searchValue is not found in the array.";
}

// دالة الاستخراج
$slicedArray = array_slice($numbers, 1, 3);
echo "Sliced array: ";
print_r($slicedArray);

// دالة الحذف والاستبدال
$replacedArray = array_splice($numbers, 2, 1, [10]);
echo "Array after replacing element: ";
print_r($numbers);

// دالة الجمع
$sum = array_sum($numbers);
echo "Sum of array elements: $sum";

// دالة العد
$valuesCount = array_count_values($numbers);
echo "Count of each value in the array: ";
print_r($valuesCount);

// دالة التحويل
function square($num) {
    return $num * $num;
}

$squaredArray = array_map('square', $numbers);
echo "Array after squaring each element: ";
print_r($squaredArray);

// دالة الفلترة
$filteredArray = array_filter($numbers, function ($num) {
    return $num % 2 == 0; // ترجع الأعداد الزوجية فقط
});
echo "Filtered array with even numbers only: ";
print_r($filteredArray);

// دالة الفرز بناءً على القيم
asort($numbers);
echo "Sorted array by values: ";
print_r($numbers);

// دالة الفرز بناءً على المفاتيح
ksort($numbers);
echo "Sorted array by keys: ";
print_r($numbers);

// دالة الفرز بالقيم بشكل تنازلي
arsort($numbers);
echo "Sorted array by values in descending order: ";
print_r($numbers);

// دالة الفرز بالمفاتيح بشكل تنازلي
krsort($numbers);
echo "Sorted array by keys in descending order: ";
print_r($numbers);

?>