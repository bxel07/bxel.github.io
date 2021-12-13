function mysubmit(){
    let x = document.forms['regform']['username'].value;
    let y = document.forms['regform']['password'].value;
    let z = document.forms['regform']['re-password'].value;

    if(x=="yogi" && y=="yogi" && z=="yogi"){
        alert("sukses!! halaman akan di alihkan");
        return true;
    }else if(x =="yogi" && y!="yogi" && z=="yogi"){
        alert("Login gagal!! password tidak sama");
        return false;
    }else if(x =="yogi" && y=="yogi" && z!="yogi"){
        alert("Login gagal!! password tidak sama");
        return false;
    }else if(x =="yogi" && y=="" && z==""){
        alert("Login gagal!! password kosong");
        return false;
    }else if(x =="" && y=="" && z==""){
        alert("Login gagal!! Data kosong");
        return false;
    }
}

function mylogin(){
    let x = document.forms['logform']['username'].value;
    let y = document.forms['logform']['password'].value;

    if(x=="yogi" && y=="yogi"){
        alert("sukses!! halaman akan di alihkan");
        return true;
    }else if(x !="" && y !=""){
        alert("Login gagal!!  tidak valid");
        return false;
    }else if(x =="" && y==""){
        alert("Login gagal!! data  kosong");
        return false;
    }
}