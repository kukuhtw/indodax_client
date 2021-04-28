<?php
    $url = 'https://indodax.com/tapi';
    // Please find Key from trade API Indodax exchange
    $key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
    // isi dengan data key anda, cek di dashboard indodax
    $secretKey = 'yyyyyyyyyyyyyyyyyyyyyy';
    // isi dengan data secret key anda, cek di dashboard indodax


	$data = [
	        'method' => 'getInfo',
	        'timestamp' => '1578304294000',
	        'recvWindow' => '1578303937000'
	    ];
	$post_data = http_build_query($data, '', '&');
    $sign = hash_hmac('sha512', $post_data, $secretKey);
    
    $headers = ['Key:'.$key,'Sign:'.$sign];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => true
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    //echo $response;

    $json = json_decode($response,true);

    $success=$json["success"];

    if ($success==0) {
      $error=$json["error"];
      echo "<br>return error dari Indodax = ".$error;
      exit;
    }

    $btc = $json["return"]["balance"]["btc"];
    $eth = $json["return"]["balance"]["eth"];
    $ada = $json["return"]["balance"]["ada"];
    $act = $json["return"]["balance"]["act"];
    $algo = $json["return"]["balance"]["algo"];
    $atom = $json["return"]["balance"]["atom"];
    $bat = $json["return"]["balance"]["bat"];
    $bcd = $json["return"]["balance"]["bcd"];
    $bch = $json["return"]["balance"]["bch"];
    $bnb = $json["return"]["balance"]["bnb"];
    $abyss = $json["return"]["balance"]["abyss"];
    $aoa = $json["return"]["balance"]["aoa"];
    $att = $json["return"]["balance"]["att"];
    $bal = $json["return"]["balance"]["bal"];   
    $bnb = $json["return"]["balance"]["bnb"];
    $bsv = $json["return"]["balance"]["bsv"];
    $btg = $json["return"]["balance"]["btg"];
    $bts = $json["return"]["balance"]["bts"];
    $btt = $json["return"]["balance"]["btt"];
    $cbk = $json["return"]["balance"]["cbk"];
    $ckb = $json["return"]["balance"]["ckb"];
    $cel = $json["return"]["balance"]["cel"];
    $celo = $json["return"]["balance"]["celo"];
    $coal = $json["return"]["balance"]["coal"];
    $comp = $json["return"]["balance"]["comp"];
    $coti = $json["return"]["balance"]["coti"];
    $cro = $json["return"]["balance"]["cro"];
    $crv = $json["return"]["balance"]["crv"];
    $dad = $json["return"]["balance"]["dad"];
    $dash = $json["return"]["balance"]["dash"];
    $dai = $json["return"]["balance"]["dai"];
    $dax = $json["return"]["balance"]["dax"];
    $dep = $json["return"]["balance"]["dep"];
    $dgb = $json["return"]["balance"]["dgb"];
    $dgx = $json["return"]["balance"]["dgx"];
    $doge= $json["return"]["balance"]["doge"];
    $egld = $json["return"]["balance"]["egld"];
    $dot = $json["return"]["balance"]["dot"];
    $em = $json["return"]["balance"]["em"];
    $enj = $json["return"]["balance"]["enj"];
    $eos = $json["return"]["balance"]["eos"];
    $etc = $json["return"]["balance"]["etc"];
    $eurs = $json["return"]["balance"]["eurs"];

    $fil = $json["return"]["balance"]["fil"];
    $firo = $json["return"]["balance"]["firo"];
    $gard = $json["return"]["balance"]["gard"];
   $grt = $json["return"]["balance"]["grt"];
    $gsc = $json["return"]["balance"]["gsc"];
    $gxc = $json["return"]["balance"]["gxc"];
    $hbar = $json["return"]["balance"]["hbar"];
    $hedg = $json["return"]["balance"]["hedg"];
    $hive = $json["return"]["balance"]["hive"];
    $hnst = $json["return"]["balance"]["hnst"];
    $hot = $json["return"]["balance"]["hot"];
    $hpb = $json["return"]["balance"]["hpb"];
    $idk = $json["return"]["balance"]["idk"];
    $ignis = $json["return"]["balance"]["ignis"];

    $inx = $json["return"]["balance"]["inx"];
    $iost = $json["return"]["balance"]["iost"];
    $iota = $json["return"]["balance"]["iota"];
    $jst = $json["return"]["balance"]["jst"];
    $kdag = $json["return"]["balance"]["kdag"];
    $let = $json["return"]["balance"]["let"];
    $lgold = $json["return"]["balance"]["lgold"];
    $link = $json["return"]["balance"]["link"];
    $lland = $json["return"]["balance"]["lland"];
  $lsilver = $json["return"]["balance"]["lsilver"];
  $ltc = $json["return"]["balance"]["ltc"];
  $lyfe = $json["return"]["balance"]["lyfe"];
  $mana = $json["return"]["balance"]["mana"];
  $matic = $json["return"]["balance"]["matic"];
  $mbl = $json["return"]["balance"]["mbl"];
  $mkr = $json["return"]["balance"]["mkr"];
  $neo = $json["return"]["balance"]["neo"];
  $nrg = $json["return"]["balance"]["nrg"];

$nxt = $json["return"]["balance"]["nxt"];
$ocean = $json["return"]["balance"]["ocean"];
$octo = $json["return"]["balance"]["octo"];
$okb = $json["return"]["balance"]["okb"];
$omg = $json["return"]["balance"]["omg"];
$ont = $json["return"]["balance"]["ont"];
$orbs = $json["return"]["balance"]["orbs"];
$oxt = $json["return"]["balance"]["oxt"];
$paxg = $json["return"]["balance"]["paxg"];

$pundix = $json["return"]["balance"]["pundix"];
$pxg = $json["return"]["balance"]["pxg"];
$qtum = $json["return"]["balance"]["qtum"];
$ren = $json["return"]["balance"]["ren"];
$rep = $json["return"]["balance"]["rep"];
$rvn = $json["return"]["balance"]["rvn"];
$sand = $json["return"]["balance"]["sand"];
$sfi = $json["return"]["balance"]["sfi"];
$snx = $json["return"]["balance"]["snx"];
$solve = $json["return"]["balance"]["solve"];

$ssp = $json["return"]["balance"]["ssp"];
$stq = $json["return"]["balance"]["stq"];
$scc = $json["return"]["balance"]["scc"];
$sumo = $json["return"]["balance"]["sumo"];
$sushi = $json["return"]["balance"]["sushi"];
$tad = $json["return"]["balance"]["tad"];
$ten = $json["return"]["balance"]["ten"];
$tfuel = $json["return"]["balance"]["tfuel"];
$theta = $json["return"]["balance"]["theta"];
$titan = $json["return"]["balance"]["titan"];
$trx = $json["return"]["balance"]["trx"];
$uma = $json["return"]["balance"]["uma"];
$uni = $json["return"]["balance"]["uni"];
$usdc = $json["return"]["balance"]["usdc"];
$usdt = $json["return"]["balance"]["usdt"];
$vex = $json["return"]["balance"]["vex"];
$vidy = $json["return"]["balance"]["vidy"];
$vidyx = $json["return"]["balance"]["vidyx"];
$vra = $json["return"]["balance"]["vra"];
$vsys = $json["return"]["balance"]["vsys"];
$waves = $json["return"]["balance"]["waves"];
$wbtc = $json["return"]["balance"]["wbtc"];
$wnxm = $json["return"]["balance"]["wnxm"];
$wozx = $json["return"]["balance"]["wozx"];

$xdc = $json["return"]["balance"]["xdc"];
$xem = $json["return"]["balance"]["xem"];
$xlm = $json["return"]["balance"]["xlm"];
$xmr = $json["return"]["balance"]["xmr"];
$xrp = $json["return"]["balance"]["xrp"];
$xsgd = $json["return"]["balance"]["xsgd"];
$xtz = $json["return"]["balance"]["xtz"];
$yfi = $json["return"]["balance"]["yfi"];
$yfii = $json["return"]["balance"]["yfii"];
$zec = $json["return"]["balance"]["zec"];
$zil = $json["return"]["balance"]["zil"];
$zrx = $json["return"]["balance"]["zrx"];

$key_botmantul="zzzzzzzzzzzzzzzz"; // isi dengan data key botmantul.id anda , bila belum memilki akses, daftar dahulu di https://botmantul.id/crypto/register.php
$secretKey_botmantul="uuuuuuuuuuuuuuuuuu"; // isi dengan data secretkey botmantul anda,bila belum memilki akses, daftar dahulu di https://botmantul.id/crypto/register.php
$API_HOST="https://botmantul.id/crypto/API_getInfoAssets.php";

$base64encdode = base64_encode($key_botmantul.$secretKey_botmantul);

   $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Accept: application/json';
    $headers[] = 'Client-ID: '.$key_botmantul;
    $headers[] = 'Pass-Key: '.$secretKey_botmantul;
   
   //echo "<br>headers = ".json_encode($headers);

$postData = array(
      'btc' => $btc,
      'eth' => $eth ,
      'ada' => $ada ,
      'algo' => $algo ,
      'atom' => $atom ,
      'bat' => $bat ,
      'bcd' => $bcd ,
      'bch' => $bch ,
      'abyss' => $abyss ,
      'att' => $att ,
      'bnb' => $bnb ,
      'bsv' => $bsv ,
      'btg' => $btg ,
      'bts' => $bts ,
      'btt' => $btt ,
      'cbk' => $cbk ,
      'cel' => $cel ,
      'celo' => $celo ,
      'ckb' => $ckb ,
      'coal' => $coal ,
      'comp' => $comp ,
      'coti' => $coti ,
      'cro' => $cro ,
      'crv' => $crv ,
      'dad' => $dad ,
      'dai' => $dai ,
      'dash' => $dash ,
      'dax' => $dax ,
      'dep' => $dep ,
      'dgb' => $dgb ,
      'doge' => $doge ,
      'dot' => $dot ,
      'egld' => $egld ,
      'em' => $em ,
      'enj' => $enj ,
      'eos' => $eos ,
      'etc' => $etc ,
      'eth' => $eth ,
      'eurs' => $eurs ,
      'fil' => $fil ,
      'firo' => $firo ,
      'gard' => $gard ,
      'grt' => $grt ,
      'gsc' => $gsc ,
      'gxc' => $gxc ,
      'hbar' => $hbar ,
      'hedg' => $hedg ,
      'hive' => $hive ,
      'hnst' => $hnst ,
      'hot' => $hot ,
      'hpb' => $hpb ,
      'idk' => $idk ,
      'ignis' => $ignis ,
      'inx' => $inx ,
      'iost' => $iost ,
      'iota' => $iota ,
      'jst' => $jst ,
      'kdag' => $kdag ,
      'let' => $let ,
      'lgold' => $lgold ,
      'link' => $link ,
      'lland' => $lland ,
      'lsilver' => $lsilver ,
      'ltc' => $ltc ,
      'lyfe' => $lyfe ,
      'mana' => $mana ,
      'matic' => $matic ,
      'mbl' => $mbl ,
      'mkr' => $mkr ,
      'neo' => $neo ,
      'nrg' => $nrg ,
      'nxt' => $nxt ,
      'ocean' => $ocean ,
      'octo' => $octo ,
      'okb' => $okb ,
      'omg' => $omg ,
      'ont' => $ont ,
      'orbs' => $orbs ,
      'oxt' => $oxt ,
      'paxg' => $paxg ,
      'pundix' => $pundix ,
      'pxg' => $pxg ,
      'qtum' => $qtum ,
      'ren' => $ren ,
      'rep' => $rep ,
      'rvn' => $rvn ,
      'sand' => $sand ,
      'sfi' => $sfi ,
      'snx' => $snx ,
      'solve' => $solve ,
      'ssp' => $ssp ,
      'stq' => $stq ,
      'scc' => $scc ,
      'sumo' => $sumo ,
      'sushi' => $sushi ,
      'tad' => $tad ,
      'ten' => $ten ,
      'tfuel' => $tfuel ,
      'theta' => $theta ,
      'titan' => $titan ,
      'trx' => $trx ,
      'uma' => $uma ,
      'uni' => $uni ,
     'usdc' => $usdc ,
     'usdt' => $usdt ,
     'vex' => $vex ,
     'vidy' => $vidy ,
     'vidyx' => $vidyx ,
     'vra' => $vra ,
     'vsys' => $vsys ,
     'waves' => $waves ,
     'wbtc' => $wbtc ,
     'wnxm' => $wnxm ,
     'wozx' => $wozx ,
     'xdc' => $xdc ,
     'xem' => $xem ,
     'xlm' => $xlm ,
     'xmr' => $xmr ,
     'xrp' => $xrp ,
     'xsgd' => $xsgd ,
     'xtz' => $xtz ,
     'yfi' => $yfi ,
     'yfii' => $yfii ,
     'zec' => $zec ,
     'zil' => $zil ,
    'zrx' => $zrx ,

    );

//echo "<br>postData = ".json_encode($postData);

    $ch = curl_init($API_HOST);
    //echo "<br>ch=".$ch;
    
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    
    $content = curl_exec($ch);
    curl_close($ch);
   
    $json = json_decode($content, true);

    //echo "<br>json: ".$json;
    //echo "<br>content  line 340 = ".$content;
    
    $status = $json["status"];
    //echo "<br>status line 343 = ".  $status;
     $hits = $json["hits"];
     $maxhits = $json["maxhits"];

    if ($status!="200") {
      $messages = $json["messages"];
      echo "<br>".$messages;
      exit;
    }
    
    $jumlah_data = count($json["detail"]);
    echo "<br>jumlah_data = ".$jumlah_data;
     echo "<br>hits sudah digunakan = ".$hits;
     echo "<br>maxhits = ".$maxhits;
    $total_asset=0;

    for ($i=0;$i<$jumlah_data;$i++) {
      $urut = $i + 1;
      $symbol = $json["detail"][$i]["symbol"];
      $saldo = $json["detail"][$i]["saldo"];
      $harga_satuan = $json["detail"][$i]["harga_satuan"];
      $harga_satuan_f = number_format($harga_satuan);
      $total = $json["detail"][$i]["total"];
      $total_f=number_format($total);
      $total_asset = $total_asset + $total;
      $total_asset_f = number_format($total_asset);
      echo "<br>".$urut. ". Saldo ".$saldo. " ".$symbol. " @ Rp ".$harga_satuan_f. " Senilai Rp ".$total_f;
      echo "<br>";

    }

    echo "<br>Total Asset Rp ".$total_asset_f;

?>
