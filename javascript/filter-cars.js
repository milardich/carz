$(document).ready(function () {

    /*
     * jquery ajax changes carTypeSelect options depending on selected maker  
     */
    $("#carMakerSelect").change(function (e) {
        var selectedCarMakerId = $("#carMakerSelect option:selected").val();
        $.ajax({
            url: "../scripts/fetch_car_types.php",
            method: "POST",
            data: {
                carMakerId: selectedCarMakerId
            },
            success: function (response) {
                // parse json with car types and fill <select> options
                var carTypesJsonData = jQuery.parseJSON(response);
                $("#carTypeSelect").empty();
                $("#carTypeSelect").append(
                    "<option selected>-</option>"
                );
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


    /*
     * Display items with selected filters
     */
    $("#filter_button").click(function (e) {
        var carMakerId = $("#carMakerSelect option:selected").val();
        var carTypeId = $("#carTypeSelect option:selected").val();
        var minPrice = $("#minPriceInput").val();
        var maxPrice = $("#maxPriceInput").val();

        if (isNaN(minPrice)) {
            minPrice = 0;
        }
        if (isNaN(maxPrice)) {
            maxPrice = 0;
        }

        $.ajax({
            url: "../scripts/fetch_filtered_cars.php",
            method: "POST",
            data: {
                carMakerId: carMakerId,
                carTypeId: carTypeId,
                minPrice: minPrice,
                maxPrice: maxPrice
            },
            success: function (response) {

            }
        });
    });
});