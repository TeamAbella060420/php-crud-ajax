function getprogrammedetails() {
    $.ajax({
    url: "../ajax/getprogrammedetailsAJAX.php",
    type: "POST",
    dataType: "JSON",
    data: {a: "21", b: "flower", action: "getprogrammedetails"},
    beforeSend: function() {
        alert("about to make an ajax call");
    },
    success: function (result) {
            alert('success');
    }
    });
}


$(document).ready(
    function name() {
        alert('Jquery loaded!');
        getprogrammedetails();
    }
);