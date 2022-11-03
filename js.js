

function addemp() {
    var namestore=$('#name').val();
    var emailstore=$('#email').val();
    var mobstore=$('#mob').val();
    var compstore=$('#comp').val();
    var formData={name:namestore, email:emailstore, mob:mobstore, comp:compstore};
    $.ajax({
        url:"C:\Users\nayak\Desktop\bootstrap assign\data.php",
        type:'POST',
        data: formData,
        success: function(response){

        }
    });
}
