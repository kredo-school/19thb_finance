// category
document.addEventListener('DOMContentLoaded', () => {
  const change = document.getElementById("selected");
  const list = document.getElementById("category_parent");
  
  change.addEventListener("click",function(){
   list.classList.toggle("hidden")
  });
});

function updateSelected(button) {
    var click = button.getAttribute('data-id');
    document.getElementById('selected').value = click;
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



