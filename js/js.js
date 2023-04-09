var d = new Date();
document.getElementById("date").innerHTML = d.getFullYear();

$("#searchInput").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#urun #urunItem").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
