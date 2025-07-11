// 水色がオブジェクト？黄色がプロパティ？

// documentオブジェクトのaddEentListerメソッド使用してDOMContentLoadedプロパティに以下処理行う
document.addEventListener('DOMContentLoaded', () => {
    //
    const fadeElements = document.querySelectorAll('.fade-up');

    const scrollHandler = () => {
        fadeElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', scrollHandler);
    scrollHandler(); // 初期表示
});

