$("#h1_1").hover(function () {
    $(this).html("Universidade Federal de Santa Catarina");
});

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var json = JSON.parse(this.responseText);
        document.getElementById("title").innerHTML = json.title.en;
        
    }
};
xmlhttp.open("GET", "contents.json", true);
xmlhttp.send();