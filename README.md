<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## アプリ概要
ユーザが新規登録・ログインして、商品の購入ができるショッピングサイト

## 企画背景
TECH::CAMPでは、railsというフレームワークを中心に学習しました。
そして、違うフレームワークも学習してみたいという気持ちが湧きましたので、PHPで最新のフレームワーク「Laravel」を勉強しようという流れに至りました。
その中で作成するアプリとして、すぐに思いついたのがショッピングサイトでした。

## 開発環境
MySQL(Ver 14.14), PHP7.4.3(Laravel Framework7.0.4), JavaScript(jQuery), GitHub(ソースコード管理)

## 機能
・ユーザの新規登録・ログイン<br>
・ログアウト<br>
・商品一覧表示<br>
・商品詳細<br>
・商品検索機能<br>
・カート機能<br>
・商品購入機能

## 機能詳細
・ユーザの新規登録・ログイン
  ユーザの新規登録及び、ログイン機能。
  こちらはセッションを使って、ログイン情報を保持しています。

・ログアウト
  ユーザのログアウト機能です。
  ログアウト時、カートの情報は空にしています。

・商品一覧表示
  商品の一覧表示です。
  尚、商品画像にホバーした時、商品の簡易情報を表示させています。
  商品をクリックすると、商品詳細画面に遷移します。

・商品詳細（同カテゴリーの商品も表示）
  商品一覧から、選択した商品の詳細を表示します。
  また、その商品と同じカテゴリーの商品も一覧表示しています。
![2020-04-14 0 05のイメージ](https://user-images.githubusercontent.com/46628006/79132444-4d889180-7de5-11ea-94c9-9139b8ab432d.jpeg)

・商品検索機能
  入力されたキーワードに対して、商品名が部分一致する商品を一覧表示します。

・カート機能
  商品詳細にある、「カートに入れる」ボタンを押下すると、セッションにその商品と選択した数量が
  保存されます。

・商品購入機能
  「購入を確定する」ボタンを押下すると、「order」テーブルにユーザID、商品ID、数量が保存されます。

## 苦労した点
・カート機能
  セッションを扱っているのですが、商品を追加した時にカート内に同じ商品が存在した場合、数量のみ変更させる方法を探す事に苦労しました。
  結果として、sessionのincrementメソッドを使用すれば、同じ商品が追加された場合でも、数量のみの変更が出来ました。

## 工夫した点
・商品一覧機能
  商品画像のホバー時に動きをつける為に、どのような動きが良いか？調査した事です。
  結果として、インターネットにあったcssファイルをこのプロジェクトに取り込み、
  カスタマイズすることで自分の思い通りの動きをつけることが出来ました。
  このように「在るもの」を使用して、コーディングしていくという方法も、開発時間短縮の為にもなって
  良いと感じました。

・商品詳細表示
  画面下に、詳細商品と同じカテゴリーの商品一覧を表示させていますが、
  ただ単に表示させるだけでなく、jQueryを使用して動きをつけました。