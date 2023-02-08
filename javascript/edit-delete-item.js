$(document).ready(function () {

    $("#editButton").click(function () {
        var itemTitle = $("#itemTitle").text().trimStart().trimEnd();
        var itemDescription = $("#itemDescription").text().trimStart().trimEnd();
        var itemPrice = $("#itemPrice").text().trimStart().trimEnd().substring(1);

        $("#editButton").hide();
        $(".itemProperty").hide();
        $(".editInputFieldContainer").show();
        $(".modify-button").show();

        $("#newTitleInputField").val(itemTitle);
        $("#newDescriptionInputField").val(itemDescription);
        $("#newPriceInputField").val(itemPrice);
    });

    $("#cancelButton").click(function () {
        $("#editButton").show();
        $(".itemProperty").show();
        $(".editInputFieldContainer").hide();
        $(".modify-button").hide();
    });

    $("#saveButton").click(function () {
        var itemTitle = $("#newTitleInputField").val().trimStart().trimEnd();
        var itemDescription = $("#newDescriptionInputField").val().trimStart().trimEnd();
        var itemPrice = $("#newPriceInputField").val().trimStart().trimEnd();
        var itemId = new URLSearchParams(window.location.search).get("id");

        $.ajax({
            url: "../scripts/update_item_script.php",
            method: "GET",
            data: {
                itemId: itemId,
                itemTitle: itemTitle,
                itemDescription: itemDescription,
                itemPrice: itemPrice
            },
            success: function (response) {
                var newData = jQuery.parseJSON(response);
                $(".itemProperty").show();
                $(".editInputFieldContainer").hide();
                $(".modify-button").hide();
                $("#editButton").show();
                $("#itemTitle").text(newData.newTitle);
                $("#itemDescription").text(newData.newDescription);
                $("#itemPrice").text("$" + newData.newPrice);
            }
        });
    });

    $("#deleteButton").click(function () {
        var itemId = new URLSearchParams(window.location.search).get("id");
        $.ajax({
            url: "../scripts/delete_item_script.php",
            method: "GET",
            data: {
                itemId: itemId
            },
            success: function (response) {
                location.href = "profile_page.php";
            }
        });
    });
});