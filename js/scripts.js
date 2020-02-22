//region CLICK/HOVER FUNCTIONS

$("body").bind("touchstart", function() {});

$(".doc").hover(function() {
    (this).src = "icon/doc2.png"
});
$(".doc").mouseout(function() {
    (this).src = "icon/doc.png"
});


$("#c1_1").click(function() {
    $("#hidden1").slideToggle();
});
$("#c1_2").click(function() {
    $("#hidden2").slideToggle();
});
$("#c1_3").click(function() {
    $("#hidden3").slideToggle();
});
$("#c1_4").click(function() {
    $("#hidden4").slideToggle();
});


$(".dropbtn").click(function() {
    // $(".dropdown").slideToggle();
    $(".dropdown-content").slideToggle();
});

$("#h1_1").hover(function () {
    $(this).html("Universidade Federal de Santa Catarina");
});

$("#h1_1").hover(function() {
    $(this).html("Universidade Federal de Santa Catarina");
});
$("#h1_1").mouseout(function() {
    $(this).html("UFSC (BRA)");
});
$("#h1_2").hover(function() {
    $(this).html("University of New Brunswick");
});
$("#h1_2").mouseout(function() {
    $(this).html("UNB (CAN)");
});