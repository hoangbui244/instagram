
//open modal report user
var modal_report_user = document.getElementById("modal_report_user");
var btn_report_user = document.getElementById("btn_report_user");
var btn_close_report_user = document.getElementById("btn_close_report");
btn_report_user.onclick = function() {
    modal_report_user.style.display = "flex";
}
btn_close_report_user.onclick = function() {
    modal_report_user.style.display = "none";
}


var modal_nguoi_follow = document.getElementById("modal_nguoi_follow");
var btn_nguoi_theo_doi = document.getElementById("btn_nguoi_theo_doi");
var btn_close_nguoitheodoi = document.getElementById("btn_close_nguoitheodoi");
btn_nguoi_theo_doi.onclick = function() {
    modal_nguoi_follow.style.display = "flex";
}
btn_close_nguoitheodoi.onclick = function() {
    modal_nguoi_follow.style.display = "none";
}



var modal_nguoi_dang_follow = document.getElementById("modal_nguoi_dang_follow");
var btn_nguoi_dang_theo_doi = document.getElementById("btn_nguoi_dang_theo_doi");
var btn_close_nguoidangtheodoi = document.getElementById("btn_close_nguoidangtheodoi");
btn_nguoi_dang_theo_doi.onclick = function() {
    modal_nguoi_dang_follow.style.display = "flex";
}
btn_close_nguoidangtheodoi.onclick = function() {
    modal_nguoi_dang_follow.style.display = "none";
}

