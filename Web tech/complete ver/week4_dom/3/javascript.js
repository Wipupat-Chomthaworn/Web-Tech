const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const id = document.getElementById("id");
const table = document.getElementById("process");
const btn = document.getElementById("btn");
let order = 0;
btn.addEventListener('click',()=>{
    order++;
    let tr = document.createElement("tr");
    let td1 = document.createElement("td");
    let td2 = document.createElement("td");
    let td3 = document.createElement("td");
    let td4 = document.createElement("td");
    td1.innerText = order;
    td2.innerText = id.value;
    td3.innerText = fname.value;
    td4.innerText = lname.value;

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);

    table.appendChild(tr);

});


