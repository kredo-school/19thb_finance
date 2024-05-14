// sidebar

document.addEventListener('DOMContentLoaded', () => {

    // define const
    const pathname = window.location.pathname;
    const buttons = document.getElementsByClassName('outer');
  
    // remove class
    for(const button of buttons) {
      button.classList.remove('active');
    }
  
    // add class
    if(pathname.includes('home') || pathname.includes('wishlists')) {
      const calendar = document.getElementById('calendar');
      calendar.classList.add('active');
    }
    if(pathname.includes('transactions')) {
      const entry = document.getElementById('entry');
      entry.classList.add('active');
    }

  
  });

  