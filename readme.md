# team-test
  
  
## テスト環境
テスト環境はコチラで作成します。  
URL,WordPressログインID,Password,FTP情報をお渡しします。
  
  
## ローカル環境
<ul>
<li>Local by flywheelを使用</li>
<li>テスト環境からAll in one WP Migretionで移行</li>
<li>gulpfile.jsとpackage.jsonをpublicフォルダに置く</li>
<li>npmをインストール。コマンドプロンプト→publicへ移動し「npm install」</li>
<li>cssをコンパイル。コマンドプロンプト→publicへ移動し「gulp sass:watch」</li>
</ul>
  
  
## 実際の作業について
対象のthemeフォルダをGitとGitHubでバージョン管理します。対象のthemeフォルダ以外はバージョン管理の対象外。

### アップロード
<ul>
<li>作業後はGitHubにプッシュ</li>
<li>テストサイトにthemeフォルダをアップロード</li>
<li>もしくはAll in one WP Migretionでテストサイトへ移行</li>
</ul>

### ダウンロード
<ul>
<li>作業前にGitHubからプル</li>
<li>もしくは、All in one WP Migretionでローカルサイトへ移行</li>
</ul>
  
  
## Sassの説明
構成はstyle.scssファイルに記載しています。

### 命名規則
<ul>
<li>layout    ・・・　頭にl-を付ける　ex:l-container</li> 
<li>component ・・・　頭にc-を付ける　ex:c-btn01</li>
<li>project   ・・・　頭にp-ページ名を付ける　ex:p-company ページ名は短縮化</li>  
<li>utility   ・・・　頭にu-を付ける　ex:u-mb10</li>
</ul>

#### 参考までに
厳密にやる必要はありません。参考程度としてください。
<ul>
<li>親子関係   ・・・　アンダースコア2つ「__」 ex:p-company__list</li>
<li>バリエーション違い　　・・・　ハイフン2つ「--」 ex: c-btn01--white</li>
</ul>

### 補足説明
<ul>
<li>再利用できるパーツがあれば、componentフォルダ内に作成する。ファイル名は適当でOK。1ファイルにまとめて書いてもOK。</li>
<li>下層ページはprojectフォルダ内に作成する。</li>
<li>記載場所に迷ったら、projectフォルダ内に書く。</li>
<li>CSSの記載時は、なるべく入れ子にしないこと。ただし、以下の場合はOKとする。    
<ul>
<li>ulのli ex:ul li { }</li>  
<li>dlのdt,dd　ex:dl dt { } </li> 
<li>tableのth,td  ex:table th { } </li>
</ul>
</li>
</ul>



　 
