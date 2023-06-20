function getHTML(result) {
    let x = "";
    x += `<div><button class="btn btn-primary addnew">ADD NEW</button></div>`;
    x += `<table class="table table-striped">`;
    x += `<thead>
        <th>SLNO</th>
        <th>CODE</th>
        <th>TITLE</th>
        <th>DPT</th>
        <th>#SEM</th>
        <th>GRDTN_LVL</th>
        <th>TECH_LVL</th>
        <th></th>
    </thead>
    <tbody>`;
    x += result.map((item, index) => {
        return `<tr>
            <td>${index + 1}</td>
            <td>${item['pcode']}</td>
            <td>${item['ptitle']}</td>
            <td>${item['dcode']}</td>
            <td>${item['nos']}</td>
            <td>${item['gl']}</td>
            <td>${item['tl']}</td>
            <td><button type="button" class=" btn btn-primary">EDIT</button></td>
        </tr>`;
    }).join("");
    x += `</tbody></table>`;
    
    return x;
}


function getprogrammedetails() {
    $.ajax({
        url: "../ajax/getprogrammedetailsAJAX.php",
        datatype: "JSON",
        method: "POST",
        data: { a: "abab", b: "mommy", action1: "getprogrammedetails" },
        // beforeSend: function() {
        //     alert("About to make an AJAX call");
        // },
        success: function (result) {
            let y = JSON.parse(result)
            // alert(y);
            // alert(html)
            $("#contentdiv").html(getHTML(y));
            // console.log(getHTML(result));
        },
        error: function (error) {
            console.log(error);
            alert('Error occurred');

        }
    });
}

$(document).ready(function () {
    // alert('jQuery loaded!');
    getprogrammedetails();
});
