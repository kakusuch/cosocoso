<?php $root_path = "../"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinimalNoteとは | MinimalNote</title>
    <meta name="description" content="MinimalNoteのコンセプトやメディアの運営目的についてご紹介します。思考を整理し、言葉を届けるシンプルな場所です。">

    <meta property="og:title" content="MinimalNoteとは | MinimalNote">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/about/">
    <meta property="og:image" content="https://example.com/assets/images/ogp.jpg">
    <meta property="og:description" content="MinimalNoteのコンセプトやメディアの運営目的についてご紹介します。">

<?php include($root_path . 'include/css.php'); ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "name": "MinimalNoteとは",
      "url": "https://example.com/about/",
      "description": "MinimalNoteのコンセプトやメディアの運営目的について"
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
                        <h1 style="font-size: 1.5rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">MinimalNoteとは</h1>
                        <p style="font-size: 0.95rem; line-height: 1.8; color: var(--color-text-muted);">
                            思考を整理し、言葉を届ける。シンプルでクリーンなテキストベースのメディアプラットフォームです。
                        </p>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 24px; font-size: 0.95rem; line-height: 1.8; color: var(--color-text);">
                        <section>
                            <h2 style="font-size: 1.15rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">メディアのコンセプト</h2>
                            <p>あふれる情報や過剰な装飾を削ぎ落とし、「純粋な言葉とアイデア」だけが真っ直ぐに読者に届く環境を作りたい。そんな想いから「MinimalNote」は生まれました。</p>
                            <p>日々の仕事における思考のプロセス、デザインの気づき、そして暮らしの中のささやかな発見を、飾らない言葉で綴っています。</p>
                        </section>

                        <section>
                            <h2 style="font-size: 1.15rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">大切にしている価値観</h2>
                            <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 8px;">
                                <li><strong>本質的なシンプルさ:</strong> 読みやすさを最優先し、ノイズのないレイアウトを追求します。</li>
                                <li><strong>等身大の発信:</strong> 完璧な正解だけでなく、日々の試行錯誤のプロセスを価値として共有します。</li>
                            </ul>
                        </section>
                    </div>
                </article>
            </div>

<?php include($root_path . 'include/sidebar.php'); ?>

        </div>
    </main>

<?php include($root_path . 'include/footer.php'); ?>

</body>
</html>