$(document).ready(function () {
    $("#carMakerSelect").change(function (e) {
        var selectedCarMakerId = $("#carMakerSelect option:selected").val();

        // ajax change carTypeSelect options depending on selected maker  
        $.ajax({
            url: "../scripts/fetch_car_types.php",
            method: "POST",
            data: {
                carMakerId: selectedCarMakerId
            },
            success: function (response) {
                // parse json with car types and fill select options
                var carTypesJsonData = jQuery.parseJSON(response);
                $("#carTypeSelect").empty();
                carTypesJsonData.forEach(element => {
                    //console.log(element.car_type);
                    $("#carTypeSelect").append(
                        "<option value=" + element.car_type_id + "> " + element.car_type + "  </option>"
                    );
                });
                //console.log(">>" + carTypesJsonData[1]["car_type"]);
            }
        });
    });
});