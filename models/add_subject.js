$("#addSubject").on("submit",function(e){
    e.preventDefault();
    var sname=$("#sname").val()
    var postdata={
        method:"addSubject",
        sname:sname
    }
    $.ajax({
        url:"./controller/api.php",
        method:"POST",
        dataType:"JSON",
        data:postdata,
        success:function(data){
            let status=data.status;
            let message=data.message
            if(status){
                alert(message)
                $("#addSubject")[0].reset();
            }
            else
            {
                console.error(message)
            }
        }
    });
});