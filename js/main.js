// // ハンバーガーメニューのノードを取得
// const mobileMenu = document.getElementById("mobile-menu")
// console.log(mobileMenu)

// // モバイルナビゲーションのノードを取得
// const mobileNav = document.getElementById("mobile-nav")
// console.log(mobileNav)

// // ハンバーガーメニューにクリックイベントを実行
// mobileMenu.addEventListener('click', () => {
//     console.log("メニューがクリックされました");
//     openNav()
// })

// // モバイルナビゲーションにクリックイベントを実行
// mobileNav.addEventListener('click', () => {
//     console.log("ナビゲーションがクリックされました");
//     closeNav()
// })

// // モバイルナビゲーションを有効化
// function openNav(){
//     mobileNav.classList.toggle('open')
//     mobileMenu.classList.toggle('active')
// }

// // モバイルナビゲーションを無効化
// function closeNav(){
//     mobileNav.classList.remove('open')
//     mobileMenu.classList.remove('active')
// }

// jQueryここから
jQuery(function($){
    console.log("Hello jQuery!")
    
    // モバイルメニューの取得
    mobileMenu = $("#mobile-menu")
    console.log(mobileMenu);
    // モバイルナビゲーションの取得
    mobileNav = $("#mobile-nav")
    console.log(mobileNav);

    mobileMenu.on('click', function(){
        console.log("メニューがクリックされました");
        openNav()
    })

    mobileNav.on('click', function(){
        console.log("ナビゲーションがクリックされました");
        closeNav()
    })

    function openNav(){
        mobileNav.toggleClass('open')
        mobileMenu.toggleClass("active")
    }

    function closeNav(){
        mobileNav.removeClass('open')
        mobileMenu.removeClass('active')
    }

    // ヒーローエリアの文字が浮き出るアニメーション
    $(".site-title").fadeIn(2000)

    // fadeThis.js
    $(window).fadeThis({
        // 一度きりの実行
        reverse: false
    });
})