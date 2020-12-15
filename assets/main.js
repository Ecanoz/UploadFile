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
  if (Number(sonuc.value)) {
    if ((Number(ilk.value) + Number(iki.value)) == Number(sonuc.value)) {

      

      var file_data = $('#filebtn').prop('files')[0];
      var form_data = new FormData();
      form_data.append('file', file_data);
      console.log(form_data)
      $.ajax({
        url: 'upload.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (data) {
          var mydata = {
            data: data,
            magazaAdi: document.getElementById("shop-name").value,
            magazaMail: document.getElementById("shop-mail").value,
            phone: document.getElementById("phone-number").value
          }
          console.log(mydata)
          if(mydata.data == "Dosya Tipi Doğru"){
            document.querySelectorAll (".background")[0].style.display = "block";
          }
          else{
            alert('Hatalı Dosya Tipi')
          }

          hh.innerHTML = "Dosya Yüklendi"
        }
      });
    }
     else {
      alert("Hata")
    }
  } else {
    alert("hatalı")
  }
  
});