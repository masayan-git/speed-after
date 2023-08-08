# 爆速WordPressサイト制作用gulp環境
このgulp環境は爆速サイトを作るために作りました。  
以下の機能があります。  
- ホットリロード
- SCSSコンパイル
- CSSファイル圧縮
- 画像をwebpに自動変換
  
## 動作確認済みの環境  
- Node v18.16.0
- Mac M1  
## コマンド  
`npm i`  
`npx gulp`  

## gulp.js  
61行目付近のproxy設定にローカルのURLを入力する  
例
```
browserSync.init({
    proxy: "localhost:10085",
});
```
これを設定することでホットリロードが機能する。
## 仕様  
- SCSSの記述は`dev/scss`フォルダで行う
- 画像は`dev/images`フォルダに入れる（自動でwebpに変換され`/images`フォルダに吐き出す）
- JavaScriptの記述は`/js`フォルダで行う（圧縮はしていない）

## 備考  
- 開発時はローカルのWordPressにこのテーマファイルを入れるとテーマとして動作します。