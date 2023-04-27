function validateForm(){
    let id = document.forms.form.id.value;
    if (id.length !== 13) {
        alert("ID must be filled out");
        return false;
    }

    let fname = document.forms.form.name.value;
    //let fname = document.forms["myForm"]["FirstName"].value;
    if (fname.length >=2 && fname.length <=20) {
        alert("Firstname must be filled out");
        return false;
    }

    let lname = document.forms.form.lname.value;
    if (lname.length >=2 && lname.length <=30) {
        alert("Lastname must be filled out");
        return false;
    }

    let province = document.forms.form.province.value;
    if (province =="000") {
        alert("Province must be selected");
        return false;
    }

    let address = document.forms.form.address.value;
    if (address.length < 5) {
        alert("ความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let subdistrict = document.forms.form.subdistrict.value;
    if (subdistrict.length < 2) {
        alert("ความยาวไม่ต่ำกว่า 2 ตัวอักษร");
        return false;
    }

    let district = document.forms.form.district.value;
    if (district.length < 2) {
        alert("ความยาวไม่ต่ำกว่า 2 ตัวอักษร");
        return false;
    }

    let postnum = document.forms.form.postnum.value;
    if (postnum.length !== 5) {
        alert("เป็นตัวเลข จำนวน 5 หลัก");
        return false;
    }

    let sir = document.forms.form.sir.value;
    if (sir !== "นาย" || sir !== "นาง" || sir !== "นางสาว" || sir !== "เด็กหญิง" || sir !== "เด็กชาย") {
        alert("เป็นตัวเลข จำนวน 5 หลัก");
        return false;
    }
}

