$(document).ready(function () {
    var selectedCarMaker = "";
    var selectedCarType = "";

    $("#carMakerSelect").change(function (e) {
        selectedCarMaker = $("#carMakerSelect option:selected").text();
        $("#itemTitleInput").val(selectedCarMaker.trim());
    });

    $("#carTypeSelect").change(function (e) {
        selectedCarType = $("#carTypeSelect option:selected").text();
        //console.log(selectedCarMaker + " - " + selectedCarType);
        $("#itemTitleInput").val(selectedCarMaker.trim() + selectedCarType.trimEnd());
    });
});