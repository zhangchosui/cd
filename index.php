<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>中高年の血糖コントロール第一歩</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="中高年向け血糖コントロールツール：基礎代謝の計算と食事記録を通じて、毎日の摂取量と血糖リスクをより科学的に管理します。">
  <meta name="keywords" content="血糖コントロール,中高年の健康,基礎代謝,BMR,食事管理,血糖管理">
  <meta name="robots" content="index,follow">
  <meta property="og:type" content="website">
  <meta property="og:title" content="中高年の血糖コントロール第一歩">
  <meta property="og:description" content="まず基礎代謝を計算し、その後1日の食事摂取量を設定して、実行しやすい血糖コントロール計画を始めましょう。">
  <meta property="og:locale" content="ja_JP">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="container">

  <section class="hero">
    <h1>中高年の血糖コントロールを今すぐ始めよう</h1>
    <p class="subtitle">
      血糖コントロールは、中高年にとって最も穏やかで、かつ効果的なセルフケアです。
    </p>
  </section>

  <section class="intro">
    <p>
      あなたは次のことを教えるだけ：<br>
      <strong>何を食べたか。</strong><br>
      あとは AI に任せてください。
    </p>
  </section>

  <section class="form">
    <h2>まずあなたの基礎代謝を計算しましょう</h2>

    <form id="userForm">

      <div class="field">
        <label>性別</label>
        <select name="gender" required>
          <option value="">選択してください</option>
          <option value="male">男性</option>
          <option value="female">女性</option>
        </select>
      </div>

      <div class="field">
        <label>年齢（歳）</label>
        <input type="number" name="age" min="18" max="80" required>
      </div>

      <div class="field">
        <label>身長（cm）</label>
        <input type="number" name="height" min="140" max="210" required>
      </div>

      <div class="field">
        <label>体重（kg）</label>
        <input type="number" name="weight" min="40" max="200" required>
      </div>

      <button type="submit" class="start-btn">
        私の基礎代謝を計算する
      </button>
    </form>

    <!-- 結果表示エリア -->
    <div id="bmrResult" class="bmr-result" style="display:none;">
      <h3>あなたの基礎代謝</h3>
      <p class="bmr-value"></p>
      <p class="bmr-desc"></p>

      <p class="bmr-warning">
      </p>

      <button id="goNext" class="start-btn secondary">
        次へ：食べるべき量を設定する
      </button>
    </div>

  </section>

  <section class="notice">
    <p>
      ⚠️ 本ツールは食事記録と参考提案のためのものであり、<br>
      医療上の助言を構成するものではありません。<br>
      基礎疾患がある場合は、事前に医師へご相談ください。
    </p>
  </section>

</main>

<script src="js/script.js"></script>
</body>
</html>
