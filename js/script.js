const form = document.getElementById('userForm');
const resultBox = document.getElementById('bmrResult');
const bmrValueEl = document.querySelector('.bmr-value');
const bmrDescEl = document.querySelector('.bmr-desc');
const goNextBtn = document.getElementById('goNext');

form.addEventListener('submit', function (e) {
  e.preventDefault();

  const gender = form.gender.value;
  const age = Number(form.age.value);
  const height = Number(form.height.value);
  const weight = Number(form.weight.value);

  let bmr = 0;

  if (gender === 'male') {
    bmr = 10 * weight + 6.25 * height - 5 * age + 5;
  } else {
    bmr = 10 * weight + 6.25 * height - 5 * age - 161;
  }

  bmr = Math.round(bmr);

  localStorage.setItem('userProfile', JSON.stringify({
    gender,
    age,
    height,
    weight,
    bmr
  }));

  bmrValueEl.textContent = `约 ${bmr} 千卡 / 天`;
  bmrDescEl.innerHTML = `
    这是你在<strong>什么都不做</strong>的情况下，<br>
    每天维持生命所需的最低能量。
  `;

  resultBox.style.display = 'block';
});

goNextBtn.addEventListener('click', () => {
  window.location.href = 'plan.php';
});
