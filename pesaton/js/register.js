(function ( $ ) {

    $.fn.imagePicker = function( options ) {

        // Define plugin options
        var settings = $.extend({
            // Input name attribute
            name: "",
            // Classes for styling the input
            class: "form-control btn btn-default btn-block",
            // Icon which displays in center of input
            icon: "glyphicon glyphicon-plus"
        }, options );

        // Create an input inside each matched element
        return this.each(function() {
            $(this).html(create_btn(this, settings));
        });

    };

    // Private function for creating the input element
    function create_btn(that, settings) {
        // The input icon element
        var picker_btn_icon = $('<i class="'+settings.icon+'"></i>');

        // The actual file input which stays hidden
        var picker_btn_input = $('<input type="file" name="'+settings.name+'" />');

        // The actual element displayed
        var picker_btn = $('<div class="'+settings.class+' img-upload-btn"></div>')
            .append(picker_btn_icon)
            .append(picker_btn_input);

        // File load listener
        picker_btn_input.change(function() {
            if ($(this).prop('files')[0]) {
                // Use FileReader to get file
                var reader = new FileReader();

                // Create a preview once image has loaded
                reader.onload = function(e) {
                    var preview = create_preview(that, e.target.result, settings);
                    $(that).html(preview);
                }

                // Load image
                reader.readAsDataURL(picker_btn_input.prop('files')[0]);
            }
        });

        return picker_btn
    };

    // Private function for creating a preview element
    function create_preview(that, src, settings) {

        // The preview image
        var picker_preview_image = $('<img src="'+src+'" class="img-responsive img-rounded" />');

        // The remove image button
        var picker_preview_remove = $('<button class="btn btn-link"><small>Remove</small></button>');

        // The preview element
        var picker_preview = $('<div class="text-center"></div>')
            .append(picker_preview_image)
            .append(picker_preview_remove);

        // Remove image listener
        picker_preview_remove.click(function() {
            var btn = create_btn(that, settings);
            $(that).html(btn);
        });

        return picker_preview;
    };

}( jQuery ));


$("#addBtn").click(function () {

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(httpRequest.responseText);
            // $("#txtFullName").val("");
            // $("#txtNIC").val("");
            // $("#txtTEL").val("");
            // $("#ageTXT").val("");
            // $("#txtAddress").val("");
            // $("#txtEmail").val("");
            // $("#txtSchool").val("");

        }
    };

    httpRequest.open('POST','pages/addStudentPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#formStudent").serializeArray();

    var jsonArray = JSON.stringify(jsArray);

    httpRequest.send(jsonArray);
});


$("#signBtn").click(function () {
    //console.log("ssssssssssss");
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            console.log(httpRequest.responseText);
        }
    };

    httpRequest.open('POST','pages/loginPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#formLogin").serializeArray();
    var jsonArray = JSON.stringify(jsArray);
    httpRequest.send(jsonArray);
});


$("#paymentBtn").click(function () {
    //console.log("ssssssssssss");
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(httpRequest.responseText);
            window.location.href = 'payment.php';

        }
    };

    httpRequest.open('POST','pages/paymentPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#payment-form").serializeArray();
    var jsonArray = JSON.stringify(jsArray);
    httpRequest.send(jsonArray);
});



$("#loginBtn").click(function () {
    var httpLoginRequest=new XMLHttpRequest();

    httpLoginRequest.onreadystatechange = function () {
        if(httpLoginRequest.readyState == 4 && httpLoginRequest.status == 200) {
            if (httpLoginRequest.responseText == "Idetified") {
                window.location.href = 'main.html';
            }else if(httpLoginRequest.responseText == "Cannot Identify") {
                alert(this.responseText);
               return;
            }
        }
    };

    httpLoginRequest.open('POST',"pages/getLoginPHP.php",true);
    httpLoginRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var queryString1=$("#formLogin").serialize();

    httpLoginRequest.send(queryString1);
});


$("#subjectBtn").click(function (){


    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(this.responseText);
            window.location.href = 'subject.php';

        }
    };


    var jsArray = $("#form-subject").serializeArray();
    var jsonArray = JSON.stringify(jsArray);

    httpRequest.open('POST','pages/addTeacherPHP.php',true);
    httpRequest.setRequestHeader("Content-Type","application/json");

    httpRequest.send(jsonArray);


    var httpRequest1 = new XMLHttpRequest();
    httpRequest1.onreadystatechange = function(){
        if (httpRequest1.readyState === 4 && httpRequest1.status === 200){
            var tid=httpRequest1.responseText;
            console.log(tid);
            var request=new XMLHttpRequest();

            request.onreadystatechange=function () {

                if(request.status===200 && request.readyState===200){
                    alert(request.responseText);

                    console.log(request.responseText);

                };

            };

            var jsArray = $("#form-subject").serializeArray();
            var jsonArray = JSON.stringify(jsArray);

            request.open('POST','pages/AddsubjectPHP.php?tid='+tid,true);
            request.setRequestHeader('Content-Type','application/json');
            request.send(jsonArray);

        }
    };

    httpRequest1.open('GET','pages/getTeacherPHP.php',true);
    httpRequest1.send();

});
$("#logout").click(function () {

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
           if(httpRequest.responseText=="Success"){
               window.location.href="index.php";
           }


        }
    }
    httpRequest.open('GET','pages/logoutPHP.php',true);
    httpRequest.send();

});



$("#examBtn").click(function () {

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(httpRequest.responseText);
            window.location.href = 'Exam.php';

        }
    };

    httpRequest.open('POST','pages/ExamPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#form-exam").serializeArray();
    var jsonArray = JSON.stringify(jsArray);
    httpRequest.send(jsonArray);
});

$("#resultBtn").click(function () {

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(httpRequest.responseText);
            window.location.href = 'Exam.php';

        }
    };

    httpRequest.open('POST','pages/ResultPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#form-result").serializeArray();
    var jsonArray = JSON.stringify(jsArray);
    httpRequest.send(jsonArray);
});
//////////////////////////////////////////////////////////////////////////
function searchKeyPress(e)
{
    // look for window.event in case event isn't passed in
    e = e || window.event;
    if (e.keyCode == 13)
    {

        var d=document.getElementById("eId").value;
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function(){
            if (httpRequest.readyState === 4 & httpRequest.status === 200){
                var details=JSON.parse(httpRequest.responseText);

                console.log(httpRequest.responseText);
                $("#eName").val(details[0].name);
                $("#eBatch").val(details[0].batch);
                $("#eSubject").val(details[0].subject);
                $("#eDate").val(details[0].date);

            }
        };

        httpRequest.open('GET','pages/searchExamPHP.php?k='+d,true);
        httpRequest.send();
        return false;
    }
    return true;
}

function tSearchKeyPress(e)
{
    // look for window.event in case event isn't passed in
    e = e || window.event;
    if (e.keyCode == 13)
    {

        var d=document.getElementById("txtTID").value;
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function(){
            if (httpRequest.readyState === 4 & httpRequest.status === 200){
                var details=JSON.parse(httpRequest.responseText);

                console.log(httpRequest.responseText);
                $("#txtName").val(details[0].name);
                $("#txtAddress").val(details[0].address);
                $("#txtNIC").val(details[0].nic);
                $("#ageTXT").val(details[0].age);
                $("#txtSCL").val(details[0].school);
                $("#txtTEL").val(details[0].tel);
                $("#txtEmail").val(details[0].email);
                $("#txtDOB").val(details[0].dob);

            }
        };

        httpRequest.open('GET','pages/searchTeacherPHP.php?l='+d,true);
        httpRequest.send();
        return false;
    }
    return true;
}

$("#updateTBtn").click(function () {

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            alert(httpRequest.responseText);
            $(".form-control").val("");
            console.log(httpRequest.responseText);

        }
    };

    httpRequest.open('POST','pages/updateTeacherPHP.php',true);

    httpRequest.setRequestHeader("Content-Type","application/json");

    var jsArray = $("#formTeacher").serializeArray();

    var jsonArray = JSON.stringify(jsArray);

    httpRequest.send(jsonArray);
});

// $(".button button2").click(function () {
//     $(".form-control").val("");
// })