<?php $root_path = "../"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ | MinimalNote</title>
    <meta name="description" content="MinimalNoteへのお問い合わせページです。お仕事のご相談やご質問などは、こちらからお気軽にご連絡ください。">

    <meta property="og:title" content="お問い合わせ | MinimalNote">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/contact/">
    <meta property="og:image" content="https://example.com/assets/images/ogp.jpg">
    <meta property="og:description" content="MinimalNoteへのお問い合わせページです。">

<?php include($root_path . 'include/css.php'); ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "name": "お問い合わせ",
      "url": "https://example.com/contact/",
      "description": "MinimalNoteへのお問い合わせページ"
    }
    </script>
</head>
<body>

<?php include($root_path . 'include/header.php'); ?>

    <main class="container">
        <div class="main-layout">

            <div class="timeline">
                <article class="article-card" style="cursor: default; transform: none; box-shadow: none;">
                    <div style="margin-bottom: 24px;">
                        <h1 style="font-size: 1.5rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">お問い合わせ</h1>
                        <p style="font-size: 0.95rem; line-height: 1.8; color: var(--color-text);">
                            当メディア（MinimalNote）に関するご意見、お仕事のご相談、その他各種お問い合わせは、以下の案内をご確認のうえご連絡ください。
                        </p>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 20px; font-size: 0.95rem; line-height: 1.8; color: var(--color-text); margin-bottom: 30px;">
                        <section>
                            <h2 style="font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">ご連絡にあたっての注意事項</h2>
                            <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 8px; color: var(--color-text-muted);">
                                <li>内容によりましては、お時間をいただく場合や、お答えできかねる場合がございますのであらかじめご了承ください。</li>
                                <li>ご提供いただいた個人情報は、お問い合わせに対する回答の目的以外には使用いたしません（詳しくは<a href="../privacy/" style="color: var(--color-primary); text-decoration: underline;">プライバシーポリシー</a>をご確認ください）。</li>
                            </ul>
                        </section>
                    </div>

                    <!-- フォーム設置エリア（ご準備されるフォームタグをここに挿入します） -->
                    <div style="background-color: var(--color-bg-gray); border: 1px dashed var(--color-border); border-radius: 8px; padding: 40px 20px; text-align: center; color: var(--color-text-muted);">
                        <p style="font-weight: 600; margin-bottom: 4px;">[ フォーム設置エリア ]</p>
                        <p style="font-size: 0.85rem;">ここにお手持ちのフォームタグ（HTML/PHPなど）を貼り付けてください。</p>
                    </div>
                </article>
            </div>

<?php include($root_path . 'include/sidebar.php'); ?>

        </div>
    </main>

<?php include($root_path . 'include/footer.php'); ?>

</body>
</html>