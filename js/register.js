$("#tes").validate({
    rules:{
        username:{
            required:true,
            minlength: 8,
            maxlength: 12,
        },
        email:{
            required: true,
            email:true
        },
        password:{
            required: true,
            minlength: 8,
        },
        passwordcf:{
            required: true,
            equalTo: '#password'
        }

    },
    messages: {
        username:{
        required: "Anda Harus Memasukkan Nama",
        minlength: "Masukkan Minimal 8 Karakter",
        maxlength: "Masukkan Maksimal 12 Karakter"
        },
        email:{
            required: "Anda Harus Memasukkan Email",
            email: "Anda Harus Memasukkan Email Yang Tepat"
        },
        password:{
            required: "Anda Harus Memasukkan Password",
            minlength: "Masukkan Minimal 8 Karakter"
        },
        passwordcf:{
            required: "Anda Harus Memasukkan Password",
            equalTo: "Masukkan Password Yang Sama"
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
   }); 