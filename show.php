if (!empty($loged)) {

      $stmt = $pdo->prepare("SELECT select1, select2, select3, birthday FROM birthday_table WHERE login=?");
      $stmt->execute([$loged]);
      $res = $stmt->fetchAll();
     // echo "<pre>".print_r($res, true)."</pre>";
      foreach ($res as $k => $value) {
          $arr = strtotime($res[0]['birthday']) - ($res[0]['select1'] * 86400); //0ой элемент столбца select1
          $arr_to_date = date('Y-m-d', $arr);
          
          $arr2 = strtotime($res[0]['birthday']) - ($res[0]['select2'] * 86400); //0ой элемент столбца select2
          $arr2_to_date = date('Y-m-d', $arr2);
          
          $arr3 = strtotime($res[0]['birthday']) - ($res[0]['select3'] * 86400); //0ой элемент столбца select3
          $arr3_to_date = date('Y-m-d', $arr3);
          
          /* и так далее всего понадобится 9 таких строк, чтобы получать все элементы 3 столбцов по 3 элемента в каждом.
          А число элментов в столбцах может доходить до нескольких сотен. */
          
          /* Тут эти вычисления, показанные выше, я думаю, надо делать циклически. */
          
      }
}

echo $arr_to_date;
echo $arr2_to_date;
echo $arr3_to_date;
  
  
