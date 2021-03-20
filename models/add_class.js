$("#addClass").on("submit",function(e){
    e.preventDefault();
    var cname=$("#cname").val()
    var fee=$("#fee").val()
    var subjectNames=$("#subjectNames").val()
    var postdata={
        method:"addClass",
        cname:cname,
        fee:fee,
        subjectNames:subjectNames
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
                $("#addClass")[0].reset();
            }
            else
            {
                console.error(message)
            }
        }
    });
});