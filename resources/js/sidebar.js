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
    // Analysis
    if(pathname.includes('analysis') && pathname.includes('summary')) {
      const entry = document.getElementById('analysisSummary');
      entry.classList.add('active');
    }
    if(pathname.includes('analysis') && pathname.includes('category')) {
      const entry = document.getElementById('categoryAnalysis');
      entry.classList.add('active');
    }
    if(pathname.includes('analysis') && pathname.includes('cashflow')) {
      const entry = document.getElementById('cashflowAnalysis');
      entry.classList.add('active');
    }
    if(pathname.includes('analysis') && pathname.includes('people')) {
      const entry = document.getElementById('peopleAnalysis');
      entry.classList.add('active');
    }

    if(pathname.includes('profile') && pathname.includes('show')) {
      const entry = document.getElementById('showProfile');
      entry.classList.add('active');
    }

    // Edit Category
    if(pathname.includes('category') && !pathname.includes('analysis')) {
      const entry = document.getElementById('editCategory');
      entry.classList.add('active');
    }
    // Edit Profile
    
    // Edit People
    if(pathname.includes('people') && !pathname.includes('analysis')) {
      const entry = document.getElementById('editPeople');
      entry.classList.add('active');
    }
  });

  