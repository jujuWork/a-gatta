# a-gatta 新しいコーディング スタール

# ルール

## HTML コーディング

1. HTML をコーディングする際は、できるだけセマンティックな HTML タグを使用してください,<div>タグだけで構成しないようご注意ください。

```
例：<header>
<nav>
<main>
<aside>
<article>
<section>
<footer>
```

2. HTML のクラス名については、こちらの命名ルールに従っていきましょう。

   [Link text](https://qiita.com/takahirocook/items/01fd723b934e3b38cbbc) - `https://qiita.com/takahirocook/items/01fd723b934e3b38cbbc`

```
例：
  <header class="header">
      <div class="header__logo-container">
          <a href="#home" class="header__logo-link"><h2>Sponago</h2></a>
      </div>
      <nav class="header__nav">
          <ul class="header__nav-list">
              <li class="header__nav-item">
                  <a href="#feature" class="header__nav-link">Features</a>
              </li>
              <li class="header__nav-item">
                  <a href="" class="header__nav-link">Offices</a>
              </li>
              <li class="header__nav-item">
                  <a href="#about" class="header__nav-link">About</a>
              </li>
              <li class="header__nav-item">
                  <a href="#recruit" class="header__nav-link">Recruitment</a>
              </li>
              <li class="header__nav-item header__nav-item--last">
                  <a href="#inquire" class="header__nav-link">Inquiry</a>
              </li>
          </ul>
      </nav>
  </header>
```

3. ファイル管理をしやすくするため、HTML ファイルは必ず[ **.php** ]で保存してください。
4. フォルダ内の画像を HTML に読み込む際は、以下の書き方を使用してください。

```
例：
<img src="<?php echo htmlspecialchars(get_template_directory_uri() . '/assets/icons/call.png'); ?>" alt="telephone">
```

5. 大きい背景画像を読み込む際は、PNG や JPG ではなく、.webp 形式に変換して使用することをおすすめします。

---

## CSS コーディング

1. ボックスを作る時は、ブラウザのレスポンシブを良くするために Flexbox か Grid を使ってください。

- CSS Grid をメインのページレイアウトとして使用する場合、グリッド構成を管理するために **main.php** を作成する必要があります。

2. サイトをスタイリングする時は、できるだけシンプルな CSS か SCSS を使い、ファイル名も分かりやすく分けてください。

```
  例：
    header.css
    style.css
    top-page.css
```

3. CSS を書くときは、新しいコンテナのスタイルを書く前に 1 行スペース を入れてください。

```
  例：
    h1 {
      color: white;
    }

---

    h2 {
      color: blue;
    }

```

4. CSS のネストを使う場合は、内容が分かりやすくなるように、ネストは深くしすぎず、2〜3 階層くらいにするのがベストだと思います。

```
  例：
  header {
      nav {
        color: white;
      }

      .city {
        color: black;
      }
  }
```

5. カラー管理は、短縮の変数を使うと便利です。

```
  例：
  :root {
    --primary-color: #fff;
    --secondary-color: #000;
    --hover-color: #fdfdfd;
  }


  header {
    color: var(--primary-color);
    background-color: var(--secondary-color);
  }

```

6. CSS では、タグを直接指定する方法と、各タグにクラスを付けて指定する方法の両方があります。どちらのコーディングスタイルでも問題ありませんが、できるだけ具体的に指定するようにしましょう。

```
  例：
  ( 特定のタグをターゲットにして指定します。)
       section > h1 {
          color: #fff;
        }

  ( 特定のクラスをターゲットにして指定します。)
       section > .class {
          color: #000;
        }
```

7. CSS でクラスを作成する際は、BEM メソッドに従いましょう。
   以下のリンクから進めてください。

   [Link text](https://qiita.com/takahirocook/items/01fd723b934e3b38cbbc) -`https://qiita.com/takahirocook/items/01fd723b934e3b38cbbc`

```
  例：
    <section class ="card"
      <div class="card__container">
        <span class="card__container-items">Items</span>
      </div>
    </section>
```

9. フォントのスタイリングは、まず style.css に定義して、必要なときに呼び出すようにしましょう。その前に、フォントをダウンロードして fonts フォルダに入れておく必要があります。

```
例:
  /* LOGO FONT */
  @font-face {
    font-family: "Rock_Salt";
    src: url("./assets/fonts/cursive/RockSalt-Regular.woff2") format("woff2"),
      url("./assets/fonts/cursive/RockSalt-Regular.woff") format("woff");
    font-weight: normal;
    font-style: normal;
    font-display: swap;
  }
  /* Main TEXT FONT */
  @font-face {
    font-family: "Noto_Sans";
    src: url("./assets/fonts/cursive/NotoSans-Regular.woff2") format("woff2"),
      url("./assets/fonts/cursive/NotoSans-Regular.woff") format("woff");
    font-weight: normal;
    font-style: normal;
    font-display: swap;
  }
```

10. CSS のメディアクエリ用として、CSS 内に **media-queries** という新しいフォルダを作成し、その中に **media.css** という CSS ファイルを作りましょう。
    また、**functions.php** にリンクするのを忘れないようお願いします。
```
   例：
   /******************* HEADER QUERIES *******************/
      @media (max-width: 1024px) {
        nav > ul > .list__item {
          display: none;
  }
}

   /******************* FOOTER QUERIES *******************/
      @media (max-width: 1024px) {
        footer > .footer__items > .footer__item-branch {
          display: none;
     }
   }
```

---

## PHP

1. HTML ファイルでページをリンクする際は、本番サーバーに公開する前の安全対策として、以下の関数を使うのがおすすめです。

- esc_url()：href や src 属性で URL を出力する場合に使用します。
- esc_attr()：alt、title、class など、URL 以外の属性に使用します。

```
例：
  <li>
      <a href="<?php echo esc_url( home_url( '/production' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/production.png' ); ?>"
               alt="<?php echo esc_attr( 'production' ); ?>">
      </a>
  </li>
```

