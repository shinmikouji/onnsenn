<?php get_header();?>

<main class="contact">
    <div class="cmn-mv"></div>
    <div class="breadcrumb">
<?php
breadcrumb( $post->ID );
?>
    </div>

    <div class="contact-section cmn-section">
        <div class="formarea">
            <h2 class="cmn-title">
                <p class="contact-title">お問い合わせ</p>
                <span class="sub">Contact</span>
            </h2>
            <div class="contact-form">
                <form action="" id="form">
                    <dl class="content">
                        <div class="row">
                            <dt><label for="company">会社名</label></dt>
                            <dd><input type="text" name="" id="company" placeholder="株式会社　京の極楽"/></dd>
                        </div>
                        <div class="row">
                            <dt><label for="name">氏名</label></dt>
                            <dd><input type="text" name="" id="name" placeholder="山田　太郎"/></dd>
                        </div>
                        <div class="row">
                            <dt><label for="mail">メールアドレス</label></dt>
                            <dd><input type="email" name="" id="email" placeholder="example@example.com"/></dd>
                        </div>
                        <div class="row">
                            <dt><label for="number">電話番号</label></dt>
                            <dd><input type="text" name="" id="number" placeholder="000-1234–5678"/></dd>
                        </div>
                        <div class="row">
                            <dt><label for="contact">お問い合わせ内容</label></dt>
                            <dd>
                            <textarea name="" class="textboxdata" placeholder="お問い合わせ内容を入力してください"></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="privacy-policy">
                        <p><a href="#" class="link">プライバシーポリシー</a>に同意の上、送信ください。</p>
                        <div class="checkbox">
                            <div class="check"><input type="checkbox" name="" id="agree" value=""/></div>
                            <p>プライバシーポリシーに同意する</p>
                        </div>
                    </div>
                    <div class="submit-btn cmn-btn"><input type="submit" value="送信する"></div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>
