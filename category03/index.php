<?php $root_path = "../"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カテゴリー01の記事一覧 | MinimalNote</title>
    <meta name="description" content="MinimalNoteの「カテゴリー01」に関する記事一覧ページです。思考やデザインに関する記録をお届けします。">

    <meta property="og:title" content="カテゴリー01の記事一覧 | MinimalNote">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/category01/">
    <meta property="og:image" content="https://example.com/assets/images/ogp.jpg">
    <meta property="og:description" content="MinimalNoteの「カテゴリー01」に関する記事一覧ページです。">

<?php include($root_path . 'include/css.php'); ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "カテゴリー01の記事一覧",
      "url": "https://example.com/category01/",
      "description": "MinimalNoteのカテゴリー01に関する記事一覧"
    }
    </script>
</head>
<body>

<?php include($root_path . 'include/header.php'); ?>

    <main class="container">
        <div class="main-layout">

            <div class="timeline">
                <nav aria-label="パンくずリスト" style="margin-bottom: 20px; font-size: 0.85rem; color: var(--color-text-muted);">
                    <a href="/" style="color: var(--color-primary); text-decoration: none;">ホーム</a>
                    <span style="margin: 0 8px;">&gt;</span>
                    <span>カテゴリー01</span>
                </nav>

                <div style="margin-bottom: 24px;">
                    <h1 style="font-size: 1.5rem; font-weight: 700; color: var(--color-primary); margin-bottom: 8px;">カテゴリー：カテゴリー01</h1>
                    <p style="font-size: 0.9rem; color: var(--color-text-muted);">「カテゴリー01」に分類された記事の一覧です（全1件）。</p>
                </div>

                <div class="article-list">
                    <article class="article-card">
                        <p class="article-card__date">2026年6月7日</p>
                        <h2 class="article-card__title">
                            <a href="#" style="color: inherit; text-decoration: none;">文章を書くときに意識している、たった3つのシンプルな原則</a>
                        </h2>
                        <p class="article-card__excerpt">頭の中にあるアイデアを、いかにスムーズに読み手に伝えるか。余計な装飾を削ぎ落とし、言葉の力だけで勝負するための文章術についてまとめました。</p>
                        <div class="article-card__footer">
                            <span class="article-card__tag">カテゴリー01</span>
                        </div>
                    </article>
                </div>
            </div>

<?php include($root_path . 'include/sidebar.php'); ?>

        </div>
    </main>

<?php include($root_path . 'include/footer.php'); ?>

</body>
</html>