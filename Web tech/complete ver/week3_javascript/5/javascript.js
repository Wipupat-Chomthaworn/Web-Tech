function createcard(){
    let fname = document.getElementById("fname").value;
    let phone = document.getElementById("phone").value;
    let mail = document.getElementById("mail").value;
    let company = document.getElementById("company").value;


    let iname = document.getElementById("iname");
    let iphone = document.getElementById("iphone");
    let imail = document.getElementById("imail");
    let icompany = document.getElementById("icompany");

    iname.innerHTML = fname;
    iphone.innerHTML = phone;
    imail.innerHTML = mail;
    icompany.innerHTML = company;
}
