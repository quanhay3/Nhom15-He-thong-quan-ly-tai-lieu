<script>
$(document). ready(function(){
$("#formDemo").submit(function(e) {
e.preventDefault();
//Sử dụng Ajax
$.ajax({
    //Định nghĩa các thuộc tính
    url: "proccessupload.php",
    type:"POST",
    data: {email:$("#email").val()},
    success: function(dt){
        if(dt == 'success') {
            alert('OK. Đã báo về thành công');
        }else {
            alert('Đã báo về thất bại');
            }
        }
    })
})
})
</script>