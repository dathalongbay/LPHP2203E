// yc diem trung binh của hoc sinh 
// trong so tinh diem tb toan van anh ( toan * 2) van * 2 anh * 1
// in ra xep loai của hoc sinh 
// vd > 8 hs gioi 
// vd > 6.5 hs kha
// vd > 5 trung binh 
// < 5 hoc lai

document.getElementById("tinh").onclick = function() {
    // .value lấy giá trị từ input trong form
    var toan = document.getElementById("toan").value;
    var van = document.getElementById("van").value;
    var anh = document.getElementById("anh").value;

    var diemTb = ((toan * 2) + (van * 2) + (anh * 1))/5 ;
    var xl = "";
    if (diemTb > 8) {
        xl = "giỏi";
    } else if (diemTb > 6.5) {
        xl = "khá";
    } else if (diemTb > 5) {
        xl = "tb";
    } else {
        xl = "học lại";
    }

    var kq = "<p>diem tb : "+diemTb+ "</p>";
    kq += "<p>xếp loại : "+xl+"</p>"; 
    document.getElementById("ketqua").innerHTML = kq;
};
         