function getprogrammedetails() {
    $.ajax({
    url: "../ajax/getprogrammedetailsAJAX.php",
    type: "POST",
    dataType: "JSON",
    data: "",

    });
}


$(document).ready(
    function name() {
        alert('Jquery loaded!');
        getprogrammedetails();
    }
);