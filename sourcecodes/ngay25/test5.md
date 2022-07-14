# Xây dựng 1 class DateTimeHelper
cho phép truyền TimeZone và format thời gian vào khi khởi tao object
$d = new DateTimeHelper('Asia/Ho_Chi_Minh','H:i:s d/m/Y');
$d->now() // in ra thời gian hiện tại theo format đã truyền vào
$d->toTimestamp('12:11:00 12/7/2021'); // in ra thời gian dạng timestamp với tham số truyền vào là 1 thời gian nếu không có tham số truyền vào mặc định sẽ là thời gian hiện tại chuyển thành timestamp

