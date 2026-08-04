<?php $root_path = "../"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール | MinimalNote</title>
    <meta name="description" content="MinimalNoteの運営者プロフィールです。思考や日常の気づきを発信するメディアについてご紹介します。">

    <meta property="og:title" content="プロフィール | MinimalNote">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/profile.html">
    <meta property="og:image" content="https://example.com/assets/images/ogp.jpg">
    <meta property="og:description" content="MinimalNoteの運営者プロフィールです。">

<?php include($root_path . 'include/css.php'); ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfilePage",
      "mainEntity": {
        "@type": "Person",
        "name": "運営者名",
        "description": "思考を整理し、言葉を届けるクリエイター。",
        "url": "https://example.com/profile.html"
      }
    }
    </script>
</head>
<body>

<?php include($root_path . 'include/header.php'); ?>

    <main class="container">
        <div class="main-layout">

            <div class="timeline">
                <article class="article-card" style="cursor: default; transform: none; box-shadow: none;">
                    <div style="text-align: center; margin-bottom: 24px;">
                        <img src="assets/images/avatar.jpg" alt="プロフィールアイコン" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid var(--color-border); margin: 0 auto 16px; display: block;">
                        <h1 style="font-size: 1.5rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">運営者プロフィール</h1>
                        <p style="font-size: 0.9rem; color: var(--color-text-muted);">Creator / Writer</p>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 16px; font-size: 0.95rem; line-height: 1.8; color: var(--color-text);">
                        <p>こんにちは！「MinimalNote」をご覧いただきありがとうございます。</p>
                        <p>ここは、日々の思考や仕事における気づき、ライフスタイルに関するアイデアを自由に書き留めていくためのテキストメディアです。</p>

                        <h2 style="font-size: 1.15rem; font-weight: 700; color: var(--color-primary); margin-top: 16px;">大切にしていること</h2>
                        <p>複雑な情報をいかにシンプルに、本質だけを伝えるか。デザインや文章を書く上で、常に「余白」と「分かりやすさ」を意識して発信を行っています。</p>

                        <h2 style="font-size: 1.15rem; font-weight: 700; color: var(--color-primary); margin-top: 16px;">お問い合わせについて</h2>
                        <p>お仕事のご相談やメッセージは、お問い合わせページよりお気軽にご連絡ください。</p>
                    </div>
                </article>
            </div>

<?php include($root_path . 'include/sidebar.php'); ?>

        </div>
    </main>

<?php include($root_path . 'include/footer.php'); ?>

</body>
</html>