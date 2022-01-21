function nextsalon() {
    var salon1 = document.getElementById('si1');
    var salon2 = document.getElementById('si2');
    var salon3 = document.getElementById('si3');
    var salon4 = document.getElementById('si4');

    salon1.style.display = "none";
    salon2.style.display = "none";
    salon3.style.display = "inline-block";
    salon4.style.display = "inline-block";
};

function backsalon() {
    var salon1 = document.getElementById('si1');
    var salon2 = document.getElementById('si2');
    var salon3 = document.getElementById('si3');
    var salon4 = document.getElementById('si4');

    salon3.style.display = "none";
    salon4.style.display = "none";
    salon1.style.display = "inline-block";
    salon2.style.display = "inline-block";
};

function nexttraining() {
    var train1 = document.getElementById('ti1');
    var train2 = document.getElementById('ti2');
    var train3 = document.getElementById('ti3');
    var train4 = document.getElementById('ti4');

    train1.style.display = "none";
    train2.style.display = "none";
    train3.style.display = "inline-block";
    train4.style.display = "inline-block";
};

function backtraining() {
    var train1 = document.getElementById('ti1');
    var train2 = document.getElementById('ti2');
    var train3 = document.getElementById('ti3');
    var train4 = document.getElementById('ti4');

    train3.style.display = "none";
    train4.style.display = "none";
    train1.style.display = "inline-block";
    train2.style.display = "inline-block";
};