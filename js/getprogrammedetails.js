function getHTML(result) {
    let x = `
        <table>
            <thead>
                <th>SLNO</th>
                <th>CODE</th>
                <th>TITLE</th>
                <th>Department</th>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    `;
}

function getprogrammedetails() {
        $.ajax({
            url: "../ajax/getprogrammedetailsAJAX.php",
            method: "POST",
            datatype: "json",
            data: {a: "abab", b: "mommy", action1: "getprogrammedetails"},
            // beforeSend: function() {
            //     alert("About to make an AJAX call");
            // },
            success: function (res) {
                let x = JSON.stringify(res);
                // alert(x);
                let html = getHTML(result);
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
