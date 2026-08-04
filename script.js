document.addEventListener('DOMContentLoaded', () => {
    // すべてのタブ要素を取得
    const tabs = document.querySelectorAll('.tabs__item');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // 1. すべてのタブからアクティブクラスを外す
            tabs.forEach(item => item.classList.remove('tabs__item--active'));

            // 2. クリックされたタブにアクティブクラスを付与する
            tab.classList.add('tabs__item--active');

            // 3. ここに「タブに応じた記事データの切り替え処理」を記述します
            const target = tab.getAttribute('data-target');
            console.log(`${target} の記事を表示します`);
            // ※実際の静的サイトでは、ここでタブごとに記事リストのHTMLを入れ替えたり、
            //   クラスの付け外しで表示・非表示をコントロールします。
        });
    });
});