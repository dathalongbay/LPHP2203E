# Viết 1 class ArrayHelper với các chức năng method

ArrayHelper::isArray($input); // kiểm tra xem biến truyền vào có phải là 1 mảng không
ArrayHelper::isIndexArray($input); // kiểm tra xem biến truyền vào có phải là 1 mảng chỉ số không
ArrayHelper::isAssociativeArray($input); // kiểm tra xem biến truyền vào có phải là 1 mảng kết hợp không
ArrayHelper::isMultidimensionalArray($input); // kiểm tra xem biến truyền vào có phải là 1 mảng đa chiều không
ArrayHelper::convertStringToArray($string, $delimiter); // chuyển 1 chuỗi thành 1 mảng với tham số thứ 2 là ký tự phân tách chuỗi thành mảng ví dụ : a - b - c hay a,b,c hay a:b:c
ArrayHelper::sortArray($array); // sắp xếp 1 mảng tăng dần khi truyền vào 1 mảng với value là các số nguyên ( không dùng các hàm sort() trong php )

