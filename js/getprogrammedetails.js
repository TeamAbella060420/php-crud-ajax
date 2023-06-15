function getprogrammedetails() {
    $.ajax({
    url: "../ajax/getprogrammedetailsAJAX.php",
    type: "POST",
    dataType: "JSON",
    data: {a: "21", b: "flower", action1: "getprogrammedetails"},
    beforeSend: function() {
        alert("about to make an ajax call");
    },
    success: function (res) {
           let x =  JSON.stringify(res);
           alert(x);
    },
    error: function () {
        alert('Error')
    }
    });
}


$(document).ready(
    function name() {
        alert('Jquery loaded!');
        getprogrammedetails();
    }
);