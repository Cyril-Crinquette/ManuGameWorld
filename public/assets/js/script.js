// ------------    Limite le choix à 3 ------------
let checkboxes = document.getElementsByClassName('categories');

let i = 0,
	l = checkboxes.length;

for (; i<l; i++)
	checkboxes[i].addEventListener("change", function (){
		if (document.querySelectorAll(".categories:checked").length > 3)
			this.checked = false;
	}, false);










// ------------ pour le thème dark ------------
let mod_btn = document.getElementById('mod');
let body = document.getElementsByTagName('body')[0];
// let dark_theme_class = 'dark';

mod_btn.addEventListener('click', function() {
    if (body.classList.contains('dark')) {
        body.classList.remove('dark');
    }
    else {
        body.classList.add('dark');
    }
});

if (mod_btn.checked) {
    body.classList.add('dark');
}