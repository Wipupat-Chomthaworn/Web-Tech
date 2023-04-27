function addList(id) {
    let list_order = document.getElementById("order");
    let li = document.createElement("li");
    li.setAttribute("class", "list-group-item");
    if (id == "1") {
        li.innerText = "ข้าวแกงกระหรี่";
    } else if (id == "2") {
        li.innerText = "ข้าวไก่ทอด";
    } else if (id == "3") {
        li.innerText = "ข้าวหน้าหมูเกาหลี";
    }
    let Menu = document.createElement("div");
    Menu.setAttribute("class", "float-end");
    Menu.innerText = "x1";
    li.appendChild(Menu);


    list_order.appendChild(li);
}
