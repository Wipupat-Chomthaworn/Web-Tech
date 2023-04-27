let countryThai = ['เลือกประเทศ','ไทย', 'เวียดนาม', 'ลาว', 'มาเลย์เซีย', 'สิงคโปร', 'ฟิลิปปินส์', 'เมียนมาร์','กัมพูชา','บรูไน']
let countryEng = ['Choose country' ,'thai', 'viet' , 'lao', 'malaysia', 'singapore', 'philiphin', 'mynmar', 'cambodia' ,'brunei']

function THtoENG() {
    let parent = document.getElementById("all");
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }


    //name
    let la = document.createElement("label");
    let fname = document.createTextNode("First Name:");
    la.appendChild(fname);

    let inp = document.createElement("input");
    inp.type = "text";
    inp.id = "fname";


    parent.appendChild(la);
    parent.appendChild(inp);

    //br
    let br = document.createElement("br");
    parent.appendChild(br);


    //lastname
    let la2 = document.createElement("label");
    let lname = document.createTextNode("Last Name:");
    la2.appendChild(lname);

    let inp2 = document.createElement("input");
    inp2.type = "text";
    inp2.id = "lname";


    parent.appendChild(la2);
    parent.appendChild(inp2);

    //br
    let br2 = document.createElement("br");
    parent.appendChild(br2);

    //coutry
    let la3 = document.createElement("label");
    let country = document.createTextNode("Country:");
    la3.appendChild(country);
    parent.appendChild(la3);

    let inputCountry = document.createElement('select')
    for(let i = 0; i < countryThai.length; i++){
        const country = countryEng[i]
        let option = document.createElement('option')
        option.value = country
        option.innerText = country
        inputCountry.appendChild(option)
    }
    parent.appendChild(inputCountry)

    //br
    let br3 = document.createElement("br");
    parent.appendChild(br3);

    let btn = document.createElement('button')
    btn.innerText = "Chang to thai"
    btn.id = "change"
    btn.setAttribute("onclick", "ENGtoTH()");
    parent.appendChild(btn)
}
function ENGtoTH() {
    let parent = document.getElementById("all");
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }


    //name
    let la = document.createElement("label");
    let fname = document.createTextNode("ชื่อ:");
    la.appendChild(fname);

    let inp = document.createElement("input");
    inp.type = "text";
    inp.id = "fname";


    parent.appendChild(la);
    parent.appendChild(inp);

    //br
    let br = document.createElement("br");
    parent.appendChild(br);


    //lastname
    let la2 = document.createElement("label");
    let lname = document.createTextNode("นามสกุล:");
    la2.appendChild(lname);

    let inp2 = document.createElement("input");
    inp2.type = "text";
    inp2.id = "lname";


    parent.appendChild(la2);
    parent.appendChild(inp2);

    //br
    let br2 = document.createElement("br");
    parent.appendChild(br2);

    //coutry
    let la3 = document.createElement("label");
    let country = document.createTextNode("ประเทศ:");
    la3.appendChild(country);
    parent.appendChild(la3);

    let inputCountry = document.createElement('select')
    for(let i = 0; i < countryThai.length; i++){
        const country = countryThai[i]
        let option = document.createElement('option')
        option.value = country
        option.innerText = country
        inputCountry.appendChild(option)
    }
    parent.appendChild(inputCountry)

    //br
    let br3 = document.createElement("br");
    parent.appendChild(br3);

    //button
    let btn = document.createElement('button')
    btn.innerText = "เปลี่ยนเป็นภาษาอังกฤษ"
    btn.id = "change"
    btn.setAttribute("onclick", "THtoENG()");
    parent.appendChild(btn)

}


