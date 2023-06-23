function getHTML(result) {
    let x = "";
    x += `<div><button id="btnAddnew" class="btn btn-primary addnew">ADD NEW</button></div>`;
    x += `<table class="table table-striped">`;
    x += `<thead>
        <th>SLNO</th>
        <th>CODE</th>
        <th>TITLE</th>
        <th>DPT</th>
        <th>#SEM</th>
        <th>GRDTN_LVL</th>
        <th>TECH_LVL</th>
        <th>ACTION</th>
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
            <td>
                <span id="edit"><i class="fas fa-file-edit"></i></span>
                <span id="delete"><i class="fas fa-trash-can"></i></span>
            </td>
        </tr>`;
    }).join("");
    x += `</tbody></table>`;
    return x;
}

function getselectbox(result) {
    let x = ``;
    x += `<option value=-1>-- SELECT ONE --</option>`;
    x +=  result.map((item) => { 
        return `
    <option value=${item.did}>${item.dtitle}</option>
    `});

    return x;
}



function loadDepartments() {
    $.ajax({
        url: "../ajax/getprogrammedetailsAJAX.php",
        datatype: "JSON",
        method: "POST",
        data: {action1: "getDepartmentDetails" },
        success: function (ss) {
            //    let x = JSON.stringify(result)
            let y = JSON.parse(ss)
            let html = getselectbox(y); 
            $("#dddepartment").html(html);
        },
        error: function (error) {
            console.log(error);
            alert('Error occurred');

        }
    });
}


function getprogrammedetails() {
    $.ajax({
        url: "../ajax/getprogrammedetailsAJAX.php",
        datatype: "JSON",
        method: "POST",
        data: {action1: "getprogrammedetails" },
        // beforeSend: function() {
        //     alert("About to make an AJAX call");
        // },
        success: function (result) {
            let y = JSON.parse(result)
            console.log(y, 'www');
            // alert(y);
            // alert(html)
            $("#contentdiv").html(getHTML(y));
            $("#techLevel").html(y.map((item) => {
                return `<option value=${item.did}>${item.tl}</option>`;
            }));
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
    loadDepartments();
    $(document).on("click", "#btnAddnew", function(){
        $("#modalprogram").modal('show');
    });

    $(document).on("click", "#btnsave", function () {
        let txtcode = $("#txtcode").val();
        let txttitle = $("#txttitle").val();
        let txtnos = $("#txtnos").val();
        let dddepartment = $("#dddepartment").val();
        let ddtl = $("#ddtl").val();
        let ddgl = $("#ddgl").val();

        if(txtcode !== '' && txttitle !== '' && txtnos !== '' && dddepartment >= 0) {
            alert('valid input')
        } else {
            alert('invalid input')
        }
    })

});
