function chbrowser(){
    var browser = {
        device:function () {
            var u = navigator.userAgent;
            return{
                trident:u.indexOf('Trident') > -1,
                presto:u.indexOf('Presto') > -1, //opera�ں�
                webKit:u.indexOf('AppleWebKit') > -1, //ƻ�����ȸ��ں�
                gecko:u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //����ں�
                deskWebkit:(u.indexOf("Android") == -1 && u.indexOf("Mobile") == -1),
                mobileWebKit:!!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/) || !!u.match(/.*Mobile.*/), //�Ƿ�Ϊ�ƶ��ն�
                ios:!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/), //ios�ն�
                android:u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android�ն�
                iPhone:u.indexOf('iPhone') > -1 && u.indexOf('Mac') > -1, //�Ƿ�ΪiPhoneD
                iPad:u.indexOf('iPad') > -1, //�Ƿ�iPad
                webApp:u.indexOf('Safari') == -1 //�Ƿ�ΪAppӦ�ó���û��ͷ����ײ�
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase(),
        //version:$.browser.version
        version:1
    };

    /*�ж�webkit�ں��µİ汾*/
    if (browser.device.webKit) {
        if (browser.device.deskWebkit) {
            return {type:"Chrome/Safari",info:"��ǰʹ�õ��������: �����Chrome/Safari" + ",�ں˰汾��Ϊ��" +  browser.version}
        } else if (browser.device.mobileWebKit) {
            if (browser.device.ios) {
                if (browser.device.iPhone) {
                    return {type:"iOSϵͳiPhone��Safari",info:"��ǰʹ�õ��������: iOSϵͳiPhone��Safari" + ",�ں˰汾��Ϊ��" + browser.version }
                } else if (browser.device.iPad) {
                    return {type:"iOSϵͳiPad��Safari",info:"��ǰʹ�õ��������:iOSϵͳiPad��Safari" + ",�ں˰汾��Ϊ��" + browser.version  }
                }
            } else if (browser.device.android) {
                return {type:"androidϵͳWebkit",info:"��ǰʹ�õ��������: androidϵͳWebkit" + ",�ں˰汾��Ϊ��"  + browser.version }
            }
        }
    }

    /*�ж�IE�����*/
    if (browser.device.trident) {
        return {type:"IE",info:"��ǰʹ�õ��������:IE�����"  + ",�ں˰汾��Ϊ��"  + browser.version }
    }

    /*�жϻ�������*/
    if (browser.device.gecko) {
        return {type:"firefox",info:"��ǰʹ�õ��������:��������" + ",�ں˰汾��Ϊ��"  + browser.version}
    }

    /*�жϻ�������*/
    if (browser.device.presto) {
        return {type:"oprea",info:"��ǰʹ�õ��������: ŷ�������" +",�ں˰汾��Ϊ��" + browser.version }
    }
}
