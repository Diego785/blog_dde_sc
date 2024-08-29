// let filter_btn = document.querySelectorAll('.filter-btn');
// let tab_items = document.querySelectorAll('.tab-item');

// for (let i = 0; i < filter_btn.length; i++) {
//   filter_btn[i].addEventListener('click', function () {
//     for (let j = 0; j < filter_btn.length; j++) {
//       filter_btn[j].classList.remove('active');
//     }
//     let select_tab = filter_btn[i].getAttribute('data-tab');
//     filter_btn[i].classList.add('active');
//     for (let t = 0; t < tab_items.length; t++) {
//       document.querySelector('.tab-filter-item-container').style.height =
//         tab_items[t].scrollHeight + 'px';
//       if (tab_items[t].classList.contains(select_tab)) {
//         tab_items[t].classList.add('select_tab');
//       } else {
//         tab_items[t].classList.remove('select_tab');
//       }
//     }
//   });
// }

// for (let th = 0; th < tab_items.length; th++) {
//   document.querySelector('.tab-filter-item-container').style.height =
//     tab_items[th].scrollHeight + 'px';
// }


(() =>{
 
  const openNavMenu = document.querySelector(".open-nav-menu"),
  closeNavMenu = document.querySelector(".close-nav-menu"),
  navMenu = document.querySelector(".nav-menu"),
  menuOverlay = document.querySelector(".menu-overlay"),
  mediaSize = 991;

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  // close the navMenu by clicking outside
  menuOverlay.addEventListener("click", toggleNav);

  function toggleNav() {
  	navMenu.classList.toggle("open");
  	menuOverlay.classList.toggle("active");
  	document.body.classList.toggle("hidden-scrolling");
  }

  navMenu.addEventListener("click", (event) =>{
      if(event.target.hasAttribute("data-toggle") && 
      	window.innerWidth <= mediaSize){
      	// prevent default anchor click behavior
      	event.preventDefault();
      	const menuItemHasChildren = event.target.parentElement;
        // if menuItemHasChildren is already expanded, collapse it
        if(menuItemHasChildren.classList.contains("active")){
        	collapseSubMenu();
        }
        else{
          // collapse existing expanded menuItemHasChildren
          if(navMenu.querySelector(".menu-item-has-children.active")){
        	collapseSubMenu();
          }
          // expand new menuItemHasChildren
          menuItemHasChildren.classList.add("active");
          const subMenu = menuItemHasChildren.querySelector(".sub-menu");
          subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        }
      }
  });
  function collapseSubMenu(){
  	navMenu.querySelector(".menu-item-has-children.active .sub-menu")
  	.removeAttribute("style");
  	navMenu.querySelector(".menu-item-has-children.active")
  	.classList.remove("active");
  }
  function resizeFix(){
  	 // if navMenu is open ,close it
  	 if(navMenu.classList.contains("open")){
  	 	toggleNav();
  	 }
  	 // if menuItemHasChildren is expanded , collapse it
  	 if(navMenu.querySelector(".menu-item-has-children.active")){
        	collapseSubMenu();
     }
  }

  window.addEventListener("resize", function(){
     if(this.innerWidth > mediaSize){
     	resizeFix();
     }
  });

})();


