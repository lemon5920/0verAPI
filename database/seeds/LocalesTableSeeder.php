<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class LocalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locales = array(
            "ca_ES" => array("Català", "加泰羅尼亞文 (西班牙)"),
            "cs_CZ" => array("Čeština", "捷克文 (捷克共和國)"),
            "cy_GB" => array("Cymraeg", "威爾斯文 (英國)"),
            "da_DK" => array("Dansk", "丹麥文 (丹麥)"),
            "de_DE" => array("Deutsch", "德文 (德國)"),
            "eu_ES" => array("Euskara", "巴斯克文 (西班牙)"),
            "en_US" => array("English (US)", "英文 (美國)"),
            "es_ES" => array("Español (España)", "西班牙文 (西班牙)"),
            "fi_FI" => array("Suomi", "芬蘭文 (芬蘭)"),
            "fr_FR" => array("Français (France)", "法文 (法國)"),
            "gl_ES" => array("Galego", "加利西亞文 (西班牙)"),
            "hu_HU" => array("Magyar", "匈牙利文 (匈牙利)"),
            "it_IT" => array("Italiano", "義大利文 (義大利)"),
            "ja_JP" => array("日本語", "日本語"),
            "ko_KR" => array("한국어", "韓文 (南韓)"),
            "nb_NO" => array("Norsk (bokmål)", "巴克摩挪威文 (挪威)"),
            "nn_NO" => array("Norsk (nynorsk)", "耐諾斯克挪威文 (挪威)"),
            "nl_NL" => array("Nederlands", "荷蘭文 (荷蘭)"),
            "fy_NL" => array("Frysk", "西弗里西亞文 (荷蘭)"),
            "pl_PL" => array("Polski", "波蘭文 (波蘭)"),
            "pt_BR" => array("Português (Brasil)", "葡萄牙文 (巴西)"),
            "pt_PT" => array("Português (Portugal)", "葡萄牙文 (葡萄牙)"),
            "ro_RO" => array("Română", "羅馬尼亞文 (羅馬尼亞)"),
            "ru_RU" => array("Русский", "俄文 (俄羅斯)"),
            "sk_SK" => array("Slovenčina", "斯洛伐克文 (斯洛伐克)"),
            "sl_SI" => array("Slovenščina", "斯洛維尼亞文 (斯洛維尼亞)"),
            "sv_SE" => array("Svenska", "瑞典文 (瑞典)"),
            "th_TH" => array("ภาษาไทย", "泰文 (泰國)"),
            "tr_TR" => array("Türkçe", "土耳其文 (土耳其)"),
            "zh_CN" => array("中文 (简体)", "中文 (简体)"),
            "zh_HK" => array("中文 (香港)", "中文 (香港)"),
            "zh_TW" => array("中文 (台灣)", "中文 (台灣)"),
            "af_ZA" => array("Afrikaans", "南非荷蘭文 (南非)"),
            "sq_AL" => array("Shqip", "阿爾巴尼亞文 (阿爾巴尼亞)"),
            "hy_AM" => array("Հայերեն", "亞美尼亞文 (亞美尼亞)"),
            "az_AZ" => array("Azərbaycan dili", "亞塞拜然文 (亞塞拜然)"),
            "be_BY" => array("Беларуская", "白俄羅斯文 (白俄羅斯)"),
            "bn_IN" => array("বাংলা","孟加拉文 (印度)"),
            "bs_BA" => array("Bosanski", "波士尼亞文 (波士尼亞與赫塞格維納)"),
            "bg_BG" => array("Български", "保加利亞文 (保加利亞)"),
            "hr_HR" => array("Hrvatski", "克羅埃西亞文 (克羅埃西亞)"),
            "nl_BE" => array("Nederlands (België)", "荷蘭文 (比利時)"),
            "en_GB" => array("English (UK)", "英文 (英國)"),
            "en_IN" => array("English (India)", "英文 (印度)"),
            "et_EE" => array("Eesti", "愛沙尼亞文 (愛沙尼亞)"),
            "fo_FO" => array("Føroyskt", "法羅文 (法羅群島)"),
            "fr_CA" => array("Français (Canada)", "法文 (加拿大)"),
            "ka_GE" => array("ქართული", "喬治亞文 (喬治亞共和國)"),
            "el_GR" => array("Ελληνικά", "希臘文 (希臘)"),
            "gu_IN" => array("ગુજરાતી","古吉拉特文 (印度)"),
            "hi_IN" => array("हिन्दी","北印度文 (印度)"),
            "is_IS" => array("Íslenska", "冰島文 (冰島)"),
            "id_ID" => array("Bahasa Indonesia", "印尼文 (印尼)"),
            "ga_IE" => array("Gaeilge", "愛爾蘭文 (愛爾蘭)"),
            "kn_IN" => array("ಕನ್ನಡ", "坎那達文 (印度)"),
            "kk_KZ" => array("Қазақша", "哈薩克文 (哈薩克)"),
            "lv_LV" => array("Latviešu", "拉脫維亞文 (拉脫維亞)"),
            "lt_LT" => array("Lietuvių", "立陶宛文 (立陶宛)"),
            "mk_MK" => array("Македонски", "馬其頓文 (馬其頓)"),
            "mg_MG" => array("Malagasy", "馬拉加什文 (馬達加斯加)"),
            "ms_MY" => array("Bahasa Melayu", "馬來文 (馬來西亞)"),
            "mt_MT" => array("Malti", "馬爾他文 (馬爾他)"),
            "mr_IN" => array("मराठी", "馬拉地文 (印度)"),
            "mn_MN" => array("Монгол", "蒙古文 (蒙古)"),
            "ne_NP" => array("नेपाली", "尼泊爾文 (尼泊爾)"),
            "pa_IN" => array("ਪੰਜਾਬੀ", "旁遮普文 (印度)"),
            "rm_CH" => array("Rumantsch", "羅曼斯文 (瑞士)"),
            "sr_RS" => array("Српски", "塞爾維亞文 (塞爾維亞)"),
            "so_SO" => array("Soomaaliga", "索馬利文 (索馬利亞)"),
            "sw_KE" => array("Kiswahili", "史瓦希里文 (肯亞)"),
            "tl_PH" => array("Filipino", "塔加路族文 (菲律賓)"),
            "ta_IN" => array("தமிழ்", "坦米爾文 (印度)"),
            "te_IN" => array("తెలుగు", "泰盧固文 (印度)"),
            "ml_IN" => array("മലയാളം", "馬來亞拉姆文 (印度)"),
            "uk_UA" => array("Українська", "烏克蘭文 (烏克蘭)"),
            "uz_UZ" => array("O'zbek", "烏茲別克文 (烏茲別克)"),
            "vi_VN" => array("Tiếng Việt", "越南文 (越南)"),
            "zu_ZA" => array("isiZulu", "祖魯文 (南非)"),
            "km_KH" => array("ភាសាខ្មែរ", "高棉文 (柬埔寨)"),
            "he_IL" => array("עברית", "希伯來文 (以色列)"),
            "ur_PK" => array("ردو", "烏都文 (巴基斯坦)"),
            "fa_IR" => array("فارسی", "波斯文 (伊朗)"),
            "qu_PE" => array("Qhichwa", "蓋楚瓦文 (秘魯)"),
            "se_NO" => array("Davvisámegiella", "北方薩米文 (挪威)"),
            "ps_AF" => array("پښتو", "普什圖文 (阿富汗)")
        );

        foreach($locales as $locale_title => $locale_details) {
            if ($locale_title == 'en_US' || $locale_title == 'ja_JP' || $locale_title == 'zh_TW' || $locale_title == 'de_DE') {
                DB::table('locales')->insert(
                    ['lang_code' => $locale_title, 'local_title' => $locale_details['0'], 'title' => $locale_details['1'], 'created_at' => Carbon::now()->toIso8601String(), 'updated_at' => Carbon::now()->toIso8601String()]
                );
            } else {
                DB::table('locales')->insert(
                    ['lang_code' => $locale_title, 'local_title' => $locale_details['0'], 'title' => $locale_details['1'], 'created_at' => Carbon::now()->toIso8601String(), 'updated_at' => Carbon::now()->toIso8601String(), 'deleted_at' => Carbon::now()->toIso8601String()]
                );
            }
        }
    }
}
