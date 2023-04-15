$("#tes").validate({
    rules:{
        username:{
            required:true,
            minlength: 8,
            maxlength: 12,
        },
        password:{
            required: true,
            minlength: 8,
        },

    },
    messages: {
        username:{
        required: "Anda Harus Memasukkan Nama",
        minlength: "Masukkan Minimal 8 Karakter",
        maxlength: "Masukkan Maksimal 12 Karakter"
        },
        password:{
            required: "Anda Harus Memasukkan Password",
            minlength: "Masukkan Minimal 8 Karakter"
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
   }); 