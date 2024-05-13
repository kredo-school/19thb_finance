// 'use strict'; /* 厳格にエラーをチェック */

document.addEventListener('DOMContentLoaded', function() {  /* ローカルスコープ */

  // DOM取得
    const tabMenus = document.querySelectorAll('.faq-item');
    console.log('Console Log: TabMenus: ' ,tabMenus);

  // イベント付加
    tabMenus.forEach((tabMenu) => {
        tabMenu.addEventListener('click', togglePanel);
    })

  // イベントの処理
    function togglePanel(e) {
        const target = e.currentTarget;
        const faqItem = target.closest('.faq-item');
        const tabTargetData = faqItem.dataset.tab;
        const tabPanel = document.querySelector(`.faq-box[data-panel="${tabTargetData}"]`);

        if (tabPanel) {
          tabPanel.classList.toggle('is-show');
        }

        const faqCard = faqItem.closest('.card');

        if (faqCard) {
          const faqTitle = faqCard.querySelector('.faq-title');
          faqItem.classList.toggle('is-active');
          faqTitle.classList.toggle('is-active');
        }

        const plusIcon = target.closest('.faq').querySelector('.faq-item');
        plusIcon.classList.toggle('fa-minus');
        plusIcon.classList.toggle('fa-plus')
    }
  });