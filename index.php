<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レッスン評価</title>
  <link rel="stylesheet" href="style.css">


</head>
<body>
  <h1>レッスン評価</h1>
  <p>レッスンおよびインストラクターの評価をお願いします</p></p>
  <form action="write.php" method="post">

  <div class="occasion">
        <questions>1. 本日の受講動機や目的を教えてください<br>         
        <select name="occasion">
          <option value="empty">--選択してください--</option>
          <option value="リフレッシュ・心身健康維持">リフレッシュ・心身健康維持</option>
          <option value="美容・ダイエット">美容・ダイエット</option>
          <option value="身体トレーニング・運動不足解消">身体トレーニング・運動不足解消</option>
          <option value="メンタルトレーニング・生活の質の向上">メンタルトレーニング・生活の質の向上</option>
          <option value="その他">その他</option>
        </select>
        </questions>
      </div>

      <div>
          <questions>2. レッスンの強度はいかかでしたか</questions>
          <div class="radio-group">
            <label></label><input type="radio" name="strength" value="きつい">きつい</label>
            <label><input type="radio" name="strength" value="ややきつい">ややきつい</label>
            <label><input type="radio" name="strength" value="ちょうど良い">ちょうど良い</label>
            <label><input type="radio" name="strength" value="やや物足りない">やや物足りない</label>
            <label><input type="radio" name="strength" value="物足りない">物足りない</label>
          </div>
      </div>

      <div>
          <questions>3. インストラクターは親しみやすく丁寧でしたか</questions>
          <div class="radio-group">
          <label><input type="radio" name="kindness" value="満足">とても満足</label>
          <label><input type="radio" name="kindness" value="やや満足">満足</label>
          <label><input type="radio" name="kindness" value="普通">どちらとも言えない</label>
          <label><input type="radio" name="kindness" value="不満">不満</label>
          <label><input type="radio" name="kindness" value="不満">とても不満</label>
          </div>
      </div>

      <div>
          <questions>4. インストラクターはお客様の受講動機や目的を達成することに貢献しましたか</questions>
          <div class="radio-group">
          <label><input type="radio" name="contribution" value="満足">とても満足</label>
          <label><input type="radio" name="contribution" value="やや満足">満足</label>
          <label><input type="radio" name="contribution" value="普通">どちらとも言えない</label>
          <label><input type="radio" name="contribution" value="不満">不満</label>
          <label><input type="radio" name="contribution" value="不満">とても不満</label>
          </div>
      </div>

      <div>
          <questions>5. スタジオ(会場)の雰囲気や清潔さはいかかでしたか</questions>
          <div class="radio-group">
          <label><input type="radio" name="studioScore" value="満足">とても満足</label>
          <label><input type="radio" name="studioScore" value="やや満足">満足</label>
          <label><input type="radio" name="studioScore" value="普通">どちらとも言えない</label>
          <label><input type="radio" name="studioScore" value="不満">不満</label>
          <label><input type="radio" name="studioScore" value="不満">とても不満</label>
          </div>
      </div>

     

      <div>
        <questions>6. 受講コメント・ご意見やご提案の記入にご協力をお願いいたします。<br>
            内容は全て拝見させていただき、今後のサービス向上に活用させていただきます。（任意）</questions>
        <textarea name="suggestion" cols="40" rows="6"></textarea>
      </div>
      <button type="submit" value="送信">送信</button>
    </form>
</body>
</html>