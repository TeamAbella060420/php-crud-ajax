function getprogrammedetails() {
    $.ajax({
    url: "../ajax/getprogrammedetailsAJAX.php",
    type: "",
    dataType: "json",


    });
}


$(document).ready(
    function name() {
        alert('Jquery loaded!');
        getprogrammedetails();
    }
);