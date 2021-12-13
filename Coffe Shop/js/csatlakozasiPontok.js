function getKosarTartalom() {
    console.log("fut");
    $.ajax({
        type : "GET",
        url : "api.php",
        crossOrigin : true,
        data: {kosarTart : "select"},
        datatype: "jsonp",
        success: function(result) {
            $("#kosarTartalom").html(result);
        },
        error: function(er) {

        }
    })


}

