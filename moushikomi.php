<?php include 'nav.php';?>


<div class="container bg-info-subtle m-auto p-5 position-relative">

  <h1 class="fw-bold">お問い合わせ・お申し込み</h1>
  <h3 class="fw-bold">Application Form 咨询・申请报名</h3>
  <h3 class="fw-bold">Những vấn đề thắc mắc. Cách thức đăng ký</h3><br>
  <h5>
  全国外国人雇用協会に、ご興味をお持ちいただき、ありがとうございます。
  </h5>

  <h5>
  下記のフォームに必要事項をご記入の上、ご送信ください。
  </h5><br>
  <h5>
  Thank you for your intention and interest. Please fulfill the form below.
  </h5><br>
  <h5>
  万分感谢您对全国外国人雇佣协会感兴趣。请按下面的表格填入所需要的信息，之后请发送给我们。
  </h5><br>

  <h5>
  Cảm ơn các bạn luôn tin tưởng và quan tâm tới công ty tuyển dụng nhân lực người nước ngoài của chúng tôi. <br> Mọi vấn đề thắc mắc, cách thức đăng ký vui lòng điền các thông tin cần thiết vào mẫu dưới đây：
  </h5>

  <hr class="border border-dark border-3 ">


  <form class="row g-3 needs-validation" action="email_sender.php" method="GET" enctype="text/plain">
  <div class="col-12">
    <label for="mailer_name" class="form-label" >お名前（Name／姓名／Họ và tên）</label>
    <input type="text" class="form-control" name="mailer_name" id="mailer_name" placeholder="佐藤" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <label for="mailer_mail" class="form-label">メールアドレス（Mail Address／电子邮件地址／Địa chỉ liên lạc）</label>
    <input type="email" class="form-control" id="mailer_mail" name="mailer_mail" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <div class="invalid-feedback">
      Please write correct email
    </div>
  </div>



  <div class="col-12">
    <label for="mailer_phone" class="form-label">電話番号（Telephone Number／电话号码／Số điện thoại）*</label>
    <input type="tel" class="form-control" id="mailer_phone" name="mailer_phone" placeholder="+811234567890" required>
    <div class="invalid-feedback">
      Please provide a valid phone.
    </div>
  </div>





  <div class="col-12">
    <label for="mailer_category" class="form-label">カテゴリー（Your interest／分类／Nhóm）</label>
    <select class="form-select" id="mailer_category" name="mailer_category" required>
      <option selected disabled value="">カテゴリー...</option>
                          <option value="1">会員登録に関する質問・申込</option>
                          <option value="2">有力企業フェアへの参加申込</option>
                          <option value="3">行政書士の紹介依頼</option>
                          <option value="4">人材会社の紹介依頼</option>
                          <option value="5">セミナーの受講申込</option>
                          <option value="6">資格試験の受験申込</option>
                          <option value="7">資格試験参考書の購入申込</option>
                          <option value="8">コンプライアンスの相談・対策</option>
                          <option value="9">ビザミシュランの相談・申込</option>
                          <option value="10">スクールチェックの相談・申込</option>
                          <option value="11">外国人総合顧問サービスの相談・申込</option>
                          <option value="12">申請業務受託の相談・申込</option>
                          <option value="13">入管法違反等に関する情報提供</option>
                          <option value="14">その他のご質問・ご相談</option>

    </select>
    <div class="invalid-feedback">
      Please select a valid category.
    </div>
  </div>



  <div class="col-12">
  <label for="mailer_says" class="form-label">お問い合わせ内容（What can we help you ?／咨询内容／Nội dung hỏi đáp, vấn đề quan tâm）</label>
  <input type="text" class="form-control" id="mailer_says" name="mailer_says" placeholder="咨询内容">
</div>




<!--
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
-->


  <div class="col-12">
    <button class="btn btn-primary" type="submit" value="Send">Submit form</button>
  </div>
  <?php  header('Location:email_sender.php');?>
</form>



</div>



<?php include 'footer.php';?>
