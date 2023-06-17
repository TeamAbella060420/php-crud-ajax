function getprogrammedetails() {
        $.ajax({
            url: "../ajax/getprogrammedetailsAJAX.php",
            type: "POST",
            dataType: "JSON",
            data: {action1: "getprogrammedetails"},
            beforeSend: function() {
                // alert("About to make an AJAX call");
            },
            success: function (res) {
                alert("Success");
            },
            error: function (error) {
                console.log(error.responseText);
                alert('Error occurred');

            }
        });
}

$(document).ready(function() {
    // alert('jQuery loaded!');
    getprogrammedetails();
});
