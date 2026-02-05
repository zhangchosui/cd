<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <title>中年人控糖第一枪</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="container">

  <section class="hero">
    <h1>打响中年人控糖第一枪</h1>
    <p class="subtitle">
      控糖，是中年人最温和、也最有效的自救方式。
    </p>
  </section>

  <section class="intro">
    <p>
      你只需要告诉我：<br>
      <strong>你吃了什么。</strong><br>
      剩下的，交给 AI。
    </p>
  </section>

  <section class="form">
    <h2>先计算你的基础代谢</h2>

    <form id="userForm">

      <div class="field">
        <label>性别</label>
        <select name="gender" required>
          <option value="">请选择</option>
          <option value="male">男</option>
          <option value="female">女</option>
        </select>
      </div>

      <div class="field">
        <label>年龄（岁）</label>
        <input type="number" name="age" min="18" max="80" required>
      </div>

      <div class="field">
        <label>身高（cm）</label>
        <input type="number" name="height" min="140" max="210" required>
      </div>

      <div class="field">
        <label>体重（kg）</label>
        <input type="number" name="weight" min="40" max="200" required>
      </div>

      <button type="submit" class="start-btn">
        计算我的基础代谢
      </button>
    </form>

    <!-- 结果区 -->
    <div id="bmrResult" class="bmr-result" style="display:none;">
      <h3>你的基础代谢</h3>
      <p class="bmr-value"></p>
      <p class="bmr-desc"></p>

      <p class="bmr-warning">
      </p>

      <button id="goNext" class="start-btn secondary">
        下一步：设定你应该吃多少
      </button>
    </div>

  </section>

  <section class="notice">
    <p>
      ⚠️ 本工具仅用于饮食记录与参考建议，<br>
      不构成医疗意见。<br>
      如有基础疾病，请先咨询医生。
    </p>
  </section>

</main>

<script src="js/script.js"></script>
</body>
</html>
