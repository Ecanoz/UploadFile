function dogrula() {
  if (Number(sonuc.value)) {
    if ((Number(ilk.value) + Number(iki.value)) == Number(sonuc.value)) {
      return true
    } else {
      return false
    }
  } else {
    return false
  }
}

$('#upload').on('click', function () {
  if (dogrula()) {
    document.querySelectorAll(".background")[0].style.display = "block";
    var file_data = $('#filebtn').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
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
        if (mydata.data == "hatadosya") {
          document.querySelectorAll(".background")[0].style.display = "none";
          ilk.value = ""
          iki.value = ""
          sonuc.value = ""
          setTimeout(() => {
            alert('Hatalı Dosya Tipi')
          }, 100);
        } else {
          hh.innerHTML = "Dosya Yüklendi"
          ilk.value = ""
          iki.value = ""
          sonuc.value = ""
          setTimeout(() => {
            document.querySelectorAll(".background")[0].style.display = "none";
          }, 1000);
          setTimeout(() => {
            hh.innerHTML = "EXCEL DOSYA YÜKLEME"
          }, 5000);
          var x = "dosya=" + mydata.data + "\n&magazaAdi=" + mydata.magazaAdi + "\n&magazaMail=" + mydata.magazaMail + "\n&phone=" + mydata.phone
          $.post("/mail.php", x, (data) => {
            console.log(data)
          })
          console.log(mydata)
        }
      }
    });

  } else {
    alert("Doğrulama Alanını Hatalı Girildi")
  }

});