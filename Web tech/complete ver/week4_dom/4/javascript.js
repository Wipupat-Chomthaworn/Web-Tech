let table = document.getElementById("table");
let amount = document.getElementById("amount");
let btn = document.getElementById("btn");
//ให้ปุ่มทำงาน
btn.addEventListener("click", ()=>{
    reset();
    settable();
})
function settable(){
    let round = 1;
    // สร้าง row
    let row = document.createElement("div");
    row.setAttribute("class", `row`);
    row.setAttribute("id", `row${round}`)
    //lego สำหรับแก้ปัญหาเรืองใช้ตัวแปร row ซ้ำไม่ได้เลยมา assign แทน
    let lego = row;
    for(let i = 1; i < parseInt(amount.value)+1; i++){
        //สร้าง box
        let box = document.createElement("div");
        box.setAttribute("class", "box");
        //box to row
        lego.appendChild(box);
        table.appendChild(lego);
        checkinrow  = document.getElementById(`row${round}`);
        if(checkinrow.childElementCount > 8){
            //new row
            round++;
            let row = document.createElement("div");
            row.setAttribute("class", `row`);
            row.setAttribute("id", `row${round}`)
            lego = row;
            //add box to new row
            lego.appendChild(box);
            table.appendChild(lego);
        }
    }
}
function reset() {
    let table = document.getElementById("table");
    table.innerHTML = "";
}
