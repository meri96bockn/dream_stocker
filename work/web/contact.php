<?php

$title = 'お問い合わせ';
$this_css = 'form';
include('../app/_parts/_header.php');

?>

  <div class="forms">
    <div class="form_title">
      <h1>お問い合わせ</h1>
    </div>
    <div class="form">
      <form action="process.php" method="post">
        <div class="form_item">
          <label for="name">ユーザーネーム</label>
          <input type="text" id="name" maxlength="255" placeholder="（例）yume_miruko">
        </div>
        <div class="form_item">
          <label for="email">メールアドレス（必須）</label>
          <input type="email" id="email" maxlength="255" placeholder="（例）yumemiruko@gmail.com">

        </div>
        <div class="form_item">
          <label for="message">お問い合わせ内容</label>
          <textarea name="message" id="message" rows="10"></textarea>
        </div>
        <button>送信</button>
      </form>
    </div>
  </div>

  <?php

  include('../app/_parts/_footer.php');