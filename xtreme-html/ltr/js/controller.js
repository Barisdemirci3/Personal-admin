function error(string){
  Swal.fire({
    title: 'Hata!',
    text: string,
    icon: 'error',
    confirmButtonText: 'Tamam'
  })
}
function success(string){
  Swal.fire({
    title: 'Başarılı!',
    text: string,
    icon: 'success',
    confirmButtonText: 'Tamam'
  })
}

$("#form").submit(function (e) {
  var array = [
    $("#isim").val(),
    $("#mail").val(),
    $("#nick").val(),
    $("#sifre").val(),
    $("#birthday").val(),
    $("#evlilik").val(),
    $("#tel").val(),
    $("#ekip").val(),
    $("#country").val(),
    $("#adress").val(),
  ];
  for (let index = 0; index < array.length; index++) {
    if (array[index] == "") {
      Swal.fire({
        title: 'Hata!',
        text: 'Boş alanları doldurunuz!',
        icon: 'error',
        confirmButtonText: 'Tamam'
      })
        return;
    }
  }
  var json = JSON.stringify(array);
  $.ajax({
    type: "POST",
    url: "check.php",
    data: {array:json},
    dataType: "JSON",
    success: function (response) {
      if(response.basarili){
       success(response.basarili);
      }
      if(response.sifremail){
        error(response.sifremail);
      }
      if(response.sifresekiz){
        error(response.sifresekiz);
      }
      if(response.telefon){
        error(response.telefon);
      }
    },
  });
});


