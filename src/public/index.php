
<?php include 'views/header.php'; ?>

<main class="main">

  <div class="myProfile">
    <h2 class="myProfile-name">
      <span class="myProfile-name__kanji">土屋 蓮</span>
      <span class="myProfile-name__alphabet">Ren Tsuchiya</span>
    </h2>
    <p class="myProfile-birthday">December 18th, 2000</p>
  </div>

  <div class="myLike">
    <h3 class="myLike-title">Favorite</h3>
    <p class="myLike-list">
      <span class="myLike-list__indoor">読書　筋トレ　コーヒー</span>
      <span class="myLike-list__food">芋焼酎　ディズニー　料理</span>
      <span class="myLike-list__move">ドライブ　旅行　バイク</span>
    </p>
  </div>

  <dialog class="modal">
    <table class="modal-inner">
      <tr class="history">
        <th class="history-title">専門学校</th>
        <td class="history-text">公務員試験平均偏差値70</td>
      </tr>
      <tr class="history">
        <th class="history-title">公務員</th>
        <td class="history-text">寮で集団生活・規則正しい生活</td>
      </tr>
      <tr class="history">
        <th class="history-title">飲食店</th>
        <td class="history-text">店舗責任者・人材育成・数値管理</td>
      </tr>
    </table>
  </dialog>

</main>
