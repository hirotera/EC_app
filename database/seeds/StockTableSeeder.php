<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('stocks')->insert([
            'name' => 'ロレックス',
            'detail' => 'とってもダンディな高級腕時計よ｡',
            'recommended' => "ロレックスのエクスプローラー。\n
            お値段６２万１０００円。\n
            中古になっても値落ちは少ないし、なんといってもロレックスよ。\n
            一生ものの時計として間違いない。\n
            文字盤は3と6と9だけが数字、他は蛍光タイプのバーインデックス。\n
            視認性をあげながら野暮ではない、本当にロレックスのセンスを感じるわ。\n
            1950年代から変わっていないデザインよ。",
            'category' => '時計',
            'price' => 621000,
            'imgpath' => 'watch.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'グランドセイコー',
            'detail' => 'とってもダンディな高級腕時計よ｡',
            'recommended' => "セイコーの、グランドセイコーＳＢＧＨ００１。\n
            お値段６２万６４００円。\n
            クオーツ時計で市場を席巻したセイコーが、かつての職人たちを呼び戻し、\n
            原点に戻って作り上げた機械式時計。\n
            見易さを極めた、針の細かな面一つ一つに施された手仕事。\n
            選ばれた職人にしか組み立てることが許されない拘りは、\n
            決して派手ではないけれど心にしみる味わいがあるわね。",
            'category' => '時計',
            'price' => 626400,
            'imgpath' => 'watch2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パテック・フィリップ',
            'detail' => 'とってもダンディな超高級腕時計よ｡',
            'recommended' => "パティック・フィリップのノーチラス。\n
            お値段なんと、３３９万１２００円。\n
            なんと言ってもパティック・フィリップの時計は、\n
            身につける者のステイタスを一段も二段も上げてくれる。\n
            そんなラインナップの中でも挑戦的なデザインで、スポーツ時計とクラシック時計の融合を計った傑作ね。\n
            このモデルは月の満ち欠けがわかるムーンフェイズなど、\n
            多くの機能を込めながらも、優れたデザイン性を実現しているわ。",
            'category' => '時計',
            'price' => 3391200,
            'imgpath' => 'watch3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ペリカンの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'recommended' => "ペリカンのスーべレーンＭ４００。\n
            胸ポケットにも手帳サイズにもちょうど良い小さめモデル。\n
            お値段３万２４００円。\n
            スーべレーンとはドイツ語で『優れもの』という意味で、\n
            中でもこのＭ４００は実用的な小さめサイズ、胸ポケットにも手帳の中にも収納出来るの。\n
            使う人を選ばないまさに『優れもの』よ。\n
            一目でペリカンと分かる特徴的なストライプ模様も人気の秘訣ね。",
            'price' => 32400,
            'category' => '万年筆',
            'imgpath' => 'pen3.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'モンブランの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'recommended' => "モンブランのマイスターシュテュック１４９｡\n
            お値段１０万１５２０円。\n
            マイスターシュテュックとはドイツ語で『傑作』という意味。\n
            どっしりとしたサイズで、万年筆の王様と世界中の人がリスペクトする名品よ。\n
            大きな万年筆に相応しい大きなペン先から出てくるインク。\n
            その独特の筆記感は一度書いたら忘れられないモノになるはずよ。",
            'category' => '万年筆',
            'price' => 101520,
            'imgpath' => 'pen2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アウロラの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'recommended' => "アウロラのオプティマ９９６。\n
            お値段７万３４４０円。\n
            イタリアのメーカーらしくカラフルな所が特徴。\n
            マーブル調のその姿は手作りで、世界に一本たりともまったく同じ模様のモノはない全てがオンリーワンの万年筆よ。\n
            独自の『リザーブタンク付きピストン吸引式』を採用しているから、\n
            一度インクが切れてからもＡ４用紙で１，２枚は書き続ける事が出来るの。\n
            出先で使うときも安心よ。",
            'category' => '万年筆',
            'price' => 73440,
            'imgpath' => 'pen.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'サントーニの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'recommended' => "イタリアを代表するメーカー、サントーニのＳＡ４１５４２０１ＢＬ。\n
            お値段は９万９７５０円。\n
            サントーニのデザイン性の高いウイングチップもイタリア靴らしい大人の色気が感じられるわ。",
            'category' => '靴',
            'price' => 99750,
            'imgpath' => 'shoes.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ジョンロブの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'recommended' => "イギリスを代表する靴メーカー、ジョン・ロブの世界的ベストセラー、シティⅡ。\n
            お値段１７万２８００円。\n
            ロンドンの金融街で働くビジネスマンをイメージしたこの靴は、ストレートチップの定番デザイン。\n
            世界最高のこだわりを凝縮した、靴造りの完全主義が生み出す美しい靴の宝石。\n
            ちょっと高いけど、通勤はもちろん結婚式もお葬式もこなす。\n
            一生ものの靴としては間違いない品よ。",
            'category' => '靴',
            'price' => 172800,
            'imgpath' => 'shoes2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'オールデンの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'recommended' => "アメリカの誇る大人気ブランド、オールデン。\n
            コードバンのプレーントゥで、お値段１１万３４００円。\n
            イギリスやイタリアの一流靴に見られるような繊細さはなく、\n
            むしろアメリカ的で無骨な造りだけど、靴のアートで足をフィットさせ、\n
            指に遊びを生む独特のフィット感を形状記憶に優れた馬のお尻の革コードバンで実現している。\n
            現在ではそのなめし技法は、幻の技と言われているわ。",
            'category' => '靴',
            'price' => 113400,
            'imgpath' => 'shoes3.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ブレイリオの手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'recommended' => "ブレイリオのコードバンシステム手帳。\n
            リフィル込みで２万５０００円。中身はベーシックな週間レフトにしてあるわ。\n
            リングは最高級・クラウゼ製でパチンという音も最高よ。\n
            そしてブレイリオの魅力はやっぱり馬のお尻・コードバンの皮の光沢。\n
            顔料を水で薄めた液体にじっくり時間をかけて皮を浸す水染めを行い、\n
            さらに職人が手染めで色づけすることで皮の奥まで色が浸透し、\n
            自然の皮革の持つ艶やかで、透明感のある光沢を生み出すの。\n
            そして内部の皮にはバッファローカーフのヌメ皮を使うというこだわり。\n
            これは、経年変化で飴色に生まれ変わるのよ。",
            'category' => '手帳',
            'price' => 25000,
            'imgpath' => 'notebook.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'クオバディスの手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'recommended' => "クオバディスのエグゼグティブノートクラブ、お値段39000円。\n
            カバーにはバリエーション豊富なクオバディスの中でも落ち着きのあるマロングラッセ色の合皮。\n
            手帳の中身はクオバディスが生み出した週間バーティカルタイプで紙は高級感漂うクリームカラー。\n
            角にあるミシン目で切り取れるオートマティック開閉も、人気の一つね。\n
            ちぎる度にやり終えた仕事の充実感を味わうことが出来るの。\n
            そして何と言ってもクオバディスの魅力はオシャレなフォント。\n
            フランス製だけあって、どことなく気品にあふれたこの書体がたまらないって人が多いの。\n
            そして付録のフランスの各産地でのワインの当たり年が分かる表も魅力よ。",
            'category' => '手帳',
            'price' => 39000,
            'imgpath' => 'notebook2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'X47の手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'recommended' => "ドイツのベンチャー企業Ｘ４７が生み出した手帳、カウハイド。\n
            リフィル別売りで、カバーがお値段２万７０００円。\n
            綴じ手帳とシステム手帳の良い所どりをした手帳業界の進化系。\n
            でも機能性だけじゃないわ。\n
            皮はイタリア製のカウハイドレザーと言って牛革の中でもやわらかい素材でありながら強さも持っており､\n
            良いとされる出産経験のある生後２年以内のメス牛の皮にクロコダイルの型押しをしてダンディに仕上げているの。",
            'category' => '手帳',
            'price' => 27000,
            'imgpath' => 'notebook3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アランミクリのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'recommended' => "アランミクリのＡ０３００４-Ｂ０９Ｄ。\n
            お値段４万５３６０円。\n
            フレームにバランスよく施されたキャップのひさしのような傾斜『アイシェイドキャップライン』が,\n
            フレームのアウトラインを美しく強調し、見る角度によって表情を変えるわ。\n
            ベースのブラックに、ブラックとクリアのダミエ柄を重ねている。\n
            こちらも見る角度により、さりげなく柄が見えるのがお洒落よね。",
            'category' => '眼鏡',
            'price' => 45360,
            'imgpath' => 'glasses.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'フォーナインズのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'recommended' => "フォーナインズの Ｏ-３１Ｔ ＴｙｐｅＢ。\n
            お値段４万１０４０円。\n
            日本人の鼻の高さを考慮した、独自のノーズパッドと逆Ｒテンプルは掛け心地抜群。\n
            フレームとレンズを離して１箇所のみ固定する事で、レンズが割れる事が無いようになっているの。\n
            このフレームとレンズの隙間にメガネ好きはゾクゾクするのよ。\n
            これも日本製のフォーナインズだからこそ出来る技術。\n
            もちろん見た目もクールで仕事のできるビジネスマンを演出してくれるわ。",
            'category' => '眼鏡',
            'price' => 41040,
            'imgpath' => 'glasses2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'バートンペレイラのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'recommended' => "バートン・ペレイラのＣＬＡＲＥＮＤＯＮ。\n
            お値段４万９６８０円。\n
            ボストン型だけど、レンズ上部のプラステックはあえて太さおさえ、\n
            レンズの下には軽量のチタンにゴールドメッキを施すことでエレガントに仕上げているの。\n
            さらにレンズとレンズをつなぐブリッジ、そしてテンプル部分には、\n
            思わず惚れ惚れしまうほどの細かな装飾が施されていて、\n
            絶妙なヴィンテージ感とラグジュアリー性を兼ね備えた、これぞバートン・ペレイラという一品ね。",
            'category' => '眼鏡',
            'price' => 49680,
            'imgpath' => 'glasses3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'トゥミの鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'recommended' => "お値段５万９４００円。\n
            トゥミと言えばブラックの大きめの無骨なカバン。\n
            そのイメージを払拭して発売した商品。\n
            デビュー以来瞬く間にビジネスマンの支持を集めた一品ね。\n
            機能性も秀逸よ。\n
            ２つのジッパーがありパソコンを入れる側にはクッション性を備え、\n
            もう一方にはビジネス道具を入れるため細かな収納などが多めに作られているの。\n
            もちろんトレイサーナンバー付き。\n
            トゥミの魅力が詰まった一品と言っても良いわね。",
            'category' => '鞄',
            'price' => 59400,
            'imgpath' => 'bag.jpeg',
        ]);



        DB::table('stocks')->insert([
            'name' => 'オロビアンコの鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'recommended' => "オロビアンコ『ヴェルネ』お値段３万５０００円。\n
            傷やしわがつきにくく、雨にも強い実用性抜群のポリ塩化ビニル素材を使用しながら、\n
            黒でシックに決めて、この高級感を演出しているわ。\n
            また、プラダで有名な『リモンタ社』の素材で、バッグの内側にはその証である織りネームも。\n
            サイドはナイロンで軽量化を図り、ファスナーが深くまで開くのでストレスなく収納が可能なの。\n
            書類などの中身の取り出しやすさがビジネスマンからとっても人気よ。",
            'category' => '鞄',
            'price' => 35000,
            'imgpath' => 'bag2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => '大峡製鞄の鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'recommended' => "大峽製鞄のオールレザーブリーフ。\n
            お値段１２万９６００円。\n
            この鞄の魅力は台形のフォルム。\n
            なんともいえない重厚感を醸し出しているわ。\n
            光沢のある牛革は、イタリアの職人が植物の渋を使って、時間をかけ手作業で染めたタンニンなめし。\n
            その革を、大峽製鞄の職人が寸分違わぬ幅で錐を使い穴をあけ、見事に縫い込み鞄を作り上げた逸品よ。\n
            内装にも革が使われていて、中の革は豚革のピッグスキン。\n
            軽いうえに、通気性がよく、さらには耐久性が高いため汚れにも強いの。\n
            中仕切りも付いていて機能性も言う事無い完璧な一品よ 。",
            'category' => '鞄',
            'price' => 129600,
            'imgpath' => 'bag3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エッティンガーの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'recommended' => "エッティンガーのロイヤルコレクションの長札入れ。\n
            お値段３万９９６０円。\n
            ２００７年にチャールズ皇太子６０歳の誕生日を記念して生まれた限定モデルだったのが、あまりに人気でレギュラーに。\n
            英国王室のカラーであるロイヤルパープルは、王室から特別に使用を認められているわ。\n
            定番のブライドルレザーではなく柔らかいカーフを使っているのもお洒落ね。",
            'category' => '財布',
            'price' => 39960,
            'imgpath' => 'wallet.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'メゾン･タクヤの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'recommended' => "新進気鋭のラグジュアリーブランド、メゾン・タクヤの長財布、ＴＴ２ウォレット。\n
            お値段５万４０００円。\n
            最高級の天然しぼのレザーと、内側には柔らかい山羊革を使用。\n
            完全ハンドメイドで高級感がありながら、デザインとカラーリングはメゾン・タクヤらしいモダンでハイセンスに仕上げている。\n
            カードポケットも１３ヵ所もあり、小銭入れも付いていて実用的よ。",
            'category' => '財布',
            'price' => 54000,
            'imgpath' => 'wallet2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'カミーユフォルネの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'recommended' => "カミーユ・フォルネのヴェルソ・ロングウォレット。\n
            お値段１２万９６００円。\n
            表は高級カーフの型押し、内側にはアリゲータを部分使いしていて、このちょい見せアリゲータが最高にお洒落よ。\n
            パティックフィリップのベルトメーカーだけに品質は折り紙つき。\n
            少し値段がはるけど、一生ものと考えれば高くないかもしれないわよ。",
            'category' => '財布',
            'price' => 129600,
            'imgpath' => 'wallet3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'フォックスアンブレラの傘',
            'detail' => 'とってもダンディな傘よ｡',
            'recommended' => "フォックスアンブレラのチューブライン｡\n
            お値段３万２４０円。\n
            まるでステッキのように細いフォルムで、\n
            雨が降っていない時に持っていてもサマになるイギリスのダンディな傘よ。",
            'category' => '傘',
            'price' => 30240,
            'imgpath' => 'umbrella.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'マリアフランチェスコの傘',
            'detail' => 'とってもダンディな傘よ｡',
            'recommended' => "マリアフランチェスコのメープルハンド。\n
            お値段３万２４０円。\n
            イタリアらしいデザインで、オシャレさにおいては傘業界ナンバーワン。\n
            有名メゾンブランドの傘も手がける職人の技。\n
            分かる人には分かる高級傘よ。",
            'category' => '傘',
            'price' => 30240,
            'imgpath' => 'umbrella2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => '前原光栄商店の傘',
            'detail' => 'とってもダンディな傘よ｡',
            'recommended' => "前原光栄商店のトラッド１６。\n
            お値段１万７２８０円。\n
            もちろん、１６本骨よ。柄の部分にタッセルが付いているから、大風でもしっかりグリップできる。\n
            使う人の事を考えて作られた日本の職人技の結晶よ。",
            'category' => '傘',
            'price' => 17280,
            'imgpath' => 'umbrella3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ルイジボレッリ&タイユアタイ',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'recommended' => "イタリア、ルイジ・ボレッリのシャツと、タイ・ユア・タイのネクタイの組み合わせ。\n
            ２つ合わせて７万２００円。\n
            イタリー製ならではの立体的で着心地を追求したルイジ・ボレッリのシャツは定番中の定番。\n
            タイ・ユア・タイの遊び心を加えて、スーツのＶゾーンを華やかに軽やかに演出するわ。",
            'category' => 'シャツ&ネクタイ',
            'price' => 72000,
            'imgpath' => 'shirt4.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ターンブル&アッサー&ドレイクス',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'recommended' => "イギリス、ターンブル＆アッサーのシャツとドレイクスのタイ。\n
            ２つ合わせて４万５３６０円。\n
            ロンドンストライプと紺色のソリッドタイはイギリスのジェントルマンらしい鉄板の組み合わせね。\n
            歴史と伝統に裏打ちされたシンプルで洗練されたドレスアップよ。",
            'category' => 'シャツ&ネクタイ',
            'price' => 45360,
            'imgpath' => 'shirt2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'インディビジュアライズド',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'recommended' => "アメリカ、インディビジュアライズドシャツのボタンダウンシャツと、レジメンタルタイ。\n
            ２つ合わせて３万５６４０円。\n
            インディビジュアライズドシャツは長年に渡ってブルックスブラザーズのオーダーシャツを手掛けてきた実力派ファクトリーブランドよ。\n
            少しタイト目な作りが特徴。\n
            タイもひねりを効かせて、あえてレジメンタルで。\n
            ニューアメトラで攻めたいならこの組み合わせね。",
            'category' => 'シャツ&ネクタイ',
            'price' => 35640,
            'imgpath' => 'shirt3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ヘンリープール',
            'detail' => 'とってもダンディなスーツよ｡',
            'recommended' => "イギリス、ヘンリープールのメイド・トゥー・メジャーのスーツお値段１７万２８００円。\n
            伝統的なイングリッシュドレープで、スマートで知的に見せてくれる。\n
            ネイビーのチョークストライプは今着ているスーツに比べてグッとしまって見えるわよ。",
            'category' => 'スーツ',
            'price' => 172800,
            'imgpath' => 'suit.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ポールスチュアート',
            'detail' => 'とってもダンディなスーツよ｡',
            'recommended' => "アメリカ、ポール・スチュアートのスーツ。\n
            お値段１６万２０００円。\n
            アメリカのブランドでありながら、日本人の体格にもフィットするタイトなシルエット。\n
            ミディアムグレーもシックでいいわよ。",
            'category' => 'スーツ',
            'price' => 162000,
            'imgpath' => 'suit2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ベルヴェスト',
            'detail' => 'とってもダンディなスーツよ｡',
            'recommended' => "イタリア、ベルヴェストのスーツ５３５。\n
            お値段２８万８００円。\n
            前身頃の毛芯や、肩パットを適度に入れ、ラウンドしたフロントカットや、ショルダーラインを築き、ソフトは着心地と美しくエレガントな表情を両立しているわ。\n
            ネイビーのピンストライプもさりげなくていいわよ。",
            'category' => 'スーツ',
            'price' => 282800,
            'imgpath' => 'suit3.jpeg',
        ]);
    }
}
