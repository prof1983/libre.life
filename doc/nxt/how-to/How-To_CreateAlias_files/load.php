function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/w/load.php","apiScript":"/w/api.php"}});mw.loader.register([["site","1398262765",[],"site"],["noscript","1398262765",[],"noscript"],["startup","1433761929",[],"startup"],["filepage","1398262765"],["user.groups","1398262765",[],"user"],["user","1398262765",[],"user"],["user.cssprefs","1398262765",["mediawiki.user"],"private"],["user.options","1398262765",[],"private"],["user.tokens","1398262765",[],"private"],["mediawiki.language.data","1433761929",["mediawiki.language.init"]],[
"skins.cologneblue","1398262765"],["skins.modern","1398262765"],["skins.monobook","1398262765"],["skins.vector","1398262765"],["skins.vector.beta","1398262765"],["skins.vector.js","1398262765",["jquery.delayedBind"]],["skins.vector.collapsibleNav","1423479437",["jquery.client","jquery.cookie","jquery.tabIndex"]],["jquery","1398262765"],["jquery.appear","1398262765"],["jquery.arrowSteps","1398262765"],["jquery.async","1398262765"],["jquery.autoEllipsis","1398262765",["jquery.highlightText"]],["jquery.badge","1398262765",["mediawiki.language"]],["jquery.byteLength","1398262765"],["jquery.byteLimit","1398262765",["jquery.byteLength"]],["jquery.checkboxShiftClick","1398262765"],["jquery.chosen","1398262765"],["jquery.client","1398262765"],["jquery.color","1398262765",["jquery.colorUtil"]],["jquery.colorUtil","1398262765"],["jquery.cookie","1398262765"],["jquery.delayedBind","1398262765"],["jquery.expandableField","1398262765",["jquery.delayedBind"]],["jquery.farbtastic","1398262765",[
"jquery.colorUtil"]],["jquery.footHovzer","1398262765"],["jquery.form","1398262765"],["jquery.getAttrs","1398262765"],["jquery.hidpi","1398262765"],["jquery.highlightText","1398262765",["jquery.mwExtension"]],["jquery.hoverIntent","1398262765"],["jquery.json","1398262765"],["jquery.localize","1398262765"],["jquery.makeCollapsible","1423479437"],["jquery.mockjax","1398262765"],["jquery.mw-jump","1398262765"],["jquery.mwExtension","1398262765"],["jquery.placeholder","1398262765"],["jquery.qunit","1398262765"],["jquery.qunit.completenessTest","1398262765",["jquery.qunit"]],["jquery.spinner","1398262765"],["jquery.jStorage","1398262765",["jquery.json"]],["jquery.suggestions","1398262765",["jquery.autoEllipsis"]],["jquery.tabIndex","1398262765"],["jquery.tablesorter","1423481173",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1398262765",["jquery.client"]],["jquery.validate","1398262765"],["jquery.xmldom","1398262765"],["jquery.tipsy","1398262765"],[
"jquery.ui.core","1398262765",["jquery"],"jquery.ui"],["jquery.ui.widget","1398262765",[],"jquery.ui"],["jquery.ui.mouse","1398262765",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1398262765",[],"jquery.ui"],["jquery.ui.draggable","1398262765",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1398262765",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1398262765",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1398262765",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1398262765",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1398262765",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1398262765",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1398262765",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1398262765",["jquery"],"jquery.ui"],["jquery.effects.blind","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1398262765",["jquery.effects.core"],
"jquery.ui"],["jquery.effects.fade","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1398262765",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1398262765",["jquery.effects.core"],"jquery.ui"],["mediawiki","1398262765"],["mediawiki.api","1398262765",["mediawiki.util"]],["mediawiki.api.category","1398262765",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1398262765",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.login","1398262765",["mediawiki.api"]],["mediawiki.api.parse","1398262765",["mediawiki.api"]],["mediawiki.api.watch","1398262765",["mediawiki.api",
"user.tokens"]],["mediawiki.icon","1398262765"],["mediawiki.debug","1398262765",["jquery.footHovzer"]],["mediawiki.debug.init","1398262765",["mediawiki.debug"]],["mediawiki.inspect","1398262765",["jquery.byteLength","jquery.json"]],["mediawiki.feedback","1398262765",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1398262765",["jquery.hidpi"]],["mediawiki.htmlform","1423840150"],["mediawiki.notification","1398262765",["mediawiki.page.startup"]],["mediawiki.notify","1398262765"],["mediawiki.searchSuggest","1423479437",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1398262765",["jquery.byteLength","mediawiki.util"]],["mediawiki.Uri","1398262765"],["mediawiki.user","1398262765",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1423479436",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],[
"mediawiki.action.edit","1398262765",["mediawiki.action.edit.styles","jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.styles","1398262765"],["mediawiki.action.edit.collapsibleFooter","1398262765",["jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1398262765",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1398262765",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1398262765",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1398262765",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1423485313"],["mediawiki.action.view.postEdit","1423479437",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.rightClickEdit","1398262765"],["mediawiki.action.edit.editWarning","1423593132"],["mediawiki.action.watch.ajax","1398262765",["mediawiki.page.watch.ajax"]],["mediawiki.language","1398262765",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1398262765",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1398262765"],["mediawiki.language.init","1398262765"],["mediawiki.jqueryMsg","1398262765",["mediawiki.util","mediawiki.language"]],["mediawiki.language.months","1423481173",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1398262765"],["mediawiki.page.gallery","1398262765"],["mediawiki.page.ready","1398262765",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1398262765",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1398262765",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1423481172",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.page.image.pagination","1398262765",[
"jquery.spinner"]],["mediawiki.special","1398262765"],["mediawiki.special.block","1398262765",["mediawiki.util"]],["mediawiki.special.changeemail","1398262765",["mediawiki.util"]],["mediawiki.special.changeslist","1398262765"],["mediawiki.special.changeslist.enhanced","1398262765"],["mediawiki.special.movePage","1398262765",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp","1398262765"],["mediawiki.special.preferences","1398262765"],["mediawiki.special.recentchanges","1398262765",["mediawiki.special"]],["mediawiki.special.search","1423483304"],["mediawiki.special.undelete","1398262765"],["mediawiki.special.upload","1398262765",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin","1398262765"],["mediawiki.special.createaccount","1398262765"],["mediawiki.special.createaccount.js","1423840038",["mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1398262765",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1398262765",["jquery.getAttrs",
"jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1398262765",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1398262765"],["mediawiki.legacy.config","1398262765",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1398262765",["jquery.byteLimit"]],["mediawiki.legacy.shared","1398262765"],["mediawiki.legacy.oldshared","1398262765"],["mediawiki.legacy.upload","1398262765",["jquery.spinner","mediawiki.api","mediawiki.Title","mediawiki.util"]],["mediawiki.legacy.wikibits","1398262765",["mediawiki.util"]],["mediawiki.ui","1398262765"],["ext.uploadWizard","1398262765",["jquery.arrowSteps","jquery.autoEllipsis","jquery.client","jquery.ui.core","jquery.ui.dialog","jquery.ui.datepicker","jquery.ui.progressbar","jquery.spinner","jquery.ui.selectable","jquery.placeholder","jquery.suggestions","jquery.tipsy","jquery.ui.widget","jquery.validate","mediawiki.language","mediawiki.Uri",
"mediawiki.util","mediawiki.libs.jpegmeta","mediawiki.jqueryMsg","mediawiki.api","mediawiki.api.edit","mediawiki.api.category","mediawiki.api.parse","mediawiki.Title","mediawiki.user","mediawiki.feedback","ext.uploadWizard.apiUploadHandler","ext.uploadWizard.apiUploadFormDataHandler","ext.uploadWizard.events"],"ext.uploadWizard"],["ext.uploadWizard.tests","1398262765"],["ext.uploadWizard.campaigns","1398262765"],["ext.uploadWizard.campaign","1398262765",["jquery.ui.button"]],["ext.uploadWizard.events","1398262765"],["ext.babel","1398262765"],["ext.cleanchanges","1398262765"],["ext.translate","1398262765"],["ext.translate.base","1423481281",["mediawiki.util","mediawiki.api","ext.translate.hooks"]],["ext.translate.dropdownmenu","1398262765"],["ext.translate.editor","1423481281",["ext.translate.base","ext.translate.storage","ext.translate.hooks","ext.translate.dropdownmenu","ext.uls.buttons","jquery.uls.grid","mediawiki.util","mediawiki.Uri","mediawiki.api","mediawiki.api.edit",
"mediawiki.api.parse","mediawiki.user","mediawiki.jqueryMsg","jquery.makeCollapsible","jquery.tipsy","jquery.textchange","jquery.autosize","jquery.textSelection"]],["ext.translate.groupselector","1423481281",["ext.translate.base","jquery.uls.grid","ext.translate.statsbar","mediawiki.jqueryMsg","ext.translate.loader","jquery.ui.position.custom"]],["ext.translate.helplink","1398262765"],["ext.translate.hooks","1398262765"],["ext.translate.loader","1398262765"],["ext.translate.messagetable","1423481281",["ext.translate.base","ext.translate.hooks","mediawiki.Uri","mediawiki.util","jquery.appear","mediawiki.jqueryMsg","ext.translate.parsers","ext.translate.loader","ext.uls.buttons","jquery.textchange"]],["ext.translate.messagewebimporter","1398262765"],["ext.translate.multiselectautocomplete","1398262765",["jquery.ui.autocomplete"]],["ext.translate.navitoggle","1398262765"],["ext.translate.pagetranslation.uls","1398262765",["ext.uls.mediawiki","mediawiki.Uri","mediawiki.util"]],[
"ext.translate.parsers","1398262765",["mediawiki.util"]],["ext.translate.quickedit","1398262765",["jquery.form","jquery.ui.dialog","jquery.autosize","mediawiki.util"]],["ext.translate.selecttoinput","1398262765"],["ext.translate.special.aggregategroups","1398262765",["mediawiki.util","jquery.async","jquery.chosen"]],["ext.translate.special.importtranslations","1398262765",["jquery.ui.autocomplete"]],["ext.translate.special.languagestats","1423481195",["jquery.tablesorter"]],["ext.translate.special.managegroups","1398262765"],["ext.translate.special.pagetranslation","1398262765",["ext.translate.multiselectautocomplete"]],["ext.translate.special.searchtranslations","1398262765",["ext.translate.editor","ext.uls.mediawiki","ext.uls.geoclient","ext.translate.groupselector"]],["ext.translate.special.supportedlanguages","1398262765"],["ext.translate.special.translate","1423481281",["mediawiki.jqueryMsg","mediawiki.Uri","mediawiki.api.parse","ext.translate.base","ext.translate.groupselector",
"ext.translate.messagetable","ext.translate.navitoggle","ext.translate.workflowselector","ext.uls.mediawiki"]],["ext.translate.special.translatesandbox","1398262765",["ext.translate.translationstashstorage","mediawiki.api","ext.uls.mediawiki","jquery.ui.dialog","mediawiki.jqueryMsg"]],["ext.translate.special.translationstash","1398262765",["ext.translate.editor","ext.translate.messagetable","ext.translate.translationstashstorage","mediawiki.language"]],["ext.translate.special.translationstats","1398262765",["jquery.ui.datepicker"]],["ext.translate.statsbar","1423481281"],["ext.translate.storage","1398262765"],["ext.translate.tabgroup","1398262765"],["ext.translate.translationstashstorage","1398262765"],["ext.translate.workflowselector","1423481281",["ext.translate.dropdownmenu"]],["jquery.autosize","1398262765"],["jquery.textchange","1398262765"],["jquery.ui.position.custom","1398262765"],["ext.uls.languagenames","1433761929"],["ext.uls.messages","1398262765",["ext.uls.i18n"]],[
"ext.uls.buttons","1398262765"],["ext.uls.displaysettings","1398262765",["ext.uls.buttons","ext.uls.languagesettings","ext.uls.webfonts","ext.uls.mediawiki","jquery.i18n","mediawiki.api.parse"]],["ext.uls.geoclient","1398262765"],["ext.uls.ime","1423481304",["ext.uls.init","ext.uls.preferences","ext.uls.mediawiki","jquery.ime"]],["ext.uls.nojs","1398262765"],["ext.uls.init","1398262765",["mediawiki.Uri","jquery.client","jquery.json","jquery.cookie","ext.uls.messages"]],["ext.uls.eventlogger","1398262765",["schema.UniversalLanguageSelector"]],["ext.uls.i18n","1398262765",["jquery.i18n","mediawiki.util"]],["ext.uls.inputsettings","1398262765",["ext.uls.buttons","ext.uls.languagesettings","ext.uls.ime","ext.uls.mediawiki","jquery.ime","jquery.i18n"]],["ext.uls.interface","1423479436",["ext.uls.init","jquery.tipsy","mediawiki.user","ext.uls.webfonts"]],["ext.uls.languagesettings","1398262765",["ext.uls.buttons","ext.uls.preferences","jquery.uls.grid"]],["ext.uls.preferences","1398262765",[
"mediawiki.user","mediawiki.api","jquery.jStorage"]],["ext.uls.webfonts","1398262765",["jquery.webfonts","ext.uls.init","ext.uls.webfonts.repository","ext.uls.preferences"]],["ext.uls.webfonts.repository","1398262765"],["jquery.i18n","1398262765",["mediawiki.libs.pluralruleparser"]],["jquery.ime","1398262765"],["ext.uls.mediawiki","1398262765",["jquery.uls","jquery.i18n","mediawiki.util","ext.uls.languagenames"]],["jquery.uls","1398262765",["jquery.i18n","jquery.uls.data","jquery.uls.grid"]],["jquery.uls.compact","1398262765",["jquery.uls"]],["jquery.uls.data","1398262765"],["jquery.uls.grid","1398262765"],["jquery.webfonts","1398262765"],["rangy.core","1398262765"],["ext.uploadWizard.formDataTransport","1398262765"],["ext.uploadWizard.iFrameTransport","1398262765"],["ext.uploadWizard.apiUploadHandler","1398262765",["ext.uploadWizard.iFrameTransport"]],["ext.uploadWizard.apiUploadFormDataHandler","1398262765",["ext.uploadWizard.formDataTransport"]],["ext.uploadWizard.page","1398262765"
,["ext.uploadWizard"]],["ext.uploadWizard.uploadCampaign.display","1398262765",["mediawiki.ui"]],["ext.uploadWizard.uploadCampaign.list","1398262765"],["contentCollector","1398262765",[],"ext.wikiEditor"],["jquery.wikiEditor","1423593130",["jquery.client","jquery.textSelection","jquery.delayedBind"],"ext.wikiEditor"],["jquery.wikiEditor.iframe","1398262765",["jquery.wikiEditor","contentCollector"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1398262765",["jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.ui.dialog","jquery.ui.button","jquery.ui.draggable","jquery.ui.resizable","jquery.tabIndex"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1423593132",["jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","jquery.suggestions","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.highlight","1398262765",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1398262765",[
"jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1398262765",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1398262765",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templateEditor","1398262765",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.templates","1398262765",["jquery.wikiEditor","jquery.wikiEditor.iframe"],"ext.wikiEditor"],["jquery.wikiEditor.toc","1398262765",["jquery.wikiEditor","jquery.wikiEditor.iframe","jquery.ui.draggable","jquery.ui.resizable","jquery.autoEllipsis","jquery.color"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1398262765",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1398262765",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n","jquery.wikiEditor.toolbar","jquery.cookie","jquery.async"],"ext.wikiEditor"
],["jquery.wikiEditor.toolbar.i18n","1398262765",[],"ext.wikiEditor"],["ext.wikiEditor","1398262765",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1398262765",["ext.wikiEditor","ext.wikiEditor.toolbar","jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.highlight","1398262765",["ext.wikiEditor","jquery.wikiEditor.highlight"],"ext.wikiEditor"],["ext.wikiEditor.preview","1423593130",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1398262765",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1423593130",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.templateEditor","1398262765",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templateEditor"],"ext.wikiEditor"],["ext.wikiEditor.templates","1398262765",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.templates"],
"ext.wikiEditor"],["ext.wikiEditor.toc","1423593130",["ext.wikiEditor","ext.wikiEditor.highlight","jquery.wikiEditor.toc"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1398262765",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1398262765",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1398262765",[],"ext.wikiEditor"],["ext.translationnotifications.notifytranslators","1398262765",["mediawiki.jqueryMsg","mediawiki.Uri","mediawiki.api","mediawiki.api.parse","mediawiki.user","jquery.ui.datepicker","ext.translate.multiselectautocomplete"]],["ext.nuke","1398262765"],["ext.cite","1423566892"],["ext.cite.popups","1398262765",["jquery.tooltip"]],["jquery.tooltip","1398262765"],["ext.rtlcite","1398262765"],["ext.specialcite","1398262765"],["ext.spoilers","1398262765",["jquery"]],["ext.math.mathjax","1398262765",[],"ext.math.mathjax"],["ext.math.mathjax.enabler","1398262765"],[
"ext.smw","1398262765",["jquery.async"],"ext.smw"],["ext.smw.style","1398262765",[],"ext.smw"],["ext.jquery.jStorage","1398262765",["jquery.json"],"ext.smw"],["ext.jquery.md5","1398262765",[],"ext.smw"],["ext.smw.dataItem","1398262765",["ext.smw","mediawiki.Title","mediawiki.Uri"],"ext.smw"],["ext.smw.dataValue","1398262765",["ext.smw.dataItem"],"ext.smw"],["ext.smw.data","1398262765",["ext.smw.dataItem","ext.smw.dataValue"],"ext.smw"],["ext.smw.query","1398262765",["ext.smw","mediawiki.util"],"ext.smw"],["ext.smw.api","1398262765",["ext.smw.data","ext.smw.query","ext.jquery.jStorage","ext.jquery.md5"],"ext.smw"],["ext.jquery.qtip","1398262765",[],"ext.smw"],["ext.smw.tooltip.styles","1398262765",[],"ext.smw"],["ext.smw.tooltip","1423479436",["ext.smw.tooltip.styles","ext.smw","ext.jquery.qtip"],"ext.smw"],["ext.smw.tooltips","1398262765",["ext.smw.style","ext.smw.tooltip"],"ext.smw"],["ext.smw.autocomplete","1398262765",["jquery.ui.autocomplete"],"ext.smw"],["ext.smw.ask","1398262765"
,["ext.smw.tooltip","ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.browse","1398262765",["ext.smw.style","ext.smw.autocomplete"],"ext.smw"],["ext.smw.property","1398262765",["ext.smw.autocomplete"],"ext.smw"]]);mw.config.set({"wgLoadScript":"/w/load.php","debug":false,"skin":"vector","stylepath":"/w/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"//wiki.nxtcrypto.org","wgUserLanguage":"ru","wgContentLanguage":"en","wgVersion":"1.22.0","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{
"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Nxt Wiki","5":"Nxt Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","102":"Property","103":"Property talk","104":"Type","105":"Type talk","108":"Concept","109":"Concept talk","460":"Campaign","461":"Campaign talk","1198":"Translations","1199":"Translations talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"nxt_wiki":4,"nxt_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"property":102,"property_talk":103,"type":104,"type_talk":105,"concept":108,"concept_talk":109,"campaign":460,"campaign_talk":461,"translations":1198,"translations_talk":1199,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Nxt Wiki","wgFileExtensions"
:["png","gif","jpg","jpeg"],"wgDBname":"krisjose_med1","wgFileCanRotate":true,"wgAvailableSkins":{"modern":"Modern","cologneblue":"CologneBlue","monobook":"MonoBook","vector":"Vector"},"wgExtensionAssetsPath":"/w/extensions","wgCookiePrefix":"krisjose_med1_war_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[460,461],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgULSIMEEnabled":true,"wgULSPosition":"personal","wgULSAnonCanChangeLanguage":true,"wgULSEventLogging":false,"wgULSImeSelectors":["input:not([type])","input[type=text]","input[type=search]","textarea","[contenteditable]"],"wgULSNoImeSelectors":["#wpCaptchaWord",".ve-ce-documentNode"],"wgULSNoWebfontsSelectors":["#p-lang li \u003E a"],"wgULSCurrentAutonym":"русский","wgULSFontRepositoryBasePath":"/w/extensions/UniversalLanguageSelector/data/fontrepo/fonts/","wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none",
"img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"smw-config":{"version":"1.9-RC1","settings":{"smwgQMaxLimit":10000,"smwgQMaxInlineLimit":500,"namespace":{"Property":102,"Property_talk":103,"Type":104,"Type_talk":105,"Concept":108,"Concept_talk":109,"":0,"Talk":1,"User":2,"User_talk":3,"Project":4,"Project_talk":5,"File":6,"File_talk":7,"MediaWiki":8,"MediaWiki_talk":9,"Template":10,"Template_talk":11,"Help":12,"Help_talk":13,"Category":14,"Category_talk":15}},"formats":{"table":"Таблица","list":"Список","ol":"Перечисление","ul":"Список","category":"Категория","embedded":"Включаемое содержимое страниц","template":"Шаблон","feed":"Лента RSS и Atom","csv":"Экспорт CSV","dsv":"Экспорт DSV","json":"Экспорт JSON","rdf":"RDF-экспорт"}}});};if(isCompatible()){document.write(
"\u003Cscript src=\"/w/load.php?debug=false\u0026amp;lang=ru\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20131206T221358Z\"\u003E\u003C/script\u003E");}delete isCompatible;
/* cache key: krisjose_med1-war_:resourceloader:filter:minify-js:7:cf0bfde078f7a59b495d6b068e72301b */