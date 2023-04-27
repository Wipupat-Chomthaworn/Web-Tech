function submitTable() {
    reset();
    let all = document.getElementById("table");
    for (let k = 1; k <= 8; k++) {
        let newCol = document.createElement("div");
        let newColAtt = document.createAttribute("id");
        newColAtt.value = "col" + k;
        newCol.setAttributeNode(newColAtt);
        all.appendChild(newCol);
    }
    console.log(all);
    createTable();
}
function reset() {
    let table = document.getElementById("table");
    table.innerHTML = ' ';
}
function createTable(){
    let CKColor = 1;
    let column = 1;
    let newRow = true;
    let number = parseInt(document.getElementById("number").value);
    for (let i = 1; i <= number; i++) {
        //create box with add id to box
        if (column > 8) {
            column = 1;
            newRow = true;
        }
        let box = document.createElement("div");
        box.setAttribute("class", "box");
        box.setAttribute("id", `box${i}`);
        //add box to column
        let col = document.getElementById("col" + column);
        col.appendChild(box);
        //color to box
        let getBox = document.getElementById(`box${i}`);
        if (newRow) {
            CKColor++;
            console.log(CKColor)
            newRow = false
        }
        if (CKColor % 2 == 1) { getBox.style.backgroundColor = "black"; }
        else { getBox.style.backgroundColor = "white"; }
        column++;
        CKColor++;
    }
}
