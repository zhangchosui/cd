const userProfile = JSON.parse(localStorage.getItem('userProfile'));

if (!userProfile) {
  window.location.href = 'index.html';
}

const bmr = userProfile.bmr;
document.getElementById('bmrInfo').textContent =
  `你的基础代谢约为 ${bmr} 千卡 / 天`;

const plans = {
  gentle: Math.round(bmr * 1.1),
  fast: Math.round(bmr * 0.9),
  hardcore: Math.round(bmr * 0.75)
};

document.querySelectorAll('.plan').forEach(el => {
  const type = el.dataset.type;
  el.querySelector('.cal').textContent =
    `建议每日摄入：${plans[type]} 千卡`;

  el.addEventListener('click', () => {
    localStorage.setItem('dailyTarget', plans[type]);
    localStorage.setItem('planType', type);
    window.location.href = 'day1.html';
  });
});
