function chbrowser(){
    var browser = {
        device:function () {
            var u = navigator.userAgent;
            return{
                trident:u.indexOf('Trident') > -1,
                presto:u.indexOf('Presto') > -1, //opera内核
                webKit:u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko:u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                deskWebkit:(u.indexOf("Android") == -1 && u.indexOf("Mobile") == -1),
                mobileWebKit:!!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/) || !!u.match(/.*Mobile.*/), //是否为移动终端
                ios:!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/), //ios终端
                android:u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端
                iPhone:u.indexOf('iPhone') > -1 && u.indexOf('Mac') > -1, //是否为iPhoneD
                iPad:u.indexOf('iPad') > -1, //是否iPad
                webApp:u.indexOf('Safari') == -1 //是否为App应用程序，没有头部与底部
            };
        }(),
        language:(navigator.browserLanguage || navigator.language).toLowerCase(),
        //version:$.browser.version
        version:1
    };

    /*判断webkit内核下的版本*/
    if (browser.device.webKit) {
        if (browser.device.deskWebkit) {
            return {type:"Chrome/Safari",info:"当前使用的浏览器是: 桌面版Chrome/Safari" + ",内核版本号为：" +  browser.version}
        } else if (browser.device.mobileWebKit) {
            if (browser.device.ios) {
                if (browser.device.iPhone) {
                    return {type:"iOS系统iPhone版Safari",info:"当前使用的浏览器是: iOS系统iPhone版Safari" + ",内核版本号为：" + browser.version }
                } else if (browser.device.iPad) {
                    return {type:"iOS系统iPad版Safari",info:"当前使用的浏览器是:iOS系统iPad版Safari" + ",内核版本号为：" + browser.version  }
                }
            } else if (browser.device.android) {
                return {type:"android系统Webkit",info:"当前使用的浏览器是: android系统Webkit" + ",内核版本号为："  + browser.version }
            }
        }
    }

    /*判断IE浏览器*/
    if (browser.device.trident) {
        return {type:"IE",info:"当前使用的浏览器是:IE浏览器"  + ",内核版本号为："  + browser.version }
    }

    /*判断火狐浏览器*/
    if (browser.device.gecko) {
        return {type:"firefox",info:"当前使用的浏览器是:火狐浏览器" + ",内核版本号为："  + browser.version}
    }

    /*判断火狐浏览器*/
    if (browser.device.presto) {
        return {type:"oprea",info:"当前使用的浏览器是: 欧朋浏览器" +",内核版本号为：" + browser.version }
    }
}
