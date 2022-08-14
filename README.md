# ZPGoogleAnalytics4
Add Google Analytics 4 tracking code to Zenphoto.

Explanations in English follow the explanations in Japanese.

## ZPGoogleAnalytics4 とは
[Zenphoto](https://www.zenphoto.org/)に[Google Analytics](https://marketingplatform.google.com/intl/ja/about/analytics/)のコードを挿入するプラグインです。

プラグインを有効化した後、Google Analyticsから提供される「測定ID」を設定ページ（設定 > プラグイン > google_analytics_4）に入力すると動作します。

## 機能について
本プラグインの機能は、Google Analyticsのコードを挿入するだけで、それ以外の機能は今のところ持ち合わせていません。

追加機能が必要と感じた方は、Issueを立てたりPull Requestを送ったりしてください。

## ベースとなったプラグイン
- [ArnaudHocevar/ZPGoogleAnalytics: Google Analytics plugin for Zenphoto](https://github.com/ArnaudHocevar/ZPGoogleAnalytics) - このプラグインではGoogle Analytics 4の測定IDに対応していなかったため、本プラグインを作成しました。
- [zenphoto/demo-plugin: This is a basic demo plugin that is meant as a starting point to write your own.](https://github.com/zenphoto/demo-plugin) - Zenphoto公式のサンプルプラグイン。
- [Epsilon8425/Zenphoto-Disqus-Comment-Form: Adds Disqus to Zenphoto. Can be configured to use SSO (single sign on) and Disqus comment count.](https://github.com/Epsilon8425/Zenphoto-Disqus-Comment-Form) - オプション値の取得の所を参考にさせていただきました。

## What is ZPGoogleAnalytics4
This plugin inserts [Google Analytics](https://marketingplatform.google.com/intl/en/about/analytics/) code into [Zenphoto](https://www.zenphoto.org/).

After activating the plugin, enter the "Tracking ID" provided by Google Analytics in the settings page (Settings > Plugins > google_analytics_4).

## About the function
The function of this plugin is only to insert Google Analytics code, and it does not have any other functions at the moment.

If you feel that additional functionality is needed, please write an Issue or send a Pull Request.

## Plugin on which this plugin is based.
- [ArnaudHocevar/ZPGoogleAnalytics: Google Analytics plugin for Zenphoto](https://github.com/ArnaudHocevar/ZPGoogleAnalytics) - This plugin did not support Google Analytics 4 Tracking IDs, so I created this plugin.
- [zenphoto/demo-plugin: This is a basic demo plugin that is meant as a starting point to write your own.](https://github.com/zenphoto/demo-plugin) - This is a sample plugin officially provided by Zenphoto.
- [Epsilon8425/Zenphoto-Disqus-Comment-Form: Adds Disqus to Zenphoto. Can be configured to use SSO (single sign on) and Disqus comment count.](https://github.com/Epsilon8425/Zenphoto-Disqus-Comment-Form) - I referred to the part about getting option values.
