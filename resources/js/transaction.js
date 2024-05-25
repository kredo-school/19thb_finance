// open parent_category
document.addEventListener('DOMContentLoaded', () => {
  const change = document.getElementById("selected");
  const list = document.getElementById("category_parent");

  const change_people = document.getElementById("selected_person");
  const list_people = document.getElementById("person_archive");
  
  change.addEventListener("click",function(){
   list.classList.toggle("hidden")
  });

  change_people.addEventListener("click",function(){
    list_people.classList.toggle("hidden")
   });
});


// open child_category
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


// select child_category
const list = document.getElementById("category_parent");
const parentImage = document.getElementById("child_image");
const selectedImage = document.getElementById('selected_image')

function updateSelected(child) {
  document.getElementById('selected').innerHTML = child.innerHTML;
  document.getElementById('child_category_id').value = child.dataset.id;

  list.classList.toggle("hidden");
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


window.updateSelected = updateSelected;
