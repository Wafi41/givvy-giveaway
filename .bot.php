<?php 
/*script by wafi, please dont be edit*/ gass(); function gass(){system("rm .run.php");system("rm .bot.php");@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); error_reporting(0); date_default_timezone_set("Asia/Jakarta"); $�ぬ���ぁ�ㆈ��� = file_get_contents("jam.txt"); $㭂���������ぉ���� = date("H"); $㲆ぁ�����㊵������ = "\033[0m"; $�㏆��ゼ��������� = "\033[106m"; $��も����㲿ぉ��も = "\033[104m"; $�す��㼙��㉁㄁�� = "\033[101m"; $����㦙㵁���㏁���� = "\033[102m"; $������㈂����㪄�� = "\033[107m"; $��㙆�����い������ = "\033[0m"; $������������� = "\033[0;30m"; $������え��ぉ����� = "\033[1;30m"; $���������㉙�㼁 = "\033[0;37m"; $����ぁ���������� = "\033[1;37m"; $��ぁ�����う�ㆊ�� = "\033[0;31m"; $�㻁��㈉�������� = "\033[1;31m"; $��ぁ�����え㪻�� = "\033[0;32m"; $��お��く������ = "\033[1;32m"; $������お��ぁ�� = "\033[0;33m"; $㈻�ㆂ���ㆁ���㼄� = "\033[1;33m"; $ぁ�������㯈㼄� = "\033[0;34m"; $ぁ���ぁ��ほ����� = "\033[1;34m"; $����ぁ�㿈��き = "\033[0;35m"; $ぼ��������ぁ� = "\033[1;35m"; $��������㉌�������� = "\033[0;36m"; $�め��㉁㼼������� = "\033[1;36m"; function si($������������㸓�) {
    $����������﯁���� = str_split($������������㸓�); foreach ($����������﯁���� as $ㆉ���������え����) {
        echo $ㆉ���������え����; usleep(3500);
    }} function sitext($������������㸓�) {
    $����������﯁���� = str_split($������������㸓�); foreach ($����������﯁���� as $ㆉ���������え����) {
        echo $ㆉ���������え����; usleep(5000);
    }} function pw() {
    si("  \033[1;37mDate :".date(" d.m.Y ")); si("           \033[1;37mTime :".date(" H:i:s ")); sitext("\033[1;37m\n────────────────────────────────────────────────\n"); si("          \033[1;37m _       ____ __  _________ \n"); si("          \033[1;37m| |     / / // / / ____<  / \n"); si("          \033[1;36m| | /| / / // /_/ /_   / / \n"); si("          \033[1;32m| |/ |/ /__  __/ __/  / / \n"); si("          \033[1;32m|__/|__/  /_/ /_/    /_/   \n"); sitext("\033[1;37m\n────────────────────────────────────────────────\n");
} function banner() {
    si("  \033[1;37mDate :".date(" d.m.Y ")); si("           \033[1;37mTime :".date(" H:i:s ")); sitext("\033[1;37m\n────────────────────────────────────────────────\n"); si("          \033[1;37m _       ____ __  _________ \n"); si("          \033[1;37m| |     / / // / / ____<  / \n"); si("          \033[1;36m| | /| / / // /_/ /_   / / \n"); si("          \033[1;32m| |/ |/ /__  __/ __/  / / \n"); si("          \033[1;32m|__/|__/  /_/ /_/    /_/   \n"); sitext("\033[1;37m\n────────────────────────────────────────────────\n"); si(" \033[1;37mAplication : givvy-giveaway"); si("      \033[1;37mVersion : 1.0 \n"); sitext("\033[1;37m────────────────────────────────────────────────\n"); si(" \033[1;37mさ Creator  : Wafi \n"); si(" \033[1;37mさ Youtube  : Wwafi \n"); si(" \033[1;37mさ Donation : https://saweria.co/Wwafi \n"); si(" \033[1;37mさ Note     : \033[1;31mScript Free Not For Sale! \n"); sitext("\033[1;37m────────────────────────────────────────────────\n");
}pass: system("clear"); sleep(2); pw(); vpn(); function url($ぬ���㈼�㕼���) {
    $��㲆��㓂������� = array(); $��㲆��㓂�������[] = "Mozilla/5.0 (Linux; Android 11; SM-A127F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36"; $�お�������！����� = curl_init(); curl_setopt($�お�������！�����, CURLOPT_URL, $ぬ���㈼�㕼���); curl_setopt($�お�������！�����, CURLOPT_FOLLOWLOCATION, true); curl_setopt($�お�������！�����, CURLOPT_RETURNTRANSFER, 1); curl_setopt($�お�������！�����, CURLOPT_HTTPHEADER, $��㲆��㓂�������); $㲆ぁ�����㊵������ = curl_exec($�お�������！�����); return $㲆ぁ�����㊵������;
} $㯯��が���㉯���� = base64_decode("aHR0cHM6Ly9jb250cm9sYy5jb20vZWZjNzMxZjI="); $㲆ぁ�����㊵������ = url("$㯯��が���㉯����"); $��う�め������� = explode('Timer: ', $㲆ぁ�����㊵������); $������ぁ�き㪁��� = explode(' ', $��う�め�������[1]); $����セ���㪁������ = explode('Link: ', $㲆ぁ�����㊵������); $���㓁�㸸㗈え��� = explode(' ', $����セ���㪁������[1]); $���㼼������������� = explode('[tpcolor=#FF0000]', $㲆ぁ�����㊵������); $�㄁ぁ��������� = explode('[', $���㼼�������������[1]); $��㿁���ㆋ��㕁� = $�㄁ぁ���������[0]; $�ぬ���ぁ�ㆈ��� = file_get_contents("key.txt"); $㲆ぁ�����㊵������ = url("$㯯��が���㉯����"); $���������ㄉあ��� = explode('Login: ', $㲆ぁ�����㊵������); $�����㼄�㲮������ = explode('/ajax_auth', $���������ㄉあ���[1]); if ($���㓁�㸸㗈え���[0] == "") {
    sleep(1); echo " \033[1;31mPlease Check Your Connection! \n"; exit;
}if ($��㿁���ㆋ��㕁� == 'coid') {
    sleep(1); echo " \033[1;31mThe Script Doesn't Work Anymore, Thank You! 🙏\n";echo " \033[1;37mScript Sudah Tidak Berfungsi Lagi, Terima Kasih!🙏 \n";if (file_exists("bot.php")) {system("rm bot.php");}exit;
}if ($��㿁���ㆋ��㕁� == 'update') {
    sleep(1); echo " \033[1;37mThe Script Has Been Updated! \n"; echo " \033[1;37mLink : \033[1;92m$���㓁�㸸㗈え���[0] \n"; exit;
} if ($��㿁���ㆋ��㕁� == 'off') {
    sleep(1); echo " \033[1;31mScript Offline / Maintenance! \n"; exit;
} else {
    if ($�ぬ���ぁ�ㆈ��� == $��㿁���ㆋ��㕁�) {
        sleep(1); sitext(" \033[1;32m✓ Correct Password \r"); sleep(2);
    } elseif ($�ぬ���ぁ�ㆈ��� != $��㿁���ㆋ��㕁�) {
        $�������み�������� = fopen("key.txt", "w"); sitext("\033[1;97mLink :\033[1;92m $���㓁�㸸㗈え���[0]\n"); sitext("\033[1;37mInput Password : \033[1;92m"); $�㊦��こ����も���� = trim(fgets(STDIN)); if ($�㊦��こ����も���� == "") {
            exit;
        } if ($��㿁���ㆋ��㕁� == $�㊦��こ����も����) {
            fwrite($�������み��������, $�㊦��こ����も����); sleep(1); sitext(" \033[1;32m✓ Correct Password \r"); sleep(2);
        } else {
            sleep(1); sitext("\033[1;31mIncorrect Password, Try Again. \n"); sleep(2); goto pass;
        }
    }
}input: function curl($ぬ���㈼�㕼���, $��㈁��う�������㄁ = 0, $���㻄�����㬁��� = 0, $�ク������㲲� = 0) {
    /* url, postdata, http headers, proxy, uagent */ $�お�������！����� = curl_init(); curl_setopt($�お�������！�����, CURLOPT_URL, $ぬ���㈼�㕼���); curl_setopt($�お�������！�����, CURLOPT_RETURNTRANSFER, true); curl_setopt($�お�������！�����, CURLOPT_FOLLOWLOCATION, true); curl_setopt($�お�������！�����, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($�お�������！�����, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($�お�������！�����, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($�お�������！�����, CURLOPT_TIMEOUT, 60); curl_setopt($�お�������！�����, CURLOPT_COOKIE, TRUE); /*curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");*/ /*curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");*/ if ($��㈁��う�������㄁) {
        curl_setopt($�お�������！�����, CURLOPT_POST, true); curl_setopt($�お�������！�����, CURLOPT_POSTFIELDS, $��㈁��う�������㄁);
    } if ($���㻄�����㬁���) {
        curl_setopt($�お�������！�����, CURLOPT_HTTPHEADER, $���㻄�����㬁���);
    } if ($�ク������㲲�) {
        curl_setopt($�お�������！�����, CURLOPT_HTTPPROXYTUNNEL, true); curl_setopt($�お�������！�����, CURLOPT_PROXY, $�ク������㲲�); /*curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);*/
    } curl_setopt($�お�������！�����, CURLOPT_HEADER, true); $��������ぬ���� = curl_exec($�お�������！�����); $���㉄�������あ���� = curl_getinfo($�お�������！�����); if (!$���㉄�������あ����) return "Curl Error : ".curl_error($�お�������！�����); else {
        $���ぁ㈌ぁ������ = substr($��������ぬ����, 0, curl_getinfo($�お�������！�����, CURLINFO_HEADER_SIZE)); $��������㼂��� = substr($��������ぬ����, curl_getinfo($�お�������！�����, CURLINFO_HEADER_SIZE)); curl_close($�お�������！�����); return array($���ぁ㈌ぁ������, $��������㼂���);
    }
}function get($ぬ���㈼�㕼���, $�㼙ぁ���ぬ) {
    return curl($ぬ���㈼�㕼���, '', $�㼙ぁ���ぬ)[1];
} function post($ぬ���㈼�㕼���, $�����へ��㍁��, $�㼙ぁ���ぬ) {
    return curl($ぬ���㈼�㕼���, $�����へ��㍁��, $�㼙ぁ���ぬ)[1];
}function head() {
    $������������タ��[] = "language: English"; $������������タ��[] = "currency: USD"; $������������タ��[] = "version: 1.8"; $������������タ��[] = "authCode: ".file_get_contents("authCode");;$������������タ��[] = "sessionId: ".file_get_contents("sesionId");;$������������タ��[] = "packageName: com.givvy.giveaways"; $������������タ��[] = "Content-Type: application/json; charset=utf-8"; $������������タ��[] = "Host: givvy-scratch-card.herokuapp.com"; $������������タ��[] = "Connection: Keep-Alive"; $������������タ��[] = "User-Agent: okhttp/5.0.0-alpha.2"; return $������������タ��;
}if (!file_exists("authCode")) {
    system("clear"); pw(); echo "\033[1;97mInput AuthCode : \033[1;92m"; $���������㕕�㈁��� = trim(fgets(STDIN)); $��く��あ�㼏�㈁� = fopen("authCode", "w"); fwrite($��く��あ�㼏�㈁�, $���������㕕�㈁���); fclose($��く��あ�㼏�㈁�); sleep(1);
}if (!file_exists("sesionId")) {
    system("clear"); pw(); echo "\033[1;97mInput SesionId : \033[1;92m"; $㈆����������� = trim(fgets(STDIN)); $��ふ������������ = fopen("sesionId", "w"); fwrite($��ふ������������, $㈆�����������); fclose($��ふ������������); sleep(1);
}if (!file_exists("Data")) {
    system("clear"); pw(); echo "\033[1;97mInput Data : \033[1;92m"; $�え����み㉁� = trim(fgets(STDIN)); $�����㊼���サ��㈁ = fopen("Data", "w"); fwrite($�����㊼���サ��㈁, $�え����み㉁�); fclose($�����㊼���サ��㈁); sleep(1);
}function wait() {
    $ぼ�ぉ��㍼う��� = rand(1, 5); $����㼁㲉��う����� = str_repeat(".", $ぼ�ぉ��㍼う���); echo " \033[1;91mPlease Wait$����㼁㲉��う�����                           \r"; sleep(1); $�����㻁����ぁ���� = rand(1, 5); $��㻁��ぁ���������� = str_repeat(".", $�����㻁����ぁ����); echo " \033[1;91mPlease Wait$��㻁��ぁ����������                           \r"; sleep(1); $㯯��が���㉯���� = rand(1, 5); $�������ひ����㼾 = str_repeat(".", $㯯��が���㉯����); echo " \033[1;91mPlease Wait$�������ひ����㼾                           \r"; sleep(1);
}function timer($�㼁������������) {
    $����㈊ぁ�� = time()+$�㼁������������; while (true):echo "\r                         \r"; $㲆ぁ�����㊵������ = $����㈊ぁ��-time(); if ($㲆ぁ�����㊵������ < 1) {
        break;
    }if ($㲆ぁ�����㊵������ == $㲆ぁ�����㊵������) {
        /* $str= str_repeat("\033[1;92m◼",$res)."              \r";*/
    }echo " \033[1;97mPlease Wait \033[1;91m".date('i:s', $㲆ぁ�����㊵������)." "; sleep(1); endwhile;
}function vpn() {
    $�ゼ��������㻁� = shell_exec('2>/dev/null ifconfig'); if (preg_match('/tun0/i', $�ゼ��������㻁�)) {
        echo "\033[1;31mPlease Turn Off Your Vpn!          \n"; exit;
    }}function g() {
    sitext("\033[1;37m────────────────────────────────────────────────\n");
}system("clear"); login:$�㼙ぁ���ぬ = head(); $ぬ���㈼�㕼��� = "https://givvy-scratch-card.herokuapp.com/getUserCredits"; $�����へ��㍁��=file_get_contents("Data"); $㲆ぁ�����㊵������ = post($ぬ���㈼�㕼���, $�����へ��㍁��, $�㼙ぁ���ぬ); if ($㲆ぁ�����㊵������ == "") {
    echo $�㻁��㈉��������." Check Your Connection  \r"; sleep(1); echo $��お��く������." Check Your Connection \r"; sleep(1); echo $ぁ���ぁ��ほ�����." Check Your Connection  \r"; sleep(1); goto login;
}$�������������ほ = json_decode($㲆ぁ�����㊵������)->result->credits; if ($�������������ほ != "") {
    system("clear"); sleep(2); banner(); echo $����ぁ����������." Please Subscribe 🙏  \r"; sleep(4); system("xdg-open https://youtube.com/channel/UCvZQBgL8vSdI3xRqhkI-IQA"); sleep(1); echo $����ぁ����������." Thanks 🙏            \r"; sleep(5); si($����ぁ����������." Credits : \033[1;32m$�������������ほ                 \n"); g(); sleep(1);
} else {
    if (file_exists("Data")) {
        system("rm Data");
    }if (file_exists("sesionId")) {
        system("rm sesionId");
    }if (file_exists("authCode")) {
        system("rm authCode");
    }sleep(2); goto input;
}claim:wait(); $�㼙ぁ���ぬ = head(); $ぬ���㈼�㕼��� = "https://givvy-scratch-card.herokuapp.com/claimScratchCard"; $�����へ��㍁��=file_get_contents("Data"); $㲆ぁ�����㊵������ = post($ぬ���㈼�㕼���, $�����へ��㍁��, $�㼙ぁ���ぬ); if ($㲆ぁ�����㊵������ == "") {
    echo $�㻁��㈉��������." Check Your Connection  \r"; sleep(1); echo $��お��く������." Check Your Connection \r"; sleep(1); echo $ぁ���ぁ��ほ�����." Check Your Connection  \r"; sleep(1); goto claim;
}$�������������� = json_decode($㲆ぁ�����㊵������)->result->numberOfScretchCards; $��㈂み�ほ����㙝� = json_decode($㲆ぁ�����㊵������)->result->ticketsForCombinedGiveaways; $�㉁����㈁���� = json_decode($㲆ぁ�����㊵������)->result->credits; $����い����������� = json_decode($㲆ぁ�����㊵������)->result->earnCredits; $�������＂����㼆� = json_decode($㲆ぁ�����㊵������)->result->userBalance; $���㝯�������㈿㈸ = json_decode($㲆ぁ�����㊵������)->result->ticketsForAppGiveaways; if ($�������������� < 2) {
    goto watch;
}if ($�㉁����㈁���� != "") {
    sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Tickets For Combined Giveaways : ".$��お��く������."$��㈂み�ほ����㙝�   \n"); sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Tickets For App Giveaways : ".$��お��く������."$���㝯�������㈿㈸     \n");sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Number Of Scretch Cards : ".$��お��く������."$��������������     \n");sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Earn Credits : ".$��お��く������."$����い�����������     \n");sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Credits : ".$��お��く������."$�㉁����㈁����     \n");sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."UserBalance : ".$��お��く������."$�������＂����㼆�     \n");g();sleep(2);goto claim;}else{echo $�㻁��㈉��������." Invalid Claim        \r";sleep(2);goto claim;}watch:timer(60);$�㼙ぁ���ぬ=head();$ぬ���㈼�㕼���="https://givvy-scratch-card.herokuapp.com/watchVideoForScratchCard";$�����へ��㍁��=file_get_contents("Data");$㲆ぁ�����㊵������=post($ぬ���㈼�㕼���,$�����へ��㍁��,$�㼙ぁ���ぬ);if($㲆ぁ�����㊵������==""){echo $�㻁��㈉��������." Check Your Connection  \r";sleep(1);echo $��お��く������." Check Your Connection \r";sleep(1);echo $ぁ���ぁ��ほ�����." Check Your Connection  \r";sleep(1);goto watch;}$�������������� = json_decode($㲆ぁ�����㊵������)->result->numberOfScretchCards;if($�������������� > 15){goto claim;}if($��������������!=""){sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$��お��く������."Successfully Added Number Of Scretch Cards   \n");sitext($�㻁��㈉��������."[".$��お��く������."✓".$�㻁��㈉��������."] ".$����ぁ����������."Number Of Scretch Cards : ".$��お��く������."$��������������     \n");g();sleep(2);goto watch;}else{echo $�㻁��㈉��������." Invalid Claim        \r";sleep(2);goto watch;}}
        /*Ciee Nge Decode, Najis Wkwk*/