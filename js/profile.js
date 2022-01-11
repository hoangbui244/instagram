
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

