# a-gatta 新しいコーディング スタール

# ルール

## HTML コーディング

1. HTML をコーディングする際は、できるだけセマンティックな HTML タグを使用してください,<div>タグだけで構成しないようご注意ください。

```
例：
<header>
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
<img src="<?php echo esc_url(get_theme_file_uri() . '/assets/icons/call.png'); ?>" alt="telephone">
```

[**esc_url()**] を使用する：セキュリティのため、URLを出力する際は必ずこの関数で囲みます。

[**get_theme_file_uri()**] を使用する：テーマフォルダ内にある画像・アイコン・スクリプトを指定する際に使用します。

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

6. スタイルを打ち消すようなCSSは、見かけた時点で注意が必要です。基本的に、CSSのルールはこれまでのスタイルを継承した上で追加していくべきで、後から無効化したり元に戻したりする使い方は避けたほうがよいです。
   詳しい内容については、以下の例をご確認ください。

```
  例：
   h2 {
     font-size: 2em;
     padding-bottom: 0.5em;
     border-bottom: 1px solid #ccc;
   }
   
   .no-border {
     padding-bottom: 0;
     border-bottom: none;
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
        <p class="card__text>Card</p>
        <p class="article__text">Article</p>
      </div>
    </section>
```

8. 同じスタイルを持つ要素がある場合は、1つのスタイルにまとめたほうがいいです。
```
   例：
     .card__container,
     .card__container-items {
       flex: 1;
       display: flex;
       align-items: center;
       justify-content: center;
       font-size: 0.75rem;
       flex-direction: column;
       gap: 10px;
       white-space: nowrap;
     }
   
     .card__text,
     .article__text {
       margin-left: 1rem;
       font-weight: 800;
     }
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

11. 修飾セレクタ（qualified selectors）は避けましょう。
   修飾セレクタとは、以下のようなものです。
```
ul.nav {}
a.button {}
div.header {}
```
   これは、クラスの前に不要な要素名が付いているセレクタのことです。
   この書き方は、他の要素で再利用しづらくなり、詳細度（specificity）が無駄に高くなるうえ、ブラウザの処理負荷も増えてしまいます。どれもあまり良くない点です。
   
   これらのセレクタは、次のように書くべきです。
```
.nav {}
.button {}
.header {}
```
このようにすることで、コード量を減らすことができ、パフォーマンスも向上します。

また、再利用性が高まり、詳細度も抑えられるため、より管理しやすいCSSになります。

12. 余分なセレクタは避けましょう
   CSSでは、知らないうちに余分なセレクタを追加してしまい、スタイルシートが無駄に複雑になることがあります。よくある例のひとつが、リスト要素に対する指定です。
```
body #container .someclass ul li {}
```
この場合、実際には次の指定だけで十分です。
```
.someclass li {}
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

2. 新しいページを作成する手順は以下の通りです。

- ページテンプレートを作成する
```
   <?php /* Template Name: Landing Page */ ?>
```

- WordPressの管理画面に移動します。
- 新規ページを追加し、タイトルを「Landing Page」に設定してください。
-  右側の設定欄にある「テンプレート」をクリックします。「デフォルトテンプレート」の中から「Landing Page」を選択してください。
-   設定後、ページを公開します。

3. コード内のリンクを修正する
- リンクを以下のように編集してください。
```
<a href="<?php echo esc_url(home_url('/landing-page')); ?>" class="dropDown__link" target="_blank">
```
- '/landing-page' は、ページ作成後にWordPressで設定されるスラッグになります。


