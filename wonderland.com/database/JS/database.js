var table1 = document.getElementById('category');
var table2 = document.getElementById('services');
var hero = document.getElementById('hero');

function nexttable() {
    table1.style.display = "none";
    table2.style.display = "inline-block";
    hero.style.height = "100vh";

};

function backtable() {
    table2.style.display = "none";
    table1.style.display = "inline-block";
    hero.style.height = "50vh";
};