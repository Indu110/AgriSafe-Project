// Script File

// Home Section Starts
var menuBtn = document.querySelector('.main-navbar .menu-btn');
var menuList = document.querySelector('.main-navbar .nav-list');

var menuListItems = document.querySelectorAll('.nav-list li a');

menuBtn.addEventListener('click', function(){
menuBtn.classList.toggle('active');
menuList.classList.toggle('active');
});

for(var i = 0; i < menuListItems.length; i++){
	menuListItems[i].addEventListener('click', menuItemClicked);
}
function menuItemClicked(){
	menuBtn.classList.remove('active');
	menuList.classList.remove('active');
}

var homeSection = document.querySelector('.home');
window.addEventListener('scroll', pageScrollFunction);
window.addEventListener('load', pageScrollFunction);

function pageScrollFunction(){
	if(window.scrollY > 120){
		homeSection.classList.add('active');
	}
	else{
		homeSection.classList.remove('active');
	}
}
// Home Section Ends
<script>
const profileBtn = document.querySelector('.get-started-btn');
const profileModal = document.getElementById('profileModal');
const closeBtn = document.querySelector('.close-btn');

if (profileBtn) {
  profileBtn.addEventListener('click', function(e) {
    e.preventDefault();
    profileModal.style.display = 'block';
  });
}

closeBtn.addEventListener('click', function() {
  profileModal.style.display = 'none';
});

window.addEventListener('click', function(e) {
  if (e.target == profileModal) {
    profileModal.style.display = 'none';
  }
});

// Tab switching
const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    tabBtns.forEach(b => b.classList.remove('active'));
    tabContents.forEach(c => c.classList.remove('active'));

    btn.classList.add('active');
    document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
  });
});
</script>


 
