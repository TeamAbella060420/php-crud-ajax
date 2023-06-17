function getprogrammedetails() {
        $.ajax({
            url: "../ajax/getprogrammedetailsAJAX.php",
            method: "POST",
            datatype: "json",
            data: {a: "abab", b: "mommy", action1: "getprogrammedetails"},
            // beforeSend: function() {
            //     alert("About to make an AJAX call");
            // },
            success: function (result) {
                let x = JSON.stringify(result);
                alert(x);
            },
            error: function (error) {
                console.log(error);
                alert('Error occurred');

            }
        });
}

$(document).ready(function() {
    // alert('jQuery loaded!');
    getprogrammedetails();
});
