// category
document.addEventListener('DOMContentLoaded', () => {
  const change = document.getElementById("selected");
  const list = document.getElementById("category_parent");
  
  change.addEventListener("click",function(){
   list.classList.toggle("hidden")
  });
});


// open child_category


// open child_category
// document.addEventListener('DOMContentLoaded', () => {
//   const change = document.getElementById('open');
//   console.log(open);
//   const list = document.getElementById("category_child");
//   console.log(category_child);
//   change.addEventListener("click",function(){
//    list.classList.toggle("hidden")
//   });
// });



function GethashID(hashIDName) {
  if (hashIDName) {
      var tabLinks = document.querySelectorAll('.tab li a');
      tabLinks.forEach(function(link) {
          var idName = link.getAttribute('href');
          if (idName === hashIDName) {
              var tabItems = document.querySelectorAll('.tab li');
              tabItems.forEach(function(item) {
                  item.classList.remove("active");
              });
              var areas = document.querySelectorAll(".area");
              areas.forEach(function(area) {
                  area.classList.remove("is-active");
              });
              document.querySelector(hashIDName).classList.add("is-active");
          }
      });
  }
}

var tabLinks = document.querySelectorAll('.tab a');
tabLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
      var idName = this.getAttribute('href');
      GethashID(idName);
      event.preventDefault();
  });
});



// category select
function showCategory(parent) {
  document.getElementById('child').innerHTML = parent.innerHTML;
}

function updateSelected(child) {
  document.getElementById('selected').value = child.innerHTML;
}


document.addEventListener('DOMContentLoaded', () => {

{ 
    // Click
    const tabMenus = document.querySelectorAll('.tab__menu-item');
    tabMenus.forEach((tabMenu) => {
      tabMenu.addEventListener('click', tabSwitch);
    });
  
    function tabSwitch(e) {
        // Define const
        const tabTargetData = e.currentTarget.dataset.tab;
        const tabList = e.currentTarget.closest('.tab__menu');
        const tabItems = tabList.querySelectorAll('.tab__menu-item');
        const tabPanelItems = tabList.
        nextElementSibling.querySelectorAll('.tab__panel-box');

        // Delete class
        tabItems.forEach((tabItem) => {
          tabItem.classList.remove('is-active');
        })
        tabPanelItems.forEach((tabPanelItem) => {
          tabPanelItem.classList.remove('is-show');
        })

        // Add class
        e.currentTarget.classList.add('is-active');
        tabPanelItems.forEach((tabPanelItem) => {
          if (tabPanelItem.dataset.panel ===  tabTargetData) {
            tabPanelItem.classList.add('is-show');
          }
          })

    }
  
}
});



