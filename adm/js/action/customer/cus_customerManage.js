function getDDLStatus() {
    $.ajax({
        type: 'GET',
        url: 'controller/commonController.php?func=DDLStatusActive',
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            var htmlOption = "";
            var res = JSON.parse(data);
            $.each(res, function (i, item) {
                var txt_status = (language == "th" ? item.s_detail_th : item.s_detail_en);
                htmlOption += "<option value='" + item.s_status + "'>" + txt_status + "</option>";
            });
            $("#status").html(htmlOption);

            if (keyEdit != "") {
                edit();
            }

        },
        error: function (data) {
            getDDLTitle();
        }

    });
}



function edit() {
    $.ajax({
        type: 'GET',
        url: 'controller/customer/customerController.php?func=getInfo&id=' + keyEdit,
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            var res = JSON.parse(data);
            $.each(res, function (i, item) {
                debugger;

                $("#s_firstname").val(item.s_firstname);
                $("#s_lastname").val(item.s_lastname);

                $("#s_phone_1").val(item.s_phone_1);
                $("#s_phone_2").val(item.s_phone_2);

                $("#s_email").val(item.s_email);
                $("#s_flg_email").val(item.s_flg_email);
                $("#s_line").val(item.s_line);

                $("#s_address").val(item.s_address);



                $("#status").val(item.s_status);
                $('#tmp_s_img').val(item.s_image);
                if (item.s_image != "") {
                    $('#img1').attr('src', 'upload/customer/' + item.s_image);
                }


                $("#lb_create").text(item.s_create_by + " ( " + item.d_create + " )");
                var lb_edit = (item.s_update_by != "" ? item.s_update_by + " ( " + item.d_update + " )" : "-");
                $("#lb_edit").text(lb_edit);
            });

            $('#se-pre-con').delay(100).fadeOut();

        },
        error: function (data) {

        }

    });
}


function save() {
    $('#form-action').submit(function (e) {
        e.preventDefault();
        console.log($(this).serialize());
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: 'POST',
            url: 'controller/customer/customerController.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#se-pre-con').fadeIn(100);
            },
            success: function (data) {
                var res = data.split(",");
                if (res[0] == "0000") {
                    var errCode = "Code (" + res[0] + ") : " + res[1];
                    $.notify(errCode, "success");
                } else {
                    var errCode = "Code (" + res[0] + ") : " + res[1];
                    $.notify(errCode, "error");
                    //fix
                    $('#se-pre-con').delay(100).fadeOut();
                    return;
                }

                notification();
                $('#form-action').each(function () {
                    setTimeout(reloadTime, 1000);
                });
            },
            error: function (data) {

            }
        });
    });
}



function setDDLAmphure(i_amphure, i_district, i_zipcode) {
    $.ajax({
        type: 'GET',
        url: 'controller/commonController.php?func=DDLAmphure&i_province=' + $("#i_province").val(),
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            if (data == "") {
                htmlOption += "<option value=''>" + pleaseSelect + "</option>";
                $("#i_amphure").html(htmlOption);
                getDDLDistrict();
                return;
            }
            var htmlOption = "";
            var res = JSON.parse(data);
            htmlOption += "<option value=''>" + pleaseSelect + "</option>";
            $.each(res, function (i, item) {
                var txt_status = (language == "th" ? item.s_name_th : item.s_name_en);
                htmlOption += "<option value='" + item.i_amphure + "'>" + txt_status + "</option>";
            });
            $("#i_amphure").html(htmlOption);
            $("#i_amphure").val(i_amphure);
            setDDLDistrict(i_amphure, i_district, i_zipcode);
        },
        error: function (data) {
            setDDLDistrict(i_amphure, i_district, i_zipcode);
        }

    });
}

function setDDLDistrict(i_amphure, i_district, i_zipcode) {
    $.ajax({
        type: 'GET',
        url: 'controller/commonController.php?func=DDLDistrict&i_amphure=' + i_amphure,
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            if (data == "") {
                htmlOption += "<option value=''>" + pleaseSelect + "</option>";
                $("#i_district").html(htmlOption);
                getDDLZipcode();
                return;
            }
            var htmlOption = "";
            var res = JSON.parse(data);
            htmlOption += "<option value=''>" + pleaseSelect + "</option>";
            $.each(res, function (i, item) {
                var txt_status = (language == "th" ? item.s_name_th : item.s_name_en);
                htmlOption += "<option value='" + item.i_district + "'>" + txt_status + "</option>";
            });
            $("#i_district").html(htmlOption);
            $("#i_district").val(i_district);
            setDDLZipcode(i_amphure, i_district, i_zipcode);
        },
        error: function (data) {
            setDDLZipcode(i_amphure, i_district, i_zipcode);
        }

    });
}

function setDDLZipcode(i_amphure, i_district, i_zipcode) {
    $.ajax({
        type: 'GET',
        url: 'controller/commonController.php?func=DDLZipcode&i_district=' + i_district,
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            if (data == "") {
                htmlOption += "<option value=''>" + pleaseSelect + "</option>";
                $("#i_zipcode").html(htmlOption);
                return;
            }
            var htmlOption = "";
            var res = JSON.parse(data);
            htmlOption += "<option value=''>" + pleaseSelect + "</option>";
            $.each(res, function (i, item) {
                var txt_status = (language == "th" ? item.i_zipcode : item.i_zipcode);
                htmlOption += "<option value='" + item.i_zipcode + "'>" + txt_status + "</option>";
            });
            $("#i_zipcode").html(htmlOption);
            $("#i_zipcode").val(i_zipcode);

        },
        error: function (data) {

        }

    });
}