const userProfile = JSON.parse(localStorage.getItem('userProfile'));

if (!userProfile) {
  window.location.href = window.cdTheme?.homeUrl || '/';
}

const bmr = userProfile?.bmr || 0;
const bmrInfo = document.getElementById('bmrInfo');

if (bmrInfo) {
  bmrInfo.textContent = `你的基础代谢约为 ${bmr} 千卡 / 天`;
}

const plans = {
  gentle: Math.round(bmr * 1.1),
  fast: Math.round(bmr * 0.9),
  hardcore: Math.round(bmr * 0.75)
};

document.querySelectorAll('.plan').forEach(el => {
  const type = el.dataset.type;
  el.querySelector('.cal').textContent = `建议每日摄入：${plans[type]} 千卡`;

  el.addEventListener('click', () => {
    localStorage.setItem('dailyTarget', plans[type]);
    localStorage.setItem('planType', type);
    el.classList.add('active');
  });
});
