function getprogrammedetails() {
    $.ajax({
        url: "../ajax/getprogrammedetailsAJAX.php",
        type: "POST",
        dataType: "JSON",
        data: {a: "21", b: "flower", action1: "getprogrammedetails"},
        beforeSend: function() {
            alert("About to make an AJAX call");
        },
        success: function (res) {
            let x = JSON.stringify(res);
            alert(x);
        },
        error: function () {
            alert('Error occurred');
        }
    });
}

$(document).ready(function() {
    alert('jQuery loaded!');
    getprogrammedetails();
});
