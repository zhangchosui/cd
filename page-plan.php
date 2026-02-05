<?php
/*
Template Name: Plan Page
*/

get_header();
?>

<main class="container">

  <section class="hero">
    <h1>你希望怎么走这一步？</h1>
    <p class="subtitle" id="bmrInfo"></p>
  </section>

  <section class="form">

    <div class="plan" data-type="gentle">
      <h3>温柔无痛型</h3>
      <p class="cal"></p>
    </div>

    <div class="plan" data-type="fast">
      <h3>加速减肥型</h3>
      <p class="cal"></p>
    </div>

    <div class="plan" data-type="hardcore">
      <h3>残酷掉肉型</h3>
      <p class="cal"></p>
    </div>

  </section>

  <section class="notice">
    <p>
      ⚠️ 本工具不构成医疗建议。<br>
      不建议长期极低热量饮食。<br>
      如有糖尿病、高血压、痛风等基础疾病，<br>
      请在执行前先咨询医生。
    </p>
  </section>

</main>

<?php get_footer(); ?>
