=== WP Login Admin Redirect ===
Contributors: shinroh
Tags: redirect
Requires at least: 5.2.2
Tested up to: 5.2.2
Stable tag: 1.0
If the redirect_to parameter is assigned to the URL in the logged-in state, accessing the admin pages redirects to the URL specified by redirect_to.

== Description ==

= In Japanese: =
管理画面アクセス時に redirect_to の GETパラメータが付与されている場合に、その値にURLにリダイレクトします。

= In English: =
If the redirect_to parameter is assigned to the URL in the logged-in state, accessing the admin pages redirects to the URL specified by redirect_to.

== Installation ==
1. Upload `login-admin-redirect.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress

== Frequently asked questions ==



== Screenshots ==

1. https://flares.jp/wp/wp-content/uploads/2019/08/login-admin-redirect.jpg

== Changelog ==



== Upgrade Notice ==



== Arbitrary section ==

= In Japanese: =
管理画面ログイン時にredirect_toパラメータが付与されている場合に、そのURLまでそのままリダイレクトさせることができます。
主な使い方の例としては、ログイン時のみ閲覧できるページを閲覧させる際に、redirect_toパラメータを付与しておくことで、そのまま該当URLにリダイレクトさせる用途で利用します。

= In English: =
If the redirect_to parameter is given when logging in to the management screen, you can redirect to that URL as it is.
As an example of the main usage, when you browse a page that can be viewed only at login, by adding the redirect_to parameter, it will be used for redirecting to the corresponding URL as it is.
