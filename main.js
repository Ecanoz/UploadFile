function dogrula() {
  if (Number(sonuc.value)) {
    if ((Number(ilk.value) + Number(iki.value)) == Number(sonuc.value)) {
      alert("işlem başarılı")
    } else {
      alert("hatalı")
    }
  } else {
    alert("hatalı")
  }
}

$('#upload').on('click', function () {
  var file_data = $('#sortpicture').prop('files')[0];
  var form_data = new FormData();
  form_data.append('file', file_data);
  $.post("upload.php",{data:form_data},(data)=>{
    console.log(data)
  })
  // $.ajax({
  //   url: 'upload.php', // point to server-side PHP script 
  //   dataType: 'text',  // what to expect back from the PHP script, if anything
  //   cache: false,
  //   contentType: false,
  //   processData: false,
  //   data: form_data,
  //   type: 'post',
  //   success: function (php_script_response) {
  //     alert(php_script_response);
  //   }
  // });
});