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
            'Recommended' => 'ロレックスのエクスプローラー。お値段６２万１０００円。中古になっても値落ちは少ないし、なんといってもロレックスよ。一生ものの時計として間違いない。文字盤は3と6と9だけが数字、他は蛍光タイプのバーインデックス。視認性をあげながら野暮ではない、本当にロレックスのセンスを感じるわ。1950年代から変わっていないデザインよ。',
            'category' => 0,
            'price' => 621000,
            'imgpath' => 'watch.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'グランドセイコー',
            'detail' => 'とってもダンディな高級腕時計よ｡',
            'Recommended' => 'セイコーの、グランドセイコーＳＢＧＨ００１。お値段６２万６４００円。クオーツ時計で市場を席巻したセイコーが、かつての職人たちを呼び戻し、原点に戻って作り上げた機械式時計。見易さを極めた、針の細かな面一つ一つに施された手仕事。選ばれた職人にしか組み立てることが許されない拘りは、決して派手ではないけれど心にしみる味わいがあるわね。',
            'category' => 0,
            'price' => 626400,
            'imgpath' => 'watch2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パテック・フィリップ',
            'detail' => 'とってもダンディな超高級腕時計よ｡',
            'Recommended' => 'パティック・フィリップのノーチラス。お値段なんと、３３９万１２００円。なんと言ってもパティック・フィリップの時計は、身につける者のステイタスを一段も二段も上げてくれる。そんなラインナップの中でも挑戦的なデザインで、スポーツ時計とクラシック時計の融合を計った傑作ね。このモデルは月の満ち欠けがわかるムーンフェイズなど、多くの機能を込めながらも、優れたデザイン性を実現しているわ。',
            'category' => 0,
            'price' => 3391200,
            'imgpath' => 'watch3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ペリカンの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'Recommended' => 'ペリカンのスーべレーンＭ４００。胸ポケットにも手帳サイズにもちょうど良い小さめモデル。お値段３万２４００円。スーべレーンとはドイツ語で『優れもの』という意味で、中でもこのＭ４００は実用的な小さめサイズ、胸ポケットにも手帳の中にも収納出来るの。使う人を選ばないまさに『優れもの』よ。一目でペリカンと分かる特徴的なストライプ模様も人気の秘訣ね。',
            'price' => 32400,
            'category' => 1,
            'imgpath' => 'pen3.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'モンブランの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'Recommended' => 'モンブランのマイスターシュテュック１４９｡お値段１０万１５２０円。マイスターシュテュックとはドイツ語で『傑作』という意味。どっしりとしたサイズで、万年筆の王様と世界中の人がリスペクトする名品よ。大きな万年筆に相応しい大きなペン先から出てくるインク。その独特の筆記感は一度書いたら忘れられないモノになるはずよ。',
            'category' => 1,
            'price' => 101520,
            'imgpath' => 'pen2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アウロラの万年筆',
            'detail' => 'とってもダンディな万年筆よ｡',
            'Recommended' => 'アウロラのオプティマ９９６。お値段７万３４４０円。イタリアのメーカーらしくカラフルな所が特徴。マーブル調のその姿は手作りで、世界に一本たりともまったく同じ模様のモノはない全てがオンリーワンの万年筆よ。独自の『リザーブタンク付きピストン吸引式』を採用しているから、一度インクが切れてからもＡ４用紙で１，２枚は書き続ける事が出来るの。出先で使うときも安心よ。',
            'category' => 1,
            'price' => 73440,
            'imgpath' => 'pen.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'サントーニの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'Recommended' => 'イタリアを代表するメーカー、サントーニのＳＡ４１５４２０１ＢＬ。お値段は９万９７５０円。サントーニのデザイン性の高いウイングチップもイタリア靴らしい大人の色気が感じられるわ。',
            'category' => 2,
            'price' => 99750,
            'imgpath' => 'shoes.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ジョンロブの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'Recommended' => 'イギリスを代表する靴メーカー、ジョン・ロブの世界的ベストセラー、シティⅡ。お値段１７万２８００円。ロンドンの金融街で働くビジネスマンをイメージしたこの靴は、ストレートチップの定番デザイン。世界最高のこだわりを凝縮した、靴造りの完全主義が生み出す美しい靴の宝石。ちょっと高いけど、通勤はもちろん結婚式もお葬式もこなす。一生ものの靴としては間違いない品よ。',
            'category' => 2,
            'price' => 172800,
            'imgpath' => 'shoes2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'オールデンの革靴',
            'detail' => 'とってもダンディな革靴よ｡',
            'Recommended' => 'アメリカの誇る大人気ブランド、オールデン。コードバンのプレーントゥで、お値段１１万３４００円。イギリスやイタリアの一流靴に見られるような繊細さはなく、むしろアメリカ的で無骨な造りだけど、靴のアートで足をフィットさせ、指に遊びを生む独特のフィット感を形状記憶に優れた馬のお尻の革コードバンで実現している。現在ではそのなめし技法は、幻の技と言われているわ。',
            'category' => 2,
            'price' => 113400,
            'imgpath' => 'shoes3.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ブレイリオの手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'Recommended' => 'ブレイリオのコードバンシステム手帳。リフィル込みで２万５０００円。中身はベーシックな週間レフトにしてあるわ。リングは最高級・クラウゼ製でパチンという音も最高よ。そしてブレイリオの魅力はやっぱり馬のお尻・コードバンの皮の光沢。顔料を水で薄めた液体にじっくり時間をかけて皮を浸す水染めを行い、さらに職人が手染めで色づけすることで皮の奥まで色が浸透し、自然の皮革の持つ艶やかで、透明感のある光沢を生み出すの。そして内部の皮にはバッファローカーフのヌメ皮を使うというこだわり。これは、経年変化で飴色に生まれ変わるのよ。',
            'category' => 3,
            'price' => 25000,
            'imgpath' => 'notebook.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'クオバディスの手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'Recommended' => 'クオバディスのエグゼグティブノートクラブ、お値段39000円。カバーにはバリエーション豊富なクオバディスの中でも落ち着きのあるマロングラッセ色の合皮。手帳の中身はクオバディスが生み出した週間バーティカルタイプで紙は高級感漂うクリームカラー。角にあるミシン目で切り取れるオートマティック開閉も、人気の一つね。ちぎる度にやり終えた仕事の充実感を味わうことが出来るの。そして何と言ってもクオバディスの魅力はオシャレなフォント。フランス製だけあって、どことなく気品にあふれたこの書体がたまらないって人が多いの。そして付録のフランスの各産地でのワインの当たり年が分かる表も魅力よ。',
            'category' => 3,
            'price' => 39000,
            'imgpath' => 'notebook2.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'X47の手帳',
            'detail' => 'とってもダンディな手帳よ｡',
            'Recommended' => 'ドイツのベンチャー企業Ｘ４７が生み出した手帳、カウハイド。リフィル別売りで、カバーがお値段２万７０００円。綴じ手帳とシステム手帳の良い所どりをした手帳業界の進化系。でも機能性だけじゃないわ。皮はイタリア製のカウハイドレザーと言って牛革の中でもやわらかい素材でありながら強さも持っており良いとされる出産経験のある生後２年以内のメス牛の皮にクロコダイルの型押しをしてダンディに仕上げているの。',
            'category' => 3,
            'price' => 27000,
            'imgpath' => 'notebook3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アランミクリのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'Recommended' => 'アランミクリのＡ０３００４-Ｂ０９Ｄ。お値段４万５３６０円。フレームにバランスよく施されたキャップのひさしのような傾斜『アイシェイドキャップライン』がフレームのアウトラインを美しく強調し、見る角度によって表情を変えるわ。ベースのブラックに、ブラックとクリアのダミエ柄を重ねている。こちらも見る角度により、さりげなく柄が見えるのがお洒落よね。',
            'category' => 4,
            'price' => 45360,
            'imgpath' => 'glasses.webp',
        ]);

        DB::table('stocks')->insert([
            'name' => 'フォーナインズのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'Recommended' => 'フォーナインズの Ｏ-３１Ｔ　ＴｙｐｅＢ。お値段４万１０４０円。日本人の鼻の高さを考慮した、独自のノーズパッドと逆Ｒテンプルは掛け心地抜群。フレームとレンズを離して１箇所のみ固定する事で、レンズが割れる事が無いようになっているの。このフレームとレンズの隙間にメガネ好きはゾクゾクするのよ。これも日本製のフォーナインズだからこそ出来る技術。もちろん見た目もクールで仕事のできるビジネスマンを演出してくれるわ。', 
            'category' => 4,
            'price' => 41040,
            'imgpath' => 'glasses2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'バートンペレイラのメガネ',
            'detail' => 'とってもダンディなメガネよ｡',
            'Recommended' => 'バートン・ペレイラのＣＬＡＲＥＮＤＯＮ。お値段４万９６８０円。ボストン型だけど、レンズ上部のプラステックはあえて太さおさえ、レンズの下には軽量のチタンにゴールドメッキを施すことでエレガントに仕上げているの。さらにレンズとレンズをつなぐブリッジ、そしてテンプル部分には、思わず惚れ惚れしまうほどの細かな装飾が施されていて、絶妙なヴィンテージ感とラグジュアリー性を兼ね備えた、これぞバートン・ペレイラという一品ね。',
            'category' => 4,
            'price' => 49680,
            'imgpath' => 'glasses3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'トゥミの鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'Recommended' => 'お値段５万９４００円。トゥミと言えばブラックの大きめの無骨なカバン。そのイメージを払拭して発売した商品。デビュー以来瞬く間にビジネスマンの支持を集めた一品ね。機能性も秀逸よ。２つのジッパーがありパソコンを入れる側にはクッション性を備え、もう一方にはビジネス道具を入れるため細かな収納などが多めに作られているの。もちろんトレイサーナンバー付き。トゥミの魅力が詰まった一品と言っても良いわね。',
            'category' => 5,
            'price' => 59400,
            'imgpath' => 'bag.jpeg',
        ]);

        

        DB::table('stocks')->insert([
            'name' => 'オロビアンコの鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'Recommended' => 'オロビアンコ『ヴェルネ』お値段３万５０００円。傷やしわがつきにくく、雨にも強い実用性抜群のポリ塩化ビニル素材を使用しながら、黒でシックに決めて、この高級感を演出しているわ。また、プラダで有名な『リモンタ社』の素材で、バッグの内側にはその証である織りネームも。サイドはナイロンで軽量化を図り、ファスナーが深くまで開くのでストレスなく収納が可能なの。書類などの中身の取り出しやすさがビジネスマンからとっても人気よ。',
            'category' => 5,
            'price' => 35000,
            'imgpath' => 'bag2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => '大峡製鞄の鞄',
            'detail' => 'とってもダンディな鞄よ｡',
            'Recommended' => '大峽製鞄のオールレザーブリーフ。お値段１２万９６００円。この鞄の魅力は台形のフォルム。なんともいえない重厚感を醸し出しているわ。光沢のある牛革は、イタリアの職人が植物の渋を使って、時間をかけ手作業で染めたタンニンなめし。その革を、大峽製鞄の職人が寸分違わぬ幅で錐を使い穴をあけ、見事に縫い込み鞄を作り上げた逸品よ。内装にも革が使われていて、中の革は豚革のピッグスキン。軽いうえに、通気性がよく、さらには耐久性が高いため汚れにも強いの。中仕切りも付いていて機能性も言う事無い完璧な一品よ 。',
            'category' => 5,
            'price' => 129600,
            'imgpath' => 'bag3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エッティンガーの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'Recommended' => 'エッティンガーのロイヤルコレクションの長札入れ。お値段３万９９６０円。２００７年にチャールズ皇太子６０歳の誕生日を記念して生まれた限定モデルだったのが、あまりに人気でレギュラーに。英国王室のカラーであるロイヤルパープルは、王室から特別に使用を認められているわ。定番のブライドルレザーではなく柔らかいカーフを使っているのもお洒落ね。',
            'category' => 6,
            'price' => 39960,
            'imgpath' => 'wallet.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'メゾン･タクヤの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'Recommended' => '新進気鋭のラグジュアリーブランド、メゾン・タクヤの長財布、ＴＴ２ウォレット。お値段５万４０００円。最高級の天然しぼのレザーと、内側には柔らかい山羊革を使用。完全ハンドメイドで高級感がありながら、デザインとカラーリングはメゾン・タクヤらしいモダンでハイセンスに仕上げている。カードポケットも１３ヵ所もあり、小銭入れも付いていて実用的よ。',
            'category' => 6,
            'price' => 54000,
            'imgpath' => 'wallet2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'カミーユフォルネの財布',
            'detail' => 'とってもダンディな財布よ｡',
            'Recommended' => 'カミーユ・フォルネのヴェルソ・ロングウォレット。お値段１２万９６００円。表は高級カーフの型押し、内側にはアリゲータを部分使いしていて、このちょい見せアリゲータが最高にお洒落よ。パティックフィリップのベルトメーカーだけに品質は折り紙つき。少し値段がはるけど、一生ものと考えれば高くないかもしれないわよ。',
            'category' => 6,
            'price' => 129600,
            'imgpath' => 'wallet3.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'フォックスアンブレラの傘',
            'detail' => 'とってもダンディな傘よ｡',
            'Recommended' => 'フォックスアンブレラのチューブライン、お値段３万２４０円。まるでステッキのように細いフォルムで、雨が降っていない時に持っていてもサマになるイギリスのダンディな傘よ。',
            'category' => 7,
            'price' => 30240,
            'imgpath' => 'umbrella.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'マリアフランチェスコの傘',
            'detail' => 'とってもダンディな傘よ｡',
            'Recommended' => 'マリアフランチェスコのメープルハンド。お値段３万２４０円。イタリアらしいデザインで、オシャレさにおいては傘業界ナンバーワン。有名メゾンブランドの傘も手がける職人の技。分かる人には分かる高級傘よ。',
            'category' => 7,
            'price' => 30240,
            'imgpath' => 'umbrella2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => '前原光栄商店の傘',
            'detail' => 'とってもダンディな傘よ｡',
            'Recommended' => '前原光栄商店のトラッド１６。お値段１万７２８０円。もちろん、１６本骨よ。柄の部分にタッセルが付いているから、大風でもしっかりグリップできる。使う人の事を考えて作られた日本の職人技の結晶よ。',
            'category' => 7,
            'price' => 17280,
            'imgpath' => 'umbrella3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ルイジボレッリ&タイユアタイ',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'Recommended' => 'イタリア、ルイジ・ボレッリのシャツと、タイ・ユア・タイのネクタイの組み合わせ。２つ合わせて７万２００円。イタリー製ならではの立体的で着心地を追求したルイジ・ボレッリのシャツは定番中の定番。タイ・ユア・タイの遊び心を加えて、スーツのＶゾーンを華やかに軽やかに演出するわ。',
            'category' => 8,
            'price' => 72000,
            'imgpath' => 'shirt4.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ターンブル&アッサー&ドレイクス',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'Recommended' => 'イギリス、ターンブル＆アッサーのシャツとドレイクスのタイ。２つ合わせて４万５３６０円。ロンドンストライプと紺色のソリッドタイはイギリスのジェントルマンらしい鉄板の組み合わせね。歴史と伝統に裏打ちされたシンプルで洗練されたドレスアップよ。',
            'category' => 8,
            'price' => 45360,
            'imgpath' => 'shirt2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'インディビジュアライズド',
            'detail' => 'とってもダンディなシャツとネクタイよ｡',
            'Recommended' => 'アメリカ、インディビジュアライズドシャツのボタンダウンシャツと、レジメンタルタイ。２つ合わせて３万５６４０円。インディビジュアライズドシャツは長年に渡ってブルックスブラザーズのオーダーシャツを手掛けてきた実力派ファクトリーブランドよ。少しタイト目な作りが特徴。タイもひねりを効かせて、あえてレジメンタルで。ニューアメトラで攻めたいならこの組み合わせね。',
            'category' => 8,
            'price' => 35640,
            'imgpath' => 'shirt3.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ヘンリープール',
            'detail' => 'とってもダンディなスーツよ｡',
            'Recommended' => 'イギリス、ヘンリープールのメイド・トゥー・メジャーのスーツお値段１７万２８００円。伝統的なイングリッシュドレープで、スマートで知的に見せてくれる。ネイビーのチョークストライプは今着ているスーツに比べてグッとしまって見えるわよ。',
            'category' => 9,
            'price' => 172800,
            'imgpath' => 'suit.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ポールスチュアート',
            'detail' => 'とってもダンディなスーツよ｡',
            'Recommended' => 'アメリカ、ポール・スチュアートのスーツ。お値段１６万２０００円。アメリカのブランドでありながら、日本人の体格にもフィットするタイトなシルエット。ミディアムグレーもシックでいいわよ。',
            'category' => 9,
            'price' => 162000,
            'imgpath' => 'suit2.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ベルヴェスト',
            'detail' => 'とってもダンディなスーツよ｡',
            'Recommended' => 'イタリア、ベルヴェストのスーツ５３５。お値段２８万８００円。前身頃の毛芯や、肩パットを適度に入れ、ラウンドしたフロントカットや、ショルダーラインを築き、ソフトは着心地と美しくエレガントな表情を両立しているわ。ネイビーのピンストライプもさりげなくていいわよ。',
            'category' => 9,
            'price' => 282800,
            'imgpath' => 'suit3.jpeg',
        ]);
    }
}