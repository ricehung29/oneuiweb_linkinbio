        var arrLang = new Array();
        arrLang['en'] = new Array();
        arrLang['zh-Hant'] = new Array();

        // English content
        arrLang['en'][''] = '';
        arrLang['en']['linkretit'] = 'Instagram Bio Link Redirection Services';
        arrLang['en']['entick'] = '✓' ;
        arrLang['en']['zhtick'] = ' ';
        arrLang['en']['language'] = 'Language';
        arrLang['en']['links'] = 'Links';
        arrLang['en']['other'] = 'Other';
        arrLang['en']['developer'] = 'This page was developed and hosted by me';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';       



        // zh-Hant content 
        arrLang['zh-Hant'][''] = '';
        arrLang['zh-Hant']['linkretit'] = 'IG 網頁連結重新導向服務';
        arrLang['zh-Hant']['entick'] = ' ';
        arrLang['zh-Hant']['zhtick'] = '✓';
        arrLang['zh-Hant']['language'] = '語言';
        arrLang['zh-Hant']['links'] = '連結';
        arrLang['zh-Hant']['other'] = '其他';
        arrLang['zh-Hant']['developer'] = '此網頁由本人開發及維護';
        arrLang['zh-Hant'][''] = '';
        arrLang['zh-Hant'][''] = '';


        // Process translation
        $(function() {
        $('.translate').click(function() {
            var lang = $(this).attr('id');

            $('.lang').each(function(index, item) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
            });
        });
        });
