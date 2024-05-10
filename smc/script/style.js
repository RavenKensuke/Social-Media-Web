const bar = document.getElementById('mobile');
const close =document.getElementById('close');
const nav =document.getElementById('rsp');
const password = document.querySelector('.passwd');
const drop = document.getElementById('dropbtn');
const dropcontent = document.getElementById('dropdown-content');
const passwordLi = document.querySelectorAll('.checked');

if(bar) {
bar.addEventListener('click', () => {
    nav.classList.add('mobile-show');
})
}

if(close) {
close.addEventListener('click', () => {
    nav.classList.remove('mobile-show');
})
};


if(drop) {
    drop.addEventListener('click', () => {
        dropcontent.classList.toggle('drop-show');
        }
)};

    password.addEventListener("focus", () => {
    document.getElementById('password-check').style.display = "block";
    document.getElementById('form-c').style.height = "750px";
    
  });

password.addEventListener("blur", () => {
    document.getElementById('password-check').style.display = "none";
    document.getElementById('form-c').style.height = "620px";
});







