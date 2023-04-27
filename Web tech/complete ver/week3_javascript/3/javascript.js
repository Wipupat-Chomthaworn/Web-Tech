let img1 = 1;
let img2 = 2;
let img3 = 3;
let img4 = 4;


function changesrc(){
        document.getElementById('1').src = `http://10.0.15.20/312lab3/images/${img1 == 1 ? img1 += 2 :(img1 == 2 ? img1 -= 1 : (img1 == 3 ? img1 +=1 :img1 -= 2))}.png`;
        document.getElementById('2').src = `http://10.0.15.20/312lab3/images/${img2 == 1 ? img2 += 2 :(img2 == 2 ? img2 -= 1 : (img2 == 3 ? img2 +=1 :img2 -= 2))}.png`;
        document.getElementById('3').src = `http://10.0.15.20/312lab3/images/${img3 == 1 ? img3 += 2 :(img3 == 2 ? img3 -= 1 : (img3 == 3 ? img3 +=1 :img3 -= 2))}.png`;
        document.getElementById('4').src = `http://10.0.15.20/312lab3/images/${img4 == 1 ? img4 += 2 :(img4 == 2 ? img4 -= 1 : (img4 == 3 ? img4 +=1 :img4 -= 2))}.png`;
}


