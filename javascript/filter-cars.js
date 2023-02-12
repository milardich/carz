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

        //fetch filtered items data
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
                $("#items-container").empty();
                var filteredItemsJsonData = jQuery.parseJSON(response);
                filteredItemsJsonData.forEach(element => {
                    //console.log(element.item_title);
                    //render items with that data
                    $.ajax({
                        type: "POST",
                        url: "../scripts/render_item.php",
                        data: {
                            item_id: element.item_id,
                            unique_item_id: element.unique_item_id,
                            item_title: element.item_title,
                            car_maker_id: element.car_maker_id,
                            car_type_id: element.car_type_id,
                            item_description: element.item_description,
                            item_location: element.item_location,
                            item_price: element.item_price,
                            item_thumbnail: element.item_thumbnail,
                            item_date_posted: element.item_date_posted,
                        },
                        dataType: "text",
                        success: function (response) {
                            //console.log(response);
                            $("#items-container").append(response);
                        },
                        async: false
                    });
                });
            }
        });
    });


    /*
    * Display all items without filters
    */
    $.ajax({
        url: "../scripts/fetch_all_cars.php",
        method: "POST",
        success: function (response) {
            $("#items-container").empty();
            var filteredItemsJsonData = jQuery.parseJSON(response);
            filteredItemsJsonData.forEach(element => {
                //render items 
                $.ajax({
                    type: "POST",
                    url: "../scripts/render_item.php",
                    data: {
                        item_id: element.item_id,
                        unique_item_id: element.unique_item_id,
                        item_title: element.item_title,
                        car_maker_id: element.car_maker_id,
                        car_type_id: element.car_type_id,
                        item_description: element.item_description,
                        item_location: element.item_location,
                        item_price: element.item_price,
                        item_thumbnail: element.item_thumbnail,
                        item_date_posted: element.item_date_posted,
                    },
                    dataType: "text",
                    success: function (response) {
                        //console.log(response);
                        $("#items-container").append(response);
                    }
                });
            });
        }
    });
});