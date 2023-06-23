<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/getprogrammedetails.css">
    <link rel="stylesheet" href="../global/bootstrap.min.css">
</head>
<body>
    <main>
        <div class="header"> 
            PROGRAMME DETAILS 
        </div>
        <div id="contentdiv" class="test1">
            
        </div>
        <div class="modal" id="modalprogram">
            <div class="modal-dialog" style="margin-top: 10rem;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>PROGRAMME DETAILS</h2>
                        <button id="btn-x" class="btn btn-danger " data-bs-dismiss="modal" type="button" aria-hidden="true">X</button>
                        
                    </div>
                    <div class="modal-body">
                        <div class="myinputelement">
                            <label for="">Code</label>
                            <input id="txtcode" type="text" >
                        </div>
                        <div class="myinputelement">
                            <label for="">Title</label>
                            <input id="txttitle" type="text" >
                        </div>
                        <div class="myinputelement">
                            <label for="">Number of Semester</label>
                            <input id="txtnos" type="text" >
                        </div>
                        <div class="myinputelement">
                            <label for="">Department</label>
                            <select name="" id="dddepartment">

                            </select>
                        </div>
                        <div class="myinputelement">
                            <label for="">Technical Level</label>
                            <select name="" id="ddtl">
                                <option value="">NONE</option>
                                <option value="">BTECH</option>
                                <option value="">MTECH</option>
                            </select>
                        </div>
                        <div class="myinputelement">
                            <label for="">Graduation Level</label>
                            <select name="" id="ddgl">
                                <option value="">NONE</option>
                                <option value="">UG</option>
                                <option value="">PG</option>
                                <option value="">Graduate</option>
                                <option value="">Maters</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" id="btnsave">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <script src="../global/jqeury.js"></script>
            <script src="../global/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="../global/all.min.css">
            <script src="../js/getprogrammedetails.js"></script>
        </div>
    </main>
</body>
</html>