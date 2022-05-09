# Hãy viết đoạn mã js để in ra màn hình bảng cửu chương trong 1 thẻ table có id là target1
## gợi ý : sử dụng document.write và vòng lặp 
![image](https://user-images.githubusercontent.com/6966136/167327277-6390394d-05b4-4ee3-af07-0460bc48c68b.png)
# viết mã sắp xếp mảng tăng dần 
```
let demoSort = [100,23,12,22,223,221,331];
for (var i = 0; i < demoSort.length; i++) {
   for(var j = i + 1;j < demoSort.length; j++) {
     if (demoSort[i] > demoSort[j]) {
       var tmp = demoSort[i];
       demoSort[i] = demoSort[j];
       demoSort[j] = tmp;
     }
   }
}
document.write(demoSort.join(','));
```
