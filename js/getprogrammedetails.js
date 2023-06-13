function getprogrammedetails() {
    $.ajax({
    url: "../ajax/getprogrammedetailsAJAX.php",
    type: "POST",
    dataType: "JSON",
    data: {a: "21", b: "flower", action: "getprogrammedetails"},

    });
}


$(document).ready(
    function name() {
        alert('Jquery loaded!');
        getprogrammedetails();
    }
);